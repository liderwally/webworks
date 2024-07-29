<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" about-content="IE=edge">
        <meta name="viewport" about-content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Web/variables.css">
        <link rel="stylesheet" href="/Web/general.css">
        <link rel="stylesheet" href="/Web/liotsbg.css">
        <title>Welcome</title>
    </head>

    <style>
        body{
            justify-content: center;
            display: grid;
        }
        .tab {
            background-color: #fff1;
            fill-opacity: 0.2;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: #f1f1f183;
            border: 2px solid var(--second-color);
            border-radius: 10px;
            position: relative;
            align-items: center;
            justify-self: center;
            align-self: center;
            width: 1000px;
            height: 30vh;
            padding: 10px;
            margin: 10px;
            display: grid;
            box-sizing:content-box;
        }

        #firstTab {
            z-index: 0;
            top: 0;
            height: 130px;
            display: block;
        }

        #secondTab {
            fill-opacity: 0.2;
            mix-blend-mode: add(5px);
            top: 0;
            height: calc(100% - 100px);
            z-index: 1;
            padding-bottom:30px;
            padding-top: 50px;
        
        }

        #thirdTab {
            min-height: 20px;
            height: fit-content;
            max-height: 50px;
            padding: 10px;
            bottom:0;
            display: grid;
            position: -webkit-sticky;

        }

        .image {
            position: relative;
            background-image: url("/pictures/wawakologo.png");
            /* backdrop-filter: blur(8px);-webkit-backdrop-filter: blur(8px); */
            background-size: cover;
            top: calc(50% - 50px);
            right: 10px;
            float: right;
            height: 100px;
            width: 150px;
            border-radius: 5%;



        }

        .menu > a {
            background-color: #f1f1f1a3;
            color: #1118;
            border-radius: 10px;
            position: relative;
            margin-bottom: 10px;
            border: black solid 2px;
            font-size: 38px;
            text-decoration: none;
            transition: 1s;
            position: relative;
            max-width: 50vw;
            min-width: 100px;
            width: 500px;
            height: 85%;
            text-align: center;
            align-self: center;
        }

        .menu {
            width: 100%;
            height: 300px;
            display: grid;
            align-items: center;
            align-content: center;
            justify-items: center;


        }

        a:hover, .about-content:hover {
            color: black;
            border: none;
            /* left: calc( 50% - 260px); */
            transform: scale(1.1);
            box-shadow: 2px 2px 3px black text-shadow:0px 2px 3px black;
            /* border:#3b8bac groove 3px; */
        }

        .greetings {
            font-size: 40px;
            color: var(--third-color);
            float: left;
            top: 0;
            position: relative;
            padding-left: 20px;
            padding-right: 20px;



        }

        h5 {
            font-size: 45px;
            color: var(--third-color);
            text-align: center;
            mix-blend-mode: multiply;
        }


        #forLogin #forAbout #forHelp #forGallery {
            position: relative;
            left: -100px;
            padding: 10px;
            height: 0;
            transition: 1.2s;
            color: green;
        }

        .row {
            width: 30%;
            background-color: #0000;
            color: var(--third-color);
            height: 90%;
            margin: 15px;
            position: relative;
            float: left;
            justify-items: center;
            justify-content: center;
            display: grid;
            border-radius: 10px;
        }

        .details {
            position: relative;
            height: 20px;
            width: 500px;
            /* left: calc( 50% - 250px); */
            justify-about-content: center;
            justify-self: center;
            align-self: center;
            background: #004D730;
            color: var(--third-color);
            transition: 0.5s;



        }

        #quote {

            position: relative;
            width: fit-about-content;
            list-style: square;
            font-optical-sizing: 2px;
            font-stretch: expanded;
            align-self: center;
            height: 100%;
            line-height: 25px;
            font-size: 20px;
        }

        .about-row {
            display: flex;
            width: 100%;
            height: 45px;
            background-color: #0000;
            align-items: center;
            justify-items: center;
            justify-content: center;

        }

        .about-content {
            display: flex;
            width: 50px;
            height: 50px;
            margin-left: 5px;
            position: relative;
            border-radius: 10px;
            border: black solid 2px;
            background-color: #f1f1f1a3;
            align-items: center;
            justify-items: center;
            justify-content: center;
        }


        @media screen and (max-width: 900px) {
            #firstTab {
                display: flex;
                flex-direction: row;
                height: 20vh;
            }

            .row {
                width: fit-about-content;
                height: 100%;
            }

        }

        @media screen and (max-width: 600px) {
            #firstTab {
                display: flex;
                flex-direction: column;

                height: 30vh;
            }

            .row {
                width: 100%;
                height: 9vh;
                align-items: center;

            }
        }
    </style>

    <body>
        <div class="backpage">
            <canvas class="canvas"></canvas>
        </div>
        <div class="tab" id="firstTab">
            <div class="row">
                <p class="greetings">Welcome</p>
            </div>
            <div class="row">
                <p id="quote"><i>"Make it as simple as possible, but not simpler."</i>, Albert Einstein</p>
            </div>
            <div class="row">
                <div class="image"></div>
            </div>
        </div>
        <div class="tab" id="secondTab">
            <h5>LIDER IoT SPACE</h5>
            <hr>
            <div class="menu">
                <a href="login.php" onmouseover="changemsg('Register or Login to enjoy the innovative space.')"
                    onmouseleave="disappearmsg()">Login</a>
                <a href="gallery.php" onmouseover="changemsg('Select to see the art of electronic innovations.')"
                    onmouseleave="disappearmsg()">Gallery</a>
                <a href="about.php" onmouseover="changemsg('Get to know us.')" onmouseleave="disappearmsg()">About</a>
                <a href="Help.php" onmouseover="changemsg('Need a guide ? are you unsure or have a question ? =>')"
                    onmouseleave="disappearmsg()">Help</a>
                <div class="details"></div>
            </div>
        </div>
        <div class="tab" id="thirdTab">

            <div class="about-row">

                <div class="about-content">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-facebook fa-fade fa-xl" ></i>
                    </a>


                </div>
                <div class="about-content">
                    <a href="http://">
                        <i class="fa-brands fa-linkedin fa-fade fa-xl" ></i>
                    </a>

                </div>
                <div class="about-content">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp fa-fade fa-xl" ></i>
                    </a>

                </div>
                <div class="about-content">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-telegram fa-fade fa-xl" ></i>
                    </a>
                </div>
                <div class="about-content">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-github fa-fade fa-xl" ></i>
                    </a>
                </div>

            </div>
        </div>










    </body>
    <script src="https://kit.fontawesome.com/318f9ada79.js" crossorigin="anonymous"></script>
    <script src="hidbar.js"></script>
    <script src="/Web/themes.js"></script>
    <script src="/Web/liotsbg3.js"></script>
    
    <script>
        var infoTab = document.querySelector(".details");
        var image = document.querySelector(".image");
        var sizeX = 1;
        var sizeY = 1;

        setInterval(() => {
            // alert("time to rotate");
            image.style.transform = "rotateY(" + sizeX + "deg)";
            image.style.transition = "all 1s";
            sizeX += 0.75;
            if (sizeX > 359) {
                sizeX = 1;
                image.style.visibility = "hidden";
                image.style.transform = "rotateY(0deg)";
                image.style.visibility = "visible";
            }
        }, 50);




        function changemsg(msg) {
            infoTab.style.color = '#fff';
            infoTab.innerText = msg;
            //    alert(msg);
        }

        function disappearmsg() {
            document.querySelector('.details').style.color = '#004D73';
            infoTab.style.color = '#fff0';
        }
    </script>

</html>