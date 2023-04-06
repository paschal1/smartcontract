@extends('layouts.second')
@section('content')

<div class="card text-center">
  <div class="card-header">
    Secured
  </div>
  <form method="POST" action="{{ url('send')}}">
    @csrf
  <div class="card-body">
    <h5 class="card-title">User to User Transfer</h5>
    <p class="card-text"><a href="">Account Balance:</a> $0</p>
     <label class="label">Receiver Email</label>
    <input type="text" name="email" class="form-control" id="inputPassword2" >
  <label class="label"></label>
   <label class="label">Amount Send</label>
    <input type="text" name="amount" class="form-control" id="inputPassword2" >
   <div class="card-btn"> <a href="#" class="btn btn-success">Send</a> </div>
    
  </div>
  </form>
  <div class="card-footer text-muted">
    
  </div>
</div>



                       
                    

@endsection