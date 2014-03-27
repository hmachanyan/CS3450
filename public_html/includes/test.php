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


$data = array(
	'threadID' => 1,
	'authorID' => 1,
	'content' => "Help",
	'title' => 'title'
);

$comment = new Comment(0, true, $data);

$comment = new Comment(1);

echo $comment->getContent();

$result = $comment->setContent("It Worked");

if($result)
        echo "Success on update content\n";
else
        echo "Failure on update content\n";

$result = $comment->setTitle("success");

if($result)
        echo "Success on update title\n";
else
        echo "Failure on update title\n";

$result = $comment->setAuthID(2);

if($result)
        echo "Success on update authorID\n";
else
        echo "Failure on update authorID\n";

$result = $comment->setDate("2000-03-27");

if($result)
        echo "Success on update date\n";
else
        echo "Failure on update date\n";
