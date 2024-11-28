<?php
include_once("classes/application_top.php");
 ?>
<!DOCTYPE html>
<html style="" class="" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> डिभिजन बन कार्यालय, बर्दिया</title>
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
		<div style="margin-top: 10px;"></div>
		<div class="row">
	<div class="col-md-9">

<div class="card" style="padding: 10px;">
    <?php
$sdata=$obj->getlist1(SLIDE);
$sdata1=$obj->getlist1(SLIDE);
     ?>    
     <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
  	<?php
         $a=0;                 
while($datas=$sdata->fetch_assoc()){
                                            ?>
    <li data-target="#demo" data-slide-to="<?php echo $$a; ?>" <?php if($a==0){ ?>class="active" <?php } ?>></li>
 <?php 
$a++;
} ?>
  </ul>
  <div class="carousel-inner">
  	  	<?php
        $a=0;                  
while($datas=$sdata1->fetch_assoc()){
                                            ?>
    <div class="carousel-item <?php if($a==0){ echo "active";} ?>">
      <img src="auth/slide/<?php echo $datas['name']; ?>" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3><?php echo $datas['img_title']; ?></h3>
        <p></p>
      </div>   
    </div>
<?php $a++; } ?>
   </div>

  </div>      

   
</div>


<!---Introduction-->
<div style="margin-top: 10px;"></div>
<div class="card border-primary" style="min-height:440px; ">
  <div class="card-header" style="background-color: #006600; color: #fff; font-size: 20px;">
   संक्षािप्त परिचय
  </div>
  <div class="card-body" style="font-size: 18px; font-style: italic; color: #000; text-align: justify;">
 
<?php 
$pdata=$obj->getInfoByType(50,PAGES);
$idata=$pdata->fetch_assoc();
?>
    <p class="card-text">
 <?php echo substr($idata['details'],0,2700); ?> <a href="pages1"> <b>Read More</b></a>
    </p>
    
  </div>
</div>

<!--End Int-->

<!-- tabe -->
 
            <div class="col-md-12 main">
          
                <ul id="tabsJustified" class="nav nav-tabs">
                    <li class="nav-item"><a href="" data-target="#notice" data-toggle="tab" class="nav-link small text-uppercase active"> <i class="fa fa-bell"></i> सूचना</a></li>
                    <li class="nav-item"><a href="" data-target="#news" data-toggle="tab" class="nav-link small text-uppercase "> <i class="fa fa-newspaper-o"></i> सामाचार</a></li>
                    <li class="nav-item"><a href="" data-target="#press" data-toggle="tab" class="nav-link small text-uppercase"> <i class="fa fa-bullhorn"></i> प्रेस विज्ञप्ती</a></li>
 					<li class="nav-item"><a href="" data-target="#link" data-toggle="tab" class="nav-link small text-uppercase"> <i class="fa fa-download"></i>डाउनलोड</a></li>


                </ul>
                <br>
                <div id="tabsJustifiedContent" class="tab-content">
                    <div id="notice" class="tab-pane fade active show">
                 <div class="list-group">
<?php
$pdata=$obj->getInfoByTypeLmt(61,PAGES,5);
while($data=$pdata->fetch_assoc()){
 ?>
 <a href="view<?php echo $data['id'] ?>-61" class="list-group-item d-inline-block"><?php echo $data['page_name']; ?></a> 
<?php
}
 ?>

   	 <a href="news61" class="list-group-item d-inline-block text-muted">
    	 	<span class="float-right vmore ">सबै हेर्नुहोस</span>
    	 </a>
    	</div>
                    </div>
        <div id="news" class="tab-pane fade ">
	        <div class="list-group">
	     <?php
$pdata=$obj->getInfoByTypeLmt(59,PAGES,5);
while($data=$pdata->fetch_assoc()){
 ?>

       <a href="view<?php echo $data['id'] ?>-59" class="list-group-item d-inline-block"><?php echo $data['page_name']; ?></a> 
<?php
}
 ?>
	    	 <a href="news59" class="list-group-item d-inline-block text-muted">
	    	 	<span class="float-right vmore ">सबै हेर्नुहोस</span>
	    	 </a>
	    	</div>
                    </div>
                    <div id="press" class="tab-pane fade">

                  <div class="list-group">
	       	     <?php
$pdata=$obj->getInfoByTypeLmt(52,PAGES,5);
while($data=$pdata->fetch_assoc()){
 ?>

       <a href="view<?php echo $data['id'] ?>-52" class="list-group-item d-inline-block"><?php echo $data['page_name']; ?></a> 
<?php
}
 ?>
	    	 <a href="news52" class="list-group-item d-inline-block text-muted">
	    	 	<span class="float-right vmore ">सबै हेर्नुहोस</span>
	    	 </a>
	    	</div>
                    </div>

                            <div id="link" class="tab-pane fade">

                  <div class="list-group">

                  		       	     <?php
$pdata=$obj->getInfoByTypeLmt(57,PAGES,5);
while($data=$pdata->fetch_assoc()){
 ?>

       <a href="view<?php echo $data['id'] ?>-52" class="list-group-item d-inline-block"><?php echo $data['page_name']; ?></a> 
<?php
}
 ?>
	      
	    	 <a href="news57" class="list-group-item d-inline-block text-muted">
	    	 	<span class="float-right vmore ">सबै हेर्नुहोस</span>
	    	 </a>
	    	</div>
                    </div>
                </div>
            </div>

<!--End tabe-->
</div>
<div class="col-md-3">

	<div class="card" style="width: 18rem;">
  <div class="card-body">
<?php
$pdata=$obj->getlistBytype(MEMBER,1);
while($data=$pdata->fetch_assoc()){
?>

  	<row>
  		<div class="col-md-5" style="float: left;">
         <img src="<?php echo $data['photo']; ?>" style="width: 200px; height: 90px;" class="mx-auto d-block" alt="...">
     </div>
     <div class="col-md-7" style="float: right;">
            <p>
         	<span style="color: #387cea; font-size: 15px;"><?php echo $data['name']; ?></span>
         	<br>
         	<span style="color: #000; font-size: 10px;"><?php echo $data['wada']; ?> </span>
         	<br>
         	<span style="color: #000; font-size: 10px;"><?php echo $data['phone']; ?></span>
         

         </p>
         </div>
</row>
<div style="clear: both;"></div>
<?php } ?>


  </div>
</div>

<h3 class="socm">
सामाजिक सज्जाल
</h3>
<div>
	
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
<!--FB-->
<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="270" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
<!--Twitter-->
<a class="twitter-timeline" href="https://twitter.com/TwitterDev" data-height="270" >Tweets by Twitter</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 

<h3 class="socm">
भिडियो ग्यालरी
 <span style="font-size: 12px; float: right;"><a href="#">+ See More</a></span>
</h3>

<!--Related Link-->
<iframe width="100%" height="200" src="https://www.youtube.com/embed/F1jzAod9xDQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


</div>




</div>
</div>
</div>

	<!-- WE NEED YOUR HELP -->

	</div>

	 
	<!-- HOW TO HELP US -->
	



	<!-- OUR GALLERY -->
	<div class="section" data-background="images/bg-gallery.png" style="background-image: url(&quot;images/bg-gallery.png&quot;);">
		
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<div class="row">
						<h2 class="section-heading right col-md-10">
							फाेटो ग्यालरी
						</h2>
						<h5 class="section-heading  col-md-2">
							<a href="#">सबै हेर्नुहोस</a>
						</h5>
					</div>
					</div>

					<div class="row popup-gallery gutter-5">
<?php $pdata=$obj->getlist1Lmt(GALLERY,6); 
while($data=$pdata->fetch_assoc()){
?>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="<?php echo $data['img_name']; ?>" title="Gallery #1">
									<img src="<?php echo $data['img_name']; ?>" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
								</div>
		<?php 
}
		?>			
						
					</div>
	

				</div>
			</div>

		</div>


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