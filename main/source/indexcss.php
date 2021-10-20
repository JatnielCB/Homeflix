
<?php
session_start();

$myposter=$_SESSION['poster'];
header("content-type: text/css;charset: UTF-8;");

?>
/*
|------------------Info----------------|
|Copyright: Jatniel Carranza Bolaños :)|


/*###########################################################*/
/*###########################################################*/
/*###########################################################*/
/*----------------------------|All|--------------------------*/
* 
    {
      box-sizing: border-box

    } 
/*-----------------------------------------------------------*/ 
body
    {
      background-color:#191919!important;

    }
/*-----------------------------------------------------------*/  
.mytxt
    {
      font-family: 'Playfair Display', serif; 
      color:white;

    }
    .mytxt-red
    {
      font-family: 'Playfair Display', serif; 
      color:#99220a;

    }
/*-----------------------------------------------------------*/ 
.mycard
    {
      background: rgba(12, 110, 143, 0.438);
      border-style: solid;
      border: width 1px;
      border-color: #000;
      box-shadow: -1px 0px 19px 5px rgba(0,0,0,0.75) inset;
      -webkit-box-shadow: -1px 0px 19px 5px rgba(0,0,0,0.75) inset;
      -moz-box-shadow: -1px 0px 19px 5px rgba(0,0,0,0.75) inset;

    }
/*-----------------------------------------------------------*/ 
.mybg-card
    {
      background: #000000;

    }
/*-----------------------------------------------------------*/ 
.glider a
    {
      color:white;
      text-decoration: none;
      list-style: none;
      font-family: 'Playfair Display', serif;

    }
/*-----------------------------------------------------------*/ 
.glider a:hover
    {
      color:white; 

    }
/*-----------------------------All---------------------------*/
/*###########################################################*/




/*###########################################################*/
/*--------------------------|Loader|-------------------------*/
#cont-loader
    {
      height:100%;
      width:100%;
      position: relative;
      -webkit-transition: all 1s ease;
      -o-transition: all 1s ease;
      transition: all 1s ease;
      z-index: 10;
      
    }
/*-----------------------------------------------------------*/ 
#loader-card
    {
      background: rgba(35, 31, 120, 0.733);
      background: linear-gradient(180deg, rgba(36,31,120,1) 36%, rgba(18,9,17,1) 97%);
      color:white;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      margin:auto;
      font-family: 'Playfair Display', serif;

    }
/*-----------------------------------------------------------*/ 
#loader
    {
      border:15px solid #121212;
      border-top-color:#99220a;
      height : 100px;
      width : 100px;
      border-radius:100%;
      margin:auto;
      -webkit-animation:spin 1.5s linear infinite;
      -o-animation: spin 1.5s linear infinite;
      animation:spin 1.5s linear infinite;

    }

  @keyframes spin
    {
      from{transform: rotate(0deg);}
      to{transform:rotate(360deg);}
    }
/*--------------------------|Loader|-------------------------*/
/*###########################################################*/




/*###########################################################*/
/*----------------------------Navbar-------------------------*/
.n-color
    {
      background: #121212;

    }
/*-----------------------------------------------------------*/ 
.navbar a
   {
      text-decoration: none;
      list-style: none;
    
    }
/*-----------------------------------------------------------*/ 
.LOGO
    {
      color: #99220a;

    }
/*-----------------------------------------------------------*/ 
.LOGO:hover
  {
    color: #99220a;
    background:#1b1b1b;
    border-style:solid;
    border-radius: 10%;
    border-width:0px;
  }
/*--------------------------|Navbar|-------------------------*/
/*###########################################################*/




/*###########################################################*/
/*-------------------------|Carousel|------------------------*/

.poster
    {
      background-image: <?php echo "url('../img/logos/posters/$myposter')"?>;
      background-size: cover;
      box-shadow: -1px 0px 19px 8px rgba(0,0,0,1) inset;
      -webkit-box-shadow: -1px 0px 19px 8px rgba(0,0,0,1) inset;
      -moz-box-shadow: -1px 0px 19px 8px rgba(0,0,0,1) inset;

    }
/*-----------------------------------------------------------*/ 
.cont-1
    {
     opacity:0.9;

    }
/*-------------------------|Carousel|------------------------*/
/*###########################################################*/





/*###########################################################*/
/*--------------------------|Glider|-------------------------*/
    .glider-contain {
        width: 90%;
        margin: 0 auto;
        position: relative;
        max-width: 980px;
      } 
      .glider {
        margin: 0 auto;
        position: relative;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: none;
        transform: translateZ(0);
      }
      .glider-track {
        transform: translateZ(0);
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        z-index: 1;
      }
      .glider.draggable {
        user-select: none;
        cursor: -webkit-grab;
        cursor: grab;
      }
      .glider.draggable .glider-slide img {
        user-select: none;
        pointer-events: none;
      }
      .glider.drag {
        cursor: -webkit-grabbing;
        cursor: grabbing;
      }
      .glider-slide {
        user-select: none;
        justify-content: center;
        align-content: center;
        width: 100%;
        min-height: 150px;
      }
   
      .glider-slide img {
        max-width: 100%;
        width: 100%; 
      }
  
   
      .glider::-webkit-scrollbar {
        opacity: 0;
        height: 0;
      }
      .glider-prev,.glider-next {
        user-select: none;
        position: absolute;
        outline: none;
        background: none;
        padding: 0;
        z-index: 2;
        font-size: 40px;
        text-decoration: none;
        left: -26px;
        border: 0;
        top: 40%;
        cursor: pointer;
        color: #fff;
        opacity: 1;
        transition: opacity .5s cubic-bezier(.17,.67,.83,.67),
                    color .5s cubic-bezier(.17,.67,.83,.67);
      }
      .glider-prev:hover,
      .glider-next:hover,
      .glider-prev:focus,
      .glider-next:focus {
        color: #a89cc8;
      }
      .glider-next {
        right: -26px;
        left: auto;
      }
      .glider-next.disabled,
      .glider-prev.disabled {
        opacity: .25;
        color: #666;
        cursor: default;
      }
      .glider-slide {
        min-width: 150px;
      }
      .glider-hide {
        opacity: 0;
      } 
      @media(max-width: 36em){
        .glider::-webkit-scrollbar {
          opacity: 1;
          -webkit-appearance: none;
          width: 7px;
          height: 3px;
        }
        .glider::-webkit-scrollbar-thumb {
          opacity: 1;
          border-radius: 99px;
          background-color: rgba(156, 156, 156, 0.25);
          box-shadow: 0 0 1px rgba(255,255,255,.25);
        }
      }
  
  
/*--------------------------|Glider|-------------------------*/
/*###########################################################*/
/*###########################################################*/
/*###########################################################*/




/*#######################Settings.php styles#################*/
.mybg-seepass
{
padding:10px;
margin:17px 0px 7px 0px;
background: #700020;
border-style:solid;
border-width:2px;
border-color:black;
border-radius:15%;
}
.mybutton
{
background:#000;

}
.mybutton:active
{

}




.mytxt-dark
{
  color: #000;
}
.mytxt-green
{
color:#198754;
}
.centerbg
{
background:#000;
}
.title
{
background:#99220a;
color: #fff;
}
.cardtitle
{
  background:#99220a;
  color: #fff;
  -webkit-box-shadow: 0px 0px 23px 17px rgba(0,0,0,0.72);
  -moz-box-shadow: 0px 0px 23px 17px rgba(0,0,0,0.72);
  box-shadow: 0px 0px 23px 17px rgba(0,0,0,0.72);
}
.mycard
{

background: rgba(12, 110, 143, 0.438);
}
.mytable
{

}
.adduser
{
background: rgba(35, 31, 120, 0.733);
background: linear-gradient(180deg, rgba(36,31,120,1) 36%, rgba(18,9,17,1) 97%);
border-style: solid;
border-width: 1px;
border-color: black;
border-radius: 10%;
}
.myinputtxt
{
  
  color: #000000;
  border-top: none;
  border-left: none;
  border-right: none;
  border-width: 3px;
  border-color: #000;
}
.myinputtxt:focus
{

  color: #000000;
  border-top: none;
  border-left: none;
  border-right: none;
  border-width: 1px;
}
.sidenav
{
  float:left;
  height:200vh;
  width:230px;
  background:#090909 ;
  background-size: cover;
 
}
.sidenav a 
{
 text-decoration: none;
 list-style: none;
}
.sidenav a:hover
{
 text-decoration: none;
 list-style: none;
 color:white;
}
.sidenav-opt:active
{
 background:black;
}
@media(max-width:573px)
    {
      #boton{display: none;}
      #boton:checked ~ .sidenav { transform: translateX(0px);}
      .sidenav{position:absolute;transform:translateX(-230px); transition: 0.6s; z-index: 2; width:140px!important; overflow:none;}
      .label{cursor: pointer;}
    }
/*###########################################################*/
/*###########################################################*/
/*###########################################################*




/*###########################################################*/
/*-----------------|Universal @media queries|----------------*/

/*--------------------||||###768PX###||||-----------------*/
@media(max-width: 768px)
    {
      .myhidden{      display:none;         }
      .poster  {       background-repeat: round !important;        }
    }   
@media(min-width:573px)
    {
      .myhidden-sm{visibility:hidden;}
    }

    
/*----------------------|@media queries|---------------------*/
/*###########################################################*/
/*###########################################################*/
/*###########################################################*/
