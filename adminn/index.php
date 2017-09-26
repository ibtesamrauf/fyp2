<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
       
        <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>

<script type="text/javascript" >
    function empty_txt_bx() 
{


if((document.dataform.username.value=="") &&  (document.dataform.password.value=="" ))
{
  alert("MUST ENTER USERNAME AND PASSWORD");
 return false;
  
}

}
</script>

		<form class="form" method="GET" action="index_new.php" name="dataform" onsubmit="return empty_txt_bx(this);" >
			<input type="text" placeholder="Username" name="username" id="username">
			<input type="password" placeholder="Password" name="password" id="password">
			<button type="submit" id="login-button" onclick="empty_txt_bx()" >Login</button>
		</form>
	</div>

</div>
  
    <!--script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script-->
    
  </body>
</html>
