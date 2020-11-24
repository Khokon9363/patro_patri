@extends('admin.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('admin/about/store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div style="font-weight: bold">Bold Text</div>
                            <textarea name="bold_text" class="form-control">@if(isset($about)) {{ $about->bold_text }} @endif</textarea>
                        </div>
                        <div class="form-group">
                            <div>Normal Text</div>
                            <textarea name="normal_text" class="form-control">@if(isset($about)) {{ $about->normal_text }} @endif</textarea>
                        </div>
                        <div class="form-group">
                            <div>Our Intention</div>
                            <textarea name="intention" class="form-control">@if(isset($about)) {{ $about->intention }} @endif</textarea>
                        </div>
                        <div class="form-group">
                            <div>Our Vision</div>
                            <textarea name="vision" class="form-control">@if(isset($about)) {{ $about->vision }} @endif</textarea>
                        </div>
                        <div class="form-group">
                            <div>Our Mission</div>
                            <textarea name="mission" class="form-control">@if(isset($about)) {{ $about->mission }} @endif</textarea>
                        </div>
                        <div class="form-group">
                            <div>What keeps us going?</div>
                            <textarea name="keep_going" class="form-control">@if(isset($about)) {{ $about->keep_going }} @endif</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save About</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
