<?php
include_once("classes/application_top.php");
$idata=$obj->getDatainfo(6,PAGES);
$al='';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['phone'];
$phone=$_POST['email'];
$content=$_POST['message'];
$res=$obj->regFeed($name,$email,$phone,$content,$today);
if($res){
	$al=1;
}
}


 ?>
<!DOCTYPE html>
<html style="" class="" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $idata['page_name']; ?> || डिभिजन बन कार्यालय, बर्दिया</title>
    <meta name="">
    <meta name="keywords" content="">
    <meta name="author" content=""> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="img/logo.png">

	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<link rel="stylesheet" type="text/css" href="css/owl_002.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-dropdownhover.css">
	<link rel="stylesheet" type="text/css" href="css/tab.css">

	<!-- ==============================================
	Custom Stylesheet


	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
    <script src="js/modernizr.js"></script>

<script src=""></script></head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload" style="display: none;">
		<div class="loader" style="display: none;"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top">Top</a>

	<!-- HEADER -->
<?php include('inc/inc_header.php'); ?>
 
	<!-- BANNER -->
	<div class="container">
		
			<div  class="titl">
				<row>
					<div class="col-md-12">
				<span class="title"><?php echo $idata['page_name']; ?></span>  <span class="loc"><i class="fa fa-home"></i> >हाम्रा बारेमा ><?php echo $idata['page_name']; ?></span>
			</div>
</row>
			</div>
		<div class="clear"></div>	

	
		<div style="margin-top: 0px;"></div>
	





        <div class="row">
            <div class="col-md-6">
                <div class="google-map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8971901577806!2d83.46149961461944!3d27.689572282799322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399687609985f24b%3A0xa3ce318f5a36d2e0!2sSiddhartha+kennel+club+and+veterinary+hospital!5e0!3m2!1sen!2snp!4v1557741844115!5m2!1sen!2snp" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="pb-0 align-left mbr-fonts-style display-5">
                   सम्पर्क ठेगाना
                </h3>
                <div>
                    <div class="icon-block pb-0">
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            <?php echo $cminfo['office_name']; ?>
                        </h4>
                    </div>
                    <div class="icon-contacts pb-0">
                        <h5 class="align-left mbr-fonts-style display-7">
                            <?php echo $cminfo['office_address']; ?>
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            Phone: <?php echo $cminfo['phone']; ?> <br>
                            Email: <?php echo $cminfo['email']; ?><br>
                            Webiste: <?php echo $cminfo['website']; ?>
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                	<?php if($al==1){ ?>
                    <div class="alert alert-form alert-success text-xs-center">
                    	 Thanks for filling out the form!
                    </div><?php } ?>
                    <form class="block mbr-form" action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group" data-for="name">
                                <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="Your Name" required="" id="name-form4-2y">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" name="phone" data-form-field="Phone" placeholder="Phone" required="" id="phone-form4-2y">
                            </div>
                            <div class="col-md-12 form-group" data-for="email">
                                <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-2y">
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control input" name="message" rows="3" data-form-field="Message" placeholder="Message" style="resize:none" id="message-form4-2y"></textarea>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                <button href="" type="submit" class="btn btn-primary btn-form display-4" name="submit">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
       </div>
    </div>
</section>


<!--End Int-->

</div>

	<br>

	<!-- FOOTER SECTION -->
	<?php include('inc/inc_footer.php'); ?>

	<!-- FOOTER END -->
		
	
	
	<!-- JS VENDOR -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/jquery_002.js"></script>

	<!-- SENDMAIL -->
	<script src="js/validator.js"></script>
	<script src="js/form-scripts.js"></script>

	<script src="js/script.js"></script>


</body></html>