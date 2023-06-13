 <form action="" method="post" enctype="multipart/form-data" >
 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Style Records</h4>
                                <p


<?php
$cid = $_REQUEST['editcat'];
include('../config/config.php');

$query="SELECT * from categ where cid = '$cid'";
$result = mysqli_query($login, $query);


while($rows = mysqli_fetch_array($result)){
    
    $cid = $rows['cid'];
    $cat = $rows['cat'];
$gender = $rows['gender'];
$cname = $rows['cname'];
$file = $rows['file'];

?>


<?php
if(isset($_REQUEST['updatecatbtn'])){
require_once('../config/config.php');
$cid = mysqli_real_escape_string($login, $_POST['cid']);
$cat = mysqli_real_escape_string($login, $_POST['cat']);
$gender = mysqli_real_escape_string($login, $_POST['gender']);
$cname =  mysqli_real_escape_string($login, $_POST['cname']);
$file = $_FILES['file']['name'];


if(move_uploaded_file($_FILES["file"]["tmp_name"],"./uploads/" . $_FILES["file"]["name"]));
if($file == ""){
$sql = mysqli_query($login,"UPDATE  categ SET cat='$cat',gender='$gender',cname='$cname' WHERE cid='$cid'");
}
else{
  $sql = mysqli_query($login,"UPDATE  categ SET cat='$cat',gender='$gender',cname='$cname',file='$file' WHERE cid='$cid'");  
}
 
  if(!$sql){
     die("query error" . mysqli_error()); 
     }else if($sql){
         
         echo(" <div class='alert alert-success alert-success' align='center'>
                                <i class='mdi mdi-check-all alert-icon' aria-hidden='true'></i>
                           $cname Record Updated successfully. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
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
                                            <label class="col-sm-2 col-form-label text-end">Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="cat"  id="cat">
                                                    <option selected><?php echo $cat;?></option>
                                                    <option value="SHOES">SHOES</option>
                                                    <option value="BOOTS">BOOTS</option>
                                                    <option value="EVENING GOWNS">EVENING GOWNS</option>
                                                    <option value="WORK DRESSES">WORK DRESSES</option>
                                                    <option value="SLEEPWEAR">SLEEPWEAR</option>
                                                    <option value="HANDBAGS">HANDBAGS</option>
                                                    <option value="TOPS">TOPS</option>
                                                    <option value="NECKLACES">NECKLACES</option>
                                                    <option value="BRACELETS">BRACELETS</option>
                                                    <option value="HAIRSTYLES">HAIRSTYLES</option>
                                                    <option value="MAKE-UP">MAKE-UP</option>
                                                    <option value="NAILS">NAILS</option>
                                                    <option value="FRAGRANCE">FRAGRANCE</option>
                                                    <option value="BELTS">BELTS </option>
                                                    <option value="HEAD WRAPS">HEAD WRAPS</option>
                                                    <option value="Male Categories">---------------</option>
                                                    <option value="Dress shoes">Dress shoes</option>
                                                    <option value="Boots">Boots</option>
                                                    <option value="Shoes">Shoes</option>
                                                    <option value="Suit">Suit</option>
                                                    <option value="Work Clothes">Work Clothes</option>
                                                    <option value="Casual Friday">Casual Friday</option>
                                                    <option value="Relaxed Casual">Relaxed Casual</option>
                                                    <option value="Sunday Lunch Style">Sunday Lunch Style</option>
                                                    <option value="Shirts & Tops">Shirts & Tops</option>
                                                    <option value="Beards & Shave">Beards & Shave</option>
                                                    <option value="Hairstyles">Hairstyles</option>
                                                     <option value="Male Fregrance">Male Fregrance</option>

                                                  </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-end">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="<?php echo $cname;?>" name="cname"  id="cname">
                                                <input class="form-control" type="hidden" value="<?php echo $cid;?>" name="cid"  id="cid">
                                            </div>
                                        </div> 
                                         

                                        
                                       
                                       
                                                                        
                                    </div>


                                    <div class="col-lg-6">                                       
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-end">Gender</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="gender"  id="gender">
                                                    <option selected><?php echo $gender;?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                  </select>
                                            </div>
                                        </div> 
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-sm-2 col-form-label text-end">Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="file" id="file" class="form-control"/>
                                            </div>
                                        </div>                                               
                                    </div>
                                    <input type="submit" name="updatecatbtn" id="updatecatbtn" value="Update" class="btn btn-primary" />
                                  
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