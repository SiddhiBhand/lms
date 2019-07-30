<?php
namespace App\Http\Controllers;
use App\Company_info;
use App\logo;
$logo = logo::all();
$company_info = Company_info::all();
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from steelthemes.com/demo/html/Machinery/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 14:29:03 GMT -->
<head>
<meta charset="utf-8">
<title>Machinery - HTML Template | Home </title>
<!-- Stylesheets -->
<link href="{{ asset('home/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('home/plugins/machinery-icons/style.css') }}" rel="stylesheet">


<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('home/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('home/images/favicon.png') }}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header style-two">
        <!--Header Top-->
   
        <style>
        .main-header .header-upper .logo img {
    position: relative;
    display: inline-block;
    /* max-width: 100%; */
    width: 167px;
    height: 100px;
}
.main-header .logo {
    position: relative;
    /* padding: 48px 11px; */
    text-align: center;
    padding-top: 2px;
    padding-bottom: 15px;
}
.main-header .logo {
    position: relative;
    /* padding: 48px 11px; */
    text-align: center;
    padding-top: 79px;
    padding-bottom: 15px;
    /* padding-left: -22px;
    padding-right: -18px; */
}
.main-header .header-upper .upper-right {
    position: relative;
    padding-top: 48px;
}
.main-header .header-upper {
    position: relative;
    z-index: 5;
    background-color: #ffffff;
    height: 116px;
}
@media(max-width:768px){
  .scrol{
    display: none;
  }

  }
        </style>
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
  <?php
  foreach($logo as $logoo){
  ?>     
                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="/uploads/{{ $logoo->logo }}" alt="" title="" style="    height: 11%;
    width: 11%;float: left"></a></div>
                    </div>
<?php
  }
  ?>
  <style>

  </style>
                        <div class=".scrol">
                        <div class="logo"><a href="index-2.html"><img src="{{ asset('home/images/shreyash.PNG') }}" alt="" title="" style=" height: 65%;
    width: 65%;     margin-top: -95px;
    margin-left: -10%;
    "></a></div> 
                    </div>
                    
  
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                                <li class="current"><a href=" {{ url('/') }} ">Home</a>
                                </li>
                                <li ><a href="{{ url('/about_us') }}">About Us</a>
                                </li>
                                <li ><a href="{{ url('/Fas') }}">Facilities</a>
                                </li>
                                <li ><a href="{{ url('/Products') }}">Products</a>
                                </li>
                                <li ><a href="{{ url('/contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!--Search Box-->
                    <!-- <div class="search-box">
                        <div class="dropdown dropdown-outer">
                            <a href="shoping-cart.html" class="cart-btn"><i class="machinery-icon-null"></i><span class="count">0</span></a><button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="http://steelthemes.com/demo/html/Machinery/blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    Outer Box
                    <div class="outer-box">
                        <div class="link-box"><a href="contact.html" class="theme-btn btn-style-one">Get a Quote</a></div>
                    </div> -->
                </div>
            </div>
        </div>
        <!--End Header Lower-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left" style="padding-top:0px">
                    <a href="index-2.html" class="img-responsive"><img src="{{ asset('home/images/logos/logo.png') }}" alt="" title="" style="height:70px"></a>
                </div>
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                            <li class="current"><a href=" {{ url('/') }} ">Home</a>
                                </li>
                                <li ><a href="{{ url('/about_us') }}">About Us</a>
                                </li>
                                <li ><a href="{{ url('/Fas') }}">Facilities</a>
                                </li>
                                <li ><a href="{{ url('/Products') }}">Products</a>
                                </li>
                                <li ><a href="{{ url('/contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>