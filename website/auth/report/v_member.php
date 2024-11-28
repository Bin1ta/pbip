<?php
include_once("../../classes/application_top.php");
$id=$_REQUEST['id'];

$datae=$obj->getDatainfo($id,MEMBER);

?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">जनप्रतिनिधिकाे विवराण</h4>
</div>
<div class="modal-body">
<img src="">
<p style="font-size: 16px; font-weight: bold; line-height: 10px">
	<img src="<?php echo $datae['photo']; ?>" class="img-responsive" style="max-height: 150px; min-width: 150px">
	<table cellspacing="15">
		<tr>
			<td> नाम</td><td><?php echo $datae['name']; ?></td>
		</tr>
		<tr>
			<td> पद</td><td><?php echo $datae['post']; ?></td>
		</tr>
		<tr>
			<td>वडा</td><td><?php echo $datae['wada']; ?></td>
		</tr>
		<tr>
			<td>फाेन</td><td><?php echo $datae['phone']; ?></td>
		</tr>
		<tr>
			<td>इमेल</td><td><?php echo $datae['email']; ?></td>
		</tr>
		</table>
</p>

</div>