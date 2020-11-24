<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Patro-Patri.com</title>
    <link rel="stylesheet" href="front/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="front/js/plugins/owl-carousel/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="front/js/plugins/owl-carousel/owl.theme.css" type="text/css" media="all" />
    <link rel="stylesheet" href="front/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="front/css/responsivedc98.css?ver=all" type="text/css" media="all" />
    <link rel="stylesheet" href="front/css/animations.css" type="text/css" media="all" />
    <link rel="stylesheet" href="front/js/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="front/js/plugins/js_composer/assets/css/js_composer.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="front/css/css-skin.css" type="text/css" media="all" />
    <link rel="stylesheet" href="front/js/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css" type="text/css" media="screen" />
    <link rel="icon" href="front/upload/LOGO-505-x-163.png" sizes="32x32" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nunito%3A400%2C700%26subset%3Dlatin%7CPoppins%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%26subset%3Dlatin%7CPoppins%3A300%2C400%2C600%26subset%3Dlatin&amp;ver=1.0" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        *{
            font-size: 15px;
        }
    </style>
</head>
<body style="background-color: #dcdcdc63;" class="home page-template-default page page-id-19 wpb-js-composer js-comp-ver-5.2 vc_responsive">
    <header class="sticky-header main-header sticky-header-elements-headeronly mainmenu-position-menu_in_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-left">
                        <a class="logo-link" href="">
                            <img src="front/upload/LOGO-505-x-163.png" alt="Barrel" class="regular-logo" /><img src="front/upload/LOGO-505-x-163.png" alt="Barrel" class="light-logo" />
                        </a>
                        <div class="mobile-main-menu-toggle" data-toggle="collapse" data-target=".collapse"><i class="fa fa-bars"></i></div>
                    </div>
                    <div class="header-center">
                        <div id="navbar" class="navbar navbar-default clearfix mgt-mega-menu menu-right menu-uppercase menu-style-border-bottom">
                            <div class="navbar-inner">
                                <div class="navbar-collapse collapse">
                                    <ul id="menu-main-menu-2" class="nav">
                                        @foreach($firstMenus as $menu)
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-19 current_page_item">
                                            <a href=""><span style="color: red">{{ $menu['main_menu'] }}</span></a>
                                        </li>
                                        @endforeach
                                        @foreach($galleryMenus as $galleryMenu)
                                        <li class="menu-item menu-item-has-children">
                                            <a href="index.html"><span>{{ $galleryMenu->main_menu }}</span></a>
                                            <ul class="sub-menu megamenu-column-1 level-0">
                                                @foreach($galleryMenu->subMenu as $sub_manu)
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">{{ $sub_manu->sub_menu }}</a>
                                                        <ul class="sub-menu level-1">
                                                            <li class="menu-item">
                                                                @foreach($sub_manu->subMenuTwo as $subMenuTwo)
                                                                <a href="">{{ $subMenuTwo->sub_menu_two }}</a>
                                                                @endforeach
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                        @foreach($menus as $menu)
                                        <li class="menu-item menu-item-has-children">
                                            <a href="index.html"><span>{{ $menu->main_menu }}</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    @foreach($menu->subMenu as $subMenu)
                                                    <a href="">{{ $subMenu->sub_menu }}</a>
                                                    @endforeach
                                                </li>
                                            </ul>
                                        </li>
                                        @endforeach

                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-19 current_page_item">
                                            <a href="index.html"><span>Login</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
                                <a href="register"><img src="front/upload/Register-icon.png"  height="195px" width="200px"></a>
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
                                                @foreach($services as $service)
                                                <div class="mgt-post normal-blocks post-has-image">
                                                    <a href="{{ url('/service-details/'.$service->id) }}">
                                                        <div class="mgt-post-image" data-style="background-image: url({{ asset('/image/'.$service->image) }});"></div>
                                                    </a>
                                                    <div class="mgt-post-details">
                                                        <div class="mgt-post-title">
                                                            <a href="{{ url('/service-details/'.$service->id) }}"><h5>{{ ucfirst($service->title) }}</h5></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
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

    <div class="container-fluid footer-wrapper">
        <div class="row">
            <div class="footer-sidebar-wrapper footer-sidebar-style-dark with-bg w-100" data-style="background-image: url(front/upload/footer-image-back.jpg);">
                <div class="footer-sidebar sidebar container footer-sidebar-col-4">
                    <ul id="footer-sidebar" class="clearfix">
                        <li id="text-2" class="widget widget_text">
                            <div class="textwidget">
                                <img src="front/upload/LOGO-505-x-163.png" width="200" height="300" alt="Logo" />
                                <br />
                                <p style="text-align: center; font-size: 13px;font-weight: bold; text-transform: uppercase;margin-top:5px;">Marriage isn't<br>"I promise to love you until I stop loving you".</p>
                                <p>It's "I promise to make a conscious decidion to continue to love you even when it's hard because I'm aware no one is perfect, but you are worth it".</p>
                            </div>
                        </li>
                        <li id="nav_menu-3" class="widget widget_nav_menu">
                            <h2 class="widgettitle">Need Help?</h2>
                            <div class="menu-footermenu-1-container">
                                <ul id="menu-footermenu-1" class="menu">
                                    <li class="menu-item"><a href="">Patro-Patri</a></li>
                                    <li class="menu-item"><a href="">Member Login</a></li>
                                    <li class="menu-item"><a href="">Sign Up</a></li>
                                    <li class="menu-item"><a href="#">Partner Search</a></li>
                                    <li class="menu-item"><a href="#">Customer Support</a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="nav_menu-2" class="widget widget_nav_menu">
                            <h2 class="widgettitle">Company</h2>
                            <div class="menu-footermenu-simple-container">
                                <ul id="menu-footermenu-simple" class="menu">
                                    <li class="menu-item"><a href="#">About Us</a></li>
                                    <li class="menu-item"><a href="#">Helpful Tips</a></li>
                                    <li class="menu-item"><a href="#">Submit story</a></li>
                                    <li class="menu-item"><a href="#">News</a></li>
                                </ul>
                            </div>
                            <h3 style="margin-top: 26px;font-weight: bold; color: red;">Total Viewed - 000000</h3>
                        </li>
                        <li id="nav_menu-2" class="widget widget_nav_menu">
                            <h2 class="widgettitle">Privacy & You</h2>
                            <div class="menu-footermenu-simple-container">
                                <ul id="menu-footermenu-simple" class="menu">
                                    <li class="menu-item"><a href="#">Terms of Use</a></li>
                                    <li class="menu-item"><a href="#">Privacy Policy</a></li>
                                    <li class="menu-item"><a href="#">Contact: +880 1841 676 661</a></li>
                                </ul>
                                @if(!empty($social))
                                <div class="social-icon">
                                	<a href="https://{{ $social->facebook }}"><span><i style="color: #2a2ae2;font-size:32px;" class="fa fa-facebook"></i></span></a>
                                	<a href="https://{{ $social->youtube }}"><span><i style="color: #2a2ae2;font-size:32px;" class="fa fa-youtube"></i></span></a>
                                	<a href="https://{{ $social->twitter }}"><span><i style="color: #2a2ae2;font-size:32px;" class="fa fa-twitter"></i></span></a>
                                	<a href="https://{{ $social->instragram }}"><span><i style="color: #2a2ae2;font-size:32px;" class="fa fa-instagram"></i></span></a>
                                	<a href="https://{{ $social->linkedin }}"><span><i style="color: #2a2ae2;font-size:32px;" class="fa fa-linkedin"></i></span></a>
                                </div>
                                @endif
                            </div>
                        </li>
                        </ul>
                    <p style="text-align: center;">Patro-patri.com is a unique and best solution for Bride and Groom match-making.<br>
                    This website is strictly for matrimonial purpose only and not a dating website</p>

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="front/js/jquery.js"></script>
    <script type="text/javascript" src="front/js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js"></script>

    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                $("body").addClass("transparent-header");
            });
        })(jQuery);
    </script>

    <script type="text/javascript" src="front/js/plugins/js-skin.js"></script>
    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (
                    (e.responsiveLevels &&
                        (jQuery.each(e.responsiveLevels, function (e, f) {
                            f > i && ((t = r = f), (l = e)), i > f && f > r && ((r = f), (n = e));
                        }),
                        t > r && (l = n)),
                    (f = e.gridheight[l] || e.gridheight[0] || e.gridheight),
                    (s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth),
                    (h = i / s),
                    (h = h > 1 ? 1 : h),
                    (f = Math.round(h * f)),
                    "fullscreen" == e.sliderLayout)
                ) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c)
                            jQuery.each(c, function (e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u;
                            }),
                                e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0
                                    ? (u -= (jQuery(window).height() * parseInt(e.fullScreenOffset, 0)) / 100)
                                    : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0));
                    }
                    f = u;
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({ height: f });
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d);
            }
        }
    </script>

    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>

    <script>
        (function ($) {
            $(document).ready(function () {
                $("#portfolio-list-79562184").mixItUp({ effects: ["rotateX", "scale"], easing: "snap" });
            });
        })(jQuery);
    </script>

    <script type="text/javascript">
        /* <![CDATA[ */
        var thickboxL10n = {
            next: "Next >",
            prev: "< Prev",
            image: "Image",
            of: "of",
            close: "Close",
            noiframes: "This feature requires inline frames. You have iframes disabled or your browser does not support them.",
            loadingAnimation: "http:\/\/wp.magnium-themes.com\/barrel\/barrel-1\/wp-includes\/js\/thickbox\/loadingAnimation.gif",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="front/js/plugins/thickbox/thickbox.js"></script>
    <script type="text/javascript" src="front/js/plugins/bootstrap.min.js"></script>
    <script type="text/javascript" src="front/js/plugins/easing.js"></script>
    <script type="text/javascript" src="front/js/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="front/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="front/js/plugins/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="front/js/plugins/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="front/js/plugins/TweenMax.min.js"></script>
    <script type="text/javascript" src="front/js/plugins/template.js"></script>
    <script type="text/javascript" src="front/js/plugins/js_composer/assets/js/dist/js_composer_front.min.js"></script>
    <script type="text/javascript" src="front/js/plugins/js_composer/assets/lib/waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="front/js/plugins/jquery.appear.js"></script>
    <script type="text/javascript" src="front/js/plugins/jquery.countTo.js"></script>
    <script type="text/javascript" src="front/js/plugins/slick.min.js"></script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        setREVStartSize({
            c: jQuery("#rev_slider_1_1"),
            responsiveLevels: [1240, 1240, 1240, 480],
            gridwidth: [1240, 1240, 1240, 480],
            gridheight: [868, 868, 868, 720],
            sliderLayout: "fullscreen",
            fullScreenAutoWidth: "on",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
        });

        var revapi1,
            tpj = jQuery;

        tpj(document).ready(function () {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1")
                    .show()
                    .revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/plugins/revslider/public/assets/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 1500,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 750,
                                style: "zeus",
                                hide_onleave: false,
                                direction: "vertical",
                                h_align: "right",
                                v_align: "center",
                                h_offset: 50,
                                v_offset: 20,
                                space: 5,
                                tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title">title</span>',
                            },
                        },
                        responsiveLevels: [1240, 1240, 1240, 480],
                        visibilityLevels: [1240, 1240, 1240, 480],
                        gridwidth: [1240, 1240, 1240, 480],
                        gridheight: [868, 868, 868, 720],
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "enterpoint",
                            speed: 400,
                            speedbg: 0,
                            speedls: 0,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                            disable_onmobile: "on",
                        },
                        shadow: 0,
                        spinner: "spinner0",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "on",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        },
                    });
            }
        }); /*ready*/
    </script>
    <script>
        var htmlDivCss = unescape(
            "%23rev_slider_1_1%20.zeus%20.tp-bullet%20%7B%0A%20%20%20%20%20box-sizing%3Acontent-box%3B%20-webkit-box-sizing%3Acontent-box%3B%20border-radius%3A50%25%3B%0A%20%20%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20opacity%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20opacity%200.3s%20ease%3B%0A%20%20%20%20width%3A10px%3Bheight%3A10px%3B%0A%20%20%20%20border%3A2px%20solid%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%7D%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%22%22%3B%0A%20%20position%3A%20absolute%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20left%3A%200%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%3B%0A%20%20transform%3A%20scale%280%29%3B%0A%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20-webkit-transition%3A%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20transform%200.3s%20ease%3B%0A%7D%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Ahover%3Aafter%2C%0A%23rev_slider_1_1%20.zeus%20.tp-bullet.selected%3Aafter%7B%0A%20%20%20%20-webkit-transform%3A%20scale%281.2%29%3B%0A%20%20transform%3A%20scale%281.2%29%3B%0A%7D%0A%20%20%0A%20%23rev_slider_1_1%20.zeus%20.tp-bullet-image%2C%0A%20%23rev_slider_1_1%20.zeus%20.tp-bullet-imageoverlay%7B%0A%20%20%20%20%20%20%20%20width%3A135px%3B%0A%20%20%20%20%20%20%20%20height%3A60px%3B%0A%20%20%20%20%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20%20%20%20%20background%3A%23000%3B%0A%20%20%20%20%20%20%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20%20%20%20%20%20%20bottom%3A10px%3B%0A%20%20%20%20%20%20%20%20margin-bottom%3A10px%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20%20box-sizing%3Aborder-box%3B%0A%20%20%20%20%20%20%20%20background-size%3Acover%3B%0A%20%20%20%20%20%20%20%20background-position%3Acenter%20center%3B%0A%20%20%20%20%20%20%20%20visibility%3Ahidden%3B%0A%20%20%20%20%20%20%20%20opacity%3A0%3B%0A%20%20%20%20%20%20%20%20%20-webkit-backface-visibility%3A%20hidden%3B%20%0A%20%20%20%20%20%20%20%20backface-visibility%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20%20%20border-radius%3A4px%3B%0A%7D%0A%20%20%20%20%20%20%20%20%20%20%0A%0A%23rev_slider_1_1%20.zeus%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%28-50%25%29%3B%0A%7D%20%20%20%20%20%0A%23rev_slider_1_1%20.zeus%20.tp-bullet-title%20%7B%20%0A%20%20%20%20%20%20%20%20color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%20%20%20%20%20%20%20%20text-align%3Acenter%3B%0A%20%20%20%20%20%20%20%20line-height%3A15px%3B%0A%20%20%20%20%20%20%20%20font-size%3A13px%3B%0A%20%20%20%20%20%20%20%20font-weight%3A600%3B%20%20%0A%20%20%20%20%20%20%20%20z-index%3A3%3B%0A%20%20%20%20%20%20%20%20%20visibility%3Ahidden%3B%0A%20%20%20%20%20%20%20%20opacity%3A0%3B%0A%20%20%20%20%20%20%20%20%20-webkit-backface-visibility%3A%20hidden%3B%20%0A%20%20%20%20%20%20%20%20backface-visibility%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20%20%20%20%20bottom%3A45px%3B%0A%20%20%20%20%20%20%20%20width%3A135px%3B%0A%20%20%20%20%20%20vertical-align%3Amiddle%3B%0A%20%20%20%20%20%20%20%0A%7D%0A%20%20%20%20%20%20%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-imageoverlay%7B%0A%20%20%20%20%20%20opacity%3A1%3B%0A%20%20%20%20%20%20visibility%3Avisible%3B%0A%20%20%20%20-webkit-transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%20%20%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%7D%0A%0A%0A%0A%0A%2F%2A%20VERTICAL%20RIGHT%20%2A%2F%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-right%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20right%3A10px%3B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20right%3A100%25%3B%0A%20%20%20%20%20margin-right%3A10px%3B%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-imageoverlay%20%7B%0A%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%0A%0A%2F%2A%20VERTICAL%20LEFT%20%2A%2F%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-left%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20left%3A10px%3B%0A%20%20transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20left%3A100%25%3B%0A%20%20%20%20%20margin-left%3A10px%3B%0A%7D%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A10px%3B%0A%20%20margin-top%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20-webkit-transform%3AtranslateX%280px%29%20translateX%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20%0A%20%20transform%3A%20scale%281%29%20translateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20top%3A10px%3B%0A%20%20%20%20%20margin-top%3A20px%3B%0A%7D%0A%0A"
        );
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        (function ($) {
            $(document).ready(function () {
                $("#mgt-post-list-79556615").owlCarousel({
                    items: 3,
                    itemsDesktop: [1024, 1],
                    itemsDesktopSmall: [979, 1],
                    itemsTablet: [770, 1],
                    itemsMobile: [480, 1],
                    autoPlay: false,
                    navigation: false,
                    navigationText: false,
                    pagination: true,
                    afterInit: function (elem) {
                        $(this).css("display", "block");
                    },
                });
            });
        })(jQuery);
    </script>
    <script>
        (function ($) {
            $(document).ready(function () {
                $("#mgt-client-reviews-84055712").owlCarousel({
                    items: 3,
                    itemsDesktop: [1024, 1],
                    itemsDesktopSmall: [979, 1],
                    itemsTablet: [770, 1],
                    itemsMobile: [480, 1],
                    autoPlay: false,
                    navigation: false,
                    navigationText: false,
                    pagination: true,
                    afterInit: function (elem) {
                        $(this).css("display", "block");
                    },
                });
            });
        })(jQuery);
    </script>
    <script>
        (function ($) {
            $(document).ready(function () {
                $(".mgt-images-slider.mgt-images-slider-30976737 .mgt-images-slider-items").on("init", function (slick) {
                    $(".mgt-images-slider.mgt-images-slider-30976737 .mgt-images-slider-items").show();
                });

                $(".mgt-images-slider.mgt-images-slider-30976737 .mgt-images-slider-items").slick({
                    pauseOnHover: false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 6000,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: false,
                    speed: 300,
                    centerMode: false,
                    centerPadding: "60px",
                    variableWidth: false,
                    adaptiveHeight: true,
                    fade: false,
                    cssEase: "ease",
                    vertical: false,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true,
                            },
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            },
                        },
                    ],
                });
            });
        })(jQuery);
    </script>
    <div class="search-fullscreen-container"></div>
    <div class="search-fullscreen-wrapper">
        <div class="search-fullscreen-form">
            <div class="search-close-btn"><i class="pe-7s-close"></i></div>
            <form method="get" id="searchform_p" class="searchform" action="#">
                <input type="search" class="field" name="s" value="" id="s_p" placeholder="Type keyword(s) here and hit Enter &hellip;" />
                <input type="submit" class="submit btn" id="searchsubmit_p" value="Search" />
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
