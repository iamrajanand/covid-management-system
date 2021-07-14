<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['submit']))
{
$query = mysqli_query($conn,"select * from patient");
$count = mysqli_num_rows($query);
$id=$count+1;
$a=$_POST["name"];
$b=$_POST["age"];
$c=$_POST["gender"];
$d=$_POST["city"];
$e=$_POST["state"];
$f=$_POST["corona"];
$g=$_POST["diagnosed"];
$h=$_POST["condition"];
$i=$_POST["hospitalize"];
$j=$_POST["treatment"];
$k=$_POST["did"];
$l=$_POST["no"];
$query2 = mysqli_query($conn,"INSERT INTO patient ( p_id, name , age , gender , city , state , corona , date_diagnosed , pcondition , hospitalize , treatment , doc_id , room ) value ( '$id' , '$a' , '$b' , '$c' , '$d' , '$e' , '$f' , '$g' , '$h' , '$i' , '$j' , '$k' , '$l' )");

}
?>