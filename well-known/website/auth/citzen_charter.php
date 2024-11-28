 <?php
$pdata=$obj->getlNorOder(CITZ_CHART);

 ?>
                        <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                          नागरिक वडापत्र
                            </div>
 <div class="panel-body">
  <a class="btn btn-primary" href="index.php?pg=reg_citzen_service.php" style="margin-bottom: 10px;">नयाँ थप्नुहाेस</a>
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr><th>क्र॰सं॰</th>
                                                <th>सेवा शिर्षक</th>
                                                <th>शुल्क</th>
                                                <th>समय</th> 
                                                  <th>अडर</th>                                        
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

                                                <td><?php echo $data['sewa']; ?></td>
                                                <td><?php echo $data['fee']; ?></td>
                                                  <td><?php echo $data['duration']; ?></td>
                                                  <td><?php echo $data['level']; ?></td>
                                                   
                                                 
                                                <td class="center" width="150px">
                                                    <a class="async-load btn btn-success" href="report/v_charter.php?id=<?php echo $data['id']; ?>"><i class="fa  fa-eye"></i></a> 

                                                       <a class="btn btn-warning" href="index.php?pg=reg_citzen_service.php&mid=<?php echo $data['id']; ?>"><i class="fa  fa-edit"></i></a> 
                                                    
                                                      <a class="btn btn-danger" href="del.php?citzid=<?php echo $data['id']; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i> </a>
                                                  
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
