<!doctype html>
<?php
    session_start();
    $session = $_SESSION['username'];
    if(!isset($session)){header("location: ../login.php");}

    require('source/phpstuff/users.php');
    $passwordSession=getpassword($session); 
    $passwordSessionStrlen=strlen($passwordSession);
    
    $text=$_SESSION['configuser'];
    $admin=$_SESSION['admin'];
    $poster=$_SESSION['poster'];
    $color=$_SESSION['color'];
 ?>
 <html>
<html>
<head>

    <meta charset="utf-8"/>                                                     <!--Tipografia-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>       <!--Responsive Tag-->
    <link type="text/css" rel="stylesheet" href="source/indexcss.php"/>            <!--Stylesheet SOURCE-->
    <link rel="stylesheet" type="text/css" href="source/bs/css/bootstrap.css">  <!--Bootstrap CSS SOURCE-->
    <title>Homeflix</title>                                                     <!--Title-->
    <link rel="shortcut icon" href="img/logos/homeflixlogo2.png"/>              <!--Title Icon-->

    
    <!---------------------------------------------------------------------------------------------------->
                                     <!-----------Fonts------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!---------------------------------------------------------------------------------------------------->
  </head>
<style>

</style>
<body>
<script>
window.onload=function(){
var pos=window.name || 0;
window.scrollTo(0,pos);
}
window.onunload=function(){
window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
}
</script>
<!-------------------------------------------------------------------------------------------------------------------------------------->
                              <!---------------------header-nav-------------------->
<nav class="navbar n-color">
    <div class="container-fluid mytxt">
        <a class="navbar-brand  "><p class="m-0 LOGO">Settings</p></a>
        <label for="boton" class="btn" id="label" ><img class="myhidden-sm"src="img/logos/30x30menuw2.png"></label>
    </div>
    </nav>
<!-------------------------------------------------------------------------------------------------------------------------------------->





<!-------------------------------------------------------------------------------------------------------------------------------------->
                              <!---------------------Side-nav-------------------->
<div class="container-fluid mytxt g-0 bg-dark float-end">
    <input class="myhidden-sm float-end" id="boton" type="checkbox" >
    <div class=" p-0 px-2 sidenav" >
        <a class=" mytxt" href="?pagina=1"><p class="mb-2 mt-3 p-3 border border-info sidenav-opt">Info</p></a>
        <a class=" mytxt" href="?pagina=2"><p class="mb-2 p-3 border border-info sidenav-opt">Profile</p></a>
        <a class=" mytxt" href="?pagina=3"><p class="mb-2 p-3 border border-info sidenav-opt">Design</p></a>
        <?php if($admin==1){
        echo"<a class='mytxt'  href='?pagina=4'><p class='mb-2 p-3 border border-info'>ADMIN</p></a>";}//450px//?>
        <a class=" mytxt" href="index.php"><p class="mb-2 p-3 border border-info sidenav-opt">Exit</p></a>
        <p class="text-center">Homeflix</p>
     </div>
  
<!-------------------------------------------------------------------------------------------------------------------------------------->





<!-------------------------------------------------------------------------------------------------------------------------------------->
                              <!---------------------Content-center-------------------->
<div class="container-fluid mytxt center p-0  centerbg">
        <?php
       
        $pagina=$_GET['pagina'];
            if($pagina==1){ echo '
            <div class="container-fluid mytxt">
                <h1 class="  text-center  title py-2">Info</h1>
                <p>This isnt a real web page, this is just a project</p>
            </div>
                ';}
            if($pagina==2){ 


                
                echo "
                
            <div class='container-fluid mytxt'>
               
             
                
                <div class='mycard'>
                <h2 class='text-center  cardtitle py-2 '>Profile</h2>
                     <div class='  d-flex flex-column align-items-center'>
                        
                        <div class='d-block mybg-seepass'>
                            <h4 class='m-0 text-center'>User: $session </h4>
                                <h4 id='verpas' class='text-center ' data-value='1'>Password:</h4>
                                <script>
                                    passstrlen= $passwordSessionStrlen;
                                    var click=document.getElementById('verpas');
                                    var hiddenpassword='';
                                    for(i=0;i<passstrlen;i++)
                                    {
                                    hiddenpassword+='*';
                                    
                                    click.innerHTML='Password:'+ hiddenpassword;
                                    }
                                    </script>
                                </div> 
                                <div>
                                <button id='bottonVerOcultar' class='ms-2 border border-danger bg-danger mytxt' onclick='showpassword()'>Mostrar</<button>
                                </div>
                                <br>
                     </div>
                </div>
                <br>
                     <div class='text-center mytxt p-auto m-0 mycard mb-3'>
                                <h4 class='text-center cardtitle'>Change password</h4>                                   <!--cardtitle--> 
                                 <p class='m-0 p-2'>Warning<br>The password must have at least 15 characters</p>
                                 <div class='d-inline-flex adduser my-4'>
                                     <form method='post' class='px-3'>
                                         <div class='pb-3'>
                                            <h5 class='my-2'>Current password</h5>
                                            <input class='myinputtxt' type='password' name='actualpass' placeholder='Corrent'>
                                        </div>
                                         <div class='pb-3'>
                                             <h5 class='my-2'>New Password</h5>
                                             <input class='myinputtxt' type='password' name='changepass' placeholder='New'>
                                         </div>
                                         <div class=' pb-3'>
                                             <h5 class='my-2'>Repeat the new password</h5>
                                             <input type='password' name='verifychangepass' placeholder='Repeat'><br>
                                         </div>
                                         <input class='my-2' type='submit' class='btn ' name='changepassword'>
                                     </form>
                                 </div>
                                 "; 
                                 if(isset($_POST['changepassword']))
                                 {
                                    $passwordOldVerify=$_POST['actualpass'];
                                    $passwordChange=$_POST['changepass'];
                                    $passwordChangeVerify=$_POST['verifychangepass'];
                                        
                                    if((strlen($passwordOldVerify)<=0 || strlen($passwordChange)<=0) || strlen($passwordChangeVerify)<=0)
                                    {
                                    echo "<p class='bg-warning mytxt-dark bg-warning text-center'>Error<br>The form cannot have empty fields</p>";
                                    }
                                    else
                                    {
                                    if($passwordSession==$passwordOldVerify)
                                    {

                                    if($passwordChange==$passwordChangeVerify)
                                    {
                                    if($passwordChange!=$passwordSession)
                                    {
                                    
                                    echo "<p class='bg-success text-center'>Correct!<br>The password has changed</p>";
                                    changepassword($passwordChange,$session);
                                    $passwordSession=getpassword($session); 
                                    $passwordSessionStrlen=strlen($passwordSession);
                                    echo "
                                    <script>
                                    passstrlen= $passwordSessionStrlen;
                                    var click=document.getElementById('verpas');
                                    var hiddenpassword='';
                                    for(i=0;i<passstrlen;i++)
                                    {
                                    hiddenpassword+='*';
                                    
                                    click.innerHTML='Contraseña:'+ hiddenpassword;
                                    }
                                    </script>";
                                    }
                                    else
                                    {
                                        echo "<p class='bg-warning mytxt-dark bg-warning text-center'>Error<br>The new password cannot be the same as the current one</p>";
                                    }
                                    }
                                    else
                                    {
                                        echo "<p class='bg-warning mytxt-dark bg-warning text-center'>Error<br>The password doesnt match</p>";
                                    }
                                    }
                                    else
                                    {
                                        echo "<p class='bg-warning mytxt-dark bg-warning text-center'>Error<br>Current password doesnt match</p>";
                                    }
                                    }
                                 }
                                 
                                 echo"
                    </div>
               
               
            </div>
            ";}
            if($pagina==3){ echo "
            <div class='container-fluid mytxt p-0 '>
            <h1 class=' text-center  title py-2'>Design</h1>
                <br>
                <div class='mycard'>
                <h4 class='text-center cardtitle m-0'>Edit the main page image</h4>
                    <div class='d-flex p-2  flex-column '>
                    <table class='table table-dark table-bordered border-success'>
                    <tbody class='text-center'>
                    <td class='w-25 lol1' ><button id='default.jpg' class='mybutton border-0' onclick='iluminar(a);'><img class='img-thumbnail border-0 bg-transparent 'src='img/logos/posters/default.jpg'></button></td>
                    <td class='w-25 lol1' ><button id='default2.jpg' class='mybutton border-0' onclick='iluminar(b);'><img class='img-thumbnail border-0 bg-transparent 'src='img/logos/posters/default2.jpg'></button></td>
                    <td class='w-25 lol1' ><button id='psposter.jpg' class='mybutton border-0' onclick='iluminar(c);'><img class='img-thumbnail border-0 bg-transparent 'src='img/logos/posters/psposter.jpg'></button></td>
                    </tbody>
                    <tbody class='text-center'>
                    <td class='w-25 lol1' ><button id='haloposter1.jpg' class='mybutton border-0' onclick='iluminar(d);'><img class='img-thumbnail border-0 bg-transparent 'src='img/logos/posters/haloposter1.jpg'></button></td>
                    <td class='w-25 lol1' ><button id='haloposter2.jpg' class='mybutton border-0' onclick='iluminar(e);'><img class='img-thumbnail border-0 bg-transparent 'src='img/logos/posters/haloposter2.jpg'></button></td>
                    <td class='w-25 lol1' ><button id='haloposter3.jpg' class='mybutton border-0' onclick='iluminar(f);'><img class='img-thumbnail border-0 bg-transparent 'src='img/logos/posters/haloposter3.jpg'></button></td>
                    </tbody>
                </table>
                <form name='form1'class='d-flex justify-content-center'method='post'>
                <input type='text' name='text' class='d-none'>
                <button id='button' name='enviarposter' data-value=''class='btn btn-primary' >Save</button>
                </form>
                ";
                if(isset($_POST['enviarposter']))
                {
                    $poster=strlen($_POST['text']);

                    if($poster<6){

                        echo"<p class='bg-warning text-center mt-2 m-0 mytxt-dark'>Error, select an option";
                    }
                    else
                    {
                        $poster=$_POST['text'];
                        if($session==checksettings($session))
                        {
                        changeposter($poster,$session);
                        $_SESSION['poster']=$poster;
                        echo "<p class='bg-success text-center m-0 mt-2'>Changes saved</p>";
                        }
                        else
                        {
                            echo "<p class='bg-warning mytxt-dark text-center m-0 mt-2'>Config file doesnt exist<br>Creating Config file...</p>";
                            addconfiguser($session,$poster);
                            $_SESSION['poster']=$poster;
                            echo"<p class='bg-success text-center m-0 mt-2'>Config file for $session successfully created.<br>(home image changed)</p>";
                            
                        }

                    }
                }
                
                echo "
                    </div>
                </div>
                
            </div>
            ";}
            
    if(($admin==1)&&($pagina==4)){ echo "
            <div class='container-fluid mytxt p-0 col-12'>

                <h1 class=' text-center title py-2'>ADMIN</h1>
                <br>
                <div class='mycard'>
                    <h4 class='text-center cardtitle m-0'>Users list</h4> 
                        <div class='d-flex p-2 '>
                        <table class='table table-dark  table-bordered border-primary'>
                            <thead class='text-center'>
                                <tr>
                                    <th scope='col'>Id</th>
                                    <th scope='col'>User</th>
                                    <th scope='col'>Admin</th>
                                    <th scope='col'>Last Login</th>
                                </tr>
                            </thead>
                            <tbody class='text-center'>
                            ";
                            $sql="SELECT * FROM users";
                            $result=mysqli_query(conectmain(),$sql);
                            while($mostrar=mysqli_fetch_array($result)){
                                echo "<tr>
                                <th '>";echo $mostrar['id']; echo "<?php?></th>
                                <th >";echo $mostrar['user']; echo "</th>
                                <th >";echo $mostrar['admin']; echo "</th>
                                <th class='mytxt-green'>";echo $mostrar['time']; echo "</th>
                                </tr>";}
                                echo " 
                            </tbody>
                        </table>
                        
                        </div>
                       
                </div>
                <br>
                <div class='text-center mytxt p-auto m-0 mycard'>
                   <h4 class='text-center cardtitle'>Add User</h4>                                   <!--cardtitle--> 
                    <p class='m-0 '>Warninng<br>The user and password must have at least 15 characters</p>
                    <div class='d-inline-flex adduser my-4'>
                        <form method='post' class='px-3'>
                            <div class='pb-3'>
                                <h5 class='my-2'>User Name</h5>
                                <input type='text' name='newuser' placeholder='User'>
                            </div>
                            <div class='pb-3'>
                                <h5 class='my-2'>Password</h5>
                                <input class='myinputtxt' type='password' name='newpassword' placeholder='Password'>
                            </div>
                            <div class=' pb-3'>
                                <h5 class='my-2'>repeat password</h5>
                                <input type='password' name='verifypassword' placeholder='Repeat password'><br>
                            </div>
                            <button class='my-2' type='submit' class='btn btn-primary' name='register'>Send</button>
                        </form>
                    </div>"; 
                    if(isset($_POST['register']))
                    {
                    $userNew=$_POST['newuser'];
                    $passwordNew=$_POST['newpassword'];
                    $passwordNewVerify=$_POST['verifypassword'];
                    if((strlen($userNew)<15)&&(strlen($passwordNew)<15))
                    {
                        if((strlen($userNew)>0)&&(strlen($passwordNew)>0))
                        {
                            if($passwordNew==$passwordNewVerify)
                            {
                            
                            if($userNew==checkuser($userNew))
                            {
                            echo "<p class='bg-warning mytxt-dark'>Error, el Usario ya Existe</p>";
                            }else
                            {
                            adduser($userNew,$passwordNew);
                            echo "<p class='bg-success pt-1'>Operación  Exitosa<br>NUEVO USUARIO: $userNew </p>";
                            }
                            }
                            else{ echo "<p class='bg-warning mytxt-dark'>Error, la contraseña no coincide</p>";}
                        }
                        else{echo "<p class='bg-warning mytxt-dark'>Error, Usuario o Contraseña Vacio </p>";}
                    }
                    else{echo "<p class='bg-warning mytxt-dark'>Error, Usario y/o Contraseña demasiado Largo</p>";};
                }
                echo "
                </div>
                <br>
                <div class='mycard'>
                <h4 class='text-center cardtitle' id='Eliminar'>Delete User</h4>
                <div class='d-flex justify-content-center align-items-center flex-column'>
                <p class='cardtitle text-center p-2 my-4'>Warning<br>This action can not be undone</p>
                <form method='post'>
                <input type='text' placeholder='User' name='user'>
                <button type='submit' name='delete1' class='btn btn-primary'>Send</button>
                </form></div>";
                
                
                if(isset($_POST['delete1']))
                {
                $userDel=$_POST['user'];

                if(strlen($userDel>=1)){
                $userDelChecked=checkuser($userDel);
                if($userDelChecked==$userDel)
                {
                if($userDelChecked==$session){
                echo "<p class='bg-warning text-center mytxt-dark p-1 mt-3'>Error<br>You cant delete yourself... lol </p>";
                }
                else
                {
                
                $userDelVerifyAdmin=verifyadmin($userDelChecked);
                
                if($userDelVerifyAdmin!=0)
                {
                    echo "<p class='bg-warning text-center mytxt-dark p-1 mt-3'>Error<br>You cant delete an admin user</p>";
                }
                else
                {   
                    
                   
                    echo "<p class='bg-warning text-center mytxt-dark mt-3'>Do you really want to delete: <br>'$userDelChecked' ?</p>
                    <form  method='post'name='form2'class='mb-3'>
                    <button type='submit' name='deleteafirmative' class='btn btn-danger' onclick='deleteuser($userDelChecked)'>DELETE :(</button>
                    <button type='submit' name='deletenegative' class='btn btn-success'>Cancel :)</button>
                    <input class='d-none'type='text' name='text2'> 
                    </form>
                    <script>window.document.form2.text2.value='$userDelChecked';</script>
                    ";

                }
                }
                }
                else{echo "<p class='bg-warning text-center mytxt-dark mt-3'>Error<br>User not found</p>";}
                }
                else{echo "<p class='bg-warning text-center mytxt-dark mt-3'>Error<br>The form cannt be empty</p>";}
                }
                
                if(isset($_POST['deleteafirmative']))
                {
                  deleteuser($_POST['text2']);
                    echo "<p class='bg-dark text-center mt-3'>User<br>DELETED</p>";
                }
                if(isset($_POST['deletenegative']))
                {
                    echo "<p class='bg-success text-center mt-3'>Cancelled</p>";
                }
                echo "
                </div>
                </div>
            </div>
            ";
            }
            ?>
        
  </div>
        
<!-------------------------------------------------------------------------------------------------------------------------------------->


</body>
<!---------------------Bootstrap js SOURCE-------------------->
<script>

var a="default.jpg";
var b="default2.jpg";
var c="psposter.jpg";
var d="haloposter1.jpg";
var e="haloposter2.jpg";
var f="haloposter3.jpg";

function iluminar(x)
{
var imgclass= document.getElementsByClassName('mybutton');
var imgid = document.getElementById(x); 


if(imgid.dataset.value==2)
{
    
          imgid.style.background= '#000';
          imgid.dataset.value=1;
          window.document.form1.text.value='none';

}  
else
{
    for(i=0;i<=5;i++)
    {
    imgclass[i].dataset.value=1;
    imgclass[i].style.background= '#000';
    window.document.form1.text.value='none';
    }
        imgid.style.background= '#0088FF';
        imgid.dataset.value=2;
        window.document.form1.text.value=x;
}   
}
</script>
<script>

function showpassword(x)
{

pass="<?php echo $passwordSession?>";
var click=document.getElementById('verpas');
var buttonvo=document.getElementById('bottonVerOcultar');

if(click.dataset.value==1)
{
click.dataset.value=2;
click.innerHTML="Contraseña:"+ pass;
buttonvo.innerHTML="Ocultar";
}
else
{
click.dataset.value=1; 
click.innerHTML="Contraseña:"+ hiddenpassword;
buttonvo.innerHTML="Mostrar";
}
}

</script>
<script src="source/bs/js/bootstrap.js"></script>
</html>