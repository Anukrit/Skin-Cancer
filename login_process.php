
if( isset($_POST["username"])&& isset($_POST["password"]) )
{
	
	$username = $_POST["username"];
		
	$password = $_POST["password"];
	
	if ($username && $password)
	{
	  // if the user has just tried to log in
	
	  //make the database connection
	  $conn  = db_connect();	
	  
	  //make a query to check if user login successfully
	  $sql = "select * from user_details where username='$username' and password='$password'";
	  $result = $conn->query($sql);
	  if ($result->fetch())
	  {
		// login successfully, keep the user's username
		$_SESSION['valid_user'] = $username;
		$sql1 = "select * from user_details where username='$username' and password='$password' and isadmin='Y'";
		$result1 = $conn->query($sql);
		if ($result->fetch())
		{
			$_SESSION['isadmin'] = 1;
		}
	  }
	}
}
if (isset($_SESSION['valid_user']))
{                 
  header("Location:home.php");  
}
else
{
  if (isset($username))
  {
    // if user tried and failed to log in
	$_SESSION['error']='Invalid username or password';
    header("Location:login.php");
  }
  else 
  {
    // user has not tried to log in yet or has logged out
    echo "<b>You are not logged in</b><br>";
  }
