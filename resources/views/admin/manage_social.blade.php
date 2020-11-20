@extends('admin.master')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="card col-sm-10 m-auto" style="box-shadow: 14px 13px 16px;">
        @if(session('success'))
        <div class="mt-3">
        <div class="col-sm-6 text-center m-auto alert alert-success alert-dismissible fade show" role="alert">
            <p class="text-success">{{session('success')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
        @endif

        <form action="saveSocial" method="POST">
            @csrf
        <div class="form-group row mt-4">
            <label for="Facebook" class="col-sm-2 col-form-label text-right">Facebook</label>
            <div class="col-sm-10">
            <input type="text" name="facebook" value="{{isset($social_media->facebook) ? $social_media->facebook : '' }}" class="form-control" id="Facebook" placeholder="Paste here your facebook link">
            </div>
        </div>
        <div class="form-group row mt-4">
            <label for="Youtube" class="col-sm-2 col-form-label text-right">Youtube</label>
            <div class="col-sm-10">
            <input type="text" name="youtube" value="{{isset($social_media->youtube) ? $social_media->youtube : '' }}" class="form-control" id="Youtube" placeholder="Paste here your youtube link">
            </div>
        </div>
        <div class="form-group row mt-4">
            <label for="Twitter" class="col-sm-2 col-form-label text-right">Twitter</label>
            <div class="col-sm-10">
            <input type="text" name="twitter" value="{{isset($social_media->twitter) ? $social_media->twitter : '' }}" class="form-control" id="Twitter" placeholder="Paste here your twitter link">
            </div>
        </div>
        <div class="form-group row mt-4">
            <label for="Instragram" class="col-sm-2 col-form-label text-right">Instragram</label>
            <div class="col-sm-10">
            <input type="text" name="instragram" value="{{isset($social_media->instragram) ? $social_media->instragram : '' }}" class="form-control" id="Instragram" placeholder="Paste here your instragram link">
            </div>
        </div>
        <div class="form-group row mt-4">
            <label for="Linkedin" class="col-sm-2 col-form-label text-right">Linkedin</label>
            <div class="col-sm-10">
            <input type="text" name="linkedin" value="{{isset($social_media->linkedin) ? $social_media->linkedin : ''}}" class="form-control" id="Linkedin" placeholder="Paste here your linkedin link">
            </div>
            <input type="hidden" name="id" value="{{isset($social_media->id) ? $social_media->id : ''}}" class="form-control" id="Linkedin" placeholder="Paste here your linkedin link">
        </div>
        <div class="form-group row mt-4">
            <label class="col-sm-2 col-form-label text-right"></label>
            <div class="col-sm-10">
            <input type="submit" class="btn btn-success" value="Save">
            </div>
        </div>
        </form>

        </div>
    </div>
</div>

@endsection