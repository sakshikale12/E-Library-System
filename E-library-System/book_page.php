<?php
  include "connection.php";
  include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}
		
		body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
h2{
    text-align:center;
    padding:20px;
}

table,th,td{
    border:2px solid black;
    border-collapse:collapse;
    font-family: "Lato", sans-serif;
    font-size:25px;
}
table{
    width:100%;
    height: 400px;
}
th,td{
    padding:30px;
    text-align:center;
}

	</style>

</head>
<body>
	

	<h2>List Of Book Categories</h2>
    <table>
        <tr>
            <td><a href="fiction.php">Fiction</a></td>
            <td><a href="non_fiction.php">Non-Fiction</a></td>
            <td><a href="philosophical.php">Philosophical</a></td>
        </tr>
        <tr>
            <td><a href="adventure.php">Adventure</a></td>
            <td><a href="novels.php">Novel</a></td>
            <td><a href="biography.php">Biography</a></td>
        </tr>
        <tr>
            <td><a href="suspense.php">Suspense</a></td>
            <td><a href="horror.php">Horror</a></td>
            <td><a href="story_books.php">Story Books</a></td>
        </tr>
        <tr>
            <td><a href="technical.php">Technical</a></td>
            <td><a href="programming.php">Programming</a></td>
            <td><a href="engineering_books.php">Engineering Books</a></td>
        </tr>
            
        

    </table>

	

</body>
</html>
