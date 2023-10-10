<?php
$host="localhost";
$username="root";
$userpassword="";
$db="personal_ex2";
$mydbc=mysqli_connect($host,$username,$userpassword,$db);

if(isset($_POST["register"])){
    $Name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Picture=$_FILES["Picture"]["name"];
    $Picture=$_FILES["Picture"]["name"];
    $Picture=$_FILES["Picture"]["name"];
    $Password=$_POST["Password"];
}
?>