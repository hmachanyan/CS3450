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
		
		<!-- thread contents -->
		<div class="thread">
			<!-- variable info - posts/comments in thread -->
			<!-- get list of posts in thread -->
			
			<table class="postlist">
				<tr><th><!-- thread title --></th></tr>
				<tr><td><!-- original post --></td></tr>
				<!-- loop for each reply -->
				<tr><td><!-- reply post --></td></tr>
				<!-- end loop -->
			</table>
			<form action="" method="post">
				<button>Reply to this Thread</button> <!-- TODO: open reply dialogue box -->
			</form>
			<!-- page numbers for additional replies -->
		</div>
	</body>
</html>