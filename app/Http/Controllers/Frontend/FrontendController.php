<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Category\EloquentCategoryRepository;
use App\Repositories\Product\EloquentProductRepository;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    public function __construct()
    {
        $this->categoryRepository = new EloquentCategoryRepository;
        $this->productRepository  = new EloquentProductRepository;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
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

    public function productDetails($id)
    {
        return view('frontend.jewel.product-details')->with('product', $this->productRepository->getById($id));
    }
}
