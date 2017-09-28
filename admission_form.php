<!DOCTYPE html>
<html lang="en">
<head>
<title>FootHill Grammer School</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>
	
<body onload="makeid()">
<!-- banner -->
	<div class="banner1">
		<nav class="navbar navbar-default" id="stay_admission_form">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.html"><span>FOOTHILL</span>GRAMMER SCHOOL.</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
						<li><a href="courses.html"><span data-hover="Courses">Courses</span></a></li>
						<li><a href="services.html"><span data-hover="Services">Services</span></a></li>
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Short Codes</span> <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="icons.html">Web Icons</a></li>
								<li><a href="typography.html">Typography</a></li>
							</ul>
						</li>
						<li><a href="mail.html"><span data-hover="Mail Us">Mail Us</span></a></li>
					</ul>
				</nav>
			</div>
			<div class="w3_agile_phone">
				<p><i class="fa fa-phone" aria-hidden="true"></i> +123 234 233</p>
			</div>
		</nav>
		<div class="wthree_banner1_info">
			<div class="container">
				<h3><span>FHGS</span>Citadel of Excellence...</h3>
			</div>
		</div>
	</div>
<!-- //banner -->	
<!-- Registyration form-->
<br>
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			
			
			<form method="post"  name="registration_form" action="fcform.php">
			<div class="container" >
			<div class="row">
			
				<div class=" col-xs-6 col-md-6 col-lg-6">
			
				<h2>FOOTHILL GRAMMER SCHOOL</h2>
				<h4><font color="red">Registration form</font></h4>
				<label>Your School Registration number is:*&nbsp; &nbsp;</label><font color="Blue"><label class="uppercase" id="display" name="id">
				</label></font><br><br>
				<label><i>Please Copy the Registation Number and Paste on the Registration Number text Filed below!</i><br><br>
				<label>School Registration Number:*<input type="text" name="reg_number" maxlength="7" value="" class="form-control">
				<label>Fullname:*</label><input type="text" name="fullname" value="" maxlength="65"class="form-control"/>
				<label>Password:*</label><input type="text" name="password" maxlength="12" value="" class="form-control"/>
				<label>Home Address:*</label><textarea type="text" name="homeaddress" value="" class="form-control"></textarea>
				<label>Phone Number:*</label><input type="number" name="phonenumber" value="" class="form-control"/>
				<label>Email Address:*</label><input type="text" name="emailaddress" value="" class="form-control">
				<label>Gender:*&nbsp;</label><select name="gender">
												<option value="">Select...</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
												</select><br><br>
				<label>DOB:*</label> <select id="days">  
					
						</select >Day*&nbsp;
						<select id="month" name="month">
						<option>Select...</option>
						</select>Month*&nbsp;
						<select id="years" name="year"></select>Year*<br><br>
				<label>Choose a Filed of Study:* Science/Art/Commercial</label>
											<select name="filed_of_study" id="filed_of_study">
											<option value="">Select...</option>
											<option value="science">Science</option>
											<option value="art">Art</option>
											<option value="commercial">Commercial</option>
											</select><br><br>
											<div class="form-group" id="loader">
											</div>
											<br>
				<input type="submit" name="submit "value="Submit" disabled="disabled" id="submit"/><input type="reset" name="reset" value="Reset"/>
			</div>
				<div height="20px;" width="100%" align="center">
				&nbsp;<br><br><img src="img/pass.gif"/>
				</div>
				<div class="col-md-6 col-xs-6 col-lg-6" id="passport" align="center">
				<label>Upload Your Passport Photograph</label><input type="file" name="passport" value="fileupload" id="fileupload"/>
				</div>
			</div>
			</div>
			
			</form>
			</div>
		</div>
	</div>
<br><br>
			<div>
			&nbsp;
			</div>	
<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2>Subscribe to <span>Newsletter</span></h2>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Enter Your Email..." required="">
				<input type="submit" value="Send">
			</form>
			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">
					<div class="col-md-4 w3agile_footer_grid">
						<h3>About Us</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
							non proident, sunt in culpa qui officia deserunt mollit.</span></p>
					</div>
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Contact Info</h3>
						<ul>
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+234 6865 9702</li>
						</ul>
					</div>
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Navigation</h3>
						<ul>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="courses.html">Courses</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="services.html">Services</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="icons.html">Web Icons</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="mail.html">Mail Us</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_copy_right_social">
				<div class="col-md-6 agileits_w3layouts_copy_right">
					<p>&copy; 2017 FootHill Grammer School. All rights reserved | Designed by <a href="http://data-source.com/">Data-Source</a></p>
				</div>
				<div class="col-md-6 w3_agile_copy_right">
					<ul class="agileinfo_social_icons">
						<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript" src="js/bootstrap.js">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script type="text/javascript" language="javascript">
		
				var day; 
				for(day=1; day<=31; day++){
					document.getElementById('days').innerHTML += "<option>" + day + "</option>";
				}
				var year;
				for(year=1970; year<=2017; year++){
				document.getElementById('years').innerHTML += "<option>" + year + "</option>";
				}
				
				
	var months = ['January','February','March', 'April','May', 'June','July','August', 'September','October','November','December'];
				var sel = document.getElementById('month'); 
				
					for(var i=0; i <months.length; i++){
	
				var opt = document.createElement('Option');
					opt.innerHTML = months[i];
					opt.value = months[i];
					
					sel.appendChild(opt);
				}
				
				
				function makeid() {
				  var text = "FHGS";
				  var possible = "12345678910";

				  for (var i = 0; i < 3; i++)
					text += possible.charAt(Math.floor(Math.random() * possible.length));
					document.getElementById('display').innerHTML = text;
				} 
				
				
</script>
<script src="js/jquery.js"></script>
	<script type="text/javascript" >
	$(document).ready(function(){
		$("#filed_of_study").change(function(){
			var filed_of_study= $("#filed_of_study").val();
			
			// alert(nationality);
			if (filed_of_study =='science'){
				$("#loader").load('sciences.php');
			}
			if(filed_of_study !=""){
				
				$('#submit').prop('disabled','');
			}
			
		})
	});	
	</script>
<!-- //here ends scrolling icon -->
<script src="css/bootstrap.css"></script>
	<script src="js/jquery.js"></script>
</body>
</html>