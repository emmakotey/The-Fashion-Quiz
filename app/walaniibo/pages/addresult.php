 <form action="" method="post" enctype="multipart/form-data" >
 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Quiz Records</h4>
                                <p <?php
if(isset($_REQUEST['savequizresul'])){
require_once('../config/config.php');
$gender = mysqli_real_escape_string($login, $_POST['gender']);
$Tvalue = mysqli_real_escape_string($login, $_POST['Tvalue']);
$ttl = mysqli_real_escape_string($login, $_POST['ttl']);
$qresult = mysqli_real_escape_string($login, $_POST['qresult']);
$file = $_FILES['file']['name'];


 

if(move_uploaded_file($_FILES["file"]["tmp_name"],"./uploads/" . $_FILES["file"]["name"]));
$actcode = "SELECT ttl,gender FROM tblgrade WHERE  ttl = '$ttl' AND gender='$gender' ";
$result = mysqli_query($login, $actcode) or die('MySql Error' . mysqli_error());
 if(!$actcode){
    echo "error" . mysqli_error();
}
if(mysqli_num_rows($result) > 0) {

    
    
    echo(" <div class='alert alert-danger alert-dismissable' align='center'>
                                <i class='mdi mdi-check-all alert-icon' aria-hidden='true'></i>
                             Oops File Name: $ttl Already Created. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>");
}else{



 $sql = "INSERT INTO tblgrade (Tvalue,ttl,gender,qresult,file) VALUES ('$Tvalue','$ttl','$gender','$qresult','$file')";

 
 
 if ($login->query($sql) === TRUE) {
     
     echo(" <div class='alert alert-success alert-success' align='center'>
                                <i class='mdi mdi-check-all alert-icon' aria-hidden='true'></i>
                           $ttl Record created successfully. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
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
                                            <label class="col-sm-2 col-form-label text-end">Value</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Value" name="Tvalue"  id="Tvalue">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label text-end">Title</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Title" name="ttl"  id="ttl">
                                            </div>
                                        </div> 
                                         

                                        
                                       
                                       
                                                                        
                                    </div>


                                    <div class="col-lg-6">                                       
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-end">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="qresult" name="qresult" rows="4" cols="50"></textarea>
                                               
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
                                       
                                    <input type="submit" name="savequizresul" id="savecate" value="Save" class="btn btn-primary" />
                                  
                                </div>  

                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div>
        </form>