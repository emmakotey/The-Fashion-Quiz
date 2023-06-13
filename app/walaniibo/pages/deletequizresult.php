
<?php 
//Include database connection details
include('../config/config.php');


  $id = $_REQUEST['deletequizrest'];
  $sql = "Delete from tblgrade where id='$id'";
  //$del=@mysql_query("Delete from tbl_students where id=".mysql_escape_string($id)."");
  
  if ($login->query($sql) === TRUE) {
	   echo(" <div class='alert alert-success alert-success' align='center'>
                                <i class='mdi mdi-check-all alert-icon' aria-hidden='true'></i>
                          Record Updated successfully. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>");
   
} else {
    echo "Error deleting record: " . $login->error;
}

$login->close();
  
  
  
  
   
?>