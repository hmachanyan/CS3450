<?php

include 'init.php';
$User = new User();

$data = array(
		'firstName' => 'Sarah',
		'lastName' => 'Bingham',
		'userName' => 'sbingham',
		'password' => 'test123',
		'email' => 'reese.bingham@aggiemail.usu.edu');


$result = $registeredUser = new Registered('sbingham');
if($result)
        echo "Success\n";
else
        echo "Failure\n";


$result = $registeredUser->deleteUser($registeredUser->getUserId());

if($result)
        echo "Success\n";
else
        echo "Failure\n";

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


$result = $registeredUser->setIsAdmin(true, 4);

if($result)
	echo "Success\n";
else
	echo "Failure\n";

$result = $registeredUser->setFirstName('Andrew',4);

if($result)
	echo "Success\n";
else
	echo "Failure\n";

$result = $registeredUser->setLastName('Weight',4);

if($result)
	echo "Success\n";
else
	echo "Failure\n";

$admin = new Admin('rbingham');

$result = $admin->createUser($data);

$data = array(
                'firstName' => 'Dean',
                'lastName' => 'Redington',
                'userName' => 'rbingham1',
                'password' => 'test1234',
                'email' => 'test@test.com');

$result = $admin->createUser($data);

if($result)
	echo "Success\n";
else
        echo "Failure\n";


$admin->editUser('rbingham1', $data);


$result = $admin->resetPassword('rbingham1');

if($result)
        echo "Success\n";
else
        echo "Failure\n";

$result = $admin->deleteUser('rbingham1');

if($result)
        echo "Success\n";
else
        echo "Failure\n";
