<!doctype html>
<?php
  session_start();
  $sesion = $_SESSION['username'];
  if(!isset($sesion)){
    header("location: ../login.php");
  }
  $text=$_SESSION['configuser'];
  ?>
<html>
<head>

    <meta charset="utf-8"/>                                                     <!--Tipografia-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>       <!--Responsive Tag-->
    <link type="text/css" rel="stylesheet" href="source/indexcss.php"/>         <!--Stylesheet SOURCE-->
    <link rel="stylesheet" type="text/css" href="source/bs/css/bootstrap.css">  <!--Bootstrap CSS SOURCE-->
    <link rel="stylesheet" type="text/css" href="source/glid/glider.css" />     <!--Glider SOURCE-->
    <title>Homeflix</title>                                                     <!--Title-->
    <link rel="shortcut icon" href="img/logos/homeflixlogo2.png"/>              <!--Title Icon-->


    <!---------------------------------------------------------------------------------------------------->
                                     <!-----------Fonts------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!---------------------------------------------------------------------------------------------------->
  </head>



<body>
<!-------------------------------------------------------------------------------------------------------------------------------------->
                                     <!-----------Screen Load (Loader)------------>
<div class="container-fluid" id="cont-loader">
    <div class="row m-0 align-items-center" id="loader-card">
      <div class="col-4"></div>
      <div class="col-4"><?php echo " <div class='text-center'><h3>Welcome $sesion</h3></div>"?> <div id="loader"></div></div>
      <div class="col-4"></div>
    </div>
 </div>
                                         <!-----------END------------>
<!-------------------------------------------------------------------------------------------------------------------------------------->





<!-------------------------------------------------------------------------------------------------------------------------------------->
                              <!---------------------Modal donacion-------------------->
<div class="modal fade" id="modaldonacion" tabindex="-1" aria-labelledby="modaldonacion" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <h2 class="m-3 mb-0" id="">Donate</h2>
        <div class="modal-body pt-2 ">
          With your donation...
        </div>
        <div class="modal-footer justify-content-evenly p-0">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <img src="img/logos/viplog.webp" class="img-fluid m-0">
          <button type="button" onclick="location.href='https://www.paypal.com/donate?hosted_button_id=L85KZ5TU6ERQJ'"  class="btn btn-success" href="https://www.paypal.com/donate?hosted_button_id=L85KZ5TU6ERQJ&source=url">Donar</button>
        </div>
      </div>
    </div>
  </div>
                                          <!-----------END------------>
<!-------------------------------------------------------------------------------------------------------------------------------------->





<!-------------------------------------------------------------------------------------------------------------------------------------->
                                   <!---------------------Navbar-------------------->
<nav class="navbar navbar-expand-lg n-color">
  <div class="container-fluid ">
      <a class="navbar-brand LOGO" href="#">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><img src="img/logos/30x30menuw2.png"></button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent"><!--Menu despegable-->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        <a class=" dropdown-toggle navbar-text text-info" href="#" id="navbarNavDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo"$sesion";?></a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="source/logout.php">Log out</a></li>
            <li><a class="dropdown-item " href="settings.php?pagina=1">Settings</a></li>
          </ul>
        </li>  
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="In construction..." aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>

  </div>
  </nav>
                                         <!-----------END------------>
<!-------------------------------------------------------------------------------------------------------------------------------------->





<!-------------------------------------------------------------------------------------------------------------------------------------->
                                        <!-----------Poster carousel------------>
<div class="img-fluid m-0 p-0 poster mytxt">
  <div class="container-fluid cont-1">
    <div class="row  h-100">
      <div class="col-0 col-sm-0 col-md-1 "></div>
      <div class="col-12 col-sm-0 col-md-10 my-5 p-md-3 p-0">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators  d-none d-sm-flex">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item active">
                <a><img src="img/logos/hfposter.png" class="d-block img-fluid mx-auto" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h4>First slide label</h4>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="#" ><img src="img/logos/hfposter.png" class="d-block img-fluid mx-auto" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modaldonacion"> <img src="img/logos/donarpaypalposter3.png" class="d-block img-fluid mx-auto  " alt="..."></a>
                <div class="carousel-caption d-none d-lg-block">
                  <h5>¿Do you like my content?</h5>
                  <p>Suport my job with a small donation :)</p>
                </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-0 col-sm-0 col-md-1 "></div>
    </div>
  </div>
  </div> 
                                         <!-----------END------------>
<!-------------------------------------------------------------------------------------------------------------------------------------->




<!-------------------------------------------------------------------------------------------------------------------------------------->
                                    <!---------------------Slider main-------------------->
<div class="container-fluid my-5 mytxt">
    <div class="row m-0 ">
      <div class="col-md-4 col-sm-4 "></div>
      <div class="col-md-4 col-sm-4 "><h2 class="text-center mb-4 ">Movies</h2></div>
      <div class="col-md-4 col-sm-4 "></div>
    </div>
    <div class="row m-0 ">
      <div class="col-md-0 col-sm-1 "> </div>
      <div class="col-md-12 col-sm-10 ">
        <div class="glider-contain  mycard">
          <div class="glider draggable pt-4 ">
            <div class="mx-2"><a href="cine.php?vs=v/video1.mp4"><div><img alt="Video 1" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 1 </p></div>
            <div class="mx-2"><a href="cine.php?vs=v/video3.mp4"><div><img alt="Video 3" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 2 </p></div>
            <div class="mx-2"><a href="cine.php?vs=v/video2.mp4"><div><img alt="Video 2" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 3 </p></div>
            <div class="mx-2"><a href="cine.php?vs=v/video4.mp4"><div><img alt="Video 4" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 4 </p></div>
            <div class="mx-2"><a href="cine.php?vs=v/video5.mp4"><div><img alt="Video 5" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 5 </p></div>
            <div class="mx-2"><a href="cine.php?vs=v/video6.mp4"><div><img alt="Video 6" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 6 </p></div>
          </div>
          <button class="glider-prev myhidden"><</button>
          <button class="glider-next myhidden">></button>
        </div>
      </div>
      <div class="col-md-0 col-md-1 "> </div>
    </div>
  </div>
                                          <!-----------END------------>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------->
                                    <!---------------------Second Slider-------------------->
<div class="container-fluid my-5 mytxt">
    <div class="row m-0 ">
      <div class="col-md-4 col-sm-4"></div>
      <div class="col-md-4 col-sm-4"></div>
      <div class="col-md-4 col-sm-4"></div>
    </div>
    <div class="row m-0 ">
      <div class="col-md-0 col-sm-1 "> </div>
      <div class="col-md-12 col-sm-10 ">
        <div id="glider2-container " class="glider-contain mycard g2">
          <div id="glider2" class="glider draggable pt-4 g2">
            <div class="mx-2"><a href="cine.php?vs=v/video7.mp4"><div><img alt="Video 7" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 7</p></div>
            <div class="mx-2"><a href="Cine.php?vs=v/video8.mp4"><div><img alt="Video 8" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 8</p></div>
            <div class="mx-2"><a href="Cine.php?vs=v/video9.mp4"><div><img alt="Video 9" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 9</p></div>
            <div class="mx-2"><a href="Cine.php?vs=v/video10.mp4"><div><img alt="Video 10" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 10</p></div>
            <div class="mx-2"><a href="Cine.php?vs=v/video11.mp4"><div><img alt="Video 11" src="img/imgdevideo.jpg"></div></a><p class="text-center mybg-card">Video 11</p></div>
          </div>
          <button id="glider2-prev"class="glider-prev myhidden"><</button>
          <button id="glider2-next" class="glider-next myhidden">></button>
        </div>
      </div>
      <div class="col-md-0 col-md-1"></div>
    </div>
  </div>
                                          <!-----------END------------>
<!-------------------------------------------------------------------------------------------------------------------------------------->


</body>
    <!---------------------Srcrip Loader-------------------->
   <script>
  
   </script>
   <script>
        window.onload=function loader()
        {
          var cont= document.getElementById('cont-loader');
          cont.style.visibility='hidden';
          cont.style.opacity = '0';
          
        }
     </script>
  <!--grid scripts SOURCE-->
  <script src="source/glider/glider.js"></script>                
  <script src="source/glider/script.js"></script>
  <!--Bootstrap script source-->
  <script src="source/bs/js/bootstrap.js"></script>
</html>