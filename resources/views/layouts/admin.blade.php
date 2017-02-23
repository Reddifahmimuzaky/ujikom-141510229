
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>OmJin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="assets/application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="preloader/css/style.css">
<!-- Custom Theme files -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<script src="assets/js/jquery.min.js"> </script>
<script src="assets/js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="assets/css/custom.css" rel="stylesheet">
<script src="assets/js/custom.js"></script>
<script src="assets/js/screenfull.js"></script>

		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>



</head>
<body>
<div navbar-nav navbar-right>

    
</div>
<div id="wrapper">
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">OmJin Naik Gaji</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><h3>{{ Auth::user()->name }}</h3></span></a>
                      <ul class="dropdown-menu " role="menu">
                        <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                      </ul>
                    </li>	
			</section>
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="drop-men" >
                <ul class=" nav_1">
                    
                   
                </ul>
             </div>
		    <!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="/home" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Keuangan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/jabatan" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Jabatan</a></li>
                            <li><a href="/golongan" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Golongan </a></li>
                            <li><a href="/kategori" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Kategori Lembur</a></li>
                            <li><a href="/lembur" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Lembur Pegawai</a></li>
                            <li><a href="/tunjangan" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Tunjangan</a></li>
                            <li><a href="/tunpeg" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Tunjangan Pegawai</a></li>
                            <li><a href="/penggajian" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Peggajian</a></li>

						</ul>
                    </li>
                    
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">HRD</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/pegawai" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Pegawai</a></li
                            
					   </ul>
                    </li>
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
	        	 @yield('content')
	        </div>
	       </div>
	
	<!--//faq-->
		<!---->

		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="assets/js/jquery.nicescroll.js"></script>
	<script src="assets/js/scripts.js"></script>
    <script src="preloader/js/index.js"></script>
	<!--//scrolling js-->
</body>
</html>

