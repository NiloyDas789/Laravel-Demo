<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Template- @yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{asset('custom/css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('custom/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('custom/css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="{{asset('custom/images/fevicon.png" type="image/gif')}}" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{asset('custom/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{asset('custom/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('custom/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->
<body>
	<div class="header_main">
		<div class="container">
			<div class="logo"><a href="index.html"><img src="{{asset('custom/images/logo.png')}}"></a></div>
		</div>
	</div>
	</div>

	<div class="header">
        <div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                <a class="nav-link" href="{{url('home')}}">HOME<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="{{url('about')}}">ABOUT</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="{{url('service')}}">SERVICES</a></li>
                               <li class="#" href="#">
                                <a class="nav-link" href="{{url('blog')}}">BLOG</a></li>
                               <li class="nav-item" href="#">
                                <a class="nav-link" href="{{url('contact')}}">CONTACT</a></li>
                               <li class="last"><a href="#"><img src="{{asset('custom/images/search-icon.png')}}" alt="icon"></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->        
    <!--banner start -->
    @yield('home')
    @yield('about')
    @yield('contact')
    @yield('service')
    @yield('blog')
<!--banner end -->
    <!--services start -->
    <div class="contact_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="touch_text">Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="contact_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="{{asset('custom/images/map-icon.png')}}" style="max-width: 100%;padding-left: 30px; ">
                            <p class="email-text"><a href="#">Gb road 123 londo<br>Uk</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="{{asset('custom/images/call-icon.png')}}" style="max-width: 100%;padding-left: 30px;">
                            <p class="email-text"><a href="#">+7123654897</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="{{asset('custom/images/email-icon.png')}}" style="max-width: 100%; padding-left: 30px;">
                            <p class="email-text"><a href="#">demo@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  
    		    
    <!--Contact_section end -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text">© 2019 All Rights Reserved. <a href="https://html.design">Free Website Templates</a></p>
                </div>
            </div>
        </div>
    </div>
      <!-- Javascript files-->
      <script src="{{asset('custom/js/jquery.min.js')}}"></script>
      <script src="{{asset('custom/js/popper.min.js')}}"></script>
      <script src="{{asset('custom/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>