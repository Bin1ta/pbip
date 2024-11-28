<?php 
include("function.php");
date_default_timezone_set('Asia/Kathmandu');
$obj=new Functions();
session_start();
$today = date("Y-m-d"); 
$ach=date("F Y");
$time_stamp=date("Y-m-d H:i:s");
$st=array('null','भित्र','बाहिर');
$fy=array('2073/74','2074/75','2075/76','2076/77','2077/78','2078/79','2079/80','2080/81');
$dimg="http://{$_SERVER['HTTP_HOST']}/pages/img/default-avatar.jpg";
$cat=array('59'=>'समाचार','61'=>'सूचना','53'=>'तथ्याङ्गक','62'=>'प्रोएक्टिभ सूचना','56'=>'वार्षिक प्रगति विवरण','64'=>'नमुना फारम','57'=>'डाउनलोड');

?>