<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyStyle | Acrobet Developer Console</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!------------------------ Google Fonts ---------------------------------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=IBM+Plex+Sans&family=Lobster&family=Merienda+One&family=Montserrat:wght@500&family=Nunito:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,200&family=Reggae+One&display=swap" rel="stylesheet">

<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="../../CSS/style.css">

    <?php
    include '../../modules/links2.html';
    ?>

</head>
<body style="background: linear-gradient(to bottom right, #aeccfc,  white, white); background-repeat: no-repeat;">

<style>

.sidebar-2{
            padding-top: 50px;
            height: 60vh;
            animation-name: side;
            animation-duration: 1s;
        }
        @keyframes side{
            from{left: -80px}
            to{left:30px}
        }


        .sidebar-2 img{
            width: 50px;
            height: 50px;
            margin-bottom: 50px;
        }

  body{
    background: linear-gradient(to bottom right, #aeccfc,  white, white);
    background-repeat: no-repeat;
    height: 200vh;
    padding-bottom: 100px;
  }
       

        .top-main{
          margin-top: 150px;
          animation-name: top;
           animation-duration: 2.5s;
           background-repeat: no-repeat;
        }
        
        @keyframes top{
            from{opacity: 0;}
            to{opacity: 1;}
        }

        .top-main img{
          width: 150px;
        }
        .top-main h3{
          font-family: "Lobster", sans-serif;
          font-size: 60px;
          color: rgba(0,0,0,0.8);
        }
        .top-main h2{
          font-size: 60px;
        }
        .top-main h4{
          font-size: 22px;
          width: 600px;
        }

        .top-main button{
          transition: 0.4s ease;
          margin-top: 20px;
        }
        .top-main button:hover{
          background: white;
          color: black;
          transition: 0.4s ease;
        }

        .use{
          width: 90%;
          margin-left: 8%;
          animation-name: use;
            animation-duration: 2s;
        }
        @keyframes use{
          from{opacity: 0;}
          to{opacity: 1;}
        }

        .use h1{
          font-size: 50px;
          color: rgba(0,0,0,0.8);
          font-family: none;
          margin-left: 60px;
          margin-top: 60px;
          margin-bottom: 40px;
        }

        .use div{
          display: inline-block;
          margin: 10px;
          border-radius: 30px;
          box-shadow: 0px  0px 20px 2px rgba(0,0,0,0.2);
          padding-top: 30px;
          margin-bottom: 100px;
          color: rgba(0,0,0,0.7);
          padding-bottom: 30px;
        }
       
        .down{
          width: 360px;
          margin-left: 100px;
        }
        .down p{
          width: 90%;
          width: 85%;
          line-height:27px;
        }
        .cdn{
          width: 950px;
          vertical-align: bottom;margin-top: -15px;
        }
        .cdn p{
          width: 95%;
          line-height:27px;
        }

        .cdn textarea{
          padding-top: 10px;
          height: 28px;
          padding-left: 15px;
          padding-bottom: 7px;
          border-radius: 30px; 
          overflow-y: auto;
           resize: none;
            width: 97%;
            margin-top: 25px;
            padding-right: 0px;
            font-size: 22px;
            box-shadow: 0px 0px 15px 2px rgba(0,0,0,0.15);
            border: none;
        }

        .vertical-scroll {
    overflow-y: scroll;
    resize: none;
}

.search i{
            color: black;
            font-size: 28px;
            vertical-align: top;
            margin-top: 11px;
        }
        .search{
            padding-left: 0px;
            padding-right: 0px;
            margin-left: 200px;
            animation-name: search;
           animation-duration: 0.2s;
        }
        .i-img{
          vertical-align: top;
          font-size: 200px;
          width: 25%;
          color: rgb(33, 33, 231);
          text-shadow: 3px 3px 20px rgba(0,0,0,0.6);
        }
        .i-txt{
          width: 70%;
          font-size: 34px;
        }
        .i-txt p{
          font-size: 22px;
        }

        .i{
          display: inline-block;
          padding-top: 80px;
        }
        
      </style>


<!----------- Nav Bar ------------------------->

<?php
include '../../modules/nav.php';
?>


<!--------------- main -------------------------------->



<div class="top-main">

<center>
<i style="font-size: 180px; background: -webkit-linear-gradient(blue, green); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 3px 3px 10px rgba(0,0,0,0.4); margin-top: 20px; vertical-align: center; display: inline-block;  color: white;" class="bi bi-file-earmark-post"></i>
    <h1 style="font-family: 'Lobster', sans-serif; position: absolute; top: 235px; left: 48.4%; font-size: 35px; color: white;">MS</h1> <br>
    <h1 style="font-family: 'Lobster', sans-serif; position: absolute; top: 225px; left: 48.35%;  font-size: 86px;  border-radius: 20px; color: white;">--</h1>


<h3>MyStyle Framework </h3><br>
<h4>Empower Your Designs: Craft Beautiful Websites Effortlessly with Our CSS Framework!</h4><br>
<a href="#use"><button class="btn blue shadow-2 rd-2">Explore <i class="fa fa-arrow-down"></i></button></a>
</div>

<hr style="width: 70%; margin-top:100px;">
    
</center>

<!---------------- How To use ---------------------------------->
<div class="white cont-100 " >
<div id="use" class="use white cont-60 ">

<h1><b>How to Use</b></h1><br>

<center>

<div style="margin-left: 20px;" class="down">
  <h2><b>Use on Device</b></h2><br>
  <p>Install MyStyle Zip on your Device and paste the Folder in Your main Root Directory and link MyStyle pages with your every Webpage</p>
  <a href="#"><button class="btn blue shadow-1 rd-2">Download <i class="fa fa-download"></i></button></a>

</div>
<div  class="cdn margin-right: 0px;">
  <h2><b>Use Via CDN</b></h2>
  <p>Copy the below CDN link code and paste  it Under head Tag of your every Webpage to use MyStyle  without Downloading <br> </p>

  <textarea class="blue" style=" " readonly name="link">&lt;link href="https://developer.acrobet.in/Dashboard/MyStyle/v3/mystyle.css"></textarea>
  <b><textarea class="blue" style=" font-size: 19.5px; padding-left: 10px; width:97%;" readonly name="link">&lt;script src="https://developer.acrobet.in/Dashboard/MyStyle/v3/mystyle.css">&lt;/script&gt;</textarea></b>

 


</div>

</center>


</div>



<div class="icon cont-80" style="border-top: 2px solid rgb(89, 89, 89); margin-bottom: 80px; height: 200px; padding-top: 50px; padding-left: 20px; ">

<h1 style="font-size: 60px;  color: rgba(0,0,0,0.8); margin-bottom: 40px;"><b>MyStyle ICONS</b></h1> <br>

<div style="background-color: rgb(254, 255, 255); margin-bottom: 40px;" class="shadow-1 br-grey-lt icon-dsc rd-3 cont-100">
  <center>
  <div class="i-img i">
    <i class="fa fa-cube"></i>
  </div>
  <div class="i-txt i">
    <p style="font-family: 'Comfortaa', sans-serif;">MyStyle Icons is a leading provider of Web icons for use in HTML,
       offering a vast library Js icons.
        These icons are designed to be fast, scalable, and easy to use, 
        making them a popular choice for web developers and designers. 
        With a simple and intuitive CDN, MyStyle allows users to easily 
        integrate icons into their 
      websites and applications, enhancing the user interface and user experience.</p>
  </div>
</div>

</div>
</center>

<div class="fskfash h-200 cont-100"></div>

</div>

<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Smooth Scrolling Script -->
<script>
$(document).ready(function(){
    // Smooth Scrolling
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});
</script>


</body>
</html>