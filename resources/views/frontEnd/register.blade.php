@extends('frontEnd.master')
@section('content')

<div class="content-block stick-to-footer">
        <div class="page-container container">
            <div class="row">
                <div class="col-md-12 entry-content" style="background:url('../upload/reg2.jpeg');">
                    <article>
					 <div class="vc_row-full-width vc_clearfix"></div>
 						<div class="vc_row wpb_row vc_row-fluid vc_custom_1501090404957 vc_row-o-equal-height vc_row-flex">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner vc_custom_1487239157606" style="width:300px; padding-left:30px; color:white;font-weight:bold; text-align:center;">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
 											<div class="row">
												<div class="col-md-12">
                                                    <div class="srch_frm srch_from_mobile">
                                                    <form action="" method="post">
                                                       <div class="form-row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                  <label for="dob_m">Full Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                                                    <input type="text"placeholder="Full Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                              <label for="dob_m">Date of Birth &nbsp;&nbsp;:</label>
                                                                <select>
                                                                    <option>&nbsp;Month</option>
                                                                    <option value="January">&nbsp;January</option>
                                                                    <option value="February">&nbsp;February</option>
                                                                    <option value="March">&nbsp;March</option>
                                                                    <option value="April">&nbsp;April</option>
                                                                    <option value="May">&nbsp;May</option>
                                                                    <option value="June">&nbsp;June</option>
                                                                    <option value="July">&nbsp;July</option>
                                                                    <option value="Aguest">&nbsp;Aguest</option>
                                                                    <option value="September">&nbsp;September</option>
                                                                    <option value="October">&nbsp;October</option>
                                                                    <option value="November">&nbsp;November</option>
                                                                    <option value="December">&nbsp;December</option>
                                                                </select>
                                                                <select>
                                                                    <option selected>&nbsp;Day</option>
                                                                    @for($x=1; $x<=31; $x++)
                                                                    <option value="{{ $x }}">&nbsp;{{ $x }}</option>
                                                                    @endfor
                                                                </select>
                                                                <select>
                                                                    <option selected>&nbsp;Year</option>
                                                                    @for($i=date('Y')-18; $i>1960; $i--)
                                                                    <option value="{{ $i }}">&nbsp;{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
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

                                                 <a href="registration.html"><button class="info" style="margin-left:112px;padding:8px;">Register</button></a>
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