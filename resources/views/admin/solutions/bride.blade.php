@extends('admin.master')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/admin/bride/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault01">Bride Solution Name</label>
                                <select class="form-control" name="sub_menu_two_id">
                                    <option disabled selected> Select a Gallery name</option>
                                    @foreach($gallery as $galleryx)
                                        <option value="{{ $galleryx->id }}">{{ $galleryx->sub_menu_two }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault02">Title</label>
                                <input type="hidden" name="role" value="1">
                                <input type="text" class="form-control" id="validationDefault02" name="title" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault03">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="description"></textarea>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault05">Image</label>
                                <input type="file" class="form-control" name="image" id="validationDefault05" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Save Bride Solution</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-header">Service table</div>
                </div>
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Gallery Name (Bride)</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($galleryList as $key => $gallery)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                @if(!empty($gallery->subMenuTwoGallery->sub_menu_two))
                                    {{ $gallery->subMenuTwoGallery->sub_menu_two }}
                                @else
                                    <span>No Sub menu Two Found</span>
                                @endif
                            </td>
                            <td>{{ $gallery->title }}</td>
                            <td onclick="alert('{{ $gallery->description }}');">Click Here !</td>
                            <td>
                                <img src="{{ asset('/image/'.$gallery->image) }}" height="50" width="50">
                            </td>
                            <td>
                                <a href="{{ url('/admin/bride/delete/'.$gallery->id) }}" onclick="return confirm('Are you sure ?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
