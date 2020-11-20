@extends('admin.master')
@section('content')

<div class="container">
  <div class="row">
     <div class="col-sm-8 m-auto">
        <div class="card" style="box-shadow: 10px 10px 10px black;">
           <div class="card-body">
              <form action="store/sub_menu_two" method="POST">
              @csrf
                <div class="form-group row">
                    <select name="sub_menu_id" class="form-control" style="width: 30%;">
                        <option disabled selected>--Select a sub menu--</option>
                        @foreach($subMenu as $subMenu)
                        <option value="{{ $subMenu->id }}">{{ $subMenu->sub_menu }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="sub_menu_two" required style="width: 50%;" class="ml-2 mr-2 form-control" placeholder="Write here a second sub-menu">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
              </form>
           </div><hr>
           <div class="card-body">
            <table class="table text-center">
            <thead class="thead-light">
                <tr>
                <th scope="col">SL</th>
                <th scope="col">Sub Menu</th>
                <th scope="col">Second Sub menu</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($subMenusTwo as $key => $subMenusTwo)
                <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>
                  @if(!empty($subMenusTwo->subMenu->sub_menu)) 
                  {{ $subMenusTwo->subMenu->sub_menu }}
                  @endif
                </td>
                <td>{{ $subMenusTwo->sub_menu_two }}</td>
                <td><a href="delete/sub_menu_two/{{ $subMenusTwo->id }}" class="btn btn-danger btn-sm">Delete</a></td>
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