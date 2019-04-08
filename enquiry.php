<?php
  include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Herrlich Pharma Solutions</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<?php
/*
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["lname"]==""||$_POST["email"]==""||$_POST["phone"]==""||$_POST["address"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['phone'];
$message = $_POST['msg'];
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("manideepsai.a.@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
*/
?>




<body>
	<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="index.html">
					<img src="img/logo.png" alt="herrlich pharma solutions"/>
				</a>
			</div>
			<div class="header-right-info pull-right clearfix">
				<!--<div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="flaticon-interface-2"></i>
						</div>
					</div>
					<div class="content">
						<h3>EMAIL</h3>
						
					</div>
				</div>-->
				<div class="single-header-info">
					<div class="icon-box">
						<div class="inner-box">
							<i class="fa fa-phone"></i>
						</div>
					</div>
					<div class="content">
						<!--<h3>Call Now</h3>-->
						<p><b>+91 8886124888</b></p>
                        <p>Info@herrlichpharma.com</p>
					</div>
				</div>
				
			</div>
		</div>
	</header> <!-- /.header -->


	<nav class="mainmenu-area stricky">
		<div class="container">
			<div class="navigation pull-left">
				<div class="nav-header">
				<ul>
						<li><a href="index.html">Home</a></li>
						<li class="dropdown"><a href="about-us.html">About Us</a>
                        <ul class="submenu">
                                 <li><a href="about-us.html">Company Overview </a></li>
								<li><a href="vision-mission.html">Vision & Mission</a></li>                                
								<li><a href="group-of-companies.html">Our Group of Companies</a></li>
								
							</ul>
                        </li>						
							<li class="dropdown">
							<a href="#">Products</a>
							<ul class="submenu">
								<li><a href="apis.html">API INTERMEDIATES</a></li>
								<li><a href="customsynthisis.html">CUSTOM SYNTHESIS</a></li>
								<li><a href="natural.html">NATURAL PRODUCTS</a>
								<ul class="dropdown">
								<li><a href="weight.html">Weight Management</a></li>
								<li><a href="antioxidants.html">Antioxidants</a></li>
								<li><a href="eyehealth.html">Eye Health</a></li>
								<li><a href="herbalextracts.html">Standardized Herbal Extracts</a></li>
								<li><a href="bonehealth.html">Bone Health</a></li>
								<li><a href="cosmeticingredients.html">Cosmetic Ingredients</a></li>
								<li><a href="diabeticcare.html">Diabetic Care</a></li>
								<li><a href="naturalcolours.html">Natural Colours</a></li>
							   </ul>
							    </li>
							  	<li><a href="apiimpurities.html">API IMPURITIES</a></li>
							</ul>
						</li>						
						<li>
							<a href="services.html">Services</a>
							<!--<ul class="submenu">
								<li><a href="cgmp-manufacturing-services.php">cGMP Manufacturing Services</a></li>
								<li><a href="custom-synthesis-services.php">Custom Synthesis Services</a></li>
                                <li><a href="process-r&d-services.php">Process R&D Services</a></li>
								
							</ul>-->
						</li>
						<li><a href="manufacturing-facilities.html">Manufacturing Facilities</a></li>
                        <li><a href="enquiry.html">Enquiry Form</a></li>
                        <li><a href="contact.html">Contact</a></li>
						
					</ul>
				</div>
				<div class="nav-footer">
					<button><i class="fa fa-bars"></i></button>
				</div>
			</div>
			
		</div>
	</nav> <!-- /.mainmenu-area -->
	
<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>ENQUIRY FORM </h2>
					<ul class="breadcumb">
						<li><a href="index.php">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Enquiry Form </span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>
	
	
	
<section class="sec-padding about-content full-sec">
		<div class="container">
			<div class="donation-form-outer">
            	<form action="" id="form" method="post" name="enquiry_form">                 
                    <!--Form Portlet-->
                    <div class="form-portlet">
                                            
                        <div class="row clearfix">
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">First Name <span class="required">*</span></div>
                                <input placeholder="Name" value="" name="fname" id="fname" type="text">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Last Name <span class="required">*</span></div>
                                <input placeholder="Last Name" value="" name="lname" id="lname" type="text">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Email <span class="required">*</span></div>
                                <input placeholder="Email" value="" name="email" id="email" type="email">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Phone <span class="required">*</span></div>
                                <input placeholder="Phone" value="" name="phone" id="phone" type="text">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Organization<span class="required">*</span></div>
                              <textarea name="address" id="address" placeholder="Organization" cols="30" rows="10" style="height:80px;"></textarea>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Requirement <span class="required">*</span></div>
                               <textarea name="msg" id="msg" placeholder="Requirement " cols="30" rows="10" style="height:80px;"></textarea>
                            </div>       
		                    <hr>
		                    <div class="text-center"><input class="btn btn-success mt_30" type="submit" name="submit" id="submit1" value="Send Message"></div>
                                    
                            
                        </div>
                    </div>
                    
                              
                </form>
            </div>
		</div>
    <div>
        <span id="error_pop"></span> 
    <?php
    if(isset($_POST['submit'])) {
        // echo 'Baji';
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $msg=$_POST['msg'];
                                             
function generateRandomString($length = 7) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$req_id='H'.generateRandomString();
$dom=date("Y-m-d H:i:s");

 $admin_mail="kishore@herrlichpharma.com";

$subject="Enquiry Form Request";
$sql1="SELECT REQ_ID FROM tab_cust_requests WHERE REQ_ID='$req_id'";
$sql2="INSERT INTO tab_cust_requests(REQ_ID,FNAME,LNAME,EMAIL,PHONE,ADDRESS,MESSAGE) VALUES('$req_id','$fname','$lname','$email','$phone','$address','$msg')";

$headers = "MIME-Version: 1.0\\r
"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\\r
"; 
$headers .= "From: Herrlich Pharma Solutions <info@herrlichpharma.com>\r\nReply-To: info@herrlichpharma.com
"; 
$headers .= "X-Mailer: PHP \\r
";

// Note: Please change Display Name, Hosting email and reply email 

$emailmessage = <<<EOD
<strong>Hi,</strong><br>
 <br>New Enquiry Details Received:
<table border=1>
        <tr><td>First Name</td><td>$fname</td></tr>
        <tr><td>Last Name</td><td>$lname</td></tr>
        <tr><td>Phone</td><td>$phone</td></tr>
        <tr><td>Email</td><td>$email</td></tr>
        <tr><td>Address</td><td>$address</td></tr>
        <tr><td>Message</td><td>$msg</td></tr>
        
</table>
EOD;
// $emailmessage =file_get_contents('thankyou.html');
 $data = mysqli_query ($conn,$sql1) or die(mysqli_error());
 //echo $msg_id.'  '.$data;
 if(mysqli_num_rows($data) != 0){
     echo "<h3 style='color:tomato'>Failed to Submit. Try Again</h3>";
 }else{
    $data1 = mysqli_query ($conn,$sql2) or die(mysqli_error());
    if($data1){
        mail($admin_mail, $subject, $emailmessage, $headers);
        echo "<h3 style='color:green'>Your request submitted successfully</h3>";
    }else{
        echo "<h3 style='color:tomato'>Failed to Submit</h3>";
    }
 }
 						
    }
                                                ?>
    </div>
	</section>
  	
		<footer class="footer sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="index.php">
							<img src="img/logo.png" alt="Herrlich Pharma Solutions"/>
						</a>
						<p class="title" style="margin-bottom:5px; font-size:16px;"><strong style="color:#fff;">Address</strong>
						<ul class="contact">
							<li><i class="fa fa-map-marker"></i> <span>Herrlich Pharma Solutions, Road No-5, ALEAP Industrial Estate,Kukatpally,Hyderabad-500090 Telangana, India</span></li>
							
						</ul>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget latest-post">
						<h3 class="title">Our Location Map</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d436.0926556739525!2d78.39759540442778!3d17.53139887491927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8e10533d831f%3A0xd698dec87d9d9412!2sALEAP+INDUSTRIAL+ESTATE!5e0!3m2!1sen!2sin!4v1536731203151" style="border:1px solid #3a4751; background:#151a1e; padding:5px;" allowfullscreen="" height="270" frameborder="0" width="100%"></iframe>
					</div>
				</div>
				<div class="col-md-4 latest-post col-sm-6">
                     <div class="footer-widget quick-links">
						<h3 class="title">Quick Links</h3>
						<ul>
							<li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="apis.html">Products</a></li>
							<li><a href="manufacturing-facilities.html">Manufacturing Facilities</a></li>
                            <li><a href="enquiry.html">Enquiry Form</a></li>
                            <li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					
				</div>
		
			</div>
		</div>
	</footer>

	<section class="footer-bottom">
		<div class="container text-center">
			<p>© 2018   <a href="#">KGN Software Solutions</a>. All Rights Reserved.</p>
		</div>
	</section>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    /*
$(document).ready(function(){
    $("#submit").click(function(){
	
	if($("#nme").val()==""){
	alert("Please Enter your Name");
	$("#nme").focus();
	return false;
	}

	if($("#eml").val()==""){
	alert("Please Enter Your Email");
	$("#eml").focus();
	return false;
	}
	
	if($("#eml").val()!=""){	
	var emlval=$("#eml").val();
	//alert(emlval);
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	 if(!emailReg.test(emlval)){
     alert("Please Check your Email ID.");
	 $("#eml").focus();
	 return false;
	 }
	 	}
		
	if($("#msg").val()==""){
	alert("Please Enter Your Message.");
		$("#msg").focus();
	return false;
	}
	
});
});
*/
 $("#submit1").click(function (){
    // e.preventDefault();
             var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                 var fname=$("#fname").val();
                 var lname=$("#lname").val();
                 var phone=$("#phone").val();
                 var email=$("#email").val();
                 var address=$("#address").val();
                 var msg=$("#msg").val();
                 
                 if(fname===""){
                     $("#fname").focus();
                     $("#error_pop").html("<h3 style='color:tomato'>Please enter your first name.</h3>");
                     return false;
                 }else if(lname===""){
                     $("#lname").focus();
                     $("#error_pop").html("<h3 style='color:tomato'>Please enter your last name.</h3>");
                     return false;
                 }else if(email===""){
                     $("#email").focus();
                     $("#error_pop").html("<h3 style='color:tomato'>Please enter eMail id.</h3>");
                     return false;
                 }else if(!re.test(email)){
                     $("#error_pop").html("<h3 style='color:tomato'>Please enter correct eMail id.</h3>");
                     $("#email").focus();
                     return false;
                 }else if(phone===""){
                     $("#phone").focus();
                     $("#error_pop").html("<h3 style='color:tomato'>Please enter your phone number.</h3>");
                     return false;
                 }else if(phone.length<10){
                     $("#phone_pop").focus();
                     $("#error_pop").html("<h3 style='color:tomato'>Please enter correct phone number.</h3>");
                     return false;
                 }else if(address===""){
                     $("#address").focus();
                     $("#error_pop").html("<h3 style='color:tomato'>Please enter your address.</h3>");
                     return false;
                 }else if(msg===""){
                     $("#msg").focus();
                     $("#error_pop").html("<h3 style='color:tomato'>Please enter your message.</h3>");
                     return false;
                 }else{
                     return true;
                     $("#submit1").prop("disabled",true);
                     $("#error_pop").html("<h3 style='color:green'>Submitting your request Please wait...<i class='fa fa-refresh'></i></h3>");
                     $("#submit1").click();
                     /*
                     $.post("php_operations.php",{"type":"DEALER_REQ","name":name,"phone":phone,"email":email,"state":state,"dist":dist,"city":city,"pincode":pincode,"req_type":"BECOME_DEALER_REQ"},function(data){
                                     //alert(data.trim());
                                     // $("#model_vb").html(data.trim());
                                     // $("#model_vb").selectpicker("refresh");
                                     $("#dr_sub_btn").prop("disabled",false);
                                     if(data.trim()==="success"){
                                         $("#abc").html(" <p style='color:#2a9637;font-size:20px;padding:100px;text-align:center'> <i class='fa fa-check-circle-o'></i><br>Request submitted Successfully,<br> our Team will contact you very soon.</p>");
                                         $("#name_pop").val("");
                                         $("#phone_pop").val("");
                                         $("#email_pop").val("");
                                         $("#state_pop").val("");
                                         $("#dist_pop").val("");
                                         $("#city_pop").val("");
                                         $("#pincode_pop").val("");
                                     }else{
                                         $("#error_pop").html(" Failed to Submit. Please try again !!!");
                                     }
                     });
                     */
                        // $("#submit1").submit();
                 }
             });
</script>

	<!-- main jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- bx slider -->
	<script src="js/jquery.bxslider.min.js"></script>
	<!-- owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script src="js/jquery-parallax.js"></script>
	<!-- validate -->
	<script src="js/validate.js"></script>
	<!-- mixit up -->
	<script src="js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- circle progress -->
	<script src="js/circle-progress.js"></script>
	<!-- appear js -->
	<script src="js/jquery.appear.js"></script>
	<!-- count to -->
	<script src="js/jquery.countTo.js"></script>
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->
	<script src="js/gmap.js"></script>

	<!-- isotope script -->
	<script src="js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
	
	<!-- revolution scripts -->

	<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>


	<!-- thm custom script -->
	<script src="js/custom.js"></script>


</body>
</html>