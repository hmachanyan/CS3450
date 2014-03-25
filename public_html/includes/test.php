<?php

include 'init.php';
$User = new User();
$data = array(
		'firstName' => 'Reese',
		'lastName' => 'Bingham',
		'userName' => 'rbingham',
		'password' => 'test123',
		'email' => 'reese.bingham@aggiemail.usu.edu');

if( $User->register($data)){
		echo "User successfully created\n";
}
else
	echo "Registration failed\n";
