<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link rel="shortcut icon" href="logos/homeflixlogo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main-styles2.css">
</head>
<body>
    <div id="container">
        <div id="card" class="choose">
            <img id="logo" src="logos/homeflixposterdark.png" alt="Homeflix logo">
            <div id="log-in">
            <p class="choose-welcome">Welcome</p>
            <h1 class="title">Log In</h1>
            <form id="log-in-form" action="loginverify.php?info=<?php  $e2=$_GET['error']; echo"$e2";?>" method="POST">
                <input class="inputs" type="text" name="user" placeholder="User name">
                <input class="inputs" type="password" name="password" placeholder="Password">
                <button class="submit-btn" type="submit"> ENTER</button>
            </form>
            </div>
        </div>
        <?php
        if ($e2>=1) {echo "<div class=' choose text-center'><p class=''>Usuario o Contraseña incorrectos</p><p class=''>Intentos: $e2</p>";}else{echo "";}
        ?>
    </div>
</body>
</html>