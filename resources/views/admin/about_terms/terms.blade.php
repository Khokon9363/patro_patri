@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/term/store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div>Normal Text</div>
                                <textarea name="nineteen" class="form-control">@if(isset($term)) {{ $term->nineteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>User Agreement</div>
                                <textarea name="one" class="form-control">@if(isset($term)) {{ $term->one }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Right to Use</div>
                                <textarea name="two" class="form-control">@if(isset($term)) {{ $term->two }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Adult</div>
                                <textarea name="three" class="form-control">@if(isset($term)) {{ $term->three }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Code of Conduct</div>
                                <textarea name="four" class="form-control">@if(isset($term)) {{ $term->four }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>You acknowledge that</div>
                                <textarea name="five" class="form-control">@if(isset($term)) {{ $term->five }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Monitoring of Information</div>
                                <textarea name="six" class="form-control">@if(isset($term)) {{ $term->six }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Removal of Information</div>
                                <textarea name="seven" class="form-control">@if(isset($term)) {{ $term->seven }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Termination of Access to Website</div>
                                <textarea name="eight" class="form-control">@if(isset($term)) {{ $term->eight }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Online Cancellation</div>
                                <textarea name="nine" class="form-control">@if(isset($term)) {{ $term->nine }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Proprietary Information</div>
                                <textarea name="ten" class="form-control">@if(isset($term)) {{ $term->ten }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>No responsibility</div>
                                <textarea name="eleven" class="form-control">@if(isset($term)) {{ $term->eleven }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Security</div>
                                <textarea name="twelve" class="form-control">@if(isset($term)) {{ $term->twelve }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Other Links</div>
                                <textarea name="thirteen" class="form-control">@if(isset($term)) {{ $term->thirteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Indemnity</div>
                                <textarea name="fourteen" class="form-control">@if(isset($term)) {{ $term->fourteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>No Warranties</div>
                                <textarea name="fifteen" class="form-control">@if(isset($term)) {{ $term->fifteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Modifications</div>
                                <textarea name="sixteen" class="form-control">@if(isset($term)) {{ $term->sixteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Disclosure and Other Communication</div>
                                <textarea name="seventeen" class="form-control">@if(isset($term)) {{ $term->seventeen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Complaints</div>
                                <textarea name="eighteen" class="form-control">@if(isset($term)) {{ $term->eighteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save Terms & Conditions</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
