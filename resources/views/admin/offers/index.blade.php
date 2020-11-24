@extends('admin.master')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/admin/offer/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault01">Offer Name</label>
                                <select class="form-control" name="offer_id">
                                    <option disabled selected> Select a Offer name</option>
                                    @foreach($offerMenu as $offer)
                                        <option value="{{ $offer->id }}">{{ $offer->sub_menu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault02">Title</label>
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
                        <button class="btn btn-primary" type="submit">Save Offer</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-header">Offer table</div>
                </div>
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Gallery Name</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offerList as $key => $offer)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                @if(!empty($offer->subMenuOffer->sub_menu))
                                    {{ $offer->subMenuOffer->sub_menu }}
                                @else
                                    <span>No Sub menu Found</span>
                                @endif
                            </td>
                            <td>{{ $offer->title }}</td>
                            <td onclick="alert('{{ $offer->description }}');">Click Here !</td>
                            <td>
                                <img src="{{ asset('/image/'.$offer->image) }}" height="50" width="50">
                            </td>
                            <td>
                                <a href="{{ url('/admin/offer/delete/'.$offer->id) }}" onclick="return confirm('Are you sure ?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
