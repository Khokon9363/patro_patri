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
                                                    <div class="srch_frm srch_from_mobile" style="margin-left: 300px;margin-top: 0px;">
                                                        <form action="" method="post">
                                                            <div class="form-row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Full Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <input type="text" disabled placeholder="Edward Anthony Jenner">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Date of birth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <input type="text" disabled placeholder="September 11 2021">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Email ID :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <input type="text" disabled placeholder="edward_anthony@gmail.com">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>About yourself :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                        <textarea style="width: 32%" placeholder="About yourself"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>About your Expectation :</label>
                                                                        <textarea style="width: 32%" placeholder="About your Expectation"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button class="info" style="border:none;outline:none;color:blue;margin-left:134px;padding:8px;">Next</button>
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
