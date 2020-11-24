@extends('frontEnd.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 m-auto" onclick="alert('Call on this number : 0123456789')">
            <div class="card" style="background-color: #dcdcdc63">
                <div class="card-body text-center">
                    <img src="{{ asset('/image/'.$service->image) }}" style="height: 590px;width: 100%;">
                </div>
                <div class="card-body">
                    <div class="text-center" style="font-size: 60px;color: red">{{ ucfirst($service->title) }}</div>
                </div>
                <div class="card-body">
                    <div class="text-center" style="font-size: 19px;margin: 0 60px 0 60px;line-height: 45px;">
                        {{ ucfirst($service->description) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
