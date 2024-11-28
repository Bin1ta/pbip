 <?php
 if(!empty($_REQUEST['mid'])){
$id=$_REQUEST['mid'];
$pdata=$obj->getDatainfo($id,CITZ_CHART);
}
if(isset($_POST['submit'])){
    $sewa=$_POST['sewa'];
    $document=$_POST['document'];
    $process=$_POST['process'];
    $adikari=$_POST['adikari'];
    $duration=$_POST['duration'];
    $fee=$_POST['fee'];
    $level=$_POST['level'];
 
    if(!empty($_REQUEST['mid'])){

         $res=$obj->citzenUp($sewa,$document,$process,$adikari,$duration,$fee,$level,$id);
    }else{
    //Start Insert 
 
       $res=$obj->citzenReg($sewa,$document,$process,$adikari,$duration,$fee,$today);
   
}

//End Insert
}



 ?>

<script src="ckeditor/ckeditor.js"></script>
                       <div class="col-lg-12">
                        <br><br>
                    </div>
                                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            नयाँ नागरिक वडापत्र सेवा दर्ता फारम
                           </div>

                          
 <div class="panel-body">
    <form action="#" method="post" enctype="multipart/form-data">

        <row class="col-sm-12">
        <div class="form-group">
 <label class="col-sm-12 control-label" for="w4-sewa">सेवा शिर्षक<span class="required">*</span></label>
        <div class="col-sm-12">
             <div class="form-group">
                    
                            <input type="text" class="form-control" name="sewa" id="w4-sewa" title="सेवा शिर्षक" required placeholder="सेवा शिर्षक" value="<?php if(!empty($_REQUEST['mid'])){echo $pdata['sewa'];} ?>" >
                    </div>
             </div> 


        </div>

        <div class="form-group">
 <label class="col-sm-12 control-label" for="w4-document">अावश्यक पर्ने कागजात<span class="required">*</span></label>
        <div class="col-sm-12">
           <div class="form-group">
<textarea name="document" id="document" required="required"><?php if(!empty($_REQUEST['mid'])){echo $pdata['needs_document'];} ?></textarea>
<script> CKEDITOR.replace( 'document' ,{ filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); </script>
</div>
             </div> 
     



       <div class="form-group">
 <label class="col-sm-12 control-label" for="w4-process">सेवा सुविधा प्राप्त गर्न अावश्यक पर्ने प्रक्रिया<span class="required">*</span></label>
        <div class="col-sm-12">
           <div class="form-group">
<textarea name="process" id="process" required="required"><?php if(!empty($_REQUEST['mid'])){echo $pdata['process'];} ?></textarea>
<script> CKEDITOR.replace( 'process' ,{ filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr=' }); </script>
</div>
             </div> 


        </div>


               <div class="form-group">
 <label class="col-sm-12 control-label" for="w4-adikari">जिम्मेवार अधिकारी<span class="required">*</span></label>
        <div class="col-sm-12">
            
                   
                              <input type="text" class="form-control" name="adikari" id="w4-phone" title="जिम्मेवार अधिकारी" required placeholder="जिम्मेवार अधिकारी" value="<?php if(!empty($_REQUEST['mid'])){echo $pdata['res_person'];} ?>" >
                  
             </div> 


        </div>




    <div class="form-group">
 <label class="col-sm-12 control-label" for="w4-duration">लाग्ने समय</label>
        <div class="col-sm-12">
             <div class="form-group">
                   
                            <input type="text" class="form-control" name="duration" id="w4-duration" title="लाग्ने समय"  placeholder="लाग्ने समय"  value="<?php if(!empty($_REQUEST['mid'])){echo $pdata['duration'];} ?>" >
                    
             </div> 


        </div>


  
    </div>


        <div class="form-group">
 <label class="col-sm-12 control-label" for="w4-fee">लाग्ने शुल्क</label>
        <div class="col-sm-12">
             <div class="form-group">
                   
                            <input type="text" class="form-control" name="fee" id="w4-fee" title="लाग्ने शुल्क"  placeholder="लाग्ने शुल्क"  value="<?php if(!empty($_REQUEST['mid'])){echo $pdata['fee'];} ?>" >
                    
             </div> 


        </div>
  
    </div>


            <div class="form-group">
 <label class="col-sm-12 control-label" for="w4-fee">Order</label>
        <div class="col-sm-3">
             <div class="form-group">
                   
                            <input type="text" class="form-control" name="level" id="w4-level"  value="<?php if(!empty($_REQUEST['mid'])){echo $pdata['level'];} ?>" >
                    
             </div> 


        </div>
  
    </div>


</row>

</div>
</row>
<div style="clear: both;"></div>
 <div class="form-group">                      
<input type="submit" name="submit" class="btn btn-success" value="सुरक्षाित गर्नहाेस"> <input type="Reset" name="Reset" class="btn btn-danger" value="Reset">

        </div> 
                                            
    </form>

                                <!-- /.table-responsive -->
     
                            </div>
                        </div>
</div>

