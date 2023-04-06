<?php

namespace App\Http\Controllers\frontend;
use App\Models\Addcharge;
use App\Models\Addfund;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function fundAcc(){

            return view('frontend.fundAcc');
        
        
    }

    public function withdraw(){

               $charges = Addcharge::all();
        
            return view('frontend.withdraw', compact('charges'));
        
        
    }

     public function profitrec(){

            return view('frontend.profitrecord');
        
        
    }
}
