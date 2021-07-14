<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['Search']))
{
 $a=$_POST["room"];
 $query = mysqli_query($conn,"select * from patient where patient.room='$a'");
 $query1= mysqli_query($conn,"select type from room where roomno='$a'");
 $b=mysqli_fetch_array($query1);
}
?>