<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<style>
    *{
        color:#c0c0c0; /*3b8bac;*/
        
    }
    
    .firstTab{
        background-color:rgba(2, 2, 2, 0.2);
        backdrop-filter: blur(8px);-webkit-backdrop-filter: blur(8px);
        display:flex-inline;
        align-items: center;
        justify-content: center;
        height: 20%;
        width:100%;
        border-radius: 10px;
        position:relative ;
        left :0px;
        top:0px;

        }
    .image{
        position: relative;
        background-image:url("/pictures/wawakologo.png");
        /* backdrop-filter: blur(8px);-webkit-backdrop-filter: blur(8px); */
        background-size:cover;
        top: calc(50% - 50px);
        right: 10px;
        float:right;
        height:100px;
        width:150px;
        border-radius:5%;

        

    }
    a{
        background-color:#00000055;
        color: rgba(255,255,255,0.7);
        border-radius: 10px;
        position:relative;
        border: black solid 2px;
        font-size :38px;
        text-decoration:none;
        transition:1s;
        max-width:50vw;
        min-width: 100px;
        width: 500px;
        left: calc( 50% - 250px);
        height:85%;
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
       border: none;
       /* left: calc( 50% - 260px); */
       transform:scale(1.1);
       box-shadow: 2px 2px 3px black
       text-shadow:0px 2px 3px black;
       /* border:#3b8bac groove 3px; */
    }
    h6{
        font-size:40px;
        color:black;
        float:left;
        top: calc( 50% -50px);
        position: relative;
        left :100px;

    }
    h5{
        font-size:45px;
        color:rgba(0,0,0,0.6);
        text-align:center;
        mix-blend-mode:color-burn;
    }
    body{
        /* background-image:url("/pictures/iot 7.jpeg"); */
        /* background-size:cover; */
        background: linear-gradient(to top right,#004D73 0%, #004D78 100%);
        background-size:cover;
        width:99%;
        height:100vh;
        background-repeat:no-repeat;
    }
    #forLogin #forAbout #forHelp #forGallery{
        position:relative;
        left:-100px;
        padding: 10px;
        height:0;
        transition:2s;
        color:green;
    }
    .details{
        position:relative;
        height:20px;
        width:500px;
        /* left: calc( 50% - 250px); */
        justify-content: center;
        justify-self: center;
        align-self:center;
        background:#004D73 ;
        color:#000;
        transition:1s;

        

    }
    /* a:hover .details{
        left:0%;
        display: inline;
        line-height:100%;
        align-self:center;
        height:auto;
        width:auto;
        font-size:20px;
        color:#C0C0C0 ;
        display:grid;
        z-index: 1;
        transition:2s;
        mix-blend-mode:nornal;
       
    } */
    #quote{

        position: absolute;
        width:fit-content;
        top:50%;
        left:37%;
        height:50px;
        top:calc(50%-25px);
        font-size:20px;
    }
</style>

<body >
    <div class="firstTab">
        <h6>Welcome</h6>
        <p id="quote"><i >"Make it as simple as possible, but not simpler."</i>, Albert Einstein</p>
        <div class="image"></div>
    </div>
   
    <h5>LIDER IoT SPACE</h5>
   <div ></div>
   <div class="menu">
    <a href="login.php" onmouseover="changemsg('Register or Login to enjoy the innovative space.')"     onmouseleave ="disappearmsg()">Login</a>
    <a href="gallery.php" onmouseover="changemsg('Select to see the art of electronic innovations.')"   onmouseleave ="disappearmsg()">Gallery</a>
    <a href="about.php" onmouseover="changemsg('Get to know us.')"                                      onmouseleave ="disappearmsg()">About</a>
    <a href="Help.php" onmouseover="changemsg('Need a guide ? are you unsure or have a question ? =>')" onmouseleave ="disappearmsg()">Help</a>
     <div class="details"></div>
    </div>
  

   



</body >
<script>
   var infoTab = document.querySelector(".details");
   var image = document.querySelector(".image");
   var sizeX = 1;
   var sizeY = 1;

   setInterval(() => {
    // alert("time to rotate");
    image.style.transform = "rotateY("+sizeX+"deg)";
    image.style.transition = "all 1s";
    sizeX +=0.75;
    if(sizeX>359){
    sizeX=1;
    image.style.visibility="hidden";
    image.style.transform = "rotateY(0deg)";
    image.style.visibility="visible";
    }
   }, 50);
  
 


   function changemsg(msg){
   infoTab.style.color = '#fff';
   infoTab.innerText = msg;
//    alert(msg);
   }
   
   function disappearmsg(){
    document.querySelector('.details').style.color = '#004D73';
   }
</script>
</html>
