<?php 
//----------------------main---------------------//
function conectmain()
{
    $host="localhost";
    $userdb="root";
    $password="";
    $db="tests";
    $conect=mysqli_connect($host,$userdb,$password,$db);
    return $conect;
}
//----------------Settings-admin--------------------//

function checkuser($x)
{
    $conect=conectmain();
    $checkuser="SELECT * FROM users Where user='$x'";
    $checkcomplete=mysqli_query($conect,$checkuser);
    $checkarr=mysqli_fetch_array($checkcomplete);
    return $checkarr['user'];
}
function adduser($user,$paswrd)
{
    $conect=conectmain();
    $adduser="INSERT INTO users (user,password,admin) VALUES ('$user','$paswrd',false)";
    $addcomplete= mysqli_query($conect, $adduser);
    return $user;
}
function seeusers()
{
$conect=conectmain();
$getusers="SELECT user FROM users";
$getlist=mysqli_query($conect,$getusers);
$completelist=mysqli_fetch_array($getlist);
}
function verifyadmin($x)
{
$veradmin="SELECT admin FROM users WHERE user='$x'";
$veradminconect = mysqli_query(conectmain(),$veradmin);
$array=mysqli_fetch_array($veradminconect);

return $array['admin'];
}
function deleteuser($user)
{
$conect=conectmain();
$deletecomand="DELETE FROM users WHERE user='$user'";
$completedelete=mysqli_query($conect,$deletecomand);
return $user;
}
function changepassword($x,$y)
{
$changepasscomand="UPDATE users SET password='$x' WHERE user='$y'";
$seendcommand=mysqli_query(conectmain(),$changepasscomand);
}
//------------------Settings-design---------------------//
function getpassword($x)
{
$conect=conectmain();
$getpsswrdcommand="SELECT password FROM users WHERE user='$x'";
$sendpsswdcomand=mysqli_query($conect,$getpsswrdcommand);
$pas=mysqli_fetch_array($sendpsswdcomand);
return $pas['password'];

}
function checksettings($x)
{
    $conect=conectmain();
    $checkposter="SELECT * FROM settings Where configuser='$x'";
    $checkcomplete=mysqli_query($conect,$checkposter);
    $checkarr=mysqli_fetch_array($checkcomplete);
    return $checkarr['configuser'];
}
function addconfiguser($x,$y)
{
    $conect=conectmain();
    $newcuc="INSERT INTO settings (configuser,poster) VALUES ('$x','$y')";
    $sendcu=mysqli_query($conect,$newcuc);
}
function changeposter($x,$y)
{
$conect=conectmain();
$chposcomand="UPDATE settings SET poster='$x' WHERE configuser='$y'";
$senchpos=mysqli_query($conect,$chposcomand);
}
//----------------------------css----------------------------------//
function getmyposter($x)
{
    $conect=conectmain();
    $postercomand="SELECT poster FROM settings WHERE configuser ='$x'";
    $myposter=mysqli_query($conect,$postercomand);
    return $myposter;
}
?>
