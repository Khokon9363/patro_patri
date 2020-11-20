@extends('admin.master')
@section('content')

<div class="container">
   <div class="row">
      <div class="col-sm-12 m-auto">
         <div class="card" style="box-shadow: 14px 13px 16px;">

@if(count($testimonials) != 0)
@php 
   $i = 1;
@endphp
<table class="table table-striped w-auto text-center">
<thead>
  <tr>
    <th>SL</th>
    <th>Name</th>
    <th>Image</th>
    <th>Review</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
@foreach($testimonials as $testimonial)
  <tr class="table-info">
    <th scope="row">{{ $i++ }}</th>
    <td>{{ $testimonial->user_name }}</td>
    <td><img style="height: 150px;width: auto;" src="{{$testimonial->image}}"></td>
    <td style="width: 39%;">{{$testimonial->review}}</td>
    <td class="text-danger">Deactive</td>
    <td>
        <button class="btn btn-success btn-sm">Active</button>
        <!-- <button class="btn btn-info btn-sm">Deactive</button> -->
        <button class="btn btn-danger btn-sm">Delete</button>
    </td>
  </tr>
@endforeach
</tbody>
</table>
@else
<div class="alert alert-success text-center">
    <h2 class="text-danger">No Testimonial found</h2>
</div>
@endif
         </div>
      </div>
   </div>
</div>

@endsection