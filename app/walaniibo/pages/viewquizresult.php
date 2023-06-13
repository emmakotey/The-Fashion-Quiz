<SCRIPT type="text/javascript">


function confirmDelete()
{
var agree=confirm("Are you sure you wish to continue?");
if (agree)
    return true ;
else
    return false ;
}
// -->
</script>




<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Quiz Result </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                          <tr>
                                            <th>IMG</th>
                                             <th>Value</th>
                                            <th>Title</th>
                                            <th>Gender</th>
                                            <th >Description</th>
                                            
                                          
                                             <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
        require_once('../config/config.php');

$query1=mysqli_query($login, "SELECT * from tblgrade");
        while($row=mysqli_fetch_array($query1)) {
                        
$id  = $row['id'];                       
$Tvalue = $row['Tvalue'];
$ttl = $row['ttl'];
$gender = $row['gender'];
$qresult = $row['qresult'];
$file= $row['file'];


//$file= $row['file'];

        ?>

        
                                            <tr>
                                              <td><?php 
                                              if($file==''){
                                                echo "<img src='uploads/images.jfif' width='80px' height='100px' class='me-3 align-self-center rounded'>";

                                              }else{
                                                echo "<img src='uploads/$file' width='80px' height='100px' class='me-3 align-self-center rounded'>";
                                              }

                                              ?></td>
                                                 <td><?php echo $Tvalue ?></td>
                                                <td><?php echo $ttl ?></td>
                                                 <td><?php echo $gender ?></td>
                                                 <td><?php echo $qresult ?></td>
                                                 
                                                 
                                                 <td><?php echo"   <a href='index.php?editquizrest=$id'' ><i class='fas fa-edit' aria-hidden='true'></i></a> &nbsp;&nbsp;
                                                 <a href='index.php?deletequizrest=$id'  onclick='return confirmDelete()' ><i class='fas fa-trash' aria-hidden='true'></i></a>"; ?></td>
                                            </tr>
                                            
                                             <?php  } ?>                                                                                          
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>


