<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Addfund;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Function_;

class TransactionController extends Controller
{
     public function transaction(){
         
        $tran = Addfund::all();
        
            return view('frontend.transaction', compact('tran'));
        
        
    }

    public function crypto(){

            return view('frontend.crypto');
        
        
    }

     public function transfer(){

            return view('frontend.transfer');
        
        
    }

     public function send(Request $request){
     $send = new Transaction();

     if($send){
         $email = DB::select('SELECT * FROM users WHERE email');
         return $email;
        
         if($send->email == $email){
           
           $useramount = DB::select('SELECT * FROM addfunds WHERE $email');
           return $useramount;

         
        $send->email = $request->input('email');
        $send->amount = $request->input('amount');
     
        $send->save();
        return redirect('dashboard')->with('status', 'Funds Sent Successfully');
         }else{
                return view('frontend.transfer');
         }

     }
   
     
     
    }
}
