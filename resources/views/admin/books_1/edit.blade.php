@extends('layouts.master')

@section('title')


Edit-books| admin panel

@endsection




@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Edit books</h4>
        <form action="{{url('books-update/'.$books->id)}}" method="post" enctype='multipart/form-data'>
          {{csrf_field()}}
          {{method_field('PUT')}}
      <div class="modal-body">
       
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="Title" class="form-control" id="recipient-name" value="{{$books->title}}">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Writer:</label>
            <input type="text" name="Writer"  class="form-control" id="recipient-name" value="{{$books->writer}}">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Price:</label>
            <input type="text"  name="Price"  class="form-control" id="recipient-name" value="{{$books->price}}">
          </div>

      <div>Image:</div><br>
       <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupFile01">Upload</label>
      <input type="file"   name="Image" class="form-control" id="inputGroupFile01" value="{{$books->images}}">
      </div>       
  
      
      </div>
      <div class="modal-footer">
        <a href="{{url('books')}}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Update</button> 
       </form>


        </div>
      </div>
    </div>
  </div> 

  
@endsection