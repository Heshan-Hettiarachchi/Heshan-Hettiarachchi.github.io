<?php
session_start();
$s = $_SESSION['StoreUn'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<h1>Test Book Store</h1>
	<div class="sidebar">
		<ul>
			<li><a href="https://quizzical-ride-f5a5f7.netlify.com/authors.php">Authors</a></li>			
			<li><a href="https://quizzical-ride-f5a5f7.netlify.com/categories.php">Categories</a></li>	
			<li><a href="https://quizzical-ride-f5a5f7.netlify.com/subcategories.php">Sub-Categories</a></li>	
			<li><a href="https://quizzical-ride-f5a5f7.netlify.com/books.php">Books</a></li>	
			<li><a href="https://quizzical-ride-f5a5f7.netlify.com/logout.php">Log-out</a></li>	
		</ul>
	</div>
</body>
</html>