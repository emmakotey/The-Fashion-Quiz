 <form action="" method="post" enctype="multipart/form-data" >
 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Quiz Records</h4>
                                <p
<?php
$id = $_REQUEST['editquizrest'];
include('../config/config.php');

$query="SELECT * from tblgrade where id = '$id'";
$result = mysqli_query($login, $query);


while($rows = mysqli_fetch_array($result)){
    
    $id = $rows['id'];
    $Tvalue = $rows['Tvalue'];
$ttl = $rows['ttl'];
$qresult = $rows['qresult'];
$file = $rows['file'];

?>




<?php
if(isset($_REQUEST['updatequizresul'])){
require_once('../config/config.php');
$id = mysqli_real_escape_string($login, $_POST['id']);
$Tvalue = mysqli_real_escape_string($login, $_POST['Tvalue']);
$ttl = mysqli_real_escape_string($login, $_POST['ttl']);
$qresult =  mysqli_real_escape_string($login, $_POST['qresult']);
$file = $_FILES['file']['name'];


if(move_uploaded_file($_FILES["file"]["tmp_name"],"./uploads/" . $_FILES["file"]["name"]));
if($file == ""){
$sql = mysqli_query($login,"UPDATE  tblgrade SET Tvalue='$Tvalue',ttl='$ttl',qresult='$qresult' WHERE id='$id'");
}
else{
  $sql = mysqli_query($login,"UPDATE  tblgrade SET Tvalue='$Tvalue',ttl='$ttl',qresult='$qresult',file='$file' WHERE id='$id'");  
}
 
  if(!$sql){
     die("query error" . mysqli_error()); 
     }else if($sql){
         
         echo(" <div class='alert alert-success alert-success' align='center'>
                                <i class='mdi mdi-check-all alert-icon' aria-hidden='true'></i>
                           $ttl Record Updated successfully. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>");
    
     }
     
}
?>


                  </p>
                            </div><!--end card-header-->
                            <div class="card-body">  
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-end">Value</label>
                                            <div class="col-sm-10">
                                                    <input class="form-control" type="hidden" value="<?php echo $id;?>" name="id"  id="id">
                                                <input class="form-control" type="text" value="<?php echo $Tvalue;?>" name="Tvalue"  id="Tvalue">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-end">Title</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="<?php echo $ttl;?>" name="ttl"  id="ttl">
                                            </div>
                                        </div> 
                                         

                                        
                                       
                                       
                                                                        
                                    </div>


                                    <div class="col-lg-6">                                       
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-end">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="qresult" name="qresult" rows="8" cols="50"><?php echo $qresult;?></textarea>
                                               
                                            </div>
                                        </div> 
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-sm-2 col-form-label text-end">Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="file" id="file" class="form-control"/>
                                            </div>
                                        </div>
                                                                                       
                                    </div>
                                    <input type="submit" name="updatequizresul" id="updatequizresul" value="Update" class="btn btn-primary" />
                                  
                                </div>                                                                      
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div>
        </form>
        <?php
    }
    ?>