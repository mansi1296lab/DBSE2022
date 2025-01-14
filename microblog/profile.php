<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- custom styling --> 
	<link rel="stylesheet" type="text/css" href="assets/css/profile.css">
	<!-- using font awesome -->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
	<title>Admin Section</title>

</head>

<body>

<div class="box-area">

	<header>
		<div class="logo">
			<h1 class="logo-text"><span>Team 02 </span> Blog</h1>
		</div>
		<nav>
		<i class="fa fa-bars menu-toggle"></i>
		<ul class="nav">
			<li><b><a href="index.php">Home</a></b></li>
			<li><b><a href="blog.php">Postings</a></b></li>
			<li><b><a href="comments.php">Comments</a></b></li>
		</ul>
		</nav>
		<a class="cta" href="profile.php"><button>Profiles</button></a>
	</header>





<!-- about info with picture -->
<section>
<div class="profile-container">
	<img src="assets/images/profilepic.png" alt="Profile image">
	<!-- about info -->
	<div class="about-text">
		<br>
		<br>
		<h2><u> About Me </h2></u>
		<p>Hello, My name is Mansi Tripathy. I am a developer,<br> also being one of the admin member of our team <br> project for this blog.</p>

	<!-- social buttons-->
		<div class="social-icons">
			<a href="https://www.facebook.com/mansi.tripathy.3511/"><i class="fab fa-facebook-f"></i></a>
			<a href="https://www.linkedin.com/in/mansi-tripathy-97334a139/"><i class="fab fa-linkedin"></i></a>
			<a href="https://twitter.com/mansi_django"><i class="fab fa-twitter"></i></a>
			<a href="https://elearning.ovgu.de/user/profile.php?id=25007"><i class="far fa-envelope"></i></a>
		</div>

	</div>
</div>
</section>


<!-- profile contents-->

<div class="content clearfix">

	<!--main content of each admin-->
	<div class="main-content">
		<h1 class="recent-posts">My Posts</h1>

		<div class="posts">
			<img src="assets/images/post2.jpg" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="#">A day in the life of 'a working student'</a></h2>
				<i class="far fa-user">Mansi Tripathy</i>
				&nbsp;
				<i class="far calender">Jan 10, 2022</i>
				<br>
				<br>
				<p class="preview-text">Semester fees, tuition fees, computers, books, materials and then expenses for living and eating – students have a lot of costs in everyday life. It has definitely not been an easy ride so far. Studying and working at the same time is exhausting. Grinding to the bone. I just completed my fourth semester exams and what a relief it is to be able to breathe again. </p>
				<a href="#">Read More</a>
			</div>
			
		</div>


<div class="posts">
			<img src="assets/images/post3.jpg" alt="" class="post-image">
			<div class="post-preview">
				<h2><a href="#">Impact of collaborative learning in instituions</a></h2>
				<i class="far fa-user">Mansi Tripathy</i>
				&nbsp;
				<i class="far calender">Jan 20, 2022</i>
				<br>
				<br>
				<p class="preview-text">Collaborative approaches to teaching and assessing students have been long practised by educators in a variety of educational settings. Collaborative learning is useful in developing students’ ability to learn to work as a team while getting them engaged in the learning activities. </p>
				<a href="#">Read More</a>
			</div>
			
		</div>


	</div>

	<div class="sidebar">
		<h1>My Comments</h1>


	</div>

</div>
<!-- //profile content -->


<section>

	<div class="other-profiles">
		<u><h2>Other Profiles</h2></u>


		<div class="admins">
			<img src="assets/images/profilepic.png">
			<div class="three"><a href="#"><b>Madhuri</b><br><b>Tawde</b></a></div>
		</div>



		<div class="admins">
			<img src="assets/images/profilepic.png">
			<div class="three"><a href="#"><b>Siva</b><br><b>Matta</b></a></div>
		</div>


	
		<div class="admins">
			<img src="assets/images/profilepic.png">
			<div class="three"><a href="#"><b>Add</b><br><b>Profile</b></a></div>
		</div>
		
	</div>	



</section>





</body>
</html>