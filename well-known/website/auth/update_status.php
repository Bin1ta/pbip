<?php
include_once("../classes/application_top.php");
$id=$_POST['id'];
$s=$_POST['status'];
$tbl=$_POST['tbl'];
$data=$obj->upStatus($s,$id,$tbl);


?>