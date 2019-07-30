<?php
namespace App\Http\Controllers;
use App\Company_info;
use App\logo;
$logo = logo::all();
$company_info = Company_info::all();
?>
<footer class="main-footer padding-top">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Footer Column-->
                    <?php
  foreach($logo as $logoo){
  ?>
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                    <div class="logo" ><a href="index-2.html"><img src="/uploads/{{ $logoo->logo }}" alt="" title="" style="height: 100px;"></a></div>
 <?php
  }
  ?>
                        <div class="footer-widget subscribe-widget">
                            <div class="widget-content">
                                <div class="text">
                                    <h4>Let’s join & create something together</h4>
                                    <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you completed.</p>
                                    <!-- <form class="subscribe-form">
                                        <input type="text" name="email" placeholder="Enter your email address...">
                                        <button type="submit"><i class="machinery-icon-next"></i>Subscribe Us</button>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-title"><h2>Usefull Links</h2></div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="{{ url('/') }}">home</a></li>
                                    <li><a href="{{ url('/about_us') }}">About Us</a></li>
                                    <li><a href="{{ url('/Fas') }}">Facilities</a></li>
                                    <li><a href="{{ url('/Products') }}">Products</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>  
                    </div>   

                    <!--Footer Column-->
                    <?php
  foreach($company_info as $cinfo){
  ?>
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-telephone"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <h3>For Business Dealing:</h3>
                                    <span>{{ $cinfo->whatsup_no }}</span>
                                    <p>Available 9:00 - 7:00 all days.
                                    Weekly Off - Thursday</p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-map"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <?php $cadd = explode (". ,", $cinfo->address); ?>
                                    <p><?php  print_r($cadd[0]); ?><br> <?php  print_r($cadd[1]); ?></p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                            <div class="single-contact-widget">
                                <div class="icon-box">
                                    <i class="machinery-icon-send"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <h3>Mail Us at</h3>
                                    <p>{{ $cinfo->email }}</p>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-contact-widget -->
                        </div>
                    </div>      
                </div>
            </div>
        </div>
        <?php }
	  ?>  
        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container clearfix">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 text-left">
                        <a href="#" class="expert-link"><i class="machinery-icon-human-rights"></i></a>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="copyright-text">&copy; 2019 All Rights Reserved by <a href=""></a></div>                        
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <ul class="footer-menu">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Site Map</a></li>                            
                        </ul><!-- /.footer-menu -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>    
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>

<script src="{{ asset('/home/js/jquery.js') }}"></script> 
<script src="{{ asset('/home/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/home/js/jquery-ui.js') }}"></script>
<script src="{{ asset('/home/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('/home/js/slick.min.js') }}"></script>
<script src="{{ asset('/home/js/owl.js') }}"></script>
<script src="{{ asset('/home/js/appear.js') }}"></script>
<script src="{{ asset('/home/js/validate.js') }}"></script>
<script src="{{ asset('/home/js/wow.js') }}"></script>
<script src="{{ asset('/home/js/script.js') }}"></script>
<script src="{{ asset('/home/js/mixitup.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="{{ asset('/home/js/map-script.js') }}"></script>





</body>

<!-- Mirrored from steelthemes.com/demo/html/Machinery/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 14:30:36 GMT -->
</html>