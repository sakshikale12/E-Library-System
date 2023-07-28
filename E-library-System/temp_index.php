
<?php
  
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>
	  E-Library System
	</title>
	<link rel="stylesheet" type="text/css" href="temp_index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body BGCOLOR="RED">
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/9.png"> <br><br>
			<h1 style="color: white;"> &nbsp &nbsp &nbsp &nbsp &nbsp  E-LIBRARY SYSTEM</h1>
		</div>
		<?php


	if(isset($_SESSION['login_user']))
	{?>

		<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="bookpage.php">BOOKS</a></li>
						<li><a href="user_login.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
			<?php

	}
		else
		{
			?>

			<nav>
					<ul>
					<li><a href="temp_index.php">HOME</a></li>
						<li><a href="user_login.php">LOGIN</a></li>
						<li><a href="admin_login.php">ADMIN-LOGIN</a></li>
				</ul>
			</nav>





			<?php

		   }

	?>
				


			
		</header>
		<section>
			<div class="sec_img">
				<img src="images/img8.jpg">
			<br><br><br>
	
		</div>
		
		</section>
		
		
	</div>
	<div class="para_graph">
	<h2>E-Library System</h2><br>
			<p>
			An E-library, also called an online library, an internet library, a digital library. E-library is a  digital collection  of book pdf, text, documents ,etc. here different types of books have stored in sections such as Biographies, novels, non-fiction books, historical , story books pdf etc. from here user can download book pdf. The System is flexible to be used and reduce the work of user such as to go to library and take hardcopy of book. It’s free for all people, users can access 24/7 to the information and if the book is not available then they can request  for that book. Everyone have their own login credentials so history of every user will be stored.

			</p><br>
			<p>	
		   	<br>

			This project is user-friendly and requires minimum human intervention. Individuals just have to at first time sign-up by filling personal information in form and from next just have to log-in. After that user can see the various sections and various books in that sections and can open it to read and can download them for offline use.
			</p>
		</div>
		<div class="subjects">
			<h2>Categories</h2>
			<table>
				<tr>
					<td>fiction</td>
					<td>Non Fiction</td>
				</tr>
				<tr>
					<td>philosophical</td>
					<td>adventure</td>
				</tr>
				<tr>
					<td>Horror</td>
					<td>Suspense</td>
				</tr>
				<tr>
					<td>Story Books</td>
					<td>Engineering Books</td>
				</tr>
				<tr>
					<td>Technical</td>
					<td>Programming</td>
				</tr>
				<tr>
					<td>Biography</td>
					<td>Novels</td>
				</tr>
			</table>

		</div>
	<?php

			include "footer.php";


	?>

</body>
</html>
