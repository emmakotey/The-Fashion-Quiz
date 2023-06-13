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
                                <h4 class="card-title">Client's Records </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                          <tr>
                                            <th>Full Name</th>
                                            <th>Phone No.</th>
                                            <th >Email</th>
                                          
                                             <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
        require_once('../config/config.php');

$query=mysqli_query($login, "SELECT * from clienttbl");
        while($row=mysqli_fetch_array($query)) {
                        
$id = $row['id'];                       
$fullname = $row['fullname'];
$phone = $row['phone'];
$email = $row['email'];
//$file= $row['file'];



        ?>
                                            <tr>
                                                <td><?php echo $fullname ?></td>
                                                <td><?php echo $phone ?></td>
                                                 <td><?php echo $email ?></td>
                                                 
                                                 <td><?php echo"   <a href='#=$id' ><i class='fas fa-file' aria-hidden='true'></i></a> &nbsp;&nbsp;
                                                 <a href='#=$id' ><i class='fas fa-file' aria-hidden='true'></i></a>"; ?></td>
                                            </tr>
                                            
                                             <?php  } ?>                                                                                          
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>


