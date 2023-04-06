@extends('layouts.second')
@section('content')

<div class="card text-center">
  <div class="card-header">
    Secured
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ Auth::user()->email }}</h5>
    <p class="card-text">This is a secure area. Please Enter the amount you wish to withdraw</p>
     <label class="label">Enter Amount</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="Amount">
  <label class="label"></label>
   

   <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Withdraw
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You Must Deposit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @foreach ($charges as $charge)

        @if ($charge->email== Auth::user()->email)
        ${{$charge->amount}} before you can withdraw
        @else
         $800 before you can withdraw
        @endif
      </div>
      @endforeach
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>



                       
                    

@endsection