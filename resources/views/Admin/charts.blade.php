@extends('Admin.layouts.app')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Charges</h4>
                    <p class="card-description"> All user <code>.table-info</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped" style="color:aliceblue;">
                        <thead>
                          <tr>
                            <th> User </th>
                            <th> Full name </th>
                            <th> Amount </th>
                            <th> Email </th>
                            
                            
                            <th> Edit </th>
                            <th> Delete User </th>
                          </tr>
                        </thead>
                        <tbody style="color:aliceblue;">
                          @foreach ($charges as $transact)
                              
                        
                         
                            <td class="py-1">
                              <img src="{{ asset('admin/assets/images/faces-clipart/pic-1.png')}}" alt="image" />
                            </td>
                            <td> {{$transact->name}} </td>
                            <td>
                             {{$transact->amount}}
                            </td>
                            <td> {{$transact->email}} </td>
                            
                            
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