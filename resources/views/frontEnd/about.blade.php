@extends('frontEnd.master')
@section('content')
<hr>
<div class="container">
    <div class="row">
        @if(count($about) !== 0)
         <div class="heading main-heading">
            <h1>About <span class="bold"><span class="main-color">us</span></h1>
            <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
        </div>
        @if(!empty($about[0]->bold_text))
            <p style="font-size:22px;color:rgb(119,117,118);font-weight:bold;">{{ $about[0]->bold_text }}</p>
        @endif
        @if(!empty($about[0]->normal_text))
            <p style="font-size:14px;">{{ $about[0]->normal_text }}</p>
        @endif
        @if(!empty($about[0]->intention))
            <h3 style="margin:0 0 10px;font-family:'Raleway',sans-serif; color:#aa0000;">Our Intention</h3>
            <p style="font-size:14px;">{{ $about[0]->intention }}</p>
        @endif
        @if(!empty($about[0]->vision))
            <h3 style="margin:0 0 10px;font-family:'Raleway',sans-serif;color:#aa0000;">Our Vision</h3>
            <p style="font-size:14px;">{{ $about[0]->vision }}</p>
        @endif
        @if(!empty($about[0]->mission))
            <h3 style="margin:0 0 10px;font-family:'Raleway',sans-serif;color:#aa0000;">Our Mission</h3>
            <p style="font-size:14px;">{{ $about[0]->mission }}</p>
        @endif
            @if(!empty($about[0]->keep_going))
            <h3 style="margin:0 0 10px;font-family:'Raleway',sans-serif;color:#aa0000;">What keeps us going?</h3>
            <p style="font-size:14px;">{{ $about[0]->keep_going }}</p>
        @endif

        @else
        <h1 class="text-danger text-center">There is no data</h1>
        @endif
    </div>
</div>

@endsection
