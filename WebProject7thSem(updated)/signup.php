<?php
require 'navbar.php';
require 'connect.php';

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['psw-repeat'];
    $branch=$_POST['branch'];
    $usn=$_POST['usn'];
    $phno=$_POST['phno'];
    $mem=$_POST['mem'];
    if($_POST['psw']==$_POST['psw-repeat'])
    {
        $query = "SELECT id,member_no FROM member WHERE member_no='" . $mem . "'";
$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
$num = mysqli_num_rows($result);
        if($num==0)
       {
            echo 'Invalid Membership Number';
       }
       else
       {
        $sql = "INSERT INTO user (email, password, branch, usn, phno) VALUES ('$email', '$password', '$branch', '$usn', '$phno')";

    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('new record saved');</script>";
      //header('location:login.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    }
    else 
    {
        echo "<br><p>Passwords are not matching</p>";
    }
mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  width: 20%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
    
    <form action="" style="border:5px solid #ccc; padding-top: 5%;" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
    
    <label for="branch"><b>Branch</b></label><br>
    <input type="text" placeholder="Enter Branch Name" name="branch" required><br>
    
    <label for="usn"><b>USN</b></label><br>
    <input type="text" placeholder="Enter USN" name="usn" required><br>
    
    <label for="phno"><b>Phone Number</b></label><br>
    <input type="number" placeholder="Enter Your Phone Number" name="phno" required><br>
    
    <label for="mem"><b>Membership Number</b></label><br>
    <input type="number" placeholder="Enter Your Membership Number" name="mem" required><br>

    <div class="clearfix">
        <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>

