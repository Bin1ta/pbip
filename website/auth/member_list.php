 <?php
$type=$_REQUEST['type'];
$pdata=$obj->getlistBytype(MEMBER,$type);
 ?>

                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            मुख्य अधिकारीहरू
                            </div>
 <div class="panel-body">
  <a class="btn btn-primary" href="index.php?pg=reg_member.php&type=1" style="margin-bottom: 10px;">नयाँ थप्नुहाेस</a>
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr><th>क्र॰सं॰</th>
                                                <th>नाम</th>
                                                <th>Designation</th> 
                                                <th>पद</th>                                                                                              
                                                <th>फाेन नम्बर</th>
                                                 <th>अवस्था</th>
                                                <th>देखाउने क्र.म.</th>
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
                                                <td><?php echo $data['post']; ?></td>
                                                  <td><?php echo $data['wada']; ?></td>
                                                  <td><?php echo $data['phone']; ?></td>
                                                  <td><a class="async-load" href="change_status_member.php?id=<?php echo $data['id']; ?>&type=<?php echo $_REQUEST['type']; ?>"><?php echo $st[$data['status']]; ?></a></td>
                                                    <td><?php echo $data['level']; ?></td>
                                                 
                                                <td class="center">
                                                    <a class="async-load btn btn-success" href="report/v_member.php?id=<?php echo $data['id']; ?>"><i class="fa  fa-eye"></i></a> 

                                                       <a class="btn btn-warning" href="index.php?pg=reg_member.php&mid=<?php echo $data['id']; ?>&type=<?php echo $type; ?>"><i class="fa  fa-edit"></i> </a> 
                                                    
                                                      <a class="btn btn-danger" href="del.php?mid=<?php echo $data['id']; ?>&type=<?php echo $type; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i></a>
                                                  
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
