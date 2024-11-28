<?php

if(isset($_POST['submit'])){
$u=$_SESSION['user'];
$password = strip_tags(md5($_POST['password']));
$np=strip_tags(md5($_POST['npass']));
$res=$obj->logValid($u,$password,$np);
}

?>
<section role="main" class="content-body">
<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />


		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

<header class="page-header">
					
				
					</header>			
					
	<section class="panel panel-primary">
		<header class="panel-heading">
						
	<h2 class="panel-title">Change Password</h2>
			</header>
		<div class="panel-body">
				<row class="col-md-8">
<form method="post" action="#" id="reg" enctype="multipart/form-data" >

					<div class="panel-body col-md-12" id="details1">
					
<div class="msg" style="font-weight: bold; padding-left: 20px; color: red;"><?php if(!empty($res)){ echo $res;} ?></div>

	
										
				<div class="form-group">
				<label class="col-sm-4 control-label" for="w4-address">Current Password <span class="required">*</span></label>
				<div class="col-sm-8">
                 <div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-book"></i>
				</span>
				<input type="password" class="form-control" name="password" id="w4-address" title="Enter Current Password" required placeholder="Enter Current Password"  >
														</div>
                                                        </div>
													</div>
                                                    
                                              
                                                    
                                                
                         <div class="form-group">
							<label class="col-sm-4 control-label" for="w4-email">New Password</label>
							<div class="col-sm-8">
                           	<div class="input-group">
						<span class="input-group-addon">
						<i class="fa fa-lock"></i>
						</span>
					<input type="password" name="npass" class="form-control" placeholder="Enter New Password" value="" id="txtNewPassword" required="required" />
												</div>
														</div>
                                                        
													</div>

					<div class="form-group">
					<label class="col-sm-4 control-label" for="w4-email">Re-Password</label>
					<div class="col-sm-8">
                         <div class="input-group">
						<span class="input-group-addon">
					<i class="fa fa-lock"></i>
						</span>
					<input type="password" name="cpass" class="form-control" placeholder="Re-Password" value="" id="txtConfirmPassword" />
												</div>
														</div>
                                                        
													</div>
                                                    

  <div class="col-sm-3"></div><div class="col-sm-9 registrationFormAlert" id="divCheckPasswordMatch">
</div>

<script type="text/javascript">
$(function() {
    $("#txtConfirmPassword").keyup(function() {
        var password = $("#txtNewPassword").val();
       /* $("#divCheckPasswordMatch").html(password == $(this).val()
            ? "Passwords match."
            : "Passwords do not match!"
        );*/
        if(password!=$(this).val()){
        	$("#divCheckPasswordMatch").html("Passwords Do not Match");
        	$("#sc").prop('disabled',true);
        }else{
        	$("#divCheckPasswordMatch").html("Passwords Match");
        	$("#sc").prop('disabled',false);
        }
    });

        $("#txtNewPassword").keyup(function() {
        var password = $("#txtConfirmPassword").val();
       /* $("#divCheckPasswordMatch").html(password == $(this).val()
            ? "Passwords match."
            : "Passwords do not match!"
        );*/
        if(password!=$(this).val()){
        	$("#divCheckPasswordMatch").html("Passwords Do not Match");
        	$("#sc").prop('disabled',true);
        }else{
        	$("#divCheckPasswordMatch").html("Passwords Match");
        	$("#sc").prop('disabled',false);
        }
    });
});
</script>



				</row>	
			</div>			
	
<row class="col-md-12" id="fi1">
		<button class="btn btn-primary" type="submit" name="submit" id="sc">Save</button>
</row>
</form>
			
</section>

<!-- Vendor -->
<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>

		<!-- Specific Page Vendor -->
    <script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
<!--Education-->


	<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
	<script src="assets/javascripts/forms/examples.wizard.js"></script>