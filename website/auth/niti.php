 <?php
 $cid=54; 
$pdata=$obj->getInfoByType($cid,PAGES);
 if(isset($_POST['submit'])){
$niti=$_POST['niti'];
$fy=$_POST['fy'];
$pg=$_REQUEST['pg'];
$data=$obj->regNiti($niti,$cid,$today,$pg,$fy);
}

 ?>


                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              एेन तथा कानुन
                            </div>
 <div class="panel-body">

   <form method="post" action="#">
  <div class="col-lg-5">
<input type="text" name="niti" placeholder="एेन तथा कानुन" required="required" class="form-control">
</div>
  <div class="col-lg-4">
<select class="form-control" name="fy" required="required">
  <option value="">--अार्थिक वर्ष छान्नुहाेस--</option>
  <?php
  foreach ($fy as $data){
?>
<option value="<?php echo $data; ?>"><?php echo $data; ?></option>
<?php
 }
  ?>
</select>
</div>
  <button class="btn btn-success" style="margin-bottom: 10px;" type="submit" name="submit">'<?php if(!empty($_REQUEST['id'])){ echo "सुरक्षाित गर्नुहोस";}else{ echo 'नयाँ थप्नुहाेस' ;} ?></button>
</form> 
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>शिर्षक</th>
                                                <th>अन्तिम परिर्वतन मिति</th>
                                                    <th>अार्थिक वर्ष</th>
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
                                                   <td><?php echo $data['fy']; ?></td>
                                                <td><?php echo $data['author']; ?></td>
                                                <td class="center">
                                                    <a class="btn btn-success" href="index.php?pg=edit_con.php&id=<?php echo $data['id']; ?>&p=<?php echo $_REQUEST['pg']; ?>&cid=<?php echo $cid; ?>"><i class="fa  fa-edit (alias)"></i> Edit</a> 
                                                      <?php
if($data['action']=='1'){
                                                      ?>
                                                      <a class="btn btn-danger" href="del.php?nid=<?php echo $data['id']; ?>&pg=<?php echo $_REQUEST['pg']; ?>&fn=<?php echo $data['file_name']; ?>" onclick="return confirm(&quot;के तपाई यस विवरण खारेज गर्न चाहनुहुन्छ ? याद गर्नुहोस् एक पटक हटाइएको विवरण पुनः ल्याउन सकिने छैन ।&quot;)"><i class="fa fa-trash-o"></i> Delete</a>
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