 <div class="col-lg-12">
                        <br><br>
                    </div>
<?php

if(!empty($_REQUEST['id'])){
	$id=$_REQUEST['id'];
	//$add=$_REQUEST['add'];
	$data=$obj->getDatainfo($id,WADA);
	if(isset($_POST['submit'])){
		$name=$_POST['title'];
		$profile=$_POST['text'];
		$data=$obj->upWada($name,$profile,$id);
  		
	
	
	}
}

?>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="ckeditor/ckeditor.js" accept-charset="UTF-8"></script>

<form method="post" action="#" enctype="multipart/form-data" accept-charset="UTF-8">


<div class="form-group">

<input class="form-control" type="text" value="<?php if(!empty($id)){echo $data['name']; }?>" name="title" id="title" required>
</div>

<div style="clear: both;"></div>

<div class="form-group">
<textarea name="text" id="text"><?php if(!empty($id)){echo $data['profile']; }?></textarea>
<script> CKEDITOR.replace( 'text' ,{ filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); </script>
</div>
 <button type="submit" class="btn btn-default" name="submit">Submit</button>
 </form>
