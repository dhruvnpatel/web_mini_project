<?php
require 'navbar-2.php';
require 'connect.php';

$query="SELECT * FROM contacts";
$result= mysqli_query($conn, $query);
echo '<table><th>Name</th><th>Designation</th><th>Phone</th><th>Email</th>';
while($row= mysqli_fetch_array($result))
{
    echo '<tr><td>'.$row['name'].'</td>';
    echo '<td>'.$row['designation'].'</td>';
    echo '<td>'.$row['number'].'</td>';
    echo '<td>'.$row['email'].'</td></tr>';    
}
echo '</table>';
mysqli_close($conn);
?>