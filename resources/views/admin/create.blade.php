@extends('layouts.master')

@section('title')

books| admin panel

@endsection

@section('content')

<!-- <div class="container">
 <div class="row">
  <div class="col-md-12">
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

    <div class="card">
      <div class="card-header">
        <h4>Add book image
        <a href="{{url('Add-book')}}" class="btn btn-danger float-end">back</a>
      </h4>
       </div>    
       <div class="card-body">

<form action="{{url('Add-book')}}" method="post" enctype='multipart/form-data'>
  @csrf
  
 <div class="form-group mb-3 ">
 <label for="">title </label>
 <input type="text" name='title'  class=form-control>
</div>

<div class="form-group mb-3 ">
 <label for="">writer </label>
 <input type="text" name='writer'  class=form-control>
</div>

<div class="form-group mb-3 ">
 <label for="">price </label>
 <input type="text" name='price'  class=form-control>
</div>

<div class="form-group mb-3 ">

 <label for="">images </label>
 <input type="file" name='images' class=form-control required>
</div>

<div class="form-group mb-3">

<button type="submit" calss="btn btn-primary">save</button>
</div>

</form>

       </div>
      </div>
    </div>
  </div>
</div>     -->

 @endsection

@section('scripts')

@endsection 