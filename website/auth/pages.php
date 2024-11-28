 <?php
 $cid=$_REQUEST['cid']; 
$pdata=$obj->getInfoByType($cid,PAGES)

 ?>


                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              पेज व्यवस्थापन 
                            </div>
 <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>पेज शिर्षक</th>
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
                                                      <a class="btn btn-danger" href="del.php?sid=<?php echo $data['s_id']; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i> Delete</a>
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