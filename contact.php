<?php
if(isset($_POST['submit']))
   {
   $name = $_POST['name'];
   $phone = $_POST['number'];
   $email = $_POST['email'];
   $company = $_POST['company'];
   $state = $_POST['state'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
   $message = wordwrap($message,70);
   $subject = "Appointment Request";
   $html1 = "<html>
	<head>
		<style>
			td
			{
				padding:2%;
				width:150px;
				border:0px solid black;
				box-shadow:1px 0px 4px 0px #fff5ca;
				border-radius:5px;
			}
		</style>
	</head>
	<body>
		<center><div id='appointmentTemplate' style='background-color:#f9f9f9; width:70%; padding:4%;'>
			<div id='templateInner' style='text-align:left; margin:auto; width:80%; background-color:white; box-shadow:1px 1px 6px 6px #e2e5ff; padding:4%;'>
				Hello Sir,<br>
                Someone has appointment request for you. Here are the details:
                <hr>
				<table>
					<tr>
					    <td><b>First Name</b>:</td><td>".$name."</td>
					</tr>
					<tr>
					    <td><b>Phone</b>:</td> <td><a href='tel:".$phone."'>".$phone."</a></td>
					</tr>
					<tr>
					    <td><b>Email</b>:</td> <td>".$email."</td>
					</tr>
					<tr>
					    <td><b>City</b>:</td> <td>".$company."</td>
					</tr>
					<tr>
					    <td><b>State</b>:</td> <td>".$state."</td>
					</tr>
					<tr>
					    <td><b>Subject</b>:</td> <td>".$subject."</td>
					</tr>
					<tr>
					    <td><b>Message</b>:</td> <td>".$message."</td>
					</tr>
				</table>
                <hr>
                Thanks.<br>
                Website: https://thecavooland.com
            </div>
        </div></center>
    </body>
</html>";
require("smtpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "thecavooland.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Username = "email@thecavooland.com";
$mail->Password = "hGl*Au]cu2(Y";
$mail->From = "email@thecavooland.com";
$mail->FromName = "Appointment Request for thecavooland";
$mail->AddAddress("thecavooland@gmail.com");
$mail->AddAddress("todaywebinfotech@gmail.com");
$mail->IsHTML(true);
// Email body content
$mail->Body =  $html1;
$mail->Subject =  $subject;
// Send email
if(!$mail->send())
{ 
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
   echo "<script>window.location='thanku.html';</script>";
   //header("Location: index.php");
}
       
       
   }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- page title -->
        <title>Contact : Cavoodle Puppies For Sale</title>
        <!--[if lt IE 9]>
        <script src="js/respond.js"></script>
        <![endif]-->
        <!-- Font files -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700%7CMontserrat:400,500,600,700" rel="stylesheet">
        <link href="fonts/flaticon/flaticon.css" rel="stylesheet" type="text/css">
        <link href="fonts/fontawesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
        <!-- Fav icons -->
        <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- style CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- plugins CSS -->
        <link href="css/plugins.css" rel="stylesheet">
        <!-- Colors CSS -->
        <link href="styles/maincolors.css" rel="stylesheet">
        <!-- LayerSlider CSS -->
        <link rel="stylesheet" href="vendor/layerslider/css/layerslider.css">
        <style>  /* boxed */
            #top.boxed {
                max-width:1200px;
                margin:0 auto;
                box-shadow: 10px 10px 100px -19px rgba(0,0,0,0.75);
                background:#fff;
                }
            #top.boxed .navbar, 
            #top.boxed .top-bar,                        
            #top.boxed #slider,
            #top.boxed #nav,
            #top.boxed footer,
            #top.boxed #video-header{
                max-width:1200px;
                margin:0 auto!important;
            }
        </style><!-- Switcher Only -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="switcher/css/switcher.css" media="all" />
        <!-- END Switcher Styles -->
        
        <!-- Demo Examples (For Module #3) -->
        <link rel="alternate stylesheet" type="text/css" href="styles/maincolors.css" title="maincolors" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="styles/tinypaws.css" title="tinypaws" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="styles/veterinarian.css" title="veterinarian" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="styles/agility.css" title="agility" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="styles/superpet.css" title="superpet" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="styles/mymascot.css" title="mymascot" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/boxed.css" title="boxed" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/full.css" title="full" media="all" />
    </head>
    <!-- ==== body starts ==== -->
    <body id="top">
        <!-- Start Switcher -->
        <!--/Preloader ends -->
        <nav id="main-nav" class="navbar-expand-xl fixed-top">
            <div class="row">
                <!-- Start Top Bar -->
                <div class="container-fluid top-bar" >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <h3 style="text-align: center;"><span style="color: #ffffff;"><strong>Cavoodle Puppies For Sale In Australia :&nbsp;0488897139</strong></span></h3>
                                <!-- /End Social Links -->
                            </div>
                            <!-- col-md-12 -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- End Top bar -->
                <!-- Navbar Starts -->
                <div class="navbar container-fluid">
                    <div class="container ">
                        <!-- logo -->
                        <a class="nav-brand" href="index.html">
                            <img src="img/logo.png" alt="" class="img-fluid">
                        </a>
                        <!-- Navbartoggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggle-icon">
                                <i class="fas fa-bars"></i>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <!-- menu item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
						        <li class="nav-item">
                                    <a class="nav-link" href="available-cavoodles-puppies.html">Available Cavoodles Puppies</a>
                                </li>
						        <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Care
                                    </a>
                                    <div class="dropdown-menu pattern2" aria-labelledby="services-dropdown">
                                        <a class="dropdown-item" href="Care.html">Cavoodle Care</a>
                                        <a class="dropdown-item" href="cavooland-exercise.html">Cavoodle Exercise</a>
                                        <a class="dropdown-item" href="cavooland-coat-care.html">Cavoodle coat care</a>
                                    </div>
                                </li>
						        <li class="nav-item">
                                    <a class="nav-link" href="Feeding.html">Feeding</a>
                                </li>
						        <li class="nav-item">
                                    <a class="nav-link" href="Testimonials.html">Testimonials</a>
                                </li>
						        <li class="nav-item">
                                    <a class="nav-link" href="Faq.html">Faq's</a>
                                </li>
						        <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>
                                <!-- menu item -->
                            </ul>
                            <!--/ul -->
                        </div>
                        <!--collapse -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /navbar -->
            </div>
            <!--/row -->
        </nav>
        <!-- /nav --><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
   data-top-bottom="background-size: 110%;">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-up">
         <h1>Contact</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
         </nav>
         <!-- /breadcrumb -->
      </div>
      <!-- /jumbo-heading -->
   </div>
   <!-- /container -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page container">
   <div class="row">
      <!-- page with sidebar starts -->
      <div class="col-lg-9 page-with-sidebar">
         <div class="row">
            <div class="col-lg-12">
               <!-- contact-info-->
              
                     <!-- /contact-icon-->
                  </div>
                  <!-- /row -->
               </div>
               <!-- /contact-info-->
            </div>
            <!-- /col-lg-->
            <!-- contact-info-->
            <div class="contact-info col-lg-12 mt-5 res-margin">
               <h3>Fill the form below to write to us directly.</h3>
               <!-- Form Starts -->
          
        
        
        
        
        <div class="kc-elm kc-css-649448 kc-title-wrap ">


</div><div class="kc-elm kc-css-197966 kc-raw-code"><div>
<div class="screen-reader-response"></div>
<form name="myForm1" action="" method="post">
   <div class="contact-form">
      <div class="row">
         <div class="col-sm-6">
            <div class="form-group">
               <label name="name">Pet Name <span>*</span></label><br>
               <span class=""><input type="text" name="name" value="" class="form-control"></span> 
            </div>
            <div class="form-group">
               <label name="contact" maxlength="20">Your Phone Number<span>*</span></label><br>
               <span class=""><input type="text" name="number" value="" class=" form-control" ></span> 
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <label name="email">Your Email <span>*</span></label><br>
               <span class=""><input type="email" name="email" class="form-control"></span> 
            </div>
            <div class="form-group">
               <label name="company">Enter City<span>*</span></label><br>
               <span class=""><input type="text" name="company" value="" class=" form-control"></span> 
            </div>
         </div>
         <div class="col-sm-12">
            <div class="form-group">
               <label name="subject">Your State<span>*</span></label><br>
               <span class=""><input type="text" name="state" value="" class=" form-control"></span> 
            </div>
             <div class="col-sm-12">
            <div class="form-group">
               <label name="subject">Subject<span>*</span></label><br>
               <span class=""><input type="text" name="subject" value="" class=" form-control"></span> 
            </div>
            <div class="form-group">
               <label name="message">Your Message<span>*</span></label><br>
               <span class=""><textarea name="message" cols="40" rows="10" class="form-control"></textarea></span> 
            </div>
         </div>
      </div>
      <p><input type="submit" name="submit" value="Send Message" class="btn btn-primary"> </p>
   </div>   
</form>
</div></div></div></div>
        
        
      <!-- /page-with-sidebar -->
      <!-- ==== Sidebar ==== -->
      
   <!--/widget-area -->
   
   <!--/widget-area -->
</div>
<!--/sidebar -->   </div>
   <!-- /row -->


<!--/container-fluid-->
<!-- ==== footer ==== -->
<footer class="bg-light pattern1">
   
      <!--/ row-->
    
      <div class="row">
         <div class="credits col-sm-12">
         <h6 style="text-align: center;">Copyright © 2020 Cavooland. All Rights Reserved</h6>
         </div>
      </div>
      <!--/col-lg-12-->
   
   <!--/ container -->
   <!-- Go To Top Link -->
   <div class="page-scroll hidden-sm hidden-xs">
      <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
   </div>
   <!--/page-scroll-->
</footer>
<!--/ footer-->

<!-- Bootstrap core & Jquery -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom Js -->
<script src="js/custom.js"></script>
<script src="js/plugins.js"></script>
<!-- Prefix free -->
<script src="js/prefixfree.min.js"></script>
 <!-- Bootstrap Select Tool (For Module #4) -->
<script src="switcher/js/bootstrap-select.js"></script>
<!-- All Scripts & Plugins -->
<script src="switcher/js/dmss.js"></script>




  <script type='text/javascript'>
      function validateForm() {
	    var x = document.forms["myForm1"]["Name"].value;
	    var y = document.forms["myForm1"]["Number"].value;
	    var z = document.forms["myForm1"]["Email"].value;
	    var a = document.forms["myForm1"]["Company"].value;
	    var b = document.forms["myForm1"]["Subject"].value;
	    var c = document.forms["myForm1"]["Message"].value;
	    if (x == "") {
	        alert("Please Provide Name");
	        return false;
	    }
	    else if(y == ""){
	   	alert("Please Provide Contact Number");
	        return false;
	    }
	    else if(a == ""){
	   	alert("Please Provide Company Name");
	        return false;
	    }
	    else if(b == ""){
	   	alert("Please Provide Subject");
	        return false;
	    }
	    else if(c == ""){
	   	alert("Please Provide Message");
	        return false;
	    }
	    else {
	    	if(z == "")
	    	{
		    	alert("Please Provide Email ID");
		    	
		        return false;
    		 }
		    else
		    {
			    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(z))
			    {
			 	    return (true)
			    }
			    alert("You have entered an invalid email address!");
			    return false;		
		    }
	       }
      }
    </script>
