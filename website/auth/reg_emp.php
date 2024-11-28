 <?php
 if(!empty($_REQUEST['eid'])){
$id=$_REQUEST['eid'];
$pdata=$obj->getDatainfo($id,EMPLOYEE);
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $post=$_POST['post'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
     $email=$_POST['email'];


     $passn=$_POST['pass'];
     if($passn==$pdata['password'] && !empty($pdata['password']) ){
        $pass=$_POST['pass'];
    }else{
        $pass=md5($_POST['pass']);
    }

     $level=$_POST['level'];
     $i_name=$_FILES['photo']['name'];
    $i_size=$_FILES['photo']['size'];
    $i_type=$_FILES['photo']['type'];
    $tmp=$_FILES['photo']['tmp_name'];
    $fulldate=date("d-m-Y h:i:s");
    $file_ext = substr($i_name, strripos($i_name, '.'));
    $niname=md5($name.''.$fulldate).$file_ext;
    if(!empty($i_name)){
    $flink="http://{$_SERVER['HTTP_HOST']}/auth/photos/$niname";
    }else{
        $flink=$dimg;
        if(empty($_POST['oldph'])){
        $i_name='ok';
        }
    }
    if(!empty($_REQUEST['eid'])){
    $oph=$_POST['oldph'];
          if(empty($i_name)){
         $res=$obj->upEmp($name,$post,$address,$phone,$email,$oph,$level,$pass,$id);
     }else{
    $up=$obj->UploadFile($niname,$i_size,$i_type,$tmp,'photos');
if($up){
  $res=$obj->upEmp($name,$post,$address,$phone,$email,$flink,$level,$pass,$id);
}
}

    }else{
    //Start Insert 
    if(empty($i_name)){
         $res=$obj->regEmp($name,$post,$address,$phone,$email,'',$today,$level,$pass);
     }else{
    $up=$obj->UploadFile($niname,$i_size,$i_type,$tmp,'photos');
if($up){
  $res=$obj->regEmp($name,$post,$address,$phone,$email,$flink,$today,$level,$pass);
}
}
//End Insert
}
}

$res=$obj->getlist(EMP_POST);


 ?>


    
                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            नयाँ कर्मचारी दर्ता फारम
                           </div>

                          
 <div class="panel-body">
    <form action="#" method="post" enctype="multipart/form-data">

        <row class="col-sm-9">
        <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-sname">कर्मचारीकाे नाम<span class="required">*</span></label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                            </span>
                            <input type="text" class="form-control" name="name" id="w4-sname" title="Enter Short Name" required placeholder="कर्मचारीकाे नाम" value="<?php if(!empty($_REQUEST['eid'])){echo $pdata['emp_name'];} ?>" >
                    </div>
             </div> 


        </div>

        <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-sname">कर्मचारीकाे पद<span class="required">*</span></label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-pagelines "></i>
                            </span>
                           <select class="form-control" name="post">
                               <option value="">--पद छान्नुहाेस‍--</option>
<?php
while($data=$res->fetch_assoc()){
?>

                               <option value="<?php echo $data['post']; ?>" <?php if(!empty($_REQUEST['eid']) && $data['post']==$pdata['emp_post']){echo "selected"; }?>><?php echo $data['post']; ?></option>
                               <?php
}
                               ?>
                           </select>
                    </div>
             </div> 


     



       <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-sname">कर्मचारीकाे ठेगाना<span class="required">*</span></label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-book"></i>
                            </span>
                            <input type="text" class="form-control" name="address" id="w4-sname" title="Full Name" required placeholder="कर्मचारीकाे ठेगाना" value="<?php if(!empty($_REQUEST['eid'])){echo $pdata['address'];} ?>" >
                    </div>
             </div> 


        </div>


               <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-sname">कर्मचारीकाे फाेन<span class="required">*</span></label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                            </span>
                              <input type="text" class="form-control" name="phone" id="w4-phone" title="Enter Phone Number" required placeholder="e.g. 98XXXXXXXX" pattern="[7-9]{1}[0-9]{9}" placeholder="98XXXXXXXX"  value="<?php if(!empty($_REQUEST['eid'])){echo $pdata['phone'];} ?>" >
                    </div>
             </div> 


        </div>




                      <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-email">कर्मचारीकाे इमेल</label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope "></i>
                            </span>
                            <input type="email" class="form-control" name="email" id="w4-email" title="Enter Your Email"  placeholder="e.g. username@domain.com"  value="<?php if(!empty($_REQUEST['eid'])){echo $pdata['email'];} ?>" >
                    </div>
             </div> 


        </div>


                         <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-email">Password</label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-key "></i>
                            </span>
                            <input type="password" class="form-control" name="pass" id="w4-pass" title="Password"  placeholder="Password"  value="<?php if(!empty($_REQUEST['eid'])){echo $pdata['password'];} ?>" >
                    </div>
             </div> 


        </div>


                 <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-email">देखाउने क्र॰सं॰</label>
        <div class="col-sm-2">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-count "></i>
                            </span>
                            <input type="number" class="form-control" name="level" id="w4-email" title="Enter Your Email"   value="<?php if(!empty($_REQUEST['eid'])){echo $pdata['level'];} ?>"  required >
                    </div>
             </div> 


        </div>

  
    </div>

</row>
<row class="col-sm-3">
    
<img src="<?php if(!empty($_REQUEST['eid']) && !empty($pdata['e_photo'])){echo $pdata['e_photo'];}else{
    echo 'img/default-avatar.jpg';
} ?>" class="img-responsive"><br>
<div class="form-group">
  
    <div class="col-md-12">

    <input name="photo" type="file" class="form-control" id="photo">
     <input name="oldph" type="hidden" class="form-control"  value="<?php echo $pdata['e_photo']; ?> ">
    
    </div>

</row>
</div>
</row>
<div style="clear: both;"></div>
 <div class="form-group">                      
<input type="submit" name="submit" class="btn btn-success" value="Save"> <input type="Reset" name="Reset" class="btn btn-danger" value="Reset">

        </div> 
                                            
    </form>

                                <!-- /.table-responsive -->
     
                            </div>
                        </div>
</div>

