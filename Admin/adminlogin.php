<html lang="en"><head>

	<meta name="description" content="VTOP : An Official VIT, Vellore Web Portal">
	<meta name="”robots”" content="”NOODP,NOYDIR”">
	<meta name="keywords" content="VTOP, vtop, SDC,sdc ">
    <meta property="og:image" content="https://cullenwebservices.com/wp-content/uploads/2018/09/rawpixel-579231-unsplash.jpg" />
   	<meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    

    <title>Vellore Institute of Technology (VIT)</title>
    
    

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>VIT University - VTOP</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		
		<link rel="stylesheet" href="jquery-ui.css">
		<link rel="stylesheet" href="bootstrap.css">
 		<link rel="stylesheet" href="bootstrapValidator.css">
		<link rel="stylesheet" href="font-awesome.min.css">
		<link rel="stylesheet" href="AdminLteCompatibility.css">
		<link rel="stylesheet" href="VTopScrollbar.css">
		<link rel="stylesheet" href="VTop.css">		
		<link rel="stylesheet" href="scrollableTable.css">
		<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/2Mfykwl2mlvyQZQ3PEgoH710/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-Cx10SI4nRyIf/4CfTL8bj2s8I5ccz18HDscUBxSzsbe1SPnhchceoHtCw2m0nc/h"></script><script src="assets/jquery/jquery-3.3.1.js"></script>
		
	
    
</head><style id="global-dark-mode" media="screen">html:before {
    content: " ";
    z-index: 100000000000000;
    pointer-events: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.10);
  }</style>
<body class="VTopBody" style="padding-top: 67.9125px;">

		
		<div id="page_outline">

		   	
		   	
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#2980B9;color:#EAF2F8">
  				<div class="container">
						<img src="https://vtop.vit.ac.in/vtop/assets/img/vitlogo.png" class="img-responsive pull-left" alt="User Image" width="200" height="75">
						<h3 class="pull-right" style="color: #fff;font-family:Times; font-size: 24px;">VTOP (Vellore Campus)</h3>
  				</div>
			</nav>
	
	    	
	    	<input type="hidden" value="" id="winImage">
	    	<div id="page-wrapper" style="padding-top:50px;">
	    	
	    	
	    	
	    	
				<section id="loginbox" class="col-md-4 col-md-offset-4">
	
					<div class="box box-info">
	
						<div class="box-header with-border">
							<h3 class="box-title">VTOP Admin Login</h3>
						</div>
	
						<div class="box-body">
						<?php
                                if(isset($_GET['run']) && $_GET['run']=="failed")
                                {
                                    echo "Your Email or Password is wrong.";
                                }
                            ?>
							
								<form class="form-signin" id="form-signin_v1" action="adminsignin_sub.php" method="POST" autocomplete="off">
							
								<p class="box-title text-danger"></p>
								<p class="box-title text-danger"></p>
								<p class="box-title text-success"></p>
	
								<div class="form-group">
								
								<input type="text" class="form-control" id="name" placeholder="Enter V-TOP Username" name="n" required>
									 </span>
								</div>
	
								<div class="form-group">
								
									<input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="p" required> </span>
								</div>
							
								
								
								<div class="box-footer">
									<div class="col-xs-6">
										
										<a href="javascript:resetPassword()" class="pull-left need-help">Forgot Password </a><span class="clearfix"></span>
	                       							<a href="javascript:forgotUserID()" class="pull-left need-help">Forgot UserID </a><span class="clearfix"></span>
									</div>
								
								<div>	
								
								</div>
									<div class="row col-xs-6">
										<button id="captcha" class="btn btn-primary pull-right">Sign in</button>
									</div>	
																				
								</div>
							</form> 
						</div>
					</div>
					</section>
				</div>
			


</div>
			

	

		
			
			
				
			
	


</body></html>