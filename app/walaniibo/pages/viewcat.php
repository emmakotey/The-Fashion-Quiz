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
                                <h4 class="card-title">View Category Records </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="datatable_1">
                                        <thead class="thead-light">
                                          <tr>
                                            <th>Image</th>
                                            <th>Category Name</th>
                                            <th >Name</th>
                                            <th>Gender</th>
                                             <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
        require_once('../config/config.php');

$query=mysqli_query($login, "SELECT * from categ");
        while($row=mysqli_fetch_array($query)) {
                        
$cid = $row['cid'];                       
$cat = $row['cat'];
$gender = $row['gender'];
$cname = $row['cname'];
$file= $row['file'];



        ?>
                                            <tr>
                                                <td><?php echo "<img src='uploads/$file' width='80px' height='100px' class='me-3 align-self-center rounded'>";?></td>
                                                <td><?php echo $cat ?></td>
                                                 <td><?php echo $cname ?></td>
                                                  <td><?php echo $gender ?></td>
                                                 <td><?php echo" <a href='index.php?editcat=$cid'' ><i class='fas fa-edit' aria-hidden='true'></i></a> &nbsp;&nbsp;  <a href='index.php?deletecat=$cid' onclick='return confirmDelete()'><i class='fa fa-trash' aria-hidden='true'></i></a>"; ?></td>
                                            </tr>
                                            
                                             <?php  } ?>                                                                                          
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>


