<?php

include 'init.php';
$User = new User();
$data = array(
		'firstName' => 'Reese',
		'lastName' => 'Bingham',
		'userName' => 'rbingham',
		'password' => 'test123',
		'email' => 'reese.bingham@aggiemail.usu.edu');

$registeredUser = new Registered('rbingham');

$result = $registeredUser->login("rbingham", "test12345");

if($result)
	echo "That is the correct password\n";
else
	echo "That is not correct\n";

$result = $registeredUser->setPassword("test12345", 4);

if($result)
	echo "Success\n";
else
	echo "Failure\n";

$result = $registeredUser->setEmail("test@test.com", 4);

if($result)
	echo "Success\n";
else
	echo "Failure\n";


$result = $registeredUser->setIsAdmin(false, 4);

if($result)
	echo "Success\n";
else
	echo "Failure\n";
