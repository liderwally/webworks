<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<style>
    .firstTab{
        display:flex-inline;
        height: 200px;
        width:100%;
        }
    .image{
        position: relative;
        background-image:url("bug.png");
        background-size:cover;
        top: 0px;
        float:right;
        height:100px;
        width:80px;
        border-radius:50%;
        

    }
    a{
        background-color:rgba(0,0,0,0.4);
        color:rgba(255,255,255,0.7);
        position:relative;
        font-size :38px;
        text-decoration:none;
        transition:1s;
        width:75%;
        left:12.5%;
        height:100%;
        text-align:center;
        mix-blend-mode:darken;
    }
    .menu{
        
        width:device-width;
        height:300px;
        display:grid;
        
        
    }
    a:hover {
       color:black;
       border-bottom:2px solid white;
       text-shadow:0px 2px 3px black;

    }
    h6{
        font-size:40px;
        color:white;
        float:left;
    }
    h5{
        font-size:45px;
        color:rgba(0,0,0,0.6);
        text-align:center;
        mix-blend-mode:color-burn;
    }
    body{
        background: linear-gradient(to top right, #99ff99 0%, #00ffcc 100%);
        background-image:url("/pictures/nature1.jpg"); 
        background-size:cover;
        background-repeat:no-repeat;
    }
    #forLogin #forAbout #forHelp #forGallery{
        position:relative;
        left:-100px;
        height:0;
        transition:2s;
        color:green;
    }
    .details{
        position:relative;
        left:-500px;
        height:0;
        color:green;
        transition:2s;
        z-index: 7;
        

    }
    a:hover +.details{
        left:30%;
        height:auto;
        color:white;
        display:grid;
        transition:2s;
        mix-blend-mode:exclusion;
       
    }
</style>

<body >
    <div class="firstTab">
        <h6>Welcome</h6>
        <div class="image">
          
        </div>
    </div>
   
    <h5>LIDER IOT SPACE</h5>
   <div ></div>
   <div class="menu">
    <a href="login.php">Login</a>
    <span class="details" id="forLogin">Login or Register to enjoy our services. </span>
    <a href="gallery.php">Gallery</a>
    <span class="details" id="forGallery">Click the link to wonder the ideas created by fellow innovators. </span>
    <a href="about.php">About</a>
    <span class="details" id="forAbout">Get to know more about us!. </span>
    <a href="Help.php">Help</a>
    <span class="details" id="forHelp">In need of Help?,In need to get other services? Get more than a help. </span>
   
   </div>
   



</body >
<script>
   
</script>
</html>
