 <?php
$pdata=$obj->getlist1(FEEDBACK);

 ?>

                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             सुझाव व्यवस्थापन
                            </div>
 <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr><th>क्र॰सं॰</th>
                                                <th>नाम</th>
                                                <th>सम्पर्क नम्बर</th>
                                                <th>इमेल</th>
                                               
                                                <th>स्थिति</th>
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

                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['phone']; ?></td>
                                                  <td><?php echo $data['email']; ?></td>
                                                   <td><?php if($data['status']==0){echo "Pending"; }else{ echo "Already View"; } ?></td>
                                                  <td><?php echo $data['reg_date']; ?></td>
                                                <td class="center">
                                                    <a class="async-load btn btn-success" href="v_feedback.php?id=<?php echo $data['id']; ?>"><i class="fa  fa-eye"></i> View</a> 
                                                      <?php
if($data['status']=='1'){
                                                      ?>
                                                      <a class="btn btn-danger" href="del.php?fid=<?php echo $data['id']; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i> Delete</a>
                                                  <?php } ?>
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