<?php
include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="STEPS | Multipurpose Working Wizard with Branches">
    <meta name="author" content="Ansonika">
    <title>The Fashion Quiz</title>

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
                    <div id="">
                        <h1><a href="#0">The Fashion Quiz</a></h1>
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
				<form name="example-1" id="wrapped" method="POST" action="ladiesresult.php">
					<input id="website" name="website" type="text" value="">
					<!-- Leave for security protection, read docs for details -->
					<div id="middle-wizard">
						<div class="step">
							<div class="question_title">
								<h3>What are your shoes like?</h3>
								
							</div>
							<div class="row justify-content-center">
								<?php 
		//require_once('conn.php');
$i=0;
$query="SELECT * from categ WHERE cat='SHOES' AND gender='Female'";
$result = mysqli_query($login, $query);
		while($row=mysqli_fetch_array($result)) {
						
$cid  = $row['cid'];
$cat = $row['cat'];
$gender = $row['gender'];
$cname = $row['cname'];
$file = $row['file'];

$count=$i++;
		?>
								<div class="col-lg-4">
									<?php echo'<div class="item">
										<input id="answer_'.$count.'" type="radio" name="'.$cat.'" value="'.$cname.'" class="required">
										<label for="answer_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
							<?php } ?>
								
							</div>
							<!-- /row-->
						</div>
						<!-- /step-->



						<div class="step">
							<div class="question_title">
								<h3>What are your shoes like?</h3>
								
							</div>
							<div class="row justify-content-center">
								<?php 
		//require_once('conn.php');
$i=0;
$query="SELECT * from categ WHERE cat='BOOTS' AND gender='Female'";
$result = mysqli_query($login, $query);
		while($row=mysqli_fetch_array($result)) {
						
$cid  = $row['cid'];
$cat = $row['cat'];
$gender = $row['gender'];
$cname = $row['cname'];
$file = $row['file'];

$count=$i++;
		?>
								<div class="col-lg-4">
									<?php echo'<div class="item">
										<input id="answer_group_2'.$count.'" type="radio" name="'.$cat.'" value="'.$cname.'" class="required">
										<label for="answer_group_2'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
							<?php } ?>
								
							</div>
							<!-- /row-->
						</div>
						<!-- /step-->

						



						<div class="step">
							<div class="question_title">
								<h3>What is in your unique occasion wardrobe?</h3>
								
							</div>
							<div class="row justify-content-center">
								
								<?php 
		//require_once('conn.php');
$i=0;
$query="SELECT * from categ WHERE cat='EVENING-GOWNS' AND gender='Female'";
$result = mysqli_query($login, $query);
		while($row=mysqli_fetch_array($result)) {
						
$cid  = $row['cid'];
$cat = $row['cat'];
$gender = $row['gender'];
$cname = $row['cname'];
$file = $row['file'];

$count=$i++;
		?>
								<div class="col-lg-4">

									<?php echo'<div class="item">
										<input id="answer_3_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_3_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->

						<div class="step">
							<div class="question_title">
								<h3>What is your work wardrobe like?</h3>
								
							</div>
							<div class="row justify-content-center">
								
								<?php 
		//require_once('conn.php');
$i=0;
$query="SELECT * from categ WHERE cat='WORK-DRESSES' AND gender='Female'";
$result = mysqli_query($login, $query);
		while($row=mysqli_fetch_array($result)) {
						
$cid  = $row['cid'];
$cat = $row['cat'];
$gender = $row['gender'];
$cname = $row['cname'];
$file = $row['file'];

$count=$i++;
		?>
								<div class="col-lg-4">

									<?php echo'<div class="item">
										<input id="answer_4_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_4_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->

						<div class="step">
							<div class="question_title">
								<h3>What is your choice of a top?</h3>
								
							</div>
							<div class="row justify-content-center">
								
								<?php 
		//require_once('conn.php');
$i=0;
$query="SELECT * from categ WHERE cat='TOPS' AND gender='Female'";
$result = mysqli_query($login, $query);
		while($row=mysqli_fetch_array($result)) {
						
$cid  = $row['cid'];
$cat = $row['cat'];
$gender = $row['gender'];
$cname = $row['cname'];
$file = $row['file'];

$count=$i++;
		?>
								<div class="col-lg-4">

									<?php echo'<div class="item">
										<input id="answer_5_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_5_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->



							<div class="step">
							<div class="question_title">
								<h3>What is your choice of a handbag?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='HANDBAGS' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-4">

									<?php echo'<div class="item">
										<input id="answer_6_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_6_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->




						<div class="step">
							<div class="question_title">
								<h3>How do you like your hair?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='HAIRSTYLES' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-4">

									<?php echo'<div class="item">
										<input id="answer_7_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_7_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'  " width="100%" height="200px" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->


						<div class="step">
							<div class="question_title">
								<h3>What is your attitude to makeup?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='MAKE-UP' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-4">

									<?php echo'<div class="item">
										<input id="answer_8_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_8_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->



						<div class="step">
							<div class="question_title">
								<h3>What is your choice of head wrap?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='HEAD-WRAPS' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-3">

									<?php echo'<div class="item">
										<input id="answer_9_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_9_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->


						<div class="step">
							<div class="question_title">
								<h3>What is your choice of manicure?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='NAILS' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-3">

									<?php echo'<div class="item">
										<input id="answer_10_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_10_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->


						<div class="step">
							<div class="question_title">
								<h3>What is your choice of sleepwear?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='SLEEPWEAR' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-3">

									<?php echo'<div class="item">
										<input id="answer_11_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_11_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->


						<div class="step">
							<div class="question_title">
								<h3>What is your choice of belt?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='BELTS' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-3">

									<?php echo'<div class="item">
										<input id="answer_12_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_12_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->



						<div class="step">
							<div class="question_title">
								<h3>What kind of necklace do you like?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='NECKLACES' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-3">

									<?php echo'<div class="item">
										<input id="answer_13_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_13_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->



						<div class="step">
							<div class="question_title">
								<h3>What kind of bracelet do you like?</h3>
								
							</div>
							<div class="row justify-content-center">
								
																<?php 
										//require_once('conn.php');
								$i=0;
								$query="SELECT * from categ WHERE cat='BRACELETS' AND gender='Female'";
								$result = mysqli_query($login, $query);
										while($row=mysqli_fetch_array($result)) {
														
								$cid  = $row['cid'];
								$cat = $row['cat'];
								$gender = $row['gender'];
								$cname = $row['cname'];
								$file = $row['file'];

								$count=$i++;
										?>
								<div class="col-lg-3">

									<?php echo'<div class="item">
										<input id="answer_14_group_'.$count.'" name="'.$cat.'" type="radio" value="'.$cname.'" class="required">
										<label for="answer_14_group_'.$count.'"><img src="walaniibo/pages/uploads/'.$file.'" width="100%" alt=""><strong></strong></label>
									</div>';?>
								</div>
									<?php
								}
								?>
							</div>
							<!-- /row-->
						</div>
						<!-- /step -->



						<div class="step">
							<div class="question_title">
								<!--<h3>Plase answer the following questions</h3>
								<p>Multiple Selection (Select based)</p>-->
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-5">
									<div class="box_general">
										<div class="form-group select">
											<label>How do you like your hair?</label>
											<div class="styled-select">
												<select class="required" name="hair2" id="hair">
													<option value="" selected>Select</option>
	<option value="A">A.	My hair is important. I aim for an enticing look. It may be considered by many to be too long.</option>
	<option value="B">B.	I like my hair to look bouncy and soft. I am not a fan of shortcuts.</option>
	<option value="C">C.	I have my hair cut and styled, so it looks neat daily.</option>
	<option value="D">D.	I like my hair to be washed and worn. I want it clean, but that's about as much as I worry about.</option>
	<option value="E">E.	I love looks that are different and interesting</option>
	<option value="F">F.	My hair must look nice, and I will use hairspray if necessary to keep it in place.</option>
	<option value="G">G.	I use many products in my hair to keep it in shape and look smart all day.</option>
												</select>
											</div>
										</div>
										<!-- /select-->
										<div class="form-group select">
											<label>How do you like your lingerie?</label>
											<div class="styled-select">
												<select class="required" name="lingerie2" id="lingerie2">
													<option value="" selected>Select</option>
				<option value="A">A.	I like underwear that makes me feel comfortable</option>
			<option value="B">B.	I love colourful floral, lacy, and odd sexy pieces and some black for special occasions.</option>
			<option value="C">C.	I love sexy lingerie and enjoy wearing bustiers as outerwear whenever possible.</option>
			<option value="D">D.	I love statement lingerie, bustiers, and stockings to show off and enhance my assets.</option>
			<option value="E">E.	I just grabbed the closest item at the time. I prefer to concentrate on the outer garments. It is functional and probably cotton.</option>
			<option value="F">F.	I like to look for fun in my underwear. It may not match, but it gives me joy.</option>
			<option value="G">G.	I love mainly skin tone, black and white lingerie; it makes me feel special.</option>
			
												</select>
											</div>
										</div>
										<!-- /select-->
										
										<!-- /select-->
									</div>
									<!-- /box_general -->
								</div>
							</div>
							<!-- /row -->
						</div>
						<!-- /step-->
						
						<!-- Budget ============================== 
						<div class="step">
							<div class="question_title">
								<h3>What is your buget?</h3>
								<p>Touchscreen friendly Range Slider</p>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-5">
									<div class="box_general">
										<div class="rounded_slider">
											<div id="budget_slider" style="margin: 0 auto 20px;"></div>
											<p>Eu sed epicuri mentitum, ex mei hinc justo, no cum dictas deserunt gubergren. Ferri pericula sententiae eu pro.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- /row --
						</div>
						<!-- /Budget ============================== -->
						
						<!-- Last step ============================== -->
						<div class="submit step">
							<div class="question_title">
								<h3>Plase fill with your details</h3>
								<p>Ei duo homero postea dignissim.</p>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-5">
									<div class="box_general">
										<div class="form-group">
											<input type="text" name="fullname" class="required form-control" placeholder="First and Last name">
										</div>
										<div class="form-group">
											<input type="email" name="email" class="required form-control" placeholder="Your Email">
										</div>
										<div class="form-group">
											<input type="text" name="phone" class="form-control" placeholder="Your Telephone">
										</div>
										
										<div class="checkbox_questions">
											<input name="terms" type="checkbox" class="icheck required" value="yes">
											<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a>.</label>
										</div>
									</div>
									<!-- /box_general -->
								</div>
							</div>
							<!-- /row -->
						</div>
						<!-- /Last step ============================== -->
					</div>
					<!-- /middle-wizard -->
					<div id="bottom-wizard">
						<button type="button" name="backward" class="backward">Backward </button>
						<button type="button" name="forward" class="forward">Forward</button>
						<button type="submit" name="process" class="submit">Submit</button>
					</div>
					<!-- /bottom-wizard -->
				</form>
			</div>
			<!-- /Wizard container -->
		</div>
		<!-- /Container -->
	</main>
	<!-- /main -->
	
	<footer>
		<div class="container clearfix">
			
			<p>© The Fashion Quiz 2023</p>
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
<script src="js/wizard_func_without_branch.js"></script>
	
</body>

</html>