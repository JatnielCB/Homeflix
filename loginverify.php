<?php
session_start();
//Conection to database//
$host="localhost";
$user="root";
$password="";
$db="tests";
$conect=mysqli_connect($host,$user,$password,$db);
$user2 = $_POST['user'];
$pass = $_POST['password'];

$query = "SELECT COUNT(*) as coun FROM users where user = '$user2' and password = '$pass' ";
$bdconect = mysqli_query($conect,$query);
$parameters = mysqli_fetch_array($bdconect);
if($parameters['coun']>0)
{
  $_SESSION['username'] = $user2;
  //Get time
  $Object = new DateTime();  
  $Object->setTimezone(new DateTimeZone('America/Mexico_City'));
  $DateAndTime = $Object->format("Y-m-d h:i:s a"); 
  //Send time
  $sendtimecommand="UPDATE users SET time='$DateAndTime' WHERE user='$user2'";
  $sendtime=mysqli_query($conect,$sendtimecommand);
  //See admin
  $veradmin="SELECT admin FROM users WHERE user='$user2'";
  $veradminconect = mysqli_query($conect,$veradmin);
  $pas=mysqli_fetch_array($veradminconect);
  $_SESSION['admin']=$pas['admin'];

   //select config file//
  $confiuser="SELECT * FROM settings WHERE configuser='$user2'";
  $dataconfig= mysqli_query($conect, $confiuser);
  $dataarray=mysqli_fetch_array($dataconfig);
  
  if($dataarray['configuser']==$user2)
   {
    $_SESSION['configuser']=$dataarray['configuser'];
    $_SESSION['poster']=$dataarray['poster'];
    header("location: main/index.php");
   }
  else
  {
  $_SESSION['configuser']="default";
  $_SESSION['poster']="default.jpg";
  header("location: main/index.php");
  }

}
else {
$e1=$_GET["info"];
++$e1;
  echo "<script> window.location= 'index.php?error=$e1';
</script>";
}
?>
