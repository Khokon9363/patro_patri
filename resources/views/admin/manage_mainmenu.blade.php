@extends('admin.master')
@section('content')

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
   <div class="row col-sm-6 m-auto" style="font-size: 30px;">
       <div class="card">
        <table class="table table-striped w-auto text-center">
        <thead>
        <tr>
            <th>SL</th>
            <th>Menu name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
@php
   $i = 1;
@endphp
@foreach($main_menus as $main_menu)
        <form action="update/main_menu" method="POST">
        @csrf
        <tr class="table-info">
            <th scope="row">{{ $i++ }}</th>
            <td>
                <input type="text" name="main_menu" value="{{ $main_menu->main_menu }}" class="form-control text-danger">
                <input type="hidden" name="id" value="{{ $main_menu->id }}">
            </td>
            <td><input type="submit" class="btn btn-success btn-sm" value="Update"></td>
        </tr>
        </form>
@endforeach
        </tbody>
        </table>
       </div>
   </div>
</div>

@endsection