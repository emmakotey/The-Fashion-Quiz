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
                                            <th>Full Name</th>
                                            <th>Phone No.</th>
                                            <th >SHOES</th>
                                            <th >EVENING-GOWNS</th>
                                            <th >WORK-DRESSES</th>
                                            <th >TOPS</th>
                                            <th >HANDBAGS</th>
                                            <th >HAIRSTYLES</th>
                                            <th >RESULT</th>
                                          
                                             <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
        require_once('../config/config.php');

$query1=mysqli_query($login, "SELECT * from tblquiz");
        while($row=mysqli_fetch_array($query1)) {
                        
$qid = $row['qid'];                       
$fullname = $row['fullname'];
$phone = $row['phone'];
$occasionwardrobe = $row['occasionwardrobe'];
$workwardrobe = $row['workwardrobe'];
$top = $row['top'];
$handbag = $row['handbag'];
$hair = $row['hair'];
$makeup = $row['makeup'];

//$file= $row['file'];

        ?>

        <?php
                    /* The code below select only the result (A-G) from the table
                     then print it */
                     require_once('../config/config.php');
                $query="SELECT qresult from tblquiz";
                $result = mysqli_query($login, $query);
                    while($row=mysqli_fetch_array($result)) {
                            
                $qresult=  $row['qresult'];
                //echo $quizresult;
                }


/* The result is put into the array below to output the remarks (Absolute drama, classic ETC)*/
$str = $qresult;
$strArray = count_chars($str,1);
$d=[];
foreach ($strArray as $i=>$count)
   {
    $d[chr($i)]=$count;
   //echo "The character <b>'".chr($i)."'</b> was found $count time(s)<br>";
   
   }
      $maxvalue=max($d);
      $maxindex=array_search(max($d), $d);
        //echo $maxvalue.'/'.$maxindex;



/* The code below fetch the remarks from the table and use to compare to output remarks based on resu*/
                $query2="SELECT * from tblgrade where Tvalue='$maxindex' ";
                $result2 = mysqli_query($login, $query2);
                    while($row=mysqli_fetch_array($result2)) {
                            
                //echo  $row['result'];
                     $qresult= $row['qresult'];
                }

?>
                                            <tr>
                                                <td><?php echo $fullname ?></td>
                                                <td><?php echo $phone ?></td>
                                                 <td><?php echo $occasionwardrobe ?></td>
                                                 <td><?php echo $workwardrobe ?></td>
                                                <td><?php echo $top ?></td>
                                                 <td><?php echo $handbag ?></td>
                                                 <td><?php echo $hair ?></td>
                                                 <td><?php echo $makeup ?></td>
                                                  <td><?php echo  $qresult ?></td>
                                                 
                                                 <td><?php echo"   <a href='#=$qid' ><i class='fas fa-cloud-download-alt' aria-hidden='true'></i></a> &nbsp;&nbsp;
                                                 <a href='#=$qid' ><i class='fas fa-file' aria-hidden='true'></i></a>"; ?></td>
                                            </tr>
                                            
                                             <?php  } ?>                                                                                          
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>


