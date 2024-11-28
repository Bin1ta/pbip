 <?php
 if(!empty($_REQUEST['mid'])){
$id=$_REQUEST['mid'];
$pdata=$obj->getDatainfo($id,MEMBER);

}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $post=$_POST['post'];
    $level=$_POST['level'];
    $name=(explode('|', $_POST['name']));
    $emp=$obj->getDatainfo($name[1],EMPLOYEE);
        //upMeb($name,$post,$wada,$phone,$email,$photo,$id,$type,$level)
if(!empty($id)){
         $res=$obj->upMeb($emp['emp_name'],$emp['emp_post'],$post,$emp['phone'],$emp['email'],$emp['e_photo'],$id,'1',$level);
     }else{
        //regMeb($name,$wada,$post,$phone,$email,$photo,$type,$today,$level){
        $res=$obj->regMeb($emp['emp_name'],$emp['emp_post'],$post,$emp['phone'],$emp['email'],$emp['e_photo'],'1',$today,$level);
     }

 }   

$res=$obj->getlist(EMPLOYEE);
$res1=$obj->getlist(EMP_POST);

 ?>


                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            नयाँ मुख्य अधिकारी दर्ता फारम
                           </div>

                          
 <div class="panel-body">
    <form action="#" method="post" enctype="multipart/form-data">

        <row class="col-sm-9">
        <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-sname">कर्मचारीकाे पद<span class="required">*</span></label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-pagelines "></i>
                            </span>
                           <select class="form-control" name="post" required>
                               <option value="">--कर्मचारीकाे पद--</option>
<?php
while($data1=$res1->fetch_assoc()){
?>

                               <option value="<?php echo $data1['post']; ?>" <?php if(!empty($id)&& $data1['post']==$pdata['post']){ echo "Selected";} ?> ><?php echo $data1['post']; ?></option>
                               <?php
}
                               ?>
                           </select>
                    </div>
             </div> 


        </div>

        <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-sname">कर्मचारीकाे नाम<span class="required">*</span></label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-pagelines "></i>
                            </span>
                           <select class="form-control" name="name" required>
                               <option value="">--कर्मचारी छान्नुहाेस‍--</option>
<?php
while($data=$res->fetch_assoc()){
?>

                               <option value="<?php echo $data['emp_name']; ?>|<?php echo $data['id']; ?>" <?php if(!empty($id) && $data['emp_name']==$pdata['name']){ echo "Selected";} ?> ><?php echo $data['emp_name']; ?></option>
                               <?php
}
                               ?>
                           </select>
                    </div>
             </div> 


     



                        <div class="form-group">
 <label class="col-sm-3 control-label" for="w4-email">देखाउने क्र॰सं॰</label>
        <div class="col-sm-9">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-count "></i>
                            </span>
                            <input type="number" class="form-control" name="level" id="w4-email" title="Level"   value="<?php if(!empty($_REQUEST['mid'])){echo $pdata['level'];} ?>"  required >
                    </div>
             </div> 


        </div>


  
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

