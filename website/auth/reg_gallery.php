 <?php
 if(isset($_POST['submit'])){
    $i_name=$_FILES['photo']['name'];
    $i_size=$_FILES['photo']['size'];
    $i_type=$_FILES['photo']['type'];
    $tmp=$_FILES['photo']['tmp_name'];
    $alb=$_POST['album'];
    $fulldate=date("d-m-Y h:i:s");
      $file_ext = substr($i_name, strripos($i_name, '.'));
    $niname=md5($i_name.''.$fulldate).$file_ext; 
    if(!empty($_POST['link'])){
      $flink=$_POST['link'];
        $res=$obj->ReGallery($flink,$alb);
    }else{
      $flink="http://{$_SERVER['HTTP_HOST']}/auth/gallery/$niname";  
     $up=$obj->UploadFile($niname,$i_size,$i_type,$tmp,'gallery');
     if($up==1){
  $res=$obj->ReGallery($flink,$alb);
}
else{
  echo $up;
}
    }
   

}


$alb=$obj->getlist1(ALBUM);
$pdata=$obj->getlist1(GALLERY);

 ?>

 <style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #264fe2;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #424bf4;
}
.button a{color: #fff; text-decoration: none;font-weight: bold;}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
</style>

                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             फाेटाे ग्यालरी
                       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">       </div>
 <div class="panel-body">
<form method="post" action="#" enctype="multipart/form-data">

<div class="form-group">
 <label class="col-sm-2 control-label" for="w4-sname">फाेटाे छान्नुहाेस <span class="required">*</span></label>
        <div class="col-sm-9">
           <div class="col-md-12">
            <input type="checkbox" name="check" id="switch"> <b>Use Image URL</b></div>
            <input type="text" name="link" id="link" value="" class="form-control"  placeholder="Enter your Image Link">
             <div class="input-group">
                   
                           <input type="file" name="photo" id="file" class="form-control">
                    </div>
             </div> 


        </div>

        <div class="form-group">
 <label class="col-sm-2 control-label" for="w4-sname">फाेटाे एेलिवम छान्नुहाेस <span class="required">*</span></label>
        <div class="col-sm-5">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-book "></i>
                            </span>
                           <select class="form-control" name="album" required="required">
                               <option value="">--फाेटाे एेलिवम--</option>
<?php
while($data=$alb->fetch_assoc()){
?>

                               <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                               <?php
}
                               ?>
                           </select>
                    </div>
             </div> 
             <div class="col-lg-9">
  <button class="btn btn-success" style="margin-bottom: 10px;" type="submit" name="submit">'<?php if(!empty($_REQUEST['id'])){ echo "सुरक्षाित गर्नुहोस";}else{ echo 'नयाँ थप्नुहाेस' ;} ?></button>
</div>
</form>
<?php
                                
while($data=$pdata->fetch_assoc()){
                                            ?>
                                       <div class="row">
  <div class="column">
    <div class="card" align="center">
      <img src="<?php echo $data['img_name']; ?>"  class="center" style="width:100%; height:250px">
      <?php $imlnk=explode('/',$data['img_name']); ?>
   <p><a href="del.php?gid=<?php echo $data['id']; ?>&img=<?php echo end($imlnk); ?>">Delete</a></p>
    </div>
  </div>
                                        
                                            
                                            <?php
                                          
                                        } 
                                        ?>
                                          
                                            
                                           
                                
                             
                            </div>
                        </div>
</div>

<script type="text/javascript">
$(document).ready(function()
  {
    $("#link").hide();
       if(!$("#old").val()){
         //$("#file").attr('required','true');
           }
    $("#switch").change(function(){
      if(this.checked!=true){
        $("#link").hide();
        $("#file").show();
        if(!$("#old").val()){
         //$("#file").attr('required','true');
         //$("#link").attr('required','false');
        }
      }else{
         $("#link").show();
        $("#file").hide();
           if(!$("#old").val()){
         //$("#file").attr('required','false');
         // $("#link").attr('required','true');
        }
      }

    });




      });</script>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>

  <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>