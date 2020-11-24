@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/privacy/store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div>Our Commitment to Privacy
                                </div>
                                <textarea name="one" class="form-control">@if(isset($privacy)) {{ $privacy->one }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>What Information Do We Collect?
                                </div>
                                <textarea name="two" class="form-control">@if(isset($privacy)) {{ $privacy->two }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>1. Personal Information You Choose to Provide Credit Card Information
                                </div>
                                <textarea name="three" class="form-control">@if(isset($privacy)) {{ $privacy->three }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Email Information
                                </div>
                                <textarea name="four" class="form-control">@if(isset($privacy)) {{ $privacy->four }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>2. Web Site Use Information
                                </div>
                                <textarea name="five" class="form-control">@if(isset($privacy)) {{ $privacy->five }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>How Do We Use the Information That You Provide to Us?
                                </div>
                                <textarea name="six" class="form-control">@if(isset($privacy)) {{ $privacy->six }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Remarketing
                                </div>
                                <textarea name="seven" class="form-control">@if(isset($privacy)) {{ $privacy->seven }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>What Are Cookies?
                                </div>
                                <textarea name="eight" class="form-control">@if(isset($privacy)) {{ $privacy->eight }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>How Do We Use Information We Collect from Cookies?
                                </div>
                                <textarea name="nine" class="form-control">@if(isset($privacy)) {{ $privacy->nine }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Sharing Information with Affiliates
                                </div>
                                <textarea name="ten" class="form-control">@if(isset($privacy)) {{ $privacy->ten }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Sharing Information with Strategic Partners
                                </div>
                                <textarea name="eleven" class="form-control">@if(isset($privacy)) {{ $privacy->eleven }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Notice of New Services and Changes
                                </div>
                                <textarea name="twelve" class="form-control">@if(isset($privacy)) {{ $privacy->twelve }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>How Do We Secure Information Transmissions?
                                </div>
                                <textarea name="thirteen" class="form-control">@if(isset($privacy)) {{ $privacy->thirteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>How Do We Protect Your Information?
                                </div>
                                <textarea name="fourteen" class="form-control">@if(isset($privacy)) {{ $privacy->fourteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>How Can You Access and Correct Your Information?
                                </div>
                                <textarea name="fifteen" class="form-control">@if(isset($privacy)) {{ $privacy->fifteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>Do We Disclose Information to Outside Parties?
                                </div>
                                <textarea name="sixteen" class="form-control">@if(isset($privacy)) {{ $privacy->sixteen }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <div>What About Legally Compelled Disclosure of Information?
                                </div>
                                <textarea name="seventeen" class="form-control">@if(isset($privacy)) {{ $privacy->seventeen }} @endif</textarea>
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
