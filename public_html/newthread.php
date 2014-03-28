<!DOCTYPE html>
<html>
	<head>
		<title>Computer Science Forum - Utah State University</title>
		<link href="style.css" rel="stylesheet" type="text/css"/>
		<meta charset="utf-8">
	</head>
	<body>
		<!-- header area -->
		<div class="header">
			<a class="user" href="">Login</a> <!-- login and signup to be shown to unregistered users -->
			<a class="user" href="">Sign Up</a>
			<a class="user" href="">User Profile</a> <!-- profile and signout to be shown to registered users -->
			<a class="user" href="">Sign Out</a><br/>
			
			<img src="logo.jpg" name="logo" alt="logo"/><br/>
			
			<form action="" method="post">
				<label>Search Forum: </label>
				<input class="search" name="searchtext" type="text"/>
				<input class="search" value="Search" type="submit"/>
				<a href="">Advanced Search</a><br/>
			</form>
		</div>
		
		<div class="newthread">
			<h2>New Thread</h2>
			<form action="" method="post">
				<label>Thread Title: </label>
				<input class="title" name="threadtitle" type="text"/><br/>
				<textarea rows="20" cols="80"></textarea><br/>
				<input class="makethread" value="Create Thread" type="submit"/>
			</form>
	</body>
</html>