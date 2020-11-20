@extends('admin.master')
@section('content')

<div class="container">
  <div class="row">
     <div class="col-sm-8 m-auto">
        <div class="card" style="box-shadow: 10px 10px 10px black;">
           <div class="card-body">
              <form action="store/sub_menu" method="POST">
              @csrf
                <div class="form-group row">
                    <select name="main_menu_id" class="form-control" style="width: 30%;">
                        <option disabled selected>--Select main menu--</option>
                        @foreach($main_menus as $main_menu)
                        <option value="{{ $main_menu->id }}">{{ $main_menu->main_menu }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="sub_menu" style="width: 50%;" class="ml-2 mr-2 form-control" placeholder="Write here a sub-menu">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
              </form>
           </div><hr>
           <div class="card-body">
            <table class="table text-center">
            <thead class="thead-light">
                <tr>
                <th scope="col">SL</th>
                <th scope="col">Main Menu</th>
                <th scope="col">Sub menu</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($sub_menus as $key => $sub_menu)
                <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $sub_menu->mainMenu->main_menu }}</td>
                <td>{{ $sub_menu->sub_menu }}</td>
                <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
              @endforeach
            </tbody>
            </table>

           </div>
        </div>
     </div>
  </div>
</div>

@endsection