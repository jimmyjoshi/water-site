<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Category\EloquentCategoryRepository;
use App\Repositories\Product\EloquentProductRepository;
use Illuminate\Http\Request;
use App\Models\SessionManager\SessionManager;
use App\Repositories\Backend\Access\User\UserRepository;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;
use Auth;
use App\Models\Order\Order;
use App\Models\OrderItem\OrderItem;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    public function __construct()
    {
        $this->categoryRepository   = new EloquentCategoryRepository;
        $this->productRepository    = new EloquentProductRepository;
        $this->users                = new UserRepository();
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $sessionId  = session()->getId();
        $userId     = SessionManager::where('session_id', $sessionId)->first();
        $user       = Auth()->user();

        if(! $userId && !$user)
        {
            $user = $this->guestRegister($request);
            SessionManager::create([
                'user_id'       => $user->id,
                'session_id'    => $sessionId,
                'ip_address'    => \Request::ip()
            ]);

            \Auth::loginUsingId($user->id);
        }
        
        \Auth::loginUsingId($userId);

        return view('frontend.index');
    }

    public function guestRegister(Request $request) 
    {
        $postData = [
            'username'  => str_random(8),
            'password'  => 'water@123',
            'name'      => str_random(6),
            'email'     => str_random(8) . '@water-test.com'
        ];

        $user = $this->users->createAppUser($postData);

        //check user is created 
        if ($user)
        {
            $credentials = [
                'email'     => $postData['email'],
                'password'  => $postData['password']
            ];
            try {
                // verify the credentials and create a token for the user
                if (! $token = JWTAuth::attempt($credentials)) 
                {
                    return response()->json(['error' => 'invalid_credentials'], 401);
                }
            } catch (JWTException $e) 
            {
                // something went wrong
                return response()->json(['error' => 'could_not_create_token'], 500);
            }
            
            $userData = \Auth::user()->toArray();

            if($request->get('token'))
            {
                $this->users->setToken((object)$userData, $request->get('token'));
            }
        }

        return $user;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }

    public function jewelCategories()
    {
        return view('frontend.jewel.category')->with('categories', $this->categoryRepository->getAll());
    }

    public function jewelProducts()
    {
        return view('frontend.jewel.product')->with('products', $this->productRepository->getAll());
    }

    public function aboutUs()
    {
        return view('frontend.jewel.about-us');
    }

    public function waterServices()
    {
        return view('frontend.jewel.our-services');
    }

    public function contactOwner()
    {
        return view('frontend.jewel.contact-us');
    }

    public function productDetails($id)
    {
        return view('frontend.jewel.product-details')->with('product', $this->productRepository->getById($id));
    }

    public function timePiece()
    {
        return view('frontend.jewel.front-end-pages.time-piece');
    }

    public function accessories()
    {
        return view('frontend.jewel.front-end-pages.accessories');   
    }

    public function gifts()
    {
        return view('frontend.jewel.front-end-pages.gifts');   
    } 
    
    public function clientService()
    {
        return view('frontend.jewel.front-end-pages.client-service');   
    }

    public function corporate()
    {
        return view('frontend.jewel.front-end-pages.corporate');   
    }

    public function catelogs()
    {
        return view('frontend.jewel.front-end-pages.catelogs');   
    }

    public function legalTerms()
    {
        return view('frontend.jewel.front-end-pages.legal-terms');   
    }

    public function helpDesk()
    {
        return view('frontend.jewel.front-end-pages.help-desk');   
    }

    public function contactUs()
    {
        return view('frontend.jewel.front-end-pages.contact-us');   
    }

    public function validateLoginByAdmin(Request $request)
    {
        if($request->get('username') && $request->get('password'))
        {
            if($request->get('username') == 'admin' && $request->get('password') == 'admin')
            {
                Auth::loginUsingId(1);
                return redirect()->route('admin.dashboard');
            }
        }

        return view('frontend.jewel.admin-login');   
    }

    public function loginByAdmin(Request $request)
    {
        return view('frontend.jewel.admin-login');   
    }

    public function addProductToCart(Request $request)
    {
        $user       = access()->user();
        $productQty = $request->get('productQty') ? $request->get('productQty') : 1;
        $repository = new EloquentProductRepository;
        $status     = $repository->addToCart($user->id, $request->get('productId'), $productQty);

        if($status)
        {
            return response()->json((object) [
                    'status'    => true
                ], 200);
        }
        
        return response()->json((object) [
                    'status'    => false
            ], 200);
    }

    public function buySingleProduct(Request $request)
    {
        $user       = access()->user();
        $order      = new Order;
        $orderItem  = new OrderItem;
        $product    = $this->productRepository->getById($request->get('product_id'));
        $qty        = $request->get('product_qty') ? $request->get('product_qty') : 1;

        $orderModel = $order->create([
            'user_id'       => $user->id,
            'title'         => 'Direct Order',
            'subtotal'      => $product->price * $qty,
            'total_amount'  => $product->price * $qty,
            'due'           => $product->price * $qty,
            'total_qty'     => $qty,
            'total_costc'   => $product->price * $qty,
            'description'   => 'Direct Order place by viewing item'

        ]);
        
        $orderItemModel = $orderItem->create([  
            'user_id'       => $user->id,
            'order_id'      => $orderModel->id,
            'product_id'    => $request->get('product_id'),
            'qty'           => $qty, 
            'price'         => $product->price, 
            'total'         => $product->price * $qty, 
        ]);

        return view('frontend.index')->withFlashSuccess('Order Placed Successfully !');
    }

    public function createOrder(Request $request)
    {
        $userInfo = Auth()->user();

        if($userInfo->cart)
        {
            $repository = new EloquentOrderRepository;
            $orderInfo  = $repository->cartToOrder($userInfo, $userInfo->cart);

            if(isset($orderInfo) && $orderInfo)
            {
                return response()->json((object) [
                    'status'    => true
                ], 200);
            }
        }

        return response()->json((object) [
                    'status'    => false
            ], 200);
    }

    public function myCart(Request $request)
    {
        $user = access()->user();
        return view('frontend.jewel.cart')->with('user', $user);
    }

    public function removeProductToCart(Request $request)
    {
        $user       = access()->user();
        $repository = new EloquentProductRepository;
        $status     = $repository->removeProductFromCart($user->id, $request->get('productId'));

        if($status)
        {
            return response()->json((object) [
                    'status'    => true
                ], 200);
        }
        
        return response()->json((object) [
                    'status'    => false
            ], 200);
    }

}
