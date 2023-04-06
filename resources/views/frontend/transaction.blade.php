@extends('layouts.second')
@section('content')

<div class="card text-center">
  <div class="card-header">
    Your ROI history
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ Auth::user()->name }}</h5>
    <input type="number" class="form-control" id="" >
    <input type="text" class="form-control" id="inputPassword2" placeholder="">
    <div class="col-lg-5 mgb-r">
                            @foreach ($tran as $tr)
                            <table class="table table-s1">
                                <tbody>
                                    <thead>
                                        <th class="table-head">Plan</th>
                                        <th class="table-head">Amount</th>
                                         <th class="table-head">Email</th>
                                          <th class="table-head">Date Created</th>
                                    </thead>
                                    @if($tr)
                                    <tr>
                                        <td class="table-head">{{$tr->invest}}</td>
                                        <td class="table-des">{{$tr->amount}}</td>
                                        <td class="table-head">{{$tr->email}}</td>
                                        <td class="table-des">{{$tr->created_at}}</td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                        </div>
@else
   <div class="card-btn"> <a href="#" class="btn btn-success">No data available in table</a> </div>
    @endif
   @endforeach
  </div>
  <div class="card-footer text-muted">
    showing 0 to 0 of 0 entries
    <button class="btn btn">Previous</button> <button class="btn btn">Next</button>
  </div>
</div>



                       
                    

@endsection