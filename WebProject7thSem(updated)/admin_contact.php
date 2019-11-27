<?php
require 'navbar-admin.php';
require 'connect.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$desig=$_POST['desig'];
$phone=$_POST['phno'];
$email=$_POST['email'];
    $sql="INSERT INTO `contacts`( `name`,`designation`,`number`,`email`) VALUES ('$name','$desig','$phone','$email')";
    mysqli_query($conn, $sql);
}

$query="SELECT * FROM contacts";
$result= mysqli_query($conn, $query);
echo '<table border="2"><th>Name</th><th>Designation</th><th>Phone</th><th>Email</th>';
while($row= mysqli_fetch_array($result))
{
    echo '<tr><td>'.$row['name'].'</td>';
    echo '<td>'.$row['designation'].'</td>';
    echo '<td>'.$row['number'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td><a href="delete_contact.php?id='.$row['id'].'" class="btn btn-primary">Delete</a></td></tr>';
    
}
echo '</table>';
mysqli_close($conn);
?>
<html>
    <head>
        <style>
            table, td, th
{
border: 1px solid black;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:lightblue;
}
table { margin: auto; }
        </style>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            Name :<br><input type="text" name="name" placeholder="Enter the Name"><br>
            Designation :<br><input type="text" name="desig" placeholder="Enter the Designation"><br>
            Phone :<br><input type="tel" name="phno" placeholder="Enter the Phone Number"><br>
            Email ID :<br><input type="email" name="email" placeholder="Enter the Email ID"><br>
            <input type="reset" value="Reset"><input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html> 