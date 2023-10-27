<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #656565;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
  border-radius:10px;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  background-color: #000;
  backdrop-filter: blur(8px);-webkit-backdrop-filter: blur(8px);
  width:45%;
  align-items:center;
  margin: 10px;
  padding-left:30px;
  min-width: 350px;
  border-radius:10px;
}

/* Clear floats after rows */ 
/* .row:after {
  content: "";
  display: table;
  clear: both;
} */

/* Content */
.content {
  background-color:#656565;
  padding: 10px;
  align-self:center;
  width:fit-content;
  border-radius:10px;
}
.content > p {
    width:300px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .row {
    display:block;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .row {
    display:inline;
  }
}
</style>
</head>
<body>
<div class="hidbar"></div>
<!-- MAIN (Center website) -->
<div class="main">

<h1> <img src="../pictures/wawakologo.png" alt="Mountains" style="width:100px;"></h1>
<hr>

<h2>About Us</h2>

<!-- Portfolio Gallery Grid -->
<div class="row">

  <div class="column">
    <div class="content">
      <img src="../pictures/wawako.jpg" alt="Mountains" style="width:300px;height:300px;">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>

  <div class="column">
    <div class="content">
    <img src="../pictures/nature4.jpg" alt="Lights" style="width:300px;height:300px;">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>

  <div class="column">
    <div class="content">
    <img src="../pictures/nature0.jpg" alt="Nature" style="width:300px;height:300px;">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>

  <div class="column">
    <div class="content">
    <img src="../pictures/nature9.jpg" alt="Mountains" style="width:300px;height:300px;">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>

  </div>
<!-- END GRID -->
</div>

<div class="content" style="width:100%;height:500px;padding:10px;">
  <img src="../pictures/iot 7.jpeg" alt="Bear" style="border-radius:10px;width:100%">
  <h3>Some Other Work</h3>
  <p style="width:100%;">Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
</div>

<!-- END MAIN -->
</div>

</body>
<script src="/Web/hidbar.js"></script>
<script src="/Web/themes.js"></script>

</html>

