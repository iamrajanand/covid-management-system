<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";
$conn = new mysqli($servername, $username, $password, $dbname);
$query = mysqli_query($conn,"select * from patient");
$count1 = mysqli_num_rows($query);
$query1 = mysqli_query($conn,"select * from patient where corona='YES'");
$count2 = mysqli_num_rows($query1);
$query3 = mysqli_query($conn,"select * from patient where corona='YES' and age between 0 and 25");
$count3 = mysqli_num_rows($query3);
$query4 = mysqli_query($conn,"select * from patient where corona='YES' and age between 26 and 50");
$count4 = mysqli_num_rows($query4);
$query5 = mysqli_query($conn,"select * from patient where corona='YES' and age between 51 and 75");
$count5 = mysqli_num_rows($query5);
$query6 = mysqli_query($conn,"select * from patient where corona='YES' and age between 76 and 100");
$count6 = mysqli_num_rows($query6);
?>