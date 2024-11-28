 <?php
 if(isset($_POST['submit'])){
$post=$_POST['post'];
if(!empty($_REQUEST['id'])){
   $id=$_REQUEST['id'];
$data=$obj->upPost($post,$id);
}else{
$data=$obj->regPost($post,$today);
}

 }
 if(!empty($_REQUEST['id'])){
  $id=$_REQUEST['id'];
$data1=$obj->getDatainfo($id,EMP_POST);

 }
$pdata=$obj->getlist(EMP_POST);

 ?>

                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            कर्मचारी पद
                       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">       </div>
 <div class="panel-body">
<form method="post" action="#">
  <div class="col-lg-5">
<input type="text" name="post" placeholder="कर्मचारी पद" required="required" value="<?php if(!empty($_REQUEST['id'])){ echo $data1['post']; }?>" class="form-control" accept-charset="UTF-8">
</div>
  <button class="btn btn-success" style="margin-bottom: 10px;" type="submit" name="submit">'<?php if(!empty($_REQUEST['id'])){ echo "सुरक्षाित गर्नुहोस";}else{ echo 'नयाँ थप्नुहाेस' ;} ?></button>
</form>

                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr><th>क्र॰सं॰</th>                                               
                                                <th>पद</th>
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

                                                <td><?php echo $data['post']; ?></td>
                                                <td><?php echo $data['reg_date']; ?></td>
                                                  
                                                <td class="center">
                                                    <a class="btn btn-warning" href="index.php?pg=emp_post.php&id=<?php echo $data['id']; ?>"><i class="fa  fa-eye"></i> Edit</a> 
   
                                                      <a class="btn btn-danger" href="del.php?postid=<?php echo $data['id']; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i> Delete</a>
                                                
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