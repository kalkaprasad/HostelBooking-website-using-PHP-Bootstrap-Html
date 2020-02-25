<?php
session_start();
$user=$_SESSION['user'];

//include('login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet"href="css/contactus.css"type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <style>
       
        .profile{
          background-color: blueviolet;   
        }
       
        .center{
            float:right;
            color: blueviolet;
        }
        .web{
            color: darkcyan;
            text-decoration-color: aqua;
            text-decoration-style:dotted;
        }
        .jumbotron{
         text-decoration-style: dotted;
        border: 3px solid white;
            border-radius: 15px 20px;
        }
    </style>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
    </head>
<body>
<div id="profile">
    <div class="container">
    
    <div class="jumbotron">
        <div class="web">
         Bookmyhostel.com
         
        </div>
        <div class="center"> <b id="welcome">Welcome : <i><?php echo $user; ?></i></b></div>
        </div>
    
    </div>


</div>
</body>
</html>