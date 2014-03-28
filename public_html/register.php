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
		
		<div class="register">
			<h2>Create Account</h2>
			<form action="" method="post">
				<label>Username: </label>
				<input class="username" name="username" type="text"/><br/>
				<label>Password: </label>
				<input class="password" name="password" type="text"/><br/>
				<label>Email Address: </label>
				<input class="email" name="email" type="text"/><br/>
			</form>
		</div>
	</body>
</html>