<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>unit tests</title>
        <style>
            h5.pass {color:green;}
            h5.fali {color:red;}
            div {margin-left:20px;}
            h3 {color:blue;}
            
         </style>
    </head>
    <body>
        <?php
        // Create connection 
        $con=mysqli_connect("localhost","root","root","forum");
        echo "<div>";
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "<h3>Connection Unit Test</h3>";
            echo "<h5 class='fail'>Failed to connect to MySQL: " . mysqli_connect_error() . "</h5>";
        }
        else
        {
            echo "<h3>Connection Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
        }
        echo "</div>";
        
        //Non-Registered User Tests
        echo "<h1>Non-Registered User Unit Tests</h1>";
        //searchThread
       
        $result = mysqli_query($con, "INSERT INTO `thread`(`authorID`,
                                   `title`, `content`, `tags`, `status`) 
                                    VALUES ('1','First One','you suck','go',
                                    'a')");
        
        echo "<div>";
        $result = mysqli_query($con, "SELECT `threadID`, `authorID`, `title`, "
                                    . "`content`, `tags`, `status` FROM `thread` "
                                    . "WHERE `tags` = 'go'");
        if ($result)
        {
            echo "<h3>Search Thread Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
             $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Search Thread Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }

    echo "</div>";
        //viewThread
    echo "<div>";
        $result = mysqli_query($con, "SELECT `threadID`, `authorID`, `title`, `content`, 
            `tags`, `status` FROM `thread` WHERE threadID = '2'");
        
         if ($result)
        {
            echo "<h3>View Thread Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
             $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>View Thread Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
echo "</div>";
        echo "<h1>Registered User Unit Tests</h1>";
        //Register
echo "<div>";
        $result = mysqli_query($con, "INSERT INTO `user`(`firstName`, `lastName`, 
                         `userName`, `password`, `email`) VALUES ('Tyson','Sorensen',
                         'tyson','go','foo@bar')");
        if($result)
        {
            echo "<h3>Register Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT * FROM `user` WHERE `firstName` = 'Tyson'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Register Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        
echo "</div>";
echo "<div>";

        //getPassword

        $result = mysqli_query($con, "SELECT `password` FROM `user` WHERE userName = 'Tyson'");
        if($result)
        {
            echo "<h3>Get Password Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Get Password Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        //setPassword
echo "<div>";
        $result = mysqli_query($con, "SELECT `userID`, `password`  FROM `user` WHERE userName='Tyson'");
        if($result)
        {
            echo "<h3>Get Password and userID Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Get Password and userID Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
    echo "</div>";
    echo "<div>";
        $result = mysqli_query($con, "UPDATE `user` SET `password`= 'banana' 
                    WHERE userName = 'Tyson' AND userID = '1'");
        
        if($result)
        {
            echo "<h3>Set Password Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT * FROM `user` WHERE `firstName` = 'Tyson'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Set Password Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        
        //getEmail
        echo "<div>";
        
        $result = mysqli_query($con, "SELECT `email` FROM `user` WHERE userID = '3'");
        
        if($result)
        {
            echo "<h3>Get Email Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Get Email Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //setEmail
        
        echo "<div>";
        
        $result = mysqli_query($con, "UPDATE `user` SET `email` = 'updated@go'"
                                       ."WHERE `userID` = '3'");
        
        if($result)
        {
            echo "<h3>Set Email Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT `email` FROM `user` WHERE userID = '2'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Set Email Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //getIsAdmin
        echo "<div>";
        
        $result = mysqli_query($con, "SELECT `isAdmin` FROM `user` WHERE userID = '1'");
        
        if($result)
        {
            echo "<h3>Get isAdmin Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Get isAdim Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //setIsAdmin
        echo "<div>";
        
        $result = mysqli_query($con, "UPDATE `user` SET `isAdmin` = '1'"
                                       ."WHERE `userID` = '3'");
        
        if($result)
        {
            echo "<h3>Set isAdmin Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT `isAdmin` FROM `user` WHERE userID = '3'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Set isAdmin Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //get First Name
        
        echo "<div>";
        
        $result = mysqli_query($con, "SELECT `firstName` FROM `user` WHERE userID = '1'");
        
        if($result)
        {
            echo "<h3>Get First Name Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Get First Name Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //set First Name
        
         echo "<div>";
        
        $result = mysqli_query($con, "UPDATE `user` SET `firstName` = 'foo'"
                                       ."WHERE `userID` = '3'");
        
        if($result)
        {
            echo "<h3>Set First Name Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT `firstName` FROM `user` WHERE userID = '3'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Set First Name Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
       
        //get Last Name
        
        echo "<div>";
        
        $result = mysqli_query($con, "SELECT `lastName` FROM `user` WHERE userID = '1'");
        
        if($result)
        {
            echo "<h3>Get Last Name Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Get Last Name Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //set Last Name
        
         echo "<div>";
        
        $result = mysqli_query($con, "UPDATE `user` SET `lastName` = 'bar'"
                                       ."WHERE `userID` = '3'");
        
        if($result)
        {
            echo "<h3>Set Last Name Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT `lastName` FROM `user` WHERE userID = '3'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Set Last Name Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //create comment
        
        echo "<div>";
        
        $result = mysqli_query($con, "INSERT INTO `comment`(`threadID`, 
                `authorID`, `content`,`title`)
                VALUES ('2','2','RAD','Awesome')");
        
        if($result)
        {
            echo "<h3>Create Comment Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT * FROM `comment`");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Create Comment Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //edit comment
        
        echo "<div>";
        $result = mysqli_query($con, "UPDATE `comment` SET `content`='updated',
                `title`='changed' WHERE `commentID` = '1'");
        
        if($result)
        {
            echo "<h3>Edit Comment Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT * FROM `comment`");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Edit Comment Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //delete comment
        echo "<div>";
        $result = mysqli_query($con, "DELETE FROM `comment` WHERE `commentID` = '2'" );
        
        if($result)
        {
            echo "<h3>Delete Comment Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT * FROM `comment` WHERE `commentID` = '2'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Delete Comment Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //create thread
        
        echo "<div>";
        
        $result = mysqli_query($con, "INSERT INTO `thread`(`authorID`,
                `title`, `content`, `tags`, `status`)
                VALUES ('1','Title','you uou','fun','a')");
        
        if($result)
        {
            echo "<h3>Create Thread Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT * FROM `thread`");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Create Thread Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //edit thread
        
        echo "<div>";
        $result = mysqli_query($con, "UPDATE `thread` SET `title`='changed',`content`='jdjdjdj',
                `tags`='fun',`status`='c' WHERE threadID = '2'");
        
        if($result)
        {
            echo "<h3>Edit Thread Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT * FROM `thread` WHERE threadID = '2'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Edit Thread Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        //delete thread
        
        echo "<div>";
        $result = mysqli_query($con, "DELETE FROM `thread` WHERE `threadID` = '3'" );
        
        if($result)
        {
            echo "<h3>Delete Thread Unit Test</h3>";
            echo "<h5 class='pass'>PASSED</h5>";
            $result = mysqli_query($con, "SELECT * FROM `comment` WHERE `commentID` = '3'");
            $row = mysqli_fetch_array($result);
            echo '<pre>'; print_r($row); echo '</pre>';
        }
        else
        {
            echo "<h3>Delete Thread Unit Test</h3>";
            echo "<h5 class='fail'>FAILED</h5>";
        }
        echo "</div>";
        
        
        ?>
    </body>
</html>
