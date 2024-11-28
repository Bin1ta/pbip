<?php 
include("database.php");
class Functions extends DataBase{
	function __construct(){
		parent::__construct();
		}
	
	function exec($sql){
	$this->connection->query("set character_set_client='utf8'");
		$this->connection->query("set character_set_connection='utf8'");
		$this->connection->query("set character_set_results='utf8'");
		$this->connection->query("set character_set_server='utf8'");
		return $this->connection->query($sql);
		}
	
			//USER MANAGE
				function redirect($add){
					header('Location:'.$add);
					}
			function loginChk($user,$pass){
				$sql="select*from ".ADMIN." where username='$user' and password='$pass' limit 1";
				$result=$this->exec($sql);
				if($result && $result->num_rows==1){
					$data=$result->fetch_assoc();
				   return $data;
					
					} else
					{
					return "User / Password Wrong !!"; 	
					}
				
				}



				//Employee Login Check
					function loginEmpChk($user,$pass){
				$sql="select*from ".EMPLOYEE." where email='$user' and password='$pass' limit 1";
				$result=$this->exec($sql);
				if($result && $result->num_rows==1){
					$data=$result->fetch_assoc();
					$_SESSION['emp_name']=$data['emp_name'];
					$_SESSION['emp_id']=$data['id'];
				 	return 1;
					} else
					{
					return "User / Password Wrong !! Contact Your Administrator"; 	
					}
				
				}

				//Office Login
						function loginOfcChk($user,$pass){
				$sql="select*from ".WADA." where id='$user' and password='$pass' limit 1";
				$result=$this->exec($sql);
				if($result && $result->num_rows==1){
					$data=$result->fetch_assoc();
					$_SESSION['ofc_name']=$data['office_name'];
					$_SESSION['id']=$data['id'];
					$_SESSION['p_s']=$data['p_change'];
					if($data['p_change']==0){
						$this->redirect('chg_password.php');
					}
				 	return 1;
					} else
					{
					return "User / Password Wrong !! Contact Your Administrator"; 	
					}
				
				}


function Cupdate($id,$name,$content,$today,$a,$p,$cid,$t,$f_name,$f_url){
	if(!empty($f_name)){
			$sql="Update $t SET page_name='$name', details='$content', author='$a',file_name='$f_name',file_url='$f_url', last_update='$today' where id='$id'";
		}elseif(!empty($f_url)){
			$sql="Update $t SET page_name='$name', details='$content', author='$a',file_url='$f_url', last_update='$today' where id='$id'";
		}else{
		$sql="Update $t SET page_name='$name', details='$content', author='$a', last_update='$today' where id='$id'";	
		}
			$result=$this->exec($sql);
			if($result){
				$this->UpCount($t);
				$this->redirect('index.php?pg='.$p.'&cid='.$cid.'');
				}else{
					$this->error('Error Try Again');
					}
			
			}


			
			


			function UploadFile($i_name,$i_size,$i_type,$i_temp,$d){
			
		if($i_type=='image/jpeg' || $i_type=='image/png' || $i_type=='image/gif' || $i_type=='application/pdf'){

if($i_type<=8388608){
					$up=move_uploaded_file($i_temp,$d.'/'.$i_name);
					if($up){
						return 1;
						}
					}else{
						return "Image Size very Large !";
						}
					
			}else{
				return "Invalid Image Type";
					}
			
			
			}


					function UplFile($i_name,$i_size,$i_type,$i_temp,$d){
			
		if($i_type=='image/jpeg' || $i_type=='image/png' || $i_type=='image/gif' || $t_type='application/pdf' || $type='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $type='application/msword'){

if($i_type<=3145728){
					$up=move_uploaded_file($i_temp,$d.'/'.$i_name);
					if($up){
						return 1;
						}
					}else{
						return "File Size Large  !";
						}
					
			}else{
				return "Invalid File Type";
					}
			
			
			}


		function regDownload($fname,$link,$reg_date){
	$sql="insert into tbl_download (file_name,link,reg_date) values('$fname','$link','$reg_date')";
	$res=$this->exec($sql);
	if($res){
		$this->UpCount('tbl_download');
		$this->redirect('index.php?pg=download.php');
	}
}
			


					function delByid($id,$p,$t){
					$sql="Delete from $t where id='$id'";
					$result=$this->exec($sql);
					if($result){
					$this->redirect('index.php?pg='.$p.'');
					setcookie('smsg','Delete Successfully !!',time()+5);	
					}else{
						$this->error("Error ");
						$this->redirect('index.php?pg='.$p.'');
						}
					}

					function error($msg){
						?>
						<script> alert("ddf")</script>
						<?php
					}

		function getlist($tbl){
		$sql="select*from $tbl order by level ASC";
		$result=$this->exec($sql);
		return $result;
		}

function getlist1($tbl){
		$sql="select*from $tbl order by id DESC";
		$result=$this->exec($sql);
		return $result;
		}  
function getlistByAlb($tbl,$id){
		$sql="select*from $tbl where album='$id' order by id DESC";
		$result=$this->exec($sql);
		return $result;
		}  



function getlist1Lmt($tbl,$lmt){
		$sql="select*from $tbl order by id DESC limit $lmt";
		$result=$this->exec($sql);
		return $result;
		}  


		function getlist_level($tbl){
		$sql="select*from $tbl order by level ASC";
		$result=$this->exec($sql);
		return $result;
		}

			function getlistBytype($tbl,$type){
		$sql="select*from $tbl where m_type='$type' order by level ASC";
		$result=$this->exec($sql);
		return $result;
		
		}


			function getlNorOder($tbl){
		$sql="select*from $tbl order by id ASC";
		$result=$this->exec($sql);
		return $result;
		}

			function UpStage($tbl,$id){
		$sql="update $tbl set status='1' where id='$id'";
		$result=$this->exec($sql);
		return $result;
		
		}

		function UpCount($name){
			$sql1="select*from tbl_update where tbl_name='$name'";
			$fexe=$this->exec($sql1);
			$data=$fexe->fetch_assoc();
			$num=$data['u_count']+1;
		$sql="update tbl_update set u_count='$num' where tbl_name='$name'";
		$result=$this->exec($sql);
		return $result;
		
		}

function InfoUp($name,$add,$email,$phone,$website,$fb,$twitter,$summary,$id){
	$sql="update tbl_company set office_name='$name',office_address='$add',phone='$phone',email='$email',website='$website',fb_link='$fb',twitter_link='$twitter', summary='$summary' where id='$id'";
	$res=$this->exec($sql);
	if($res){
		return 1;
	}
}


		function getDatainfo($id,$tbl){
		$sql="select*from $tbl where id='$id'";
		$result=$this->exec($sql);
		return $result->fetch_assoc();
		}


		function getInfoByType($type,$tbl){
		$sql="select*from $tbl where type='$type' order by id DESC";
		$result=$this->exec($sql);
		return $result;
		
		}


			function getInfoByTypeLmt($type,$tbl,$lm){
		$sql="select*from $tbl where type='$type' order by id DESC limit $lm";
		$result=$this->exec($sql);
		return $result;
		
		}

			function regPost($post,$date){
		$sql="insert into tbl_post (post,reg_date) values('$post','$date')";
		$result=$this->exec($sql);
		$this->redirect('index.php?pg=emp_post.php');
		
		}

			function upPost($post,$id){
		$sql="update tbl_post set post='$post' where id='$id'";
		$result=$this->exec($sql);
		$this->redirect('index.php?pg=emp_post.php');
		
		}


		function regEmp($name,$post,$address,$phone,$email,$photo,$today,$level,$pass){
		$sql="insert into tbl_employee(emp_name,emp_post,address,phone,email,e_photo,reg_date,level,password) values('$name','$post','$address','$phone','$email','$photo','$today','$level','$pass')";
		$result=$this->exec($sql);
		if($result){
			$this->UpCount('tbl_employee');
			$this->redirect('index.php?pg=emp_list.php');
		}

		}


			function upEmp($name,$post,$address,$phone,$email,$photo,$level,$pass,$id){
		$sql="update tbl_employee set emp_name='$name',emp_post='$post',address='$address',phone='$phone',email='$email',e_photo='$photo',level='$level',password='$pass' where id='$id'";
		$result=$this->exec($sql);
		if($result){
			$this->UpCount('tbl_employee');
			$this->redirect('index.php?pg=emp_list.php');
		}

		}
		

		function delFile($dir,$in){
			$del=unlink(''.$dir.'/'.$in);
			return $del;
		}




			function regWada($wada,$date){
		$sql="insert into tbl_wada (name,reg_date) values('$wada','$date')";
		$result=$this->exec($sql);
		$this->UpCount('tbl_wada');
		$this->redirect('index.php?pg=member_post.php');
		
		}

			/*function upWada($wada,$profile,$id){
		$sql="update tbl_wada set name='$wada', profile='$profile' where id='$id'";
		$result=$this->exec($sql);
		$this->UpCount('tbl_wada');
		$this->redirect('index.php?pg=member_post.php');
		
		}*/
//`office_name`=[value-2],`contact`=[value-3],`office_head_name`=[value-4],`office_head_phone`=[value-5],`office_suchana_name`=[value-6],`office_suchana_phone`=[value-7],`email`=[value-8],`website`=[value-9],`level`=[value-10],`ofc_email`=[value-11],`gunaso_name`=[value-12],`gunaso_phone`=[value-13],`gunaso_email`=[value-14],`password`=[value-15],`reg_date`=[value-16]

		function upWada($office_head_name,$office_head_phone,$gunaso_name,$gunaso_phone,$gunaso_email,$office_suchana_name,$office_suchana_phone,$email,$contact,$ofc_email,$website,$fb_page,$id){
			$sql="update tbl_wada set office_head_name='$office_head_name',office_head_phone='$office_head_phone',gunaso_name='$gunaso_name',gunaso_phone='$gunaso_phone',gunaso_email='$gunaso_email',office_suchana_name='$office_suchana_name',office_suchana_phone='$office_suchana_phone', email='$email',contact='$contact',ofc_email='$ofc_email',website='$website',fb_page='$fb_page' where id='$id'";
			$result=$this->exec($sql);
			if($result){
				$this->redirect('status.php');
				setcookie('msg','Update Successfully',time()+3);
			}
		}
		
//INSERT INTO `tbl_member`(`id`, `name`, `post`, `wada`, `phone`, `email`, `photo`, `m_type`, `reg_date`

				function regMeb($name,$wada,$post,$phone,$email,$photo,$type,$today,$level){
		$sql="insert into tbl_member(name,post,wada,phone,email,photo,m_type,reg_date,level) values('$name','$post','$wada','$phone','$email','$photo','$type','$today','$level')";
		$result=$this->exec($sql);
		if($result){
			$this->UpCount('tbl_member');
			$this->redirect('index.php?pg=member_list.php&type='.$type.'');
		}

		}


			function upMeb($name,$post,$wada,$phone,$email,$photo,$id,$type,$level){
		$sql="update tbl_member set name='$name',post='$post',wada='$wada',phone='$phone',email='$email',photo='$photo',level='$level' where id='$id'";
		$result=$this->exec($sql);
		$this->UpCount('tbl_member');
		if($result){
			if($type==1){
			$this->redirect('index.php?pg=member_list.php&type=1');
		}elseif($type==2){
		$this->redirect('index.php?pg=member_list.php&type=2');	
		}
		}

		}



//`sewa`, `needs_document`, `process`, `res_person`, `duration`, `fee`, `level`, `reg_date`

			function citzenReg($sewa,$document,$process,$adikari,$duration,$fee,$today){
		$sql="insert into tbl_citzen_charter(sewa,needs_document,process,res_person,duration,fee,reg_date) values('$sewa','$document','$process','$adikari','$duration','$fee','$today')";
		$result=$this->exec($sql);
		if($result){
			$this->UpCount('tbl_citzen_charter');
			$this->redirect('index.php?pg=citzen_charter.php');
		}

		}


			function citzenUp($sewa,$document,$process,$adikari,$duration,$fee,$level,$id){
		$sql="update tbl_citzen_charter set sewa='$sewa',needs_document='$document',process='$process',res_person='$adikari',duration='$duration',fee='$fee',level='$level' where id='$id'";
		$result=$this->exec($sql);
		if($result){
			$this->UpCount('tbl_citzen_charter');
			$this->redirect('index.php?pg=citzen_charter.php');
		}

		}

		function regNiti($niti,$type,$date,$p,$fy){
		$sql="insert into tbl_pages(page_name,type,reg_date,action,fy) values('$niti','$type','$date','1','$fy')";
		$result=$this->exec($sql);
		$this->redirect('index.php?pg='.$p.'');
		
		}


			function regNirnaya($niti,$type,$date){
		$sql="insert into tbl_pages(page_name,type,reg_date,action) values('$niti','$type','$date','1')";
		$result=$this->exec($sql);
		$this->redirect('index.php?pg=niti.php');
		
		}

			function regNews($niti,$type,$date){
		$sql="insert into tbl_pages(page_name,type,reg_date,action) values('$niti','$type','$date','1')";
		$result=$this->exec($sql);
		$this->redirect('index.php?pg=news.php');
		
		}

				function regNotice($niti,$type,$date){
		$sql="insert into tbl_pages(page_name,type,reg_date,action) values('$niti','$type','$date','1')";
		$result=$this->exec($sql);
		$this->redirect('index.php?pg=notice.php');
		
		}
		


				function regAlb($name,$date){
		$sql="insert into tbl_album (name,reg_date) values('$name','$date')";
		$result=$this->exec($sql);
		$this->redirect('index.php?pg=album_reg.php');
		
		}

			function upAlb($name,$id){
		$sql="update tbl_album set name='$name' where id='$id'";
		$result=$this->exec($sql);
		$this->redirect('index.php?pg=album_reg.php');
		
		}

		function ReGallery($name,$alb){
			$sql="insert into tbl_gallery(img_name,album) values('$name','$alb')";
			$res=$this->exec($sql);
			if($res){
				$this->redirect('index.php?pg=reg_gallery.php');
			}
		}


			function ReSlide($name,$title){
			$sql="insert into tbl_slide(name,img_title) values('$name','$title')";
			$res=$this->exec($sql);
			if($res){
				$this->redirect('index.php?pg=reg_slide.php');
			}
		}


		function regFeed($name,$email,$phone,$content,$today){
			$sql="insert into tbl_feedback(name,phone,email,feedback,reg_date)values('$name','$phone','$email','$content','$today')";
			$res=$this->exec($sql);
			if($res){
				return 1;
			}
		}

		function gList($id){
			$sql="select*from tbl_gallery where album='$id'";
			return $this->exec($sql);
		}



				function upStatus($status,$id,$tbl){
		$sql="update $tbl set status='$status' where id='$id'";
		$result=$this->exec($sql);		
		}



					function logValid($user,$pass,$npass){
	$sql="select*from ".ADMIN." where username='$user' and password='$pass' limit 1";
				$result=$this->exec($sql);
				if($result && $result->num_rows==1){
					$sql1="update ".ADMIN." SET password='$npass' where username='$user'";
					$result1=$this->exec($sql1);
					if($result1){
						$this->redirect('logout.php');
						}

				}else{
					return "Wrong Password !!";
				}
			}



	function logValidOfc($user,$pass,$npass){
	$sql="select*from ".WADA." where id='$user' and password='$pass' limit 1";
				$result=$this->exec($sql);
				if($result && $result->num_rows==1){
					$sql1="update ".WADA." SET password='$npass',p_change='1' where id='$user'";
					$result1=$this->exec($sql1);
					if($result1){
						$this->redirect('logout.php');
						}

				}else{
					return "Wrong Password !!";
				}
			}





		function proReport($ofc_id,$title,$fy,$flink){
	//`id`, `ofc_code`, `title`, `fy`, `flink`
		$sql="insert into tbl_progress_report(ofc_code,title,fy,flink) values('$ofc_id','$title','$fy','$flink')";
		$result=$this->exec($sql);
		if($result){
			$this->UpCount('tbl_progress_report');
			
			return 1;
		}

		}

		function AllPro($id,$tbl){
		$sql="select*from tbl_progress_report where ofc_code='$id' order by reg_date DESC";
		 return $this->exec($sql);
		}
		

			function delByi1($id,$p,$t){
					$sql="Delete from $t where id='$id'";
					$result=$this->exec($sql);
					if($result){
					$this->redirect($p);
						
					}else{
						$this->error("Error ");
						$this->redirect($p);
						}
					}


					function getDatainfoByOfc($id,$tbl){
		$sql="select*from $tbl where ofc_code='$id'";
		return $this->exec($sql);
		
		}
		function DateDiff($sdate,$edate){
			$dts=new DateTime($sdate);
			$dte=new DateTime($edate);
			$dteDiff=$dts->diff($dte);
			return $dteDiff->format("%r%a");
		}
		/*
	*/
	}
?>