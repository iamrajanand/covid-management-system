<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";
$conn = new mysqli($servername, $username, $password, $dbname);
$query = mysqli_query($conn,"select * from patient where room !=''");
$count1 = mysqli_num_rows($query);
$query2 = mysqli_query($conn,"select * from patient where room >103 and room <501");
$count = mysqli_num_rows($query2);	
$query3 = mysqli_query($conn,"select * from patient where room IN(104,201,202,203,301,302,303)");
$count2 = mysqli_num_rows($query3);	
?>