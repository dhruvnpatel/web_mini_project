<?php
require 'navbar-admin.php';
require 'connect.php';

$query="SELECT * FROM user";
$result= mysqli_query($conn, $query);
echo '<table border"2"><th>Email</th><th>Password</th><th>USN</th><th>Branch</th><th>Phone</th>';
while($row= mysqli_fetch_array($result))
{
    echo '<tr><td>'.$row['email'].'</td>';
    echo '<td>'.$row['password'].'</td>';
    echo '<td>'.$row['branch'].'</td>';
    echo '<td>'.$row['usn'].'</td>';
    echo '<td>'.$row['phno'].'</td>';
    echo '<td><a href="delete_user.php?id='.$row['id'].'" class="btn btn-primary">Delete</a></td></tr>';
    
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
</html>