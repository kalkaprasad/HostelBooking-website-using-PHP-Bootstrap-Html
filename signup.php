<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bookmyhostel</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/signup.css"rel="stylesheet"type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<!------php script------>
    <?php
    $connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['submitbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password1=md5($password);
    $cpassword = $_POST['confirmpassword'];
    $cpassword1 = md5($cpassword);
    $pincode = $_POST['pincode'];
    $phone=$_POST['phone'];
    $address=$_POST['Address'];
    
    if($password1 === $cpassword1)
    {
        $query = "INSERT INTO register (username,email,password,confirmpassword,pincode,phone,Address) VALUES ('$username','$email','$password1','$cpassword1','$pincode','$phone','$address')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['success'] = "Adm--------------------------- in Profile Added";
            echo"<script>";
            echo"alert('login success')";
            echo"</script>";
          
        }
        else 
        {
            $_SESSION['status'] = "Admin Profile NOT Added";
             
        }
    }
    else 
    {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
      echo "<script>";
echo "alert('wrong password');";
echo "</script>";
    }
}
    
    ?>

<body>
<div class="signup-form">
    <form action="#" method="POST">
		<h2>Create an Account</h2>
		<p class="hint-text">Sign up with your social media account or email address</p>
		<div class="social-btn text-center">
			<a href="" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
			<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
		</div>
		<div class="or-seperator"><b>or</b></div>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
        	<input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required">
        </div>
		<div class="form-group">
            <input type="Address" class="form-control input-lg" name="Address" placeholder="Addrees" required="required">
        </div>
        <div class="form-group">
            <input type="phone" class="form-control input-lg" name="phone" placeholder="phone" required="required">
        </div>
        <div class="form-group">
            <input type="int" class="form-control input-lg" name="pincode" placeholder="pin code" required="required">
        </div>
        	<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="confirmpassword" placeholder="Confirm Password" required="required">
        </div>  
        <div class="form-group">
            <button type="submit" name="submitbtn"class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
</div>
</body>
</html>                            