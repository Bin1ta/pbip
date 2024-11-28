<?php
include_once("../../classes/application_top.php");
$id=$_REQUEST['id'];

$datae=$obj->getDatainfo($id,CITZ_CHART);

?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">सेवाकाे विवरण</h4>
</div>
<div class="modal-body">
<img src="">
<p style="font-size: 16px; font-weight: bold; line-height: 10px">
<h4>* सेवा शिर्षक :</h4>
<u><?php echo $datae['sewa']; ?></u>
<h4>*  अावश्यक पर्ने कागजात :</h4>
<?php echo $datae['needs_document']; ?>
<h4>* सेवा सुविधा प्राप्त गर्न अावश्यक पर्ने प्रक्रिया :</h4>
<?php echo $datae['process']; ?>
<h4>*  जिम्मेवार अधिकारी :</h4>
<?php echo $datae['res_person']; ?>
<h4>* लाग्ने समय :</h4>
<?php echo $datae['duration']; ?>
<h4>*  लाग्ने शुल्क :</h4>
<?php echo $datae['fee']; ?>
</p>

</div>