<?php
session_start();
include_once('config.php');
    
?>
<html>
    <head>
        <title>
            Registered!!!
        </title>
    </head>
    <body>
        <!--<h1>You are Registered!!!</h1>-->
        <?php
            if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['uname'])||empty($_POST['pw'])||empty($_POST['gender'])||empty($_POST['state'])||empty($_POST['email']))
            {
                $_SESSION['error']="All the fields are mandatory.<br/>";
				header("Location:register.php");
				
            }
			else{
				unset($_SESSION['error']);
			}


if(isset($_POST['fname'], $_POST['lname'], $_POST['uname'], $_POST['pw'],$_POST['email'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $password = $_POST['pw'];
    $gender= $_POST['gender'];
	$email=$_POST['email'];
	if($gender=='Male')
		$gender='M';
	else
		$gender='F';
    $state = $_POST['state'];
    //make the database connection
    $conn  = db_connect();
    //create an insert query    
    $sql = "insert into user_details (first_name,last_name,email,username,password,gender) VALUES ('$fname', '$lname','$email','$uname', '$password','$gender')";
    //execute the query
    if($conn -> query($sql))
    {
		$_SESSION['error']="Registration successful. You can login now";
        header("Location:login.php");
    }
    else{
		echo $conn->error;
        echo 'Issue in data entry';
    }
    $conn -> close();       
}
else {
    die("Input error");
}
?>


        
    </body>
</html>
