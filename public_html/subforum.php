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
		
		<!-- thread list specific to subforum -->
		<div class="threadlist">
			<a href="newthread.html"><button>New Thread</button></a>
			
			<!-- variable info - list of threads in subforum-->
			<!-- get array of subforum's thread titles from database -->
			<table class="threadlist">
			<tr><th><!-- name of subforum (e.g. "CS 3450") --></th></tr>
			<!-- loop for each thread -->
				<tr><td><a href=""><!-- thread title --></a></td></tr>
			<!-- end loop -->
			</table>
			<!-- page numbers based on number of threads? -->
			
		</div>
	</body>
</html>