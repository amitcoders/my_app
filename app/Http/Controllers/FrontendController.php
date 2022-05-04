<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function aboutus()
    {
        return view('frontend.about_us');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function portofolio()
    {
        return view('frontend.portofolio');
    }

    public function secondportfolio()
    {
        return view('frontend.second_portofolio');
    }

    public function portofoliodetails()
    {
        return view('frontend.portofolio_details');
    }

    public function bloggrid()
    {
        return view('frontend.blog_grid');
    }
    public function blogstandard()
    {
        return view('frontend.blog_standard');
    }

    public function blogdetails()
    {
        return view('frontend.blog_details');
    }

    public function careers()
    {
        return view('frontend.careers');
    }

    public function team(){
        return view('frontend.team');
    }

    public function teamdetails()
    {
        return view('frontend.team_details');
    }

    public function shop(){
        return view('frontend.shop');
    }

    public function products(){
        return view('frontend.products');
    }

    public function shopingcart(){
        return view('frontend.shoping_cart');
    }

    public function checkout(){
        return view('frontend.checkout');
    }

    public function faq(){
        return view('frontend.faq');
    }

    public function errorpage(){
        return view('frontend.error_page');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
