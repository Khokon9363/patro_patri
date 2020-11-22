@extends('frontEnd.master')
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
  @if(!empty($sliders))
    @foreach($sliders as $key => $slider)
        <div class="carousel-item @if($key == 1) {{ 'active' }} @endif">
        <img class="d-block w-100" style="height: 720px;" src="sliders/{{ $slider->image }}" alt="First slide">
        </div>
    @endforeach
  @else
  <h1 class="text-danger text-center">No Slider Image found</h1>
  @endif
  
</div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1501090404957 vc_row-o-equal-height vc_row-flex" style="text-align:center">
                            <div class="col-md-12 col-sm-12">
                                <a href="customer_register"><img src="front/upload/Register-icon.png"  height="195px" width="200px"></a>
                            </div>
                        </div>

<div class="section" >
<div class="container">
<div class="row mb-5" style="padding-top: 50px;">
   <div id="mob_hide" class="col-md-8">
   <h2 style="color: #ff282f;font-size: 30px;font-weight: bold; text-align: center;padding:15px;">Search Matrimonial Profiles</h2>
   </div>
   <div id="slideshow-r" class="col-md-4">
   <div style="box-shadow: 0 0 20px rgba(0,0,0,0.4);border-radius:5px;font-size: 20px;text-align:center;background: #ece6ec82;padding:15px;">
    <strong style="color: red;" id="age">55</strong> 
       years old 
    <strong style="color: red;" id="userStatus">Seperated man</strong> 
       just registered from 
    <strong style="color: red;" id="country">Georgia</strong>
   </div>
   </div>
</div>
<script>
    var ages = [24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50];
    var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua", "Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    var hisStatus = ['Single','Divorced','Widowed','Separated','Married'];
    var age = document.getElementById('age');
    var userStatus = document.getElementById('userStatus');
    var country = document.getElementById('country');
    setInterval(function(){
        country.innerHTML    = countries[Math.floor(Math.random() * 206)];
        age.innerHTML        = ages[Math.floor(Math.random() * 26)];
        userStatus.innerHTML = hisStatus[Math.floor(Math.random() * 4)];
    },100)    
</script>

 <div class="row">

    <div class="card col-md-4" style="border-radius: 10px;box-shadow: 5px 6px 3px darkgrey;background-color: #F8F8FB;">
        <div class="card-body" style=" padding: 46px;">
            <h3 class="text-center" style="padding-bottom:15px;">Mother Tongue</h3>
            <div class="text-center" style="padding-left: 36px;padding-right: 49px;padding-bottom:15px;">
            <a href="">Hindi</a> |
            <a href="">English</a> |
            <a href="">Urdu</a> |
            <a href="">Punjabi</a> |
            <a href="">Marathi</a> |
            <a href="">Gujrati</a> |
            <a href="">Bangla</a> |
            <a href="">Tamil</a> |
            <a href="">Malayam</a> |
            <a href="">Telugu</a> |
            <a href="">Bihari</a>
            </div>
            <div class="text-center">
                <input type="submit" value="Read More.." class="btn btn-grey">
            </div>
        </div>
    </div>
    <div class="card col-md-4" style="border-radius: 10px;box-shadow: 5px 6px 3px darkgrey;background-color: #F8F8FB;">
        <div class="card-body" style=" padding: 46px;">
            <h3 class="text-center" style="padding-bottom:15px;">RELIGION</h3>
            <div class="text-center" style="padding-left: 36px;padding-right: 49px;padding-bottom:15px;">
            <a href="">Hindu</a> |
            <a href="">Muslim</a> |
            <a href="">Christian</a> |
            <a href="">Sikh</a> |
            <a href="">Budhist</a> |
            <a href="">Jain</a>
            </div>
            <div class="text-center">
                <input type="submit" value="Read More.." class="btn btn-grey">
            </div>
        </div>
    </div>
    <div class="card col-md-4" style="border-radius: 10px;box-shadow: 5px 6px 3px darkgrey;background-color: #F8F8FB;">
        <div class="card-body" style=" padding: 46px;">
            <h3 class="text-center" style="padding-bottom:15px;">CASTE</h3>
            <div class="text-center" style="padding-left: 36px;padding-right: 49px;padding-bottom:15px;">
            <a href="">Sunni</a> |
            <a href="">Brahmin</a> |
            <a href="">Maratha</a> |
            <a href="">Rajput</a> |
            <a href="">Kayastha</a> |
            <a href="">Punjabi</a> |
            <a href="">Aggarwal</a> |
            <a href="">Jat</a> |
            <a href="">Bengali</a> |
            <a href="">Kshatriya</a>
            </div>
            <div class="text-center">
                <input type="submit" value="Read More.." class="btn btn-grey">
            </div>
        </div>
    </div>
    <div class="card col-md-4" style="border-radius: 10px;box-shadow: 5px 6px 3px darkgrey;background-color: #F8F8FB;">
        <div class="card-body" style=" padding: 46px;">
            <h3 class="text-center" style="padding-bottom:15px;">STATES</h3>
            <div class="text-center" style="padding-left: 36px;padding-right: 49px;padding-bottom:15px;">
            <a href="">California</a> |
            <a href="">New York</a> |
            <a href="">Texas</a> |
            <a href="">New Jersey</a> |
            <a href="">Virginia</a> |
            <a href="">Illinois</a> |
            <a href="">Florida</a> |
            <a href="">Pennsylvania</a> |
            <a href="">Michigan</a> |
            <a href="">Georgia</a>
            </div>
            <div class="text-center">
                <input type="submit" value="Read More.." class="btn btn-grey">
            </div>
        </div>
    </div>
    <div class="card col-md-4" style="border-radius: 10px;box-shadow: 5px 6px 3px darkgrey;background-color: #F8F8FB;">
        <div class="card-body" style=" padding: 46px;">
            <h3 class="text-center" style="padding-bottom:15px;">OCCUPATION</h3>
            <div class="text-center" style="padding-left: 36px;padding-right: 49px;padding-bottom:15px;">
            <a href="">Engineer</a> |
            <a href="">Business Owner</a> |
            <a href="">IT Professional</a> |
            <a href="">Teacher</a> |
            <a href="">Accounting</a> |
            <a href="">Banking</a> |
            <a href="">Software Profession</a> |
            <a href="">Government</a> |
            <a href="">Sales/Marketing</a> |
            <a href="">Academic</a>
            </div>
            <div class="text-center">
                <input type="submit" value="Read More.." class="btn btn-grey">
            </div>
        </div>
    </div>
    <div class="card col-md-4" style="border-radius: 10px;box-shadow: 5px 6px 3px darkgrey;background-color: #F8F8FB;">
        <div class="card-body" style=" padding: 46px;">
            <h3 class="text-center" style="padding-bottom:15px;">INTERNATIONAL</h3>
            <div class="text-center" style="padding-left: 36px;padding-right: 49px;padding-bottom:15px;">
            <a href="">India</a> |
            <a href="">United States</a> |
            <a href="">Pakistan</a> |
            <a href="">Canada</a> |
            <a href="">United Kingdom</a> |
            <a href="">Bangladesh</a> |
            <a href="">United Arab Emirates</a> |
            <a href="">Australia</a> |
            <a href="">Saudi Arabia</a> |
            <a href="">Nepal</a>
            </div>
            <div class="text-center">
                <input type="submit" value="Read More.." class="btn btn-grey">
            </div>
        </div>
    </div>

 </div>    

</div>
</div>

                        <div class="vc_row-full-width vc_clearfix" style="margin-top: 80px;"></div>

                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1493643957724">
                            
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1497275312691">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-counter-wrapper mgt-counter-icon-position-left wpb_content_element text-black text-font-weight-default text-center wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                                            <div class="mgt-counter-icon" style="color: #2c99ed;"><img src="front/upload/Never_Marriad.png" height="50px" width="50px"></div>
                                            <span class="mgt-counter-value" data-from="0" data-to="43" data-speed="2000" data-decimals="0">43</span>
                                            <h5 class="mgt-counter-title">Never Merried</h5>
                                     			<div class="count">
                                     				<span>Male</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                     		    <div class="count">
                                     				<span>Female</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1497275312691">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-counter-wrapper mgt-counter-icon-position-left wpb_content_element text-black text-font-weight-default text-center wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                                            <div class="mgt-counter-icon" style="color: #2c99ed;"><img src="front/upload/Never_Marriad.png" height="50px" width="50px"></div>
                                            <span class="mgt-counter-value" data-from="0" data-to="95" data-speed="2000" data-decimals="0">43</span>
                                            <h5 class="mgt-counter-title">Divorced</h5>
                                     			<div class="count">
                                     				<span>Male</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                     		    <div class="count">
                                     				<span>Female</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1497275312691">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-counter-wrapper mgt-counter-icon-position-left wpb_content_element text-black text-font-weight-default text-center wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                                            <div class="mgt-counter-icon" style="color: #2c99ed;"><img src="front/upload/Never_Marriad.png" height="50px" width="50px"></div>
                                            <span class="mgt-counter-value" data-from="0" data-to="65" data-speed="2000" data-decimals="0">43</span>
                                            <h5 class="mgt-counter-title">Widowed</h5>
                                     			<div class="count">
                                     				<span>Male</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                     		    <div class="count">
                                     				<span>Female</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1497275312691">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-counter-wrapper mgt-counter-icon-position-left wpb_content_element text-black text-font-weight-default text-center wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                                            <div class="mgt-counter-icon" style="color: #2c99ed;"><img src="front/upload/Never_Marriad.png" height="50px" width="50px"></div>
                                            <span class="mgt-counter-value" data-from="0" data-to="124" data-speed="2000" data-decimals="0">43</span>
                                            <h5 class="mgt-counter-title">Separated</h5>
                                     			<div class="count">
                                     				<span>Male</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                     		    <div class="count">
                                     				<span>Female</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1497275312691">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-counter-wrapper mgt-counter-icon-position-left wpb_content_element text-black text-font-weight-default text-center wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                                            <div class="mgt-counter-icon" style="color: #2c99ed;"><img src="front/upload/Never_Marriad.png" height="50px" width="50px"></div>
                                            <span class="mgt-counter-value" data-from="0" data-to="124" data-speed="2000" data-decimals="0">43</span>
                                            <h5 class="mgt-counter-title">Married</h5>
                                     			<div class="count">
                                     				<span>Male</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                     		    <div class="count">
                                     				<span>Female</span><br>
                                     				<span style="color: red">000</span>	
                                     			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1493722811728 vc_row-o-equal-height vc_row-flex">
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner vc_custom_1487239752272"><div class="wpb_wrapper"></div></div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="mgt-header-block clearfix text-center text-black wpb_animate_when_almost_visible wpb_fadeInDown fadeInDown wpb_content_element mgt-header-block-style-2 mgt-header-block-fontsize-medium mgt-header-texttransform-subheader mgt-header-block-44330954 vc_custom_1493722604296"
                                        >
                                            <h2 class="mgt-header-block-title text-font-weight-default">Bride Solutions</h2>
                                            <div class="mgt-header-line mgt-header-line-margin-small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1493722790880 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-promo-block-container wpb_content_element wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                                            <div class="mgt-promo-block-wrapper mgt-promo-block-shadow mgt-promo-block-hover">
                                                <div
                                                    class="mgt-promo-block animated black-text text-color-hover-white cover-image no-darken mgt-promo-block-22600548"
                                                    data-style="background-color: #f5f5f5;background-image: url(front/upload/Dress.jpg);background-repeat: no-repeat;height: 350px;"
                                                >
                                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                  
                                        <div class="mgt-promo-block-container wpb_content_element wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                                            <div class="mgt-promo-block-wrapper mgt-promo-block-shadow mgt-promo-block-hover">
                                                <div
                                                    class="mgt-promo-block animated black-text text-color-hover-white cover-image no-darken mgt-promo-block-67995799"
                                                    data-style="background-color: #f5f5f5;background-image: url(front/upload/ornaments.jpeg);background-repeat: no-repeat;height: 350px;"
                                                >
                                             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">

                                        <div class="mgt-promo-block-container wpb_content_element wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight">
                                            <div class="mgt-promo-block-wrapper mgt-promo-block-shadow mgt-promo-block-hover">
                                                <div
                                                    class="mgt-promo-block animated black-text text-color-hover-white cover-image no-darken mgt-promo-block-47738208"
                                                    data-style="background-color: #f5f5f5;background-image: url(front/upload/juta.jpg);background-repeat: no-repeat;height: 350px;"
                                                >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1493722811728 vc_row-o-equal-height vc_row-flex">
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner vc_custom_1487239752272"><div class="wpb_wrapper"></div></div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="mgt-header-block clearfix text-center text-black wpb_animate_when_almost_visible wpb_fadeInDown fadeInDown wpb_content_element mgt-header-block-style-2 mgt-header-block-fontsize-medium mgt-header-texttransform-subheader mgt-header-block-44330954 vc_custom_1493722604296"
                                        >
                                            <h2 class="mgt-header-block-title text-font-weight-default">Groom Solutions</h2>
                                            <div class="mgt-header-line mgt-header-line-margin-small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1493722790880 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-promo-block-container wpb_content_element wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft">
                                            <div class="mgt-promo-block-wrapper mgt-promo-block-shadow mgt-promo-block-hover">
                                                <div
                                                    class="mgt-promo-block animated black-text text-color-hover-white cover-image no-darken mgt-promo-block-22600548"
                                                    data-style="background-color: #f5f5f5;background-image: url(front/upload/panjabi.jpg);background-repeat: no-repeat;height: 350px;"
                                                >
                                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                  
                                        <div class="mgt-promo-block-container wpb_content_element wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
                                            <div class="mgt-promo-block-wrapper mgt-promo-block-shadow mgt-promo-block-hover">
                                                <div
                                                    class="mgt-promo-block animated black-text text-color-hover-white cover-image no-darken mgt-promo-block-67995799"
                                                    data-style="background-color: #f5f5f5;background-image: url(front/upload/indian-groom-footwear.jpg);background-repeat: no-repeat;height: 350px;"
                                                >
                                             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">

                                        <div class="mgt-promo-block-container wpb_content_element wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight">
                                            <div class="mgt-promo-block-wrapper mgt-promo-block-shadow mgt-promo-block-hover">
                                                <div
                                                    class="mgt-promo-block animated black-text text-color-hover-white cover-image no-darken mgt-promo-block-47738208"
                                                    data-style="background-color: #f5f5f5;background-image: url(front/upload/pagri.jpg);background-repeat: no-repeat;height: 350px;"
                                                >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1493825056538 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>

                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1493211616422 vc_row-o-equal-height vc_row-flex">
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner vc_custom_1487601140598"><div class="wpb_wrapper"></div></div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="mgt-header-block clearfix text-center text-black wpb_animate_when_almost_visible wpb_fadeInDown fadeInDown wpb_content_element mgt-header-block-style-2 mgt-header-block-fontsize-medium mgt-header-texttransform-subheader mgt-header-block-45378286 vc_custom_1493722618062"
                                        >
                                            <h2 class="mgt-header-block-title text-font-weight-default">Our Services For Wedding</h2>
                                            <div class="mgt-header-line mgt-header-line-margin-small"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
                            </div>
                        </div>
                        
                        <div class="container-fluid">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1493986136760">
                            <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-post-list-wrapper">
                                            <div id="mgt-post-list-79556615" class="mgt-post-list wpb_content_element animated mgt-post-list-style-rounded" style="display: none;">
                                                <div class="mgt-post normal-blocks post-has-image">
                                                    <a href="single_blog.html">
                                                        <div class="mgt-post-image" data-style="background-image: url(front/upload/Stage_decoration.jpg);">
                                                         
                                                        </div>
                                                    </a>
                                                    <div class="mgt-post-details">
                                              
                                                    
                                                        <div class="mgt-post-title">
                                                            <a href="single_blog.html"><h5>Stage Decoration</h5></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mgt-post normal-blocks post-has-image">
                                                    <a href="single_blog.html">
                                                        <div class="mgt-post-image" data-style="background-image: url(front/upload/car.jpg);">
                                                           
                                                        </div>
                                                    </a>
                                                    <div class="mgt-post-details">
                                                 
                                                        <div class="mgt-post-title">
                                                            <a href="single_blog.html"><h5>Holud Decoration</h5></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mgt-post normal-blocks post-has-image">
                                                    <a href="single_blog.html">
                                                        <div class="mgt-post-image" data-style="background-image: url(front/upload/Holud.jpg);">
                                                         
                                                        </div>
                                                    </a>
                                                    <div class="mgt-post-details">
                                                  
                                                        <div class="mgt-post-title">
                                                            <a href="single_blog.html"><h5>Car Decoration</h5></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="container-fluid">
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1493398721581 vc_row-has-fill vc_row-o-equal-height vc_row-flex">
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="mgt-header-block clearfix text-center text-white wpb_animate_when_almost_visible wpb_fadeInDown fadeInDown wpb_content_element mgt-header-block-style-2 mgt-header-block-fontsize-medium mgt-header-texttransform-subheader mgt-header-block-74170585"
                                        >
                                      
                                            <h2 class="mgt-header-block-title text-font-weight-default">TESTIMONIALS</h2>
                                            <div class="mgt-header-line mgt-header-line-margin-small"></div>
                                        </div>
                                        <div class="mgt-button-wrapper mgt-button-wrapper-align-center mgt-button-wrapper-display-newline mgt-button-top-margin-true mgt-button-right-margin-false mgt-button-round-edges-small">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1493310944135">
                            <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-client-reviews-wrapper">
                                            <div id="mgt-client-reviews-84055712" class="mgt-client-reviews wpb_content_element owl-normal-nav" style="display: none;">
                                                <div class="mgt-client-review text-dark mgt-client-review-style-box mgt-client-review-shadow">
                                                    <div class="mgt-client-review-details">
                                                        <div class="mgt-client-review-content">
                                                            Thank you Patro-Patri.com for create a such wonderfull platform.
                                                        </div>
                                                        <div class="mgt-client-review-title">
                                                            <div class="mgt-client-review-image"><img src="front/upload/LOGO-505-x-163.png" alt="Antony Marvin" /></div>
                                                            <h5>Antony Marvin</h5>
                                                            <div class="mgt-client-review-position">Head of MND</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mgt-client-review text-dark mgt-client-review-style-box mgt-client-review-shadow">
                                                    <div class="mgt-client-review-details">
                                                        <div class="mgt-client-review-content">
															Patro-Patri.com is a reliable and right way to find bride and groom.
                                                        </div>
                                                        <div class="mgt-client-review-title">
                                                            <div class="mgt-client-review-image"><img src="front/upload/LOGO-505-x-163.png" alt="Amalia Stivens" /></div>
                                                            <h5>Amalia Stivens</h5>
                                                            <div class="mgt-client-review-position">Senior Designer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mgt-client-review text-dark mgt-client-review-style-box mgt-client-review-shadow">
                                                    <div class="mgt-client-review-details">
                                                        <div class="mgt-client-review-content">
															Its a place where all kind of man/women can search their soulmate.
                                                        </div>
                                                        <div class="mgt-client-review-title">
                                                            <div class="mgt-client-review-image"><img src="front/upload/LOGO-505-x-163.png" alt="Bradly Cooper" /></div>
                                                            <h5>Bradly Cooper</h5>
                                                            <div class="mgt-client-review-position">Copywriter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mgt-client-review text-dark mgt-client-review-style-box mgt-client-review-shadow">
                                                    <div class="mgt-client-review-details">
                                                        <div class="mgt-client-review-content">
                                                            The theme is lovely itself, though we got great amount of help in customizing it the way we want. Magnium Themes  was very helpful and answered all of our questions.
                                                        </div>
                                                        <div class="mgt-client-review-title">
                                                            <div class="mgt-client-review-image"><img src="front/upload/LOGO-505-x-163.png" alt="Annet James" /></div>
                                                            <h5>Annet James</h5>
                                                            <div class="mgt-client-review-position">Founder JevelGroup</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
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