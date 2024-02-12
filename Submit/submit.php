<?php


if(isset($_POST['btn']))
{
    $user = $_POST['user'];
    $psw = $_POST['psw'];
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "tuit_table";


$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}

$sql = "INSERT INTO tuit_register(log_username, log_password) VALUES ('$user', '$psw')";


$rs = mysqli_query($con, $sql);

if($rs)
{
  if($user=='1BK25883' and $psw=='Adiyor2004'){
    header('Location:../main_page/main.php');
  }
  else{
    header('Location:../index.php');
  }
}
?>