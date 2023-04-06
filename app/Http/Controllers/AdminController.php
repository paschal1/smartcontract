<?php

namespace App\Http\Controllers;

use App\Models\Addcharge;
use App\Models\Addfund;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function funds()
    {
        return view('Admin.addfund');
    }



     public function add_fund(Request $request){
     $add = new Addfund();
    if($request->hasFile('image')){
      $file = $request->file('image');
      $filename = time().'.'.$file ->getClientoriginalExtension();
      $file->move('assets/uploads/Funds', $filename);
      
      $add  -> image = $filename;
    }
     $add->name = $request->input('name');
     $add->email = $request->input('email');
     $add->amount = $request->input('amount');
     $add->invest = $request->input('invest');
     $add->city = $request->input('city');
     $add->info = $request->input('info');
     $add->save();
     return redirect('dashboard')->with('status', 'Funds Added Successfully');
    }


      public function users()
    {
        $users = User::all();
        return view('Admin.users', compact('users'));
    }

      public function members()
    {
      
        $members = DB::select('SELECT * FROM addfunds WHERE invest = "Members"');
        return view('Admin.members', compact('members'));
      
    }
      public function monthly()
    {
        $monthly = DB::select('SELECT * FROM addfunds WHERE invest = "Monthly"');
        return view('Admin.monthly' , compact('monthly'));
    }
      public function yearly()
    {
        $yearly = DB::select('SELECT * FROM addfunds WHERE invest = "Yearly"');
        return view('Admin.yearly' , compact('yearly'));
    }
     
    public function subscribe()
    {
         $subscriber = DB::select('SELECT * FROM addfunds WHERE invest = "Subscriber"');
        return view('Admin.subscribe', compact('subscriber'));
        
    }

    public function charges()
    {
        return view('Admin.charges');
    }

      public function post(Request $request){
     $addcharge = new Addcharge();
   
     $addcharge->name = $request->input('name');
     $addcharge->email = $request->input('email');
     $addcharge->amount = $request->input('amount');
     
     $addcharge->save();
     return redirect('dashboard')->with('status', 'Funds Added Successfully');
    }

    public function tables()
    {
        $tran = Addfund::all();
        return view('Admin.tables', compact('tran'));
    }

    public function charts()
    {
        
        $charges = Addcharge::all();
        return view('Admin.charts', compact('charges'));
    }

    public function icons()
    {
        return view('Admin.icons');
    }


    public function logedin()
    {
        return view('Admin.loggedin');
    }

    public function adduser()
    {
        return view('Admin.adduser');
    }

    public function edituser()
    {
        return view('Admin.edituser');
    }
}
