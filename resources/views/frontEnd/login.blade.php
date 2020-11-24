@extends('frontEnd.master')
@section('content')
    <style>
        label{
            font-size:18px;
        }
    </style>
    <div class="content-block stick-to-footer">
        <div class="page-container container">
            <div class="row">
                <div class="col-md-12 entry-content" style="background:url('{{ asset('/front/upload/reg2.jpeg') }}');">
                    <article style="height:562px">
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1501090404957 vc_row-o-equal-height vc_row-flex">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner vc_custom_1487239157606" style="width:300px; padding-left:30px; color:white;font-weight:bold; text-align:center;">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="srch_frm srch_from_mobile" style="margin-left: 352px;margin-top: 179px;">
                                                        <form action="" method="post">
                                                            <div class="form-row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="dob_m">Email ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                                                        <input type="email" placeholder="Email" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="dob_m">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                                                        <input type="password" placeholder="Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="info" style="color:blue;margin-left:134px;padding:8px;">Login</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection
