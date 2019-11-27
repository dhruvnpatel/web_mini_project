<?php
require 'navbar.php';
require 'connect.php';

$msg= ' ';

if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $email = mysqli_real_escape_string($conn, $email);
            $password = $_POST['psw'];
            $password = mysqli_real_escape_string($conn, $password);
            $query = "SELECT id,email FROM user WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
 $msg = "Invalid E-mail id or Password";
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['id'] = $row['id'];
  header('location: home.php');
}
       }
?>
<html>
    <head>
        <title>USER</title>
        <style>
 body
{
    background: #2B7A78;
}

.login{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    top: calc(-100px/2);
    left:calc(50% - 50px);
}

            .loginbox{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,10%);
    width: 350px;
    height: 570px;
    padding: 80px 40px;
    box-sizing: border-box;
    background: rgba(0,0,0,.5);
            }
            
            .loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #fff;
    margin-bottom: 20px;
    position: relative;
}
.loginbox input
{
    width: 100%;
    margin-bottom: 20px;
    position: relative;
}
.loginbox input[type="text"],.loginbox input[type="password"]
{
    border:none;
    border-bottom: 1px solid #fff;
    background: transparent;
    height: 40px;
    color: #fff;
    font-size:16px;
    position: relative;
}
::placeholder
{
    color: rgba(255,255,255,.5);
}
.loginbox input[type="submit"]
{
    border:none;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    background: #ff267e;
    cursor: pointer;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    background: #efed40;
    color:#262626;
    
}
.container {
    padding: 16px;
    position: relative;
}
#abc{
    color:white;
}
        </style>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
    <body>
       
        
       <div class="container">
           <div class="loginbox">
               <img src='userlogo.png' class="login">
               <h2 id="abc">LOGIN AS USER</h2>
               <form action=" " method="post">
                   
                   <?php if($msg != ' '): ?>
                   <div id="demo" style="color: red;"><?php echo $msg; ?></div>
                   <?php endif; ?>
                   <p>USERNAME</p>
                   <input type="text" name="email" placeholder="enter username">
                   <p>Password</p>
                   <input type="password" name="psw" placeholder="password" >  
                   <input type="submit" name="submit" value="Login">
                   <a style="float: right; color: white" href="signup.php">Sign up</a>
                   
               </form>
           </div>
            
        </div>

    </body>
</html>

