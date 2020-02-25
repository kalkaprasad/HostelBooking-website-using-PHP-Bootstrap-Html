<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BookmyHostel.com</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"href="css/sign.css"type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<?php
    session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="adminpanel";
    
     $connection = mysqli_connect("localhost","root","","adminpanel");
         if(isset($_POST['signin']))
         {
           $user=$_POST['username'];
            $pass=$_POST['password'];
             $pass1=md5($pass);
            $sql="select * from register where Username='".$user."' AND password='".$pass1."' limit 1";
          
             $result = mysqli_query($connection,$sql);
             if(mysqli_num_rows($result)==1)
             {
                 echo"<script>";
                 echo"alert('login sucess')";
                  echo"</script>";
                 $_SESSION['user']=$user;
                 echo $user;
                 header("location:user.php");
                 exit();
              
         }
             else
             {
                 echo"<script>";
                 echo"alert('failed')";
                  echo"</script>";
          
             }
         }
    ?>
<body>
<div class="login-form">
    <form   method="POST">
        <h2 class="text-center">Sign in</h2>   
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">				
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">				
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" name="signin"class="btn btn-primary login-btn btn-block">Sign in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>
		<div class="or-seperator"><i>or</i></div>
        <p class="text-center">Login with your social media account</p>
        <div class="text-center social-btn">
            <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
            <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>&nbsp; Twitter</a>
			<a href="#" class="btn btn-danger"><i class="fa fa-google"></i>&nbsp; Google</a>
        </div>
    </form>
    <p class="text-center text-muted small">Don't have an account? <a href="signup.php">Sign up here!</a></p>
</div>
</body>
</html>                            