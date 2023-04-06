<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandpageController extends Controller
{
     public function contact(){

            return view('frontend.contact');
        
        
    }

public function faq(){

            return view('frontend.faq');
        
        
    }

    public function terms(){

            return view('frontend.terms');
        
        
    }

    public function policy(){

            return view('frontend.privacy');
        
        
    }
}
