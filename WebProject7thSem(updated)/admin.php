<?php
require("connect.php");
if (isset($_SESSION['username'])) {
    header('location: admin_home.php');
}

$msg= ' ';



       if(isset($_POST['submit'])) {
            $user = $_POST['user'];
            $user = mysqli_real_escape_string($conn, $user);
            $password = $_POST['password'];
            $password = mysqli_real_escape_string($conn, $password);
            $query = "SELECT id,username FROM admin WHERE username='" . $user . "' AND password='" . $password . "'";
$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
 $msg = "Invalid E-mail id or Password";
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['username'] = $row['username'];
  $_SESSION['id'] = $row['id'];
  header('location: admin_home.php');
}
       }
        
// Query checks if the email and password are present in the database.
       mysqli_close($conn);
?>

<html>
    <head>
        <title>Admin</title>
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
    position: absolute;
    top: calc(-100px/2);
    left:calc(50% - 50px);
}

            .loginbox{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 350px;
    height: 420px;
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
}
.loginbox input
{
    width: 100%;
    margin-bottom: 20px;
}
.loginbox input[type="text"],.loginbox input[type="password"]
{
    border:none;
    border-bottom: 1px solid #fff;
    background: transparent;
    height: 40px;
    color: #fff;
    font-size:16px;
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
               <h2 id="abc">LOGIN AS ADMIN</h2>
               <form action=" " method="post">
                   
                   <?php if($msg != ' '): ?>
                   <div id="demo" style="color: red;"><?php echo $msg; ?></div>
                   <?php endif; ?>
                   <p>USERNAME</p>
                   <input type="text" name="user" placeholder="enter username">
                   <p>Password</p>
                   <input type="password" name="password" placeholder="password" >  
                   <input type="submit" name="submit" value="signin">
                   
               </form>
           </div>
            
        </div>

    </body>
</html>


