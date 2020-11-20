@extends('admin.master')
@section('content')
<style>
    img{
        width: 100%;
    }
</style>
<div class="container">
    
@if(session('success'))
        <div class="mt-3">
        <div class="col-sm-6 text-center m-auto alert alert-success alert-dismissible fade show" role="alert">
            <p class="text-success">{{session('success')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div><br>
@endif
@if(session('delete'))
        <div class="mt-3">
        <div class="col-sm-6 text-center m-auto alert alert-success alert-dismissible fade show" role="alert">
            <p class="text-danger">{{session('delete')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div><br>
@endif

@error('image')
        <div class="mt-3">
        <div class="col-sm-6 text-center m-auto alert alert-success alert-dismissible fade show" role="alert">
            <p class="text-danger">{{ $message }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div><br>
@enderror

<form action="store/slider" method="POST" enctype="multipart/form-data">
@csrf   
   <div class="row col-sm-6 m-auto">
       <input type="file" name="image" class="btn btn-outline-success rounded mx-auto d-block" title="Add new one image on slider">
       <input type="submit" class="btn btn-success btn-sm" value="Upload">
   </div>
</form>
<hr>

   <div class="row col-sm-12 m-auto">
@foreach($sliders as $slider)
          <div class="card col-sm-4">
              <div class="card-body">
                  <img src="{{ asset('sliders/'.$slider->image) }}">
              </div>
              <div class="card-footer">
                  <a href="delete/slider/{{$slider->id}}" onclick="return confirm('Are you sure ?')" title="Wanna delete this slider image ?" class="btn btn-outline-success btn-outline btn-lg btn-block text-danger"><i class="btn-block fa fa-trash" aria-hidden="true"></i></a>
              </div>
          </div>
@endforeach
   </div>

</div>
@endsection