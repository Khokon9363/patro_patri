@extends('admin.master')
@section('content')

<div class="container">
  <div class="row">
     <div class="col-sm-8 m-auto">
        <div class="card" style="box-shadow: 10px 10px 10px black;">
           <div class="card-body">
              <form action="">
                <div class="form-group row">
                    <select name="" id="" class="form-control" style="width: 30%;">
                        <option value="">XYZ</option>
                        <option value="">XYZ</option>
                        <option value="">XYZ</option>
                        <option value="">XYZ</option>
                        <option value="">XYZ</option>
                    </select>
                    <input type="text" style="width: 50%;" class="ml-2 mr-2 form-control" placeholder="Write here a second sub-menu">
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
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            </tbody>
            </table>

           </div>
        </div>
     </div>
  </div>
</div>

@endsection