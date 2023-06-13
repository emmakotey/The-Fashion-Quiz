<?php
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: 54esmdr0qf
//echo substr(str_shuffle($permitted_chars), 0, 10);
$defpass = substr(str_shuffle($permitted_chars), 0, 10);

//echo $defpass;
 

 
?>

<?php 
									include('config/config.php');
								//$i=0;
								$query="SELECT * from tblquiz Group by shoes";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								echo  $row['shoes'];
								}
										?><br><br>


										<?php 
                  
                $query = "Select shoes, COUNT(shoes) From tblquiz where qid=36";
                $result = mysqli_query($login, $query) or die (mysql_error());   
                while ($row=mysqli_fetch_array($result)){
                    //echo "<h2> ". $row['COUNT(qid)'] ." </h2>";
                    echo " <span class='h4 fw-bold'>". $row['COUNT(shoes)'] ."</span>";
                }
                
                ?>  <br><br>            


             		 		<?php
             		 		/* The code below select only the result (A-G) from the table
             		 		 then print it */
              				include('config/config.php');
								$query="SELECT qresult from tblquiz";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$quizresult=  $row['qresult'];
								//echo $quizresult;
								}


/* The result is put into the array below to output the remarks (Absolute drama, classic ETC)*/
$str = $quizresult;
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
								$query="SELECT * from tblgrade where Tvalue='$maxindex' ";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								echo  $row['result'];
								}

?>
<?Php

$value= array(2,5,6,8,9,4,9,1);

echo "Maximum  value = ".max($value);
echo "min  value = ".min($value);


?>