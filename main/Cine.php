<!doctype html>
<?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: login.php");
}
$src = $_GET["vs"];
?>

<html>
<head>
    <title>Homeflix</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link href="https://vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel='prefetch' <?php echo "href='$src'"?> as="video" type='video/mp4'>
</head>
<style>
body{background:#080B12;}
h2{font-family: 'Playfair Display', serif; color:#dddddd;}
.mainvideo
{ 
width:100%;
-webkit-box-shadow: 0px 0px 11px 7px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 11px 7px rgba(0,0,0,0.75);
box-shadow: 0px 0px 11px 7px rgba(0,0,0,0.75);
}
</style>
<body>
<div class="container-flluid">
    <div class="row m-0 bg-dark">
    <div class="col-1 mb-0"><a href="index.php" class="link-secondary fs-4 fw-lighter position-relative ">Inicio</a></div>
    <div class="col-10"><h2 class='bg-dark text-center mb-0 '>Homeflix</h2></div>
    <div class="col-1"></div>

    </div>
<div class="container-fluid">
    <div class="row m-0 mt-3">
        <div class="col-0 col-md-2"></div>
        <div class="col-12 col-md-8">
            
            <div id="movieDisplay" >
            
                <video type="video/mp4"  class="mainvideo" controls id="mainvideo" playsinline>
               <source id='videoSource' src='v/intro.mp4'>
                </video>
            </div>
        </div>
        <div class="col-0 col-md-2"></div>
    </div>
</div>
    <div id="moreMovies">
        <div id="col-left"></div>
        <div id="col-center2"></div>
        <div id="col-right"></div>
    </div>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript">

<?php echo "var nextVideo = '$src';"?>
var videoPlayer = document.getElementById('mainvideo');
videoPlayer.volume=0.3;
videoPlayer.onended = function()
{
    
    videoPlayer.src = nextVideo;
    videoPlayer.autoplay=true;
    videoPlayer.volume=1;
    videoPlayer.load();
    
}
</script>
</html>
