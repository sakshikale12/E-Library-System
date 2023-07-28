
<?php
  
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>
	  E-Library System
	</title>
	<link rel="stylesheet" type="text/css" href="tem_index.css">
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


<body>
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
						<li><a href="books.php">BOOKS</a></li>
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
						<li><a href="home_index.php">HOME</a></li>
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
			<br><br><br>
	
		</div>
		</section>
		
		
	</div>
	<?php

			include "footer.php";


	?>

</body>
</html>
