<?php
include_once("classes/application_top.php");
$id= $_GET['u'];
$idata=$obj->getDatainfo($id,PAGES);
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
	<div class="col-md-9">




<!---Introduction-->


  <div class="card-body" style="font-size: 18px; font-style: italic; color: #000; text-align: justify;">
 

    <p class="card-text">
 <?php echo $idata['details']; ?> <a href="#"></a>
    </p>
    
  
</div>

<!--End Int-->

</div>
<div class="col-md-3">



<h3 class="psocm">
समाचार
</h3>
<div class="newlist">
	<!-- WE NEED News List-->

<?php 
$pdata=$obj->getInfoByTypeLmt(59,PAGES,5);
?>
<ul>
	<?php while($data=$pdata->fetch_assoc()){ ?>
	<li>
		<a href="view<?php echo $data['id']; ?>-59"><?php echo $data['page_name']; ?></a>
	</li>
<?php } ?>
</ul>

</div>




</div>
</div>
</div>

	<!-- WE NEED YOUR HELP -->

	</div>

	 
	<!-- HOW TO HELP US -->
	



	<!-- OUR GALLERY -->
	


	</div>


	

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