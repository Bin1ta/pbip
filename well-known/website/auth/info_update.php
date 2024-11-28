<?php

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$add=$_POST['add'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$website=$_POST['website'];
	$fb=$_POST['fb'];
	$twitter=$_POST['twitter'];
	$summary=$_POST['summary'];

		$res=$obj->InfoUp($name,$add,$email,$phone,$website,$fb,$twitter,$summary,'1');
		if($res==1){
			setcookie('notice','Update Successfully',time()+5);
			header("location:index.php?pg=info_update.php");
		}
	}


	$pdata=$obj->getDatainfo(1,ORG);
?>
<br><br>
<section class="panel panel-default">
		<header class="panel-heading">

						
	<h2 class="panel-title">कार्यालयको विवरण</h2>
			</header>
		<div class="panel-body">
				<row class="col-md-8">
<form method="post" action="#" id="reg" enctype="multipart/form-data" >

					<div class="panel-body col-md-12" id="details1">
					
	<?php if(!empty($_COOKIE['notice'])){ ?>
                    <div class="alert alert-form alert-success text-xs-center">
                    	 Information Update Successfully !!
                    </div><?php } ?>

	<div class="form-group">
	<label class="col-sm-12 control-label" for="w4-name">कार्यालयको नाम<span class="required">*</span></label>
	<div class="col-sm-12">
      <div class="input-group">
		<span class="input-group-addon">
			<i class="fa fa-user"></i>
			</span>
			<input type="text" class="form-control" name="name" id="w4-name" title="Plase enter a name." placeholder="eg.: xyz " required value="<?php echo $pdata['office_name'];?>">
					</div>
                    </div>
					</div>
										
				<div class="form-group">
				<label class="col-sm-12 control-label" for="w4-address">कार्यालयको ठेगाना <span class="required">*</span></label>
				<div class="col-sm-12">
                 <div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-book"></i>
				</span>
				<input type="text" class="form-control" name="add" id="w4-address" title="Enter  Address" required placeholder="Office Address" value="<?php echo $pdata['office_address']; ?>" >
														</div>
                                                        </div>
													</div>
                                                    
                        
                  	<div class="form-group">
				<label class="col-sm-12 control-label" for="w4-address">फोन नम्बर <span class="required">*</span></label>
				<div class="col-sm-12">
                 <div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-phone"></i>
				</span>
				<input type="text" class="form-control" name="phone" id="w4-phone" title="Company Phone" required placeholder="Company Phone" value="<?php echo $pdata['phone']; ?>" >
														</div>
                                                        </div>
													</div>                        
                                                 
                                                    
                        <div class="form-group">
					<label class="col-sm-12 control-label" for="w4-email">इमेल</label>
					<div class="col-sm-12">
                     <div class="input-group">
					<span class="input-group-addon">
					<i class="fa fa-envelope"></i>
					</span>
					<input id="email" type="text" name="email" class="form-control" placeholder="eg.: email@email.com" value="<?php echo $pdata['email']; ?>" required />
												</div>
														</div>
                                                        
													</div>
                                                    
                              	<div class="form-group">
				<label class="col-sm-12 control-label" for="w4-website">वेबसाइट<span class="required">*</span></label>
				<div class="col-sm-12">
                 <div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-file"></i>
				</span>
				<input type="text" class="form-control" name="website" id="w4-website" title="website" placeholder="www.xyz.com" value="<?php echo $pdata['website']; ?>" >
														</div>
                                                        </div>
													</div>

				 	<div class="form-group">
				<label class="col-sm-12 control-label" for="w4-website">Facebook Page<span class="required">*</span></label>
				<div class="col-sm-12">
                 <div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-facebook"></i>
				</span>
				<input type="text" class="form-control" name="fb" id="w4-website" title="fb" placeholder="https://www.facebook.com/facebook" value="<?php echo $pdata['fb_link']; ?>" >
														</div>
                                                        </div>
													</div> 


				 	<div class="form-group">
				<label class="col-sm-12 control-label" for="w4-website">Twitter Link <span class="required">*</span></label>
				<div class="col-sm-12">
                 <div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-twitter"></i>
				</span>
				<input type="text" class="form-control" name="twitter" id="w4-website" title="website" placeholder="https://twittwer.com/username" value="<?php echo $pdata['twitter_link']; ?>" >
														</div>
                                                        </div>
													</div> 


                                                 
                                                    
                        <div class="form-group">
					<label class="col-sm-12 control-label" for="w4-pan">संक्षिप्त परिचय</label>
					<div class="col-sm-12">
                     <div class="input-group">
					
				<textarea  style="width: 580px;" rows="4" name="summary"><?php echo $pdata['summary']; ?></textarea>
												</div>
														</div>
                                                        
													</div>                    
                        


				</row>	
			</div>			
	
<row class="col-md-12" id="fi1">
		<button class="btn btn-primary" type="submit" name="submit" id="sc">Save</button>
</row>
</form>
			
</section>