@extends('layouts.master')

@section('title')
    About Us | Gestion Hopitalière
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
      </div>
      <form action="/save-aboutus" method="POST">
      {{ csrf_field()}}
      <div class="modal-body"> 
        
        <div class="form-group">
            <label for="title-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="title-name">
          </div>
          
          <div class="form-group">
            <label for="sub-title-name" class="col-form-label">Sub-Title:</label>
            <input type="text" class="form-control" id="sub-title-name">
          </div>

          <div class="form-group">
            <label for="description-text" class="col-form-label">Description:</label>
            <textarea name="description" class="form-control" id="message-text"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>    
      </div>
      </form>

    </div>
  </div>
</div>


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> About Us
                <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                data-target="#exampleModal">ADD</button>        
            </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Title</th>
                      <th>Sub-Title</th>
                      <th>Description</th>      
                      <th>Edit</th>
                      <th>Delete</th>                
                    </thead>
                    <tbody>
                      <tr>
                          <td>* Dr</td>
                          <td>* Dr</td>
                          <td>* Dr</td>
                          <td>* Dr</td>
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
