@extends('Admin.layouts.app')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Details</h4>
                    <p class="card-description"> All user <code>.table-info</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> User </th>
                            <th> Full name </th>
                            <th> Progress </th>
                            <th> Amount </th>
                            <th> Date </th>
                            <th> Edit </th>
                            <th> Delete User </th>
                            <th> Active User </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-1">
                              <img src="{{ asset('admin/assets/images/faces-clipart/pic-1.png')}}" alt="image" />
                            </td>
                            <td> Herman Beck </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 77.99 </td>
                            <td> May 15, 2015 </td>
                            <td class="py-1">
                          <button class="file-upload-browse btn btn-warning" type="button">Edit</button>
                          </td>
                          <td class="py-1"> 
                          <button class="file-upload-browse btn btn-danger" type="button">Delete</button>
                           </td>
                           <td>Status</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="{{ asset('admin/assets/images/faces-clipart/pic-2.png')}}" alt="image" />
                            </td>
                            <td> Messsy Adam </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $245.30 </td>
                            <td> July 1, 2015 </td>
                              <td class="py-1">
                          <button class="file-upload-browse btn btn-warning" type="button">Edit</button>
                          </td>
                          <td class="py-1"> 
                          <button class="file-upload-browse btn btn-danger" type="button">Delete</button>
                           </td>

                           <td>Status</td>
                          </tr>
                          
                          
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
@endsection