<?php
include_once("classes/application_top.php");
$cid=$_GET['u'];
$pdata=$obj->getInfoByType($cid,PAGES);
 ?>
<!DOCTYPE html>
<html style="" class="" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $cat[$cid]; ?> || डिभिजन बन कार्यालय, बर्दिया</title>
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
	 <link href="auth/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="auth/css/dataTables/dataTables.responsive.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="css/style.css">
	
    <script src="js/modernizr.js"></script>



</head>

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
				<span class="title"><?php echo $cat[$cid]; ?></span>  <span class="loc"><i class="fa fa-home"></i> ><?php echo $cat[$cid]; ?> </span>
			</div>
</row>
			</div>
		<div class="clear"></div>	

	
		<div style="margin-top: 0px;"></div>
		<div class="row">
	<div class="col-md-12">




<!---Introduction-->


  <div class="card-body" style="font-size: 18px; font-style: italic; color: #000; text-align: justify;">
 

     <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                            	<td>id</td>
                                            	<th width="7%">क्र॰सं॰</th>
                                                <th>शिर्षक</th>                                               
                                                <th width="10%">मिति</th>                                                                      
                                                <th width="15%">हेर्नुहोस</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $a=1;
while($data=$pdata->fetch_assoc()){
                                            ?>
                                            <tr class="odd gradeX">
                                            	 <td><?php echo $data['id']; ?></td>
                                                 <td><?php echo $a; ?></td>

                                                <td><?php echo $data['page_name']; ?></td>
                                                
                                                  <td><?php echo $data['reg_date']; ?></td>
                                                  
                                                   
                                                 
                                                <td class="center" width="150px">
                                                    <a class="btn btn-success" href="view<?php echo $data['id']; ?>-<?php echo $cid; ?>"><i class="fa fa-search-plus" style="font-size: 23px;"></i> </a> 

                                               
                                               </td>

                                            </tr>
                                            
                                            <?php
                                            $a++;
                                        } ?>
                                          
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
</div>

<!--End Int-->

  


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
		
	
	    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>


	<!-- JS VENDOR -->
	
	<script src="js/bootstrap.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/jquery_002.js"></script>

	<!-- SENDMAIL -->
	<script src="js/validator.js"></script>
	<script src="js/form-scripts.js"></script>

	<script src="js/script.js"></script>
	  <script src="auth/js/jquery.min.js"></script>
 <script src="auth/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="auth/js/dataTables/dataTables.bootstrap.min.js"></script>

</body></html>

 <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true,
                        "aaSorting":[[0,"desc"]],
		       "columnDefs":[{ "visible": false, "targets": 0 }]
                });
            });
        </script>

        
