<?php
include_once("../classes/application_top.php");
$id=$_REQUEST['id'];
$type=$_REQUEST['type'];
$tbl="tbl_member";
$datae=$obj->getDatainfo($id,$tbl);
?>

<script type="text/javascript">
	$(document).ready(function(){
$("form#myform").submit(function(event){
	event.preventDefault();
	var status=$("#status").val();
	var id=('<?php echo $id; ?>');
	var tbl=('<?php echo $tbl; ?>');
$.ajax({
	type:"POST",
	url:"update_status.php",
	data:{status:status,id:id,tbl:tbl},
	success:function(data){

	/*new PNotify({
				title: 'Congratulations',
				text: 'Corse Register Success',
				type: 'custom',
				addclass: 'notification-success',
				icon: 'fa fa-check'
			});	*/
		
			
			
		window.location="index.php?pg=member_list.php&type=<?php echo $type; ?>";
	}
});
});
	

});

</script>


<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">कर्मचारीकाे स्थिति</h4>
</div>
<div class="modal-body">
  <div class="status">
  	<form method="POST" action="#" id="myform">
  		<!--<input type="text" name="name" id="name">
    	<input type="radio" name="status" <?php if($datae['status']==1){ echo "checked"; } ?> value="1" style="width:25px; height: 15px; background-color: #63dd65;" id="status"> भित्र 
    	<input type="radio" name="status" value="2" <?php if($datae['status']==2){ echo "checked"; } ?> style="width:25px; height: 15px; background-color: #63dd65;" id="status"> व्यस्त
    	<input type="radio" name="status" value="3" <?php if($datae['status']==3){ echo "checked"; } ?> style="width:25px; height: 15px; background-color: #63dd65;" id="status"> बाहिर-->
    	<select name="status" class="form-control" id="status" style="font-weight: bold;">
    		<option value="1">भित्र </option>
    		<option value="2">व्यस्त </option>
    		<option value="3">बाहिर </option>
    	</select>
<br>
	<input type="submit" name="submit" value="Save & Change" class="btn btn-primary">
    </div>
  
</form>
</div>