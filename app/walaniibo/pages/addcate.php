 <form action="" method="post" enctype="multipart/form-data" >
 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Style Records</h4>
                                <p <?php
if(isset($_REQUEST['savecate'])){
require_once('../config/config.php');
//$cid = $_POST['cid'];
$cat = $_POST['cat'];
$gender = $_POST['gender'];
$cname = $_POST['cname'];
$file = $_FILES['file']['name'];

 

if(move_uploaded_file($_FILES["file"]["tmp_name"],"./uploads/" . $_FILES["file"]["name"]));
$actcode = "SELECT cname FROM categ WHERE  cname = '$cname'";
$result = mysqli_query($login, $actcode) or die('MySql Error' . mysqli_error());
 if(!$actcode){
    echo "error" . mysqli_error();
}
if(mysqli_num_rows($result) > 0) {

    
    
    echo(" <div class='alert alert-danger alert-dismissable' align='center'>
                                <i class='mdi mdi-check-all alert-icon' aria-hidden='true'></i>
                             Oops File Name: $cname Already Created. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>");
}else{



 $sql = "INSERT INTO categ (cat,gender,cname,file) VALUES ('$cat','$gender','$cname','$file')";

 
 
 if ($login->query($sql) === TRUE) {
     
     echo(" <div class='alert alert-success alert-success' align='center'>
                                <i class='mdi mdi-check-all alert-icon' aria-hidden='true'></i>
                           $cname Record created successfully. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>");
} else {
    echo "Error: " . $sql . "<br>" . $login->error;
}

$login->close();
 
 
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
                                                    <option selected>Select Category</option>
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
                                                    <option value="HEAD-WRAPS">HEAD-WRAPS</option>
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
                                                <input class="form-control" type="text" placeholder="Category Name" name="cname"  id="cname">
                                            </div>
                                        </div> 
                                         

                                        
                                       
                                       
                                                                        
                                    </div>


                                    <div class="col-lg-6">                                       
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-end">Gender</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="gender"  id="gender">
                                                    <option selected>Select gender</option>
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
                                    <input type="submit" name="savecate" id="savecate" value="Save" class="btn btn-primary" />
                                  
                                </div>                                                                      
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div>
        </form>