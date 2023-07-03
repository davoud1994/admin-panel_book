@extends('layouts.master')

@section('title')


books| admin panel

@endsection

@section('content')



 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Add New book</h5> 
     
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria hidden="true" >&times;</span>
        </button>
      </div> 

        <form action="/save-books" method="post" enctype='multipart/form-data'>
          {{csrf_field()}}
      <div class="modal-body">
       
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="Title" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Writer:</label>
            <input type="text" name="Writer"  class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Price:</label>
            <input type="text"  name="Price"  class="form-control" id="recipient-name">
          </div>

      <div>Image:</div><br>
       <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupFile01">Upload</label>
      <input type="file"   name="Image" class="form-control" id="inputGroupFile01">
      </div>       
  
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send book</button> 
       </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Add books
        <button type="button" class="btn btn-primary float-lg-right" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>

        </h4>
      </div>
       <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
               Id
              </th>
              <th>
               Title
              </th>
              <th>
                Writer
              </th>
            <th>
                Price
              </th>
              <th>
                Image
              </th>
              
              <th>Edit</th>
              <th>Delete</th>


            </thead>
    
            <tbody>
            
              @foreach($books as $data)
              <tr>
                 <td class="id_1"> {{$data->id}} </td> 
                <td class="id_1"> {{$data->title}} </td> 
                <td class="id_1" > {{$data->writer}} </td> 
                <td class="id_1"> {{$data->price}} </td> 
                <td><img class="image_add" src="{{asset('storage/uploads/'.$data->images)}}" width="100px" height="100px" alert="image"></td> 
                 </td>
                  <td> <a href="{{url('/edit-books/'.$data->id)}}" class="btn btn-success">Edit
                  
                  </a>
                 
                </td>

                  <td>  

                  
                      <br><form action="{{url('/edit-books-delete/'.$data->id)}}" method="post">
                       
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                  
                      <button  type="submit" class="btn btn-danger">Delete</button>
                  
              

                      </form> 
                    
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

@section('scripts')

@endsection 














<!-- 
         < @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  --> 
<!-- 
 <div class="container">
 <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Add
        <a href="{{url('Add-book')}}" class="btn btn-primary float-end">Add book</a>
      </h4>
       </div>    
       <div class="card-body">
       </div>
      </div>
    </div>
  </div>
</div>     --> --> -->