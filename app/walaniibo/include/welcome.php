<?php
require_once('../connections/config.php'); 
?>
<style type="text/css">
.welcome {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #09C;
	border-bottom-width: 1px;
	border-bottom-style: dotted;
	border-bottom-color: #09C;
}
.text {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #000;
}
</style>
<table width="100%" border="0">
  <tr>
    <td class="welcome">Welcome to Peculiar International School</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="text">Now you can start using the application. </td>
  </tr>
  <tr>
    <td class="text">Use the buttons at the left panel of the application to navigate through the entire system.</td>
  </tr>
  <tr>
    <td class="text">For any technical support please contact us on support@gitplusghana.com  Thanks.</td>
  </tr>
  <tr>
    <td class="text">&nbsp;</td>
  </tr>
  <tr>
    <td class="text">&nbsp;</td>
  </tr>
  <tr>
    <td class="text">
    
 <?php
 
 echo '<div id="maintable">';
	
$sqluser = @mysql_query("SELECT * from tblannounce");	

$count = mysql_num_rows($sqluser);

if(!$sqluser){
	echo mysql_error();
}

//////////
$query = "SELECT * from tblannounce";
$sqluser = $dbh->prepare($query);
$sqluser->execute();
//get total number of rows

$row = $sqluser->fetch();


///////////////
$countcls = $recordtotal = $sqluser->rowCount();

echo "<table border='0'>";
echo "<td class='welcome' colspan='3'>Announcement(s) - $count</td>";
while($row=$sqluser->fetch()) {
	
$nid = $row['nid'];		
$nheader = $row['nheader'];
$message = $row['message'];
$sdate = $row['sdate'];
$sender = $row['sender'];
$recipient = $row['recipient'];



	
echo "<tr><td width='30%' valign='top'>$nheader</td><td width='35%' valign='top'><font><i>Posted by: $sender || Time:$sdate</i></td><td width='10%' valign='top'>

<a href='anounceread.php?anounceread=$nid' title='Read Message' rel='gb_page_center[640, 480]'>Read</a> 
		  
		  </td> 
		  </tr>";	
	
}

echo "</table>";


echo "</div>";




 
 ?>   
    
    </td>
  </tr>
  <tr>
    <td class="text">&nbsp;</td>
  </tr>
  <tr>
    <td class="text">&nbsp;</td>
  </tr>
  <tr>
    <td class="text">&nbsp;</td>
  </tr>
</table>
