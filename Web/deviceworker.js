var i = 0;

function timedCount() {
  i = i + 1;
  postMessage("Walidi :" +i);
  setTimeout("timedCount()", 1000);
}

timedCount();