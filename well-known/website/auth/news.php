 <?php
 $cid=59; 
$pdata=$obj->getInfoByType($cid,PAGES);
 if(isset($_POST['submit'])){
$niti=$_POST['niti'];

$data=$obj->regNews($niti,$cid,$today);
}

 ?>


                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            समाचार व्यवस्थापन 
                            </div>
 <div class="panel-body">

   <form method="post" action="#">
  <div class="col-lg-5">
<input type="text" name="niti" placeholder=" समाचार शिर्षक" required="required" class="form-control">
</div>
  <button class="btn btn-success" style="margin-bottom: 10px;" type="submit" name="submit">'<?php if(!empty($_REQUEST['id'])){ echo "सुरक्षाित गर्नुहोस";}else{ echo 'नयाँ थप्नुहाेस' ;} ?></button>
</form> 
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th> समाचार शिर्षक</th>
                                                <th>अन्तिम परिर्वतन मिति</th>
                                                <th>परिर्वतन गर्ने अधिकारी</th>
                                                <th>व्यवस्थापन गर्नुहोस</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
while($data=$pdata->fetch_assoc()){
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $data['page_name']; ?></td>
                                                <td><?php echo $data['last_update']; ?></td>
                                                <td><?php echo $data['author']; ?></td>
                                                <td class="center">
                                                    <a class="btn btn-success" href="index.php?pg=edit_con.php&id=<?php echo $data['id']; ?>&p=<?php echo $_REQUEST['pg']; ?>&cid=<?php echo $cid; ?>"><i class="fa  fa-edit (alias)"></i> Edit</a> 
                                                      <?php
if($data['action']=='1'){
                                                      ?>
                                                      <a class="btn btn-danger" href="del.php?nid=<?php echo $data['id']; ?>&pg=<?php echo $_REQUEST['pg']; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i> Delete</a>
                                                  <?php } ?>
                                               </td>

                                            </tr>
                                            
                                            <?php
                                        } ?>
                                          
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                             
                            </div>
                        </div>
</div>
  <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>