@extends('frontEnd.master')
@section('content')

        <div class="section">
            <div class="container">
                <div class="heading main-heading">
                    <h3>Terms <span class="bold"><span class="main-color">& </span>Conditions</h3>
                    <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
                </div>
                @if(count($term) !== 0)
                    <p><strong>THIS AGREEMENT WAS LAST UPDATED ON - {{ $term[0]->created_at }}</strong></p>

                @if(!empty($term[0]->nineteen))
                    <p>{{ $term[0]->nineteen }}</p>
                @endif


                <p><br />
                    <strong>TERMS AND CONDITIONS OF THE WEBSITE </strong></p>
                @if(!empty($term[0]->one))
                <p><strong>User Agreement</strong></p>
                <p>{{ $term[0]->one }}</p>
                @endif

                <p><strong>Website Agreement </strong></p>
                @if(!empty($term[0]->two))
                <p><strong>Right to Use.</strong></p>
                <p>{{ $term[0]->two }}</p>
                @endif

                @if(!empty($term[0]->three))
                <p><strong>Adult</strong></p>
                <p>{{ $term[0]->three }}</p>
                @endif
                @if(!empty($term[0]->four))
                <p><strong>Code of Conduct</strong>. </p>
                <p>{{ $term[0]->four }}</p>
                    @endif

                <p><strong>Privacy and Use of Information</strong></p>
                @if(!empty($term[0]->five))
                <p><strong>You acknowledge that</strong><br />
                 <p>{{ $term[0]->five }}</p>
                    @endif
                @if(!empty($term[0]->six))
                <p><strong>Monitoring of Information.</strong></p>
                <p>{{ $term[0]->six }}</p>
                    @endif
                @if($term[0]->seven)
                <p><strong>Removal of Information.</strong></p>
                <p>{{ $term[0]->seven }}</p>
                    @endif

                @if(!empty($term[0]->eight))
                <p><strong>Termination of Access to Website.</strong></p>
                <p>{{ $term[0]->eight }}</p>
                    @endif
                @if(!empty($term[0]->nine))
                <p><strong>Online Cancellation</strong></p>
                <p>{{ $term[0]->nine }}</p>
                    @endif

                @if(!empty($term[0]->ten))
                <p><strong>Proprietary Information</strong>.</p>
                        <p>{{ $term[0]->ten }}</p>
                    @endif
                    @if(!empty($term[0]->eleven))
                <p><strong>No responsibility.</strong></p>
                <p>{{ $term[0]->eleven }}</p>
                    @endif
                @if(!empty($term[0]->twelve))
                <p><strong>Security</strong></p>
                <p>{{ $term[0]->twelve }}</p>
                    @endif
                @if(!empty($term[0]->thirteen))
                <p><strong>Other Links</strong></p>
                        <p>{{ $term[0]->thirteen }}</p>
                    @endif
                @if(!empty($term[0]->fourteen))
                <p><strong>Indemnity</strong></p>
                    <p>{{ $term[0]->fourteen }}</p>
                    @endif
                    @if(!empty($term[0]->fifteen))
                <p><strong>No Warranties</strong></p>
                    <p>{{ $term[0]->fifteen }}</p>
                    @endif
                @if(!empty($term[0]->sixteen))
                <p><strong>Modifications</strong></p>
                    <p>{{ $term[0]->sixteen }}</p>
                    @endif
                @if(!empty($term[0]->seventeen))
                <p><strong>Disclosure and Other Communication</strong></p>
                <p>{{ $term[0]->eighteen }}</p>
                    @endif


            @endif

            </div></div>

@endsection
