<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Auth::guard('customer')->user()->id;
        $sales = Sale::where('customer_id', $customer)->get();
        return view('customer.order', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addToCart(Request $request, Product $product)
    {
        $customer = Auth::guard('customer')->user()->id;
        
        $productDetail = ProductDetail::where('product_id', $product->id)
        ->where('customer_id', $customer)
        ->first();
        
        if ($productDetail) {
            $productDetail->add_to_cart = !$productDetail->add_to_cart;
            $productDetail->save();
        } else {
            // Insert new entry with add_to_cart = 1
            ProductDetail::create([
                'product_id' => $product->id,
                'customer_id' => $customer,
                'add_to_cart' => 1
            ]);
        }
        Alert::success('Product add to cart Successfully');
        return back();
    }
}
