 <?php
 if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$i_name=$_FILES['files']['name'];
$tmp=$_FILES['files']['tmp_name'];
$i_size=$_FILES['files']['size'];
$i_type=$_FILES['files']['type'];
    $file_ext = substr($i_name, strripos($i_name, '.'));
    $niname=md5($fname.''.$today).$file_ext;
    $flink="http://{$_SERVER['HTTP_HOST']}/pages/files/$niname";
 $up=$obj->UplFile($niname,$i_size,$i_type,$tmp,'files');
    if($up){
       $data=$obj->regDownload($fname,$flink,$today);
       
    }else{
      ?>
     <script type="text/javascript"> alert("Error"); </script>
    <?php
  }

 }

 $pdata=$obj->getlist(DOWNLOAD);

 ?>

                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            डाउनलाेड व्यवस्थापन
                            </div>
 <div class="panel-body">
  
<form method="post" action="#" enctype="multipart/form-data">
  <div class="col-lg-5">
<input type="text" name="fname" placeholder="फाइलकाे शिर्षक" required="required" value="<?php if(!empty($_REQUEST['id'])){ echo $data1['name']; }?>" class="form-control">
</div>
<div class="col-lg-5">
<input type="file" name="files" class="form-control">
</div>
  <button class="btn btn-success" style="margin-bottom: 10px;" type="submit" name="submit">'<?php if(!empty($_REQUEST['id'])){ echo "सुरक्षाित गर्नुहोस";}else{ echo 'नयाँ थप्नुहाेस' ;} ?></button>
</form>

                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr><th>क्र॰सं॰</th>                                               
                                                <th>डाउनलाेड शिर्षक</th>
                                                <th>दर्ता मिति</th>
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

                                                <td><?php echo $data['file_name']; ?></td>
                                                <td><?php echo $data['reg_date']; ?></td>
                                                  
                                                <td class="center">
                                                 
   
                                                      <a class="btn btn-danger" href="del.php?did=<?php echo $data['id']; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i> Delete</a>
                                                
                                               </td>

                                            </tr>
                                            
                                            <?php
                                            $a++;
                                        } ?>
                                          
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                             
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