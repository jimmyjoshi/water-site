<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Transformers\CategoryTransformer;
use App\Http\Controllers\Api\BaseApiController;
use App\Repositories\Product\EloquentProductRepository;

class APIProductController extends BaseApiController 
{   
    /**
     * Repository
     * 
     * @var Object
     */
    protected $repository;

    /**
     * __construct
     * 
     * @param EventTransformer $eventTransformer
     */
    public function __construct()
    {
        parent::__construct();

        $this->repository           = new EloquentProductRepository;
        $this->categoryTransformer  = new CategoryTransformer;
    }

    /**
     * List of All Events
     * 
     * @param Request $request
     * @return json
     */
    public function index(Request $request) 
    {
        $userInfo   = $this->getApiUserInfo();
        $products   = $this->repository->getAll('id', 'desc');

        if($products && count($products))
        {
            $productData     = $this->categoryTransformer->productData($products);

            return $this->ApiSuccessResponse($productData);
        }

        $error = [
            'reason' => 'Unable to find Products!'
        ];

        return $this->setStatusCode(400)->failureResponse($error, 'No Product Found !');
    }

    /**
     * Create
     * 
     * @param Request $request
     * @return string
     */
    public function create(Request $request)
    {
        $model = $this->repository->create($request->all());

        if($model)
        {
            $responseData = $this->eventTransformer->createEvent($model);

            return $this->successResponse($responseData, 'Event is Created Successfully');
        }

        $error = [
            'reason' => 'Invalid Inputs'
        ];

        return $this->setStatusCode(400)->failureResponse($error, 'Something went wrong !');
    }

    /**
     * Edit
     * 
     * @param Request $request
     * @return string
     */
    public function edit(Request $request)
    {
        $eventId    = (int) $request->event_id;
        $model      = $this->repository->update($eventId, $request->all());

        if($model)
        {
            $eventData      = $this->repository->getById($eventId);
            $responseData   = $this->eventTransformer->transform($eventData);

            return $this->successResponse($responseData, 'Event is Edited Successfully');
        }

        $error = [
            'reason' => 'Invalid Inputs'
        ];

        return $this->setStatusCode(400)->failureResponse($error, 'Something went wrong !');
    }

    /**
     * Delete
     * 
     * @param Request $request
     * @return string
     */
    public function delete(Request $request)
    {
        $eventId = (int) $request->event_id;

        if($eventId)
        {
            $status = $this->repository->destroy($eventId);

            if($status)
            {
                $responseData = [
                    'success' => 'Event Deleted'
                ];

                return $this->successResponse($responseData, 'Event is Deleted Successfully');
            }
        }

        $error = [
            'reason' => 'Invalid Inputs'
        ];

        return $this->setStatusCode(404)->failureResponse($error, 'Something went wrong !');
    }

    public function getCart()
    {
        $userInfo   = (object) $this->getApiUserInfo();
        $products   = $this->repository->getUserCart($userInfo->userId);
        
        if($products && count($products))
        {
            $productData     = $this->categoryTransformer->cartData($products);

            return $this->ApiSuccessResponse($productData);
        }

        $error = [
            'reason' => 'Unable to find Cart Products!'
        ];

        return $this->setStatusCode(400)->failureResponse($error, 'No Cart Product Found !');        
    }

    public function addToCart(Request $request)
    {
        if($request->get('product_id'))
        {
            $userInfo = (object) $this->getApiUserInfo();
            $status   = $this->repository->addToCart($userInfo->userId, $request->get('product_id'), $request->get('qty'));

            if($status)
            {
                $userInfo   = (object) $this->getApiUserInfo();
                $products   = $this->repository->getUserCart($userInfo->userId);
        
                if($products && count($products))
                {
                    $productData     = $this->categoryTransformer->cartData($products);

                    return $this->ApiSuccessResponse($productData);
                }
            }
        }

        $error = [
            'reason' => 'Unable to add Products to Cart!'
        ];

        return $this->setStatusCode(400)->failureResponse($error, 'Unable to add Products to Cart !'); 
    }

    public function removeProductFromCart(Request $request)
    {
        if($request->get('product_id'))
        {
            $userInfo = (object) $this->getApiUserInfo();
            $status   = $this->repository->removeProductFromCart($userInfo->userId, $request->get('product_id'));

            if($status)
            {
                return $this->ApiSuccessResponse([
                    'removeProduct'     => 1,
                    'message'           => 'Product removed from Cart Successfully'
                    ]);
            }
        }

        $error = [
            'reason' => 'Unable to Remove Product From Cart!'
        ];

        return $this->setStatusCode(400)->failureResponse($error, 'Unable to Remove Product From Cart!');   
    }

    public function getWishListCount(Request $request)
    {
        $wishListCount     = $this->categoryTransformer->wishListCount();

        return $this->ApiSuccessResponse($wishListCount);
    }
}
