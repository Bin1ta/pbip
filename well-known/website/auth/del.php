<?php
 include("../classes/application_top.php");
if(!empty($_REQUEST['fid'])){
$id=$_REQUEST['fid'];
$qry=$obj->delByid($id,'feedback.php',FEEDBACK);
if($qry){
	  header("location:index.php?pg=feedback.php");
}

}

if(!empty($_REQUEST['postid'])){
$id=$_REQUEST['postid'];
$qry=$obj->delByid($id,'emp_post.php',EMP_POST);
if($qry){
	  header("location:index.php?pg=emp_post.php");
}

}


if(!empty($_REQUEST['eid'])){
$id=$_REQUEST['eid'];
$pdata=$obj->getDatainfo($id,EMPLOYEE);
$data=$pdata['e_photo'];

$qry=$obj->delByid($id,'emp_list.php',EMPLOYEE);
if($qry){
	  header("location:index.php?pg=emp_list.php");
}
}

if(!empty($_REQUEST['memid'])){
	$id=$_REQUEST['memid'];
	$qry=$obj->delByid($id,'member_post.php',WADA);

}



if(!empty($_REQUEST['mid'])){
$id=$_REQUEST['mid'];
$type=$_REQUEST['type'];
$lnk='member_list.php&type='.$type.'';
$pdata=$obj->getDatainfo($id,MEMBER);
$data=$pdata['photo'];
unlink('photos/'.$data.'');
$qry=$obj->delByid($id,$lnk,MEMBER);

}

if(!empty($_REQUEST['memid'])){
	$id=$_REQUEST['memid'];
	$qry=$obj->delByid($id,'member_post.php',WADA);
	
}

if(!empty($_REQUEST['citzid'])){
	$id=$_REQUEST['citzid'];
	$qry=$obj->delByid($id,'citzen_charter.php',CITZ_CHART);
	
}

if(!empty($_REQUEST['nid'])){
	$id=$_REQUEST['nid'];
	$in=$_REQUEST['fn'];
	$pg=$_REQUEST['pg'];
	$fd=$obj->delFile('files',$in);
	$qry=$obj->delByid($id,$pg,PAGES);

	
}


if(!empty($_REQUEST['did'])){
$id=$_REQUEST['did'];
$lnk='download.php';
$pdata=$obj->getDatainfo($id,DOWNLOAD);
$data=$pdata['photo'];
unlink('files/'.$data.'');
$qry=$obj->delByid($id,$lnk,DOWNLOAD);

}

if(!empty($_REQUEST['gid'])){
$id=$_REQUEST['gid'];
$lnk='reg_gallery.php';
$img=$_REQUEST['img'];
unlink('gallery/'.$img.'');
$qry=$obj->delByid($id,$lnk,GALLERY);

}


if(!empty($_REQUEST['albtid'])){
	$id=$_REQUEST['albtid'];
	$qry=$obj->delByid($id,'album_reg.php',ALBUM);

}
if(!empty($_REQUEST['idslide'])){
$id=$_REQUEST['idslide'];
$lnk='reg_slide.php';
$img=$_REQUEST['img'];
unlink('slide/'.$img.'');
$qry=$obj->delByid($id,$lnk,SLIDE);

}
if(!empty($_REQUEST['noid'])){
	$id=$_REQUEST['noid'];
	$qry=$obj->delByid($id,'notice.php',PAGES);
	
}


if(!empty($_REQUEST['nidad'])){
$id=$_REQUEST['nidad'];
$lnk='pro_report.php';
$fn=$_REQUEST['fn'];
$fln=explode('/',$fn);
unlink('../public/ofc/upload/uploads/'.end($fln).'');
$qry=$obj->delByid($id,$lnk,PRO);

}
?>