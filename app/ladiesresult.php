


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="STEPS | Multipurpose Working Wizard with Branches">
    <meta name="author" content="Ansonika">
    <title></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.min.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
	<link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="js/modernizr.js"></script>
	<!-- Modernizr -->

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                        <h1><a href="index-2.html">STEPS | Multipurpose Working Wizard with Branches</a></h1>
                    </div>
                </div>
                <div class="col-9">
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <nav>
                        <ul class="cd-primary-nav">
                            <li><a href="about.html" class="animated_link">About</a></li>
                            <li><a href="contacts.html" class="animated_link">Contacts</a></li>
                            <li><a href="icon-pack-1.html" class="animated_link">Icon Pack One</a></li>
                            <li><a href="icon-pack-2.html" class="animated_link">Icon Pack Two</a></li>
                            <li><a href="icon-pack-3.html" class="animated_link">Icon Pack Three</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->
	
	<main>
		<div class="container">
			<div id="wizard_container">
				<form name="example-1" id="wrapped" method="POST">
					<input id="website" name="website" type="text" value="">
					<!-- Leave for security protection, read docs for details -->
					<div id="middle-wizard">
						
						<!-- Branch What Type of Project ============================== -->
						<div class="step" data-state="branchtype">
							<div class="question_title">
								<h3>Congratulations</h3>
								<p>
									<?php
									include_once('config/config.php');
					 $shoes = $_REQUEST['SHOES'];
					 //$cname = $_REQUEST['BOOTS'];
					 $occasionwardrobe = mysqli_real_escape_string($login,$_REQUEST['EVENING-GOWNS']);
					 $workwardrobe = mysqli_real_escape_string($login,$_REQUEST['WORK-DRESSES']);
					 $top = $_REQUEST['TOPS'];
					 $handbag = $_REQUEST['HANDBAGS'];
					 $hair = $_REQUEST['HAIRSTYLES'];
					 $makeup = $_REQUEST['MAKE-UP'];
					 $wrap = $_REQUEST['HEAD-WRAPS'];
					 $manicure = $_REQUEST['NAILS'];
					 $sleepwear = $_REQUEST['SLEEPWEAR'];
					 $belt = $_REQUEST['BELTS'];
					 $necklace = $_REQUEST['NECKLACES'];
					 $bracelet = $_REQUEST['BRACELETS'];
					 $hair2 = $_REQUEST['hair2'];
					 $lingerie2 = $_REQUEST['lingerie2'];
					 $fullname = $_REQUEST['fullname'];
					 $email = $_REQUEST['email'];
					 $phone = $_REQUEST['phone'];
					 $terms = $_REQUEST['terms'];
$qresult =($shoes.''.$occasionwardrobe.''.$workwardrobe.''.$top.''.$handbag.''.$hair.''.$makeup.''.$manicure.''.$sleepwear.''.$belt.''.$necklace.''.$bracelet.''.$hair2.''. $lingerie2);

					 //echo $cname;

$sql = "INSERT INTO tblquiz
 (shoes,occasionwardrobe,workwardrobe,top,handbag,hair,makeup,wrap,manicure,sleepwear,belt,necklace,bracelet,hair2,lingerie2,fullname,email,phone,terms,qresult) VALUES
('$shoes','$occasionwardrobe','$workwardrobe','$top','$handbag','$hair','$makeup','$wrap','$manicure','$sleepwear','$belt','$necklace','$bracelet','$hair2','$lingerie2','$fullname','$email','$phone','$terms','$qresult')";

 
 if ($login->query($sql) === TRUE) {
   
   echo(" <div class='alert alert-success alert-success' align='center'>
                                
                            <font color='green'><br> Thank you Quiz Submitted Sucessfully </font><a href='#' class='alert-link'></a>.
                            </div>");
} else {
    echo "Error: " . $sql . "<br>" . $login->error;
}




//check if user exist. If yes don't create account. Else create user account in Client table;
$actcode = "SELECT phone,email FROM clienttbl WHERE  phone = '$phone' AND email='$email'";
$result = mysqli_query($login, $actcode) or die('MySql Error' . mysqli_error());
 if(!$actcode){
  echo "error" . mysqli_error();
}
if(mysqli_num_rows($result) > 0) {

  
  
  echo(" <div class='alert alert-danger alert-dismissable' align='center'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                             <font color='red'>Oops Sorry: $fullname And $email Already in the System</font> <a href='#' class='alert-link'></a>.
                            </div>");
}else{


//create random code for use as default password for MF
	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: 54esmdr0qf
$defpass = substr(str_shuffle($permitted_chars), 0, 10);


// the code below create the user account 
$sqli = "INSERT INTO clienttbl (fullname,phone,email,password) VALUES ('$fullname','$phone','$email','$defpass')";

 if ($login->query($sqli) === TRUE) {
   

//the moda fucker below sends the email with links and default password to new accounts
    
$to = "$email";
         $subject = "Your personal style results";
         
         $message = "<b>Thank you for taking the style personality quiz</b><br>
								Your Personal Style Is  ";
         $message .= "<h1>Would you like to know what this means when selecting clothes and accessories to elevate your appearance? 
Click here to discover more. 

Powered by WALANII View online</h1>";
         
         $header = "From:agoo@walanii.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           // echo "Message sent successfully...";
         }else {
           // echo "Message could not be sent...";
         }


   echo(" <div class='alert alert-success alert-success' align='center'>
                                
                            <font color='green'><br> Thank you  </font><a href='#' class='alert-link'></a>.
                            </div>");
} else {
    echo "Error: " . $sqli . "<br>" . $login->error;
}

}


$login->close();
 

?>



									
								</p>
							</div>
							<div class="row">
								<div class="col-lg-12">
									
								</div>
								<div class="col-lg-12">
									<div class="item">
										
										<label for="answer_2"><strong>Your Result:</strong>

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
							$letters = str_split($str);
							$alphabet  = array_fill_keys($letters, 1);
							$previous = '';

							foreach($letters as $letter) {
							    if($letter == $previous) {
							        $alphabet[$letter]++;
							    }
							    $previous = $letter;
							}
							krsort($alphabet);
							//print_r($alphabet);

							

					   		$maxvalue=max($alphabet);
					   		$minvalue=min($alphabet);
					   		//krsort($maxvalue);
					   		$maxindex=array_search(max($alphabet), $alphabet);
					   		$minvalue=array_search(min($alphabet), $alphabet);

					      	

					      	echo $finalval =$maxindex.$minvalue;
					      // $secondLargestVal = $d[count($d)-1];
					       //echo $secondLargestVal;
							


					/* The code below fetch the remarks from the table and use to compare to output remarks based on resu*/
								$query="SELECT * from tblgrade where Tvalue='$finalval' ";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								echo  $row['ttl'].'&nbsp; <br><br>';
								echo  $row['qresult'];

								}



     

?>
</label>
									</div>
								</div>
								<div class="col-lg-4">
									
								</div>
							</div>
							<!-- /row-->
						</div>
						<!-- /Branch What Type of Project ============================== -->
						
						
						
						
						
							
							
							
							<br>
							<!-- /Last step ============================== -->
						</div>
					</div>
					
				</form>
			</div>
			<!-- /Wizard container -->
		</div>
		<!-- /Container -->
	</main>
	<!-- /main -->
	
	<footer>
		<div class="container clearfix">
			<!--<ul>
				<li><a href="#" class="animated_link">Multiple Branch</a></li>
				<li><a href="#" class="animated_link active">Single Branch</a></li>
				<li><a href="#" class="animated_link">Without Branch</a></li>
				<li><a href="#" class="animated_link">Images Version</a></li>
				<li><a href="#" class="animated_link">Multiple Branch + FileUpload</a></li>
				
			</ul>-->
			<p><?php echo gmdate('Y');?> Walanii</p>
		</div>
	</footer>
	<!-- /footer -->
	
	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /cd-nav-trigger -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="termsLabel">Terms and conditions</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /Modal terms -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/main.js"></script>
	<script src="js/wizard_func_single_branch.js"></script>	
	
</body>


</html>