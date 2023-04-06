@extends('Admin.layouts.app')
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Investment Funds</h4>
                    <p class="card-description"> Fill this form with client transaction proof </p>
                    <form class="forms-sample" method="POST" action="{{ url('add_fund')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Amount</label>
                        <input type="text" class="form-control" name="amount" id="exampleInputName1" placeholder="Amount">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Investment Type</label>
                        <select class="form-control" name="invest" id="exampleSelectGender" style="color:white;">
                          <option>Subscriber</option>
                          <option>Monthly</option>
                          <option>Yearly</option>
                          <option>Member</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Proof of payment upload</label>
                        <div class="file-upload">
                        <input type="file" name="image" >
                        </div>
                      </div>
                       
                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" name="city" class="form-control" id="exampleInputCity1" placeholder="Location">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">More Info</label>
                        <textarea class="form-control" name="info" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                    
                      <input type="submit" value="Submit" class="btn btn-primary me-2" >
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              @endsection