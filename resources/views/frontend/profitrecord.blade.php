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
                            
                            <table class="table table-s1">
                                <tbody>
                                    <thead>
                                        <th class="table-head">Plan</th>
                                        <th class="table-head">Amount</th>
                                         <th class="table-head">Type</th>
                                          <th class="table-head">Date Created</th>
                                    </thead>
                                    <tr>
                                        <td class="table-head">Public Sale Ends</td>
                                        <td class="table-des">14th Dec 2022 12:00 GMT</td>
                                        <td class="table-head">Total Token Supply</td>
                                        <td class="table-des">500,000,000</td>
                                    </tr>
                                    <tr>
                                        <td class="table-head">Total Token Supply</td>
                                        <td class="table-des">500,000,000</td>
                                        <td class="table-head">Total Token Supply</td>
                                        <td class="table-des">500,000,000</td>
                                    </tr>
                                    <tr>
                                        <td class="table-head">Tokens Allocated for ICO</td>
                                        <td class="table-des">350,000,000</td>
                                        <td class="table-head">Total Token Supply</td>
                                        <td class="table-des">500,000,000</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

   <div class="card-btn"> <a href="#" class="btn btn-success">No data available in table</a> </div>
    
  </div>
  <div class="card-footer text-muted">
    showing 0 to 0 of 0 entries
    <button class="btn btn">Previous</button> <button class="btn btn">Next</button>
  </div>
</div>



                       
                    

@endsection