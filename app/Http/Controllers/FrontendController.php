<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Feature;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $about = About::first();
        $feature = Feature::first();
        return view("welcome",compact('about','feature'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function home()
    {
        return view('welcome');
    }
    public function category()
    {
        return view('frontend.category');
    }
    public function product()
    {
        return view('frontend.product');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
}
