<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Product\EloquentProductRepository;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
	/**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.dashboard');
    }

    public function showCart(Request $request)
    {
    	$user = access()->user();
    	return view('frontend.jewel.cart')->with('user', $user);
    }

    public function addProductToCart(Request $request)
    {
    	$user 		= access()->user();
    	$repository = new EloquentProductRepository;
    	$status 	= $repository->addToCart($user->id, $request->get('productId'), 1);

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

    public function removeProductToCart(Request $request)
    {
    	$user 		= access()->user();
    	$repository = new EloquentProductRepository;
    	$status 	= $repository->removeProductFromCart($user->id, $request->get('productId'));

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
