
<?php

if(isset($_POST['submit'])){
  $name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $sharif = $_POST['sharif'];
  $date = $_POST['date'];
  $course = $_POST['course'];
  $group = $_POST['group'];
  $file = $_POST['file'];
  $address = $_POST['address'];
}



$server = 'localhost';
$user = 'root';
$psw = '';
$dbname = 'tuit_table';


$con = mysqli_connect($server,$user,$psw,$dbname);

if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}

$sql = "INSERT INTO tuit_form(user_name,sur_name,sharif,date_time,course,group,file,address) VALUES ('$name', '$last_name','$sharif','$date','$course','$group','$file','$address')";

$rs = mysqli_query($con, $sql);


if($rs)
{
  if(empty($name) and empty($last_name) and empty($sharif) and empty($date) and empty($course) and empty($group) and empty($file) and empty($address)){
    header('Location:../main_page/private.php');
  }
  else{
    header('Location:../main_page/main.php');
  }
}


?>