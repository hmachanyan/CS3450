<?php

include 'init.php';
$database = new MysqlDatabase();
$User = new User();
$data = array(
		'firstName' => 'Reese',
		'lastName' => 'Bingham',
		'userName' => 'rbingham',
		'email' => 'reese.bingham@aggiemail.usu.edu');

if($User->register($data))
	echo "User successfully registered\n";
else
	echo "Registration failed\n";
