<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Web/variables.css">
    <link rel="stylesheet" href="/Web/general.css">
    <style>
      /* Center website */
      .main {
        width: 1200px;
        margin: auto;
        height: 100vh;
        /* border-radius: 10px; */
        padding: 20px;
        top: 100px;
        border-left: 2px solid var(--third-color);
        border-right: 2px solid var(--third-color);
      }

      h1 {
        font-size: 50px;
        word-break: break-all;
      }

      .row {
        margin-left: 8px -16px;
      }

      /* Add padding BETWEEN each column */
      .row,
      .row>.column {
        padding: 8px;
      }

      /* Create four equal columns that floats next to each other */
      .column {
        float: left;
        background-color: var(--second-color);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        width: fit-content;
        align-items: center;
        margin: 10px;
        padding-left: 10px;
        min-width: 300px;
        height: fit-content;
        border-radius: 10px;
        margin-left: 32px;
        margin-right: 32px;
      }

      /* Clear floats after rows */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Content */
      .content {
        background-color: var(--fourth-color);
        padding: 10px;
        margin: 20px;
        align-self: center;
        align-items: center;
        width: fit-content;
        height: fit-content;
        min-width: 300px;
        min-height: 300px;
        justify-items: center;
        border-radius: 10px;
      }

      .content>p {
        width: 300px;
        height: fit-content;
        left: 5%;
        padding: 20px;
        position: absolute;
        line-height: 20px;
        display: none;
        border-radius: 10px;
        background-color: #0008;

      }

      .content>img {
        width: 400px;
        height: 300px;
        position: absolute;
        top: 50px;
        border-radius: 10px;
        left: calc(50% - 200px);
      }

      .content:hover p{
      display: grid;
      }

      .contentBig {
        background-color: var(--fourth-color);
        padding: 10px;
        align-self: center;
        align-items: center;
        width: 100%;
        border-radius: 10px;
      }

      .contentBig>p {
        width: 100%;
      }

      .contentBig>img {
        width: 100%;
        height: 100%;
        position: relative;
        top: 0;
        left: 0;
      }

      /* Responsive layout - makes a two column-layout instead of four columns */
      @media screen and (max-width: 900px) {
        .row {
          display: grid;
        }
      }

      /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 600px) {
        .row {
          display: inline;
        }
      }
    </style>
  </head>

  <body>
    <div class="hidbar"></div>
    <!-- MAIN (Center website) -->
    <div class="main">

      <img src="../pictures/wawakologo.png" alt="Mountains" style="width:100px;">
      <hr>
      <h1 style="text-align:center;">Lider IoT Space</h1>
      <hr>
      <h2>About Us</h2>


      <!-- Portfolio Gallery Grid -->


      <div class="row">

        <div class="contentbig" style="width:100%;height:500px;padding:10px;">
          <img src="../pictures/iot 7.jpeg" alt="my biggest project" style="height:300px;border-radius:10px;width:100%">
          <h3>Calculator</h3>
          <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei,
            attantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
        </div>

        <div class="column">
          <div class="content">
            <img src="../pictures/nature3.jpg" alt="Mountains">
            <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat
              nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
          </div>
        </div>

        <div class="column">
          <div class="content">
            <img src="../pictures/nature4.jpg" alt="Lights">
            <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat
              nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
          </div>
        </div>

        <div class="column">
          <div class="content">
            <img src="../pictures/nature0.jpg" alt="Nature">
            <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat
              nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
          </div>
        </div>

        <div class="column">
          <div class="content">
            <img src="../pictures/nature9.jpg" alt="Mountains">
            <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat
              nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
          </div>

        </div>
        <!-- END GRID -->
      </div>



      <!-- END MAIN -->
    </div>

  </body>
  <script src="/Web/hidbar.js"></script>
  <script src="/Web/themes.js"></script>

</html>