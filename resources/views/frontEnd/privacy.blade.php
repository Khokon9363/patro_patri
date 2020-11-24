@extends('frontEnd.master')
@section('content')
  <div class="container">
      <table width="98%" align="center" cellpadding="0" cellspacing="0">
          @if(!empty($privacy[0]->one))
          <tr>
              <td width="728"><strong>Our Commitment to Privacy</strong></td>
          </tr>
          <tr>
              <td>{{ $privacy[0]->one }}</td>
          </tr>
          @endif
              @if(!empty($privacy[0]->two))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>What Information Do We Collect?</strong></td>
          </tr>
          <tr>
              <td >{{ $privacy[0]->two }}</td>
          </tr>
              @endif
              @if(!empty($privacy[0]->three))
          <tr>
              <td height="12"  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td height="12"  valign="middle"><strong>1. Personal Information You Choose to Provide Credit Card Information</strong></td>
          </tr>
          <tr>
              <td >$privacy[0]->three</td>
          </tr>
              @endif
              @if(!empty($privacy[0]->four))
          <tr>
              <td >&nbsp;</td>
          </tr>
          <tr>
              <td ><strong> Email Information</strong></td>
          </tr>
          <tr>
              <td  valign="middle"> {{ $privacy[0]->four }}</td>
          </tr>
              @endif
              @if(!empty($privacy[0]->five))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong class="">2. Web Site Use Information</strong></td>
          </tr>
          <tr>
              <td  valign="middle"> {{ $privacy[0]->five }} </td>
          </tr>
              @endif
                  @if(!empty($privacy[0]->six))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>How Do We Use the Information That You Provide to Us?</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{ $privacy[0]->six }}</td>
          </tr>
                  @endif
                      @if(!empty($privacy[0]->seven))
          <tr>
              <td >&nbsp;{{ $privacy[0]->seven }}</td>
          </tr>
          <tr>
              <td ><strong>Remarketing</strong></td>
          </tr>
          <tr>
              <td ></td>
          </tr>
                      @endif
                          @if(!empty($privacy[0]->eight))
          <tr>
              <td >&nbsp;</td>
          </tr>
          <tr>
              <td ><strong>What Are Cookies?</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{ $privacy[0]->eight }} </td>
          </tr>
                          @endif
                              @if(!empty($privacy[0]->nine))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>How Do We Use Information We Collect from Cookies?</strong></td>
          </tr>
          <tr>
              <td  valign="middle"> {{ $privacy[0]->nine }} </td>
          </tr>
                              @endif
                                  @if(!empty($privacy[0]->ten))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>Sharing Information with Affiliates</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{ $privacy[0]->ten }}</td>
          </tr>
                                  @endif
                                      @if(!empty($privacy[0]->eleven))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong class="">Sharing Information with Strategic Partners</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{ $privacy[0]->eleven }}</td>
          </tr>
                                      @endif
                                          @if(!empty($privacy[0]->twelve))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>Notice of New Services and Changes</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{ $privacy[0]->twelve }}</td>
          </tr>
                                          @endif
                                              @if(!empty($privacy[0]->thirteen))
          <tr>
              <td  valign="middle">&nbsp;</td>

          </tr>
          <tr>
              <td  valign="middle"><span ><strong>How Do We Secure Information Transmissions?</strong></span></td>
          </tr>
          <tr>
              <td  valign="middle"> {{ $privacy[0]->thirteen }}</td>
          </tr>
                                              @endif
                                                  @if(!empty($privacy[0]->fourteen))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>How Do We Protect Your Information?</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{ $privacy[0]->fourteen }}</td>
          </tr>
                                                  @endif
                                                      @if(!empty($privacy[0]->fifteen))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>How Can You Access and Correct Your Information?</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{ $privacy[0]->fifteen }}</td>
          </tr>
                                                      @endif
                                                          @if(!empty($privacy[0]->sixteen))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>Do We Disclose Information to Outside Parties?</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{ $privacy[0]->sixteen }}</td>
          </tr>
                                                          @endif
                                                              @if(!empty($privacy[0]->seventeen))
          <tr>
              <td  valign="middle">&nbsp;</td>
          </tr>
          <tr>
              <td  valign="middle"><strong>What About Legally Compelled Disclosure of Information?</strong></td>
          </tr>
          <tr>
              <td  valign="middle">{{$privacy[0]->seventeen}}</td>
          </tr>
                                                              @endif
      </table>
  </div>
@endsection
