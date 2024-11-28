 <?php
 if(isset($_POST['submit'])){
    $i_name=$_FILES['photo']['name'];
    $i_size=$_FILES['photo']['size'];
    $i_type=$_FILES['photo']['type'];
    $tmp=$_FILES['photo']['tmp_name'];
    $alb=$_POST['album'];
      $file_ext = substr($i_name, strripos($i_name, '.'));
    $niname=md5($i_name.''.$today).$file_ext;   
    $up=$obj->UploadFile($niname,$i_size,$i_type,$tmp,'slide');
if($up==1){
  $res=$obj->ReSlide($niname,$alb);
}
else{
  echo $up;
}
}


$pdata=$obj->getlist1(SLIDE);

 ?>



                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             फाेटाे ग्यालरी
                       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">       </div>
 <div class="panel-body">
<form method="post" action="#" enctype="multipart/form-data">
<div class="form-group">
 <label class="col-sm-2 control-label" for="w4-sname">फाेटाे छान्नुहाेस <span class="required">*</span></label>
        <div class="col-sm-9">
             <div class="input-group">
                   
                           <input type="file" name="photo" class="form-control" required="required">(W 960Pix H 360Pix)
                    </div>
             </div> 


        </div>

        <div class="form-group">
 <label class="col-sm-2 control-label" for="w4-sname">शिर्षक <span class="required">*</span></label>
        <div class="col-sm-5">
             <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-book "></i>
                            </span>
                           <input type="text" class="form-control" name="album" required="required">
                               
                          
                    </div>
             </div> 
             <div class="col-lg-9">
  <button class="btn btn-success" style="margin-bottom: 10px;" type="submit" name="submit">'<?php if(!empty($_REQUEST['id'])){ echo "सुरक्षाित गर्नुहोस";}else{ echo 'नयाँ थप्नुहाेस' ;} ?></button>
</div>
</form>
                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr><th>क्र॰सं॰</th>                                               
                                                <th>फाेटाे</th>
                                                <th>शिर्ष</th>
                                                <th>व्यवस्थापन गर्नुहोस</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$a=1;                                
while($data=$pdata->fetch_assoc()){
                                            ?>
                                     <tr class="odd gradeX">
                                                 <td><?php echo $a; ?></td>

                                                <td><img src="slide/<?php echo $data['name']; ?>" width=100 height=100></td>
                                                <td><?php echo $data['img_title']; ?></td>
                                                  
                                                <td class="center">
                                                  
   
                                                      <a class="btn btn-danger" href="del.php?idslide=<?php echo $data['id']; ?>&img=<?php echo $data['name']; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i> Delete</a>
                                                
                                               </td>

                                            </tr>
                                        
                                            
                                            <?php
                                              $a++;
                                        } 
                                        ?>
                                          
</tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                             
                            </div>
                        </div>                                       
                                           
                                
                             
                            </div>
                        </div>
</div>


    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>

  <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>