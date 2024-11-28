 <div class="col-lg-12">
                        <br><br>
                    </div>
<?php

if(!empty($_REQUEST['id'])){
	$id=$_REQUEST['id'];
	//$add=$_REQUEST['add'];
	$data=$obj->getDatainfo($id,PAGES);
	if(isset($_POST['submit'])){
		$name=$_POST['title'];
		$content=$_POST['text'];
		$a=$_SESSION['username'];
		$p=$_REQUEST['p'];
		$cid=$_REQUEST['cid'];
    $file_link=$_POST['link'];
	// Data
		//upload
		   $i_name=$_FILES['file']['name'];
    $i_size=$_FILES['file']['size'];
    $i_type=$_FILES['file']['type'];
    $tmp=$_FILES['file']['tmp_name'];
$fulldate=date("d-m-Y h:i:s");
        $file_ext = substr($i_name, strripos($i_name, '.'));
    $niname=md5($name.''.$fulldate).$file_ext;
    $flink="http://{$_SERVER['HTTP_HOST']}/auth/files/$niname";
    if(!empty($_REQUEST['id'])){
    $oph=$_POST['oldph'];
          if(empty($i_name) && empty($file_link)){
        $result=$obj->Cupdate($id,$name,$content,$today,$a,$p,$cid,PAGES,'','');
     }elseif(!empty($file_link)){
      $fname=(explode('/', $file_link));
     $result=$obj->Cupdate($id,$name,$content,$today,$a,$p,$cid,PAGES,end($fname),$file_link);
     }else{
    $up=$obj->UploadFile($niname,$i_size,$i_type,$tmp,'files');
if($up==1){
  $result=$obj->Cupdate($id,$name,$content,$today,$a,$p,$cid,PAGES,$niname,$flink);
}else{
  ?>
  <script type="text/javascript">
  alert(<?php echo $up; ?>);
  </script>
  <?php
}
}

    }




		
	
		}
	}

?>


 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="ckeditor/ckeditor.js" accept-charset="UTF-8"></script>

<form method="post" action="#" enctype="multipart/form-data" accept-charset="UTF-8" id="form_edit">


<div class="form-group">
<?php 
if($data['type']==48){
    ?>
    <textarea name="title" id="title" required" class="form-control">
        <?php if(!empty($id)){echo $data['page_name']; }?>
    </textarea>
    <?php
}else{
?>
<input class="form-control" <?php if($data['action']==0 && $data['type']!=48){echo "readonly"; }?> type="text" value="<?php if(!empty($id)){echo $data['page_name']; }?>" name="title" id="title" required>


</div>

<div class="col-md-12"><input type="checkbox" name="check" id="switch"> <b>Use File URL</b></div>
<?php

if($data['action']!=0){ 
     ?>
<div class="col-md-10 form-group">
<input type="text" name="link" id="link" value="" class="form-control" placeholder="Enter your File Link">
<input class="form-control"  type="file" name="file" id="file" >
</div>
<?php if(!empty($data['file_url'])){?>

<div class="col-md-2"><a target="_blank" href="<?php echo $data['file_url']; ?>">View File</a></div>
<?php

}
?>
<input type="hidden" name="oldph" id="old" value="<?php echo $data['file_url']; ?>">
<?php } ?>
<div style="clear: both;"></div>

<div class="form-group">
<textarea name="text" id="text"><?php if(!empty($id) && !empty($data['details'])){echo $data['details']; }else{ include('default_content.php'); }?></textarea>
<script> CKEDITOR.replace( 'text' ,{ filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); </script>
</div>
<?php
}
?>
<br>
 <button type="submit" class="btn btn-default" name="submit">Submit</button>
 </form>
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