@extends('layouts.master')

@section('title')

    Registered Roles  | Gestion Hopitalière
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roels </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>id</th>
                      <th>Name</th>
                      <th>Login</th>
                      <th>Email</th>
                      <th>EDIT</th>
                      <th>Delete</th>                      
                    </thead>
                    <tbody>
                      <tr>
                          <td>name</td>
                          <td>888</td>
                          <td>email@gmail.com</td>
                          <td>
                              <a href="#" class="btn btn-success">EDIT</a>
                          </td>
                          <td>
                              <a href="#" class="btn btn-danger">DELETE </a>
                          </td>  
                      </tr>
                    </tbody> 
                  
                  </table>
                </div>
              </div>
            </div>
          </div>
        
@endsection


@section('scripts')

@endsection
