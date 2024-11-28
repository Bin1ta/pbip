  <?php 
$cminfo=$obj->getDatainfo(1,ORG);                 
    ?>
    <div class="header header-1">
    	<!-- TOPBAR -->
    	<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-6">
						<?php 
$ndata=$obj->getInfoByType(48,PAGES);
$ndata=$ndata->fetch_assoc();
?>

						<p><em>नारा : <?php echo $ndata['page_name']; ?> </em></p>
					</div>
					<div class="col-sm-5 col-md-6">
						<div class="sosmed-icon pull-right">
							<a href="<?php echo $cminfo['fb_link']; ?>" target="_blank"><i class="fa fa-facebook"></i></a> 
							<a href="<?php echo $cminfo['twitter_link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
							<a href="#"><i class="fa fa-pinterest"></i></a> 
						</div>
					</div>    
				</div>
			</div>
		</div>

    	<!-- MIDDLE BAR -->
		<div class="middlebar ">
		
			<div class="container">
			
				<div class="contact-info">
					<!-- INFO 1 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="body-content">
							<div class="heading">Phone :</div>
							+९७७-०८४-४२०१५६
						</div>
					</div>
					<!-- INFO 2 --> 
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-envelope-o"></div>
						</div>
						<div class="body-content">
							<div class="heading">Mail :</div>
							baddfo@dof.gov.np
						</div>
					</div>
					<!-- INFO 3 -->
					<div class="box-icon-1">
					
						<div class="body-content">
							<img src="img/flag.gif" style="height: 90px;">
					</div>
					<!-- INFO 3 -->
					  
					
				</div> 
			</div>
		</div>
</div> 
<div style="clear:both;"></div>       
		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav class="navbar navbar-expand-lg">
			    
			        <a class="navbar-brand" href="index.php">
			<img src="img/banner_logo.png" style="height:90px;" >
 
 					</a>
				
				



			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label=" Toggle navigation">
			            <span class="navbar-toggler-icon"></span>  
			        </button> 
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav">
			            

			                   <li class="nav-item">
			                    <a class="nav-link" href="home">गृह पृष्ठ</a>
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						         हाम्रो बारेमा
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="pages1">परिचय</a>
	          						<a class="dropdown-item" href="employee">कर्मचारी</a>
	          						<a class="dropdown-item" href="citzen_charter">नागरिक वडापत्र</a>
							    </div>
			                </li>

			                 <li class="nav-item">
			                    <a class="nav-link" href="news61">सूचना</a>
			                </li>

			                 <li class="nav-item">
			                    <a class="nav-link" href="news59">समाचार</a>
			                </li>
			                 <li class="nav-item">
			                    <a class="nav-link" href="gallery_view">ग्यालरी</a>
			                </li>
			                  <li class="nav-item">
			                    <a class="nav-link" href="news53"> तथ्याङ्गक</a>
			                </li>

			                 <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						         गतिविधि
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="news62">प्रोएक्टिभ सूचना </a>
	          						<a class="dropdown-item" href="news56">प्रगति प्रतिवेदन</a>
	          						
							    </div>
			                </li>
			               
			                 <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						         स्रोतहरू
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="news64">नमुना फारम</a>
	          						<a class="dropdown-item" href="news57">डाउनलोड</a>
	          						
							    </div>
			                </li>

		             
			                <li class="nav-item">
			                    <a class="nav-link" href="contact_us"> सम्पर्क </a>
			                </li>
			            </ul>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>
  