@extends('Admin.layouts.app')
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New User</h4>
                    <p class="card-description"> Fill this form with client details </p>
                    <form class="forms-sample">
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
                        <input type="text" class="form-control" name="amount" id="exampleInputName1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Investment Type</label>
                        <select class="form-control" id="exampleSelectGender" style="color:white;">
                          <option>Subscriber</option>
                          <option>Monthly</option>
                          <option>Yearly</option>
                          <option>Member</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Proof of payment upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">More Info</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              @endsection