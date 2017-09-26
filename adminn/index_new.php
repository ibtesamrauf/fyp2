<?php



$username = $_GET['username'];
$password = $_GET['password'];


include('con_db.php');

$query = "SELECT * FROM admin WHERE admin_username = '" . $username . "' AND admin_password = '" . $password . "'";

//echo $query;
	
$result = mysql_query($query);

// echo "data gotten from db";

if(mysql_num_rows($result)>0)
{

  while ($record = mysql_fetch_assoc($result))
  {
  	if ($username == $record['admin_username'] && $password == $record['admin_password']) 
    {
      session_set_cookie_params(0);
      session_start();
  		$_SESSION["user1"] = $username;
      header("location: dashboard.php");
    }
   
  }
}
else
{
  echo "<script> alert('WRONG ID OR PASSWORD');
        window.location.href='index.php';
        </script>";
}

?>