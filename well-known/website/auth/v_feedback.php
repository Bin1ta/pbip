<?php
include_once("../classes/application_top.php");
$id=$_REQUEST['id'];
$up=$obj->UpStage(FEEDBACK,$id);
$dataf=$obj->getDatainfo($id,FEEDBACK);

?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">View Feedback</h4>
</div>
<div class="modal-body">
<p style="font-size: 16px; font-weight: bold; line-height: 10px">
	<div>
	 व्यक्तिको नाम : <?php echo $dataf['name']; ?>
	</div>
	<div>
		सम्पर्क नम्बर : <?php echo $dataf['phone']; ?>
	</div>
	<div>
		सुझावको शिर्षक : <?php echo $dataf['email']; ?>
	</div>
	<div>
		सुझाव:<br>
		 <?php echo $dataf['feedback']; ?>
	</div>
</p>
</div>