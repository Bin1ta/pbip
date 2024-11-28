<?php
include_once("../classes/application_top.php");
$id=$_REQUEST['id'];

$datae=$obj->getDatainfo($id,EMPLOYEE);

?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">कर्मचारी विवराण</h4>
</div>
<div class="modal-body">
<img src="">
<p style="font-size: 16px; font-weight: bold; line-height: 10px">
	<img src="<?php echo $datae['e_photo']; ?>" class="img-responsive" style="max-height: 150px; min-width: 150px">
	<table cellspacing="15">
		<tr>
			<td>कर्मचारीकाे नाम</td><td>:- <?php echo $datae['emp_name']; ?></td>
		</tr>
		<tr>
			<td>कर्मचारीकाे पद</td><td>:- <?php echo $datae['emp_post']; ?></td>
		</tr>
		<tr>
			<td>कर्मचारीकाे ठेगाना</td><td> :-<?php echo $datae['address']; ?></td>
		</tr>
		<tr>
			<td>कर्मचारीकाे फाेन</td><td> :-<?php echo $datae['phone']; ?></td>
		</tr>
		<tr>
			<td>कर्मचारीकाे इमेल</td><td> :-<?php echo $datae['email']; ?></td>
		</tr>
		</table>
</p>

</div>