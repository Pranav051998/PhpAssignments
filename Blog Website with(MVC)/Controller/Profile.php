<?php
session_start();
if(isset($_SESSION['username'])){
	?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
<div class="body1">
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">

					<img src="/upload/Pranav.JPG" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Pranav Prakash
					</div>
					<div class="profile-usertitle-job">
						Intern
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
               About:
			   <p>wredsbhwqggjghejfhehfhefhehfhwejfhiehfheifheifhiehfiehfihff
			   jegrjqwjhjqewhjjhejejrjqefjqwrjhqwjrhjerhjerhjhrjherjhejrh
			   reqfefhbsbhbjsfbjdbjdfjfbjefbjefjejejejejejejjrjefbjdjbbjdf
			   ebjfjbjfbjejejebjcbcbjebjbjbcjbjbjbajbbdjfjgefgeefefefiefih</p>
            </div>
		</div>
	</div>
</div>
</div>
<br>
<br>
</body>
</html>
<?php
 }

 else{
 	header('location:../Model/miniproject.php');
 }
 ?>
 <!--../upload/Pranav.JPG-->