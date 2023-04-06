@extends('Admin.layouts.app')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Details</h4>
                    <p class="card-description"> All user <code>.table-info</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped" style="color:aliceblue;">
                        <thead>
                          <tr>
                            <th> User </th>
                            <th> Full name </th>
                            <th> Country </th>
                            <th> Email </th>
                            <th> Phone No </th>
                            <th> Date </th>
                            <th> Edit </th>
                            <th> Delete User </th>
                          </tr>
                        </thead>
                        <tbody style="color:aliceblue;">
                          @foreach ($users as $user)
                              
                        
                         
                            <td class="py-1">
                              <img src="{{ asset('admin/assets/images/faces-clipart/pic-1.png')}}" alt="image" />
                            </td>
                            <td> {{$user->name}} </td>
                            <td>
                             {{$user->country}}
                            </td>
                            <td> {{$user->email}} </td>
                            <td> {{$user->phone}} </td>
                            <td> {{$user->created_at}} </td>
                              <td class="py-1">
                          <button class="file-upload-browse btn btn-warning" type="button">Edit</button>
                          </td>
                          <td class="py-1"> 
                          <button class="file-upload-browse btn btn-danger" type="button">Delete</button>
                           </td>
                          </tr>
                            @endforeach
                          
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
@endsection