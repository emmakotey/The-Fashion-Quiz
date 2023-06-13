
                <!--delete file-->
                <?php 
//Include database connection details
require_once ("../config/config.php");


  $cid = $_REQUEST['deletecat'];
  $sql = "Delete from categ where cid='$cid'";
  //$del=@mysql_query("Delete from tbl_students where id=".mysql_escape_string($id)."");
  
  if ($login->query($sql) === TRUE) {
      echo(" <div class='alert alert-success alert-success' align='center'>
                                <i class='mdi mdi-check-all alert-icon' aria-hidden='true'></i>
                              <a href='index.php?viewcat' class='alert-link'>Record Deleted Successfully. [Ok]</a>.
                            </div>");
   
} else {
    echo "Error deleting record: " . $login->error;
}

$login->close();
  
  
  
  
   
?>




                <!-- delete script ends here-->