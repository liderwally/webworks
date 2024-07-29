var backpage = document.querySelector('.backpage');

var c = document.querySelector(".canvas"),
    w = c.width = backpage.clientWidth,
    h = c.height = backpage.clientHeight,
    ctx = c.getContext('2d'), tick,
    pointerX = 0, pointerY = 0;

c.style.width = w + "px";
c.style.height = h + "px";



var hexfillColor = rootStyle.getPropertyValue('--base-color');
var hexBorderColor = rootStyle.getPropertyValue('--base-color');
var unzoneColor = toString('' + rootStyle.getPropertyValue('--base-color'));
var zoneColor = "#29F";
var zoneDiameter = 300;

ctx.fillStyle = '';
ctx.fillRect(0, 0, w, h);




function Dot(id, x, y, r, color) {
    this.id = id;
    this.x = x;
    this.y = y;
    this.r = r;
    this.a = 1;
    this.aReduction = .005;
    this.color = color
}

Dot.prototype.draw = function () {
    ctx.fillStyle = this.color;
    ctx.shadowBlur = this.r * 2;
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI, false);
    ctx.closePath();
    ctx.fill();
}

class zone {
    constructor(id, x, y, zoneColor, zoneDiameter) {
        this.diameter = zoneDiameter;
        this.index = id;
        this.x = x;
        this.y = y;
        this.color = zoneColor;
    }
    draw() {
        var myNewGradient = ctx.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.diameter);   // 1. create a linear gradient
        myNewGradient.addColorStop(0.1, this.color + "f");
        myNewGradient.addColorStop(0.2, this.color + "e");
        myNewGradient.addColorStop(0.3, this.color + "d");
        myNewGradient.addColorStop(0.4, this.color + "c");
        myNewGradient.addColorStop(0.5, this.color + "8");
        myNewGradient.addColorStop(0.6, this.color + "5");
        myNewGradient.addColorStop(0.7, this.color + "3");
        myNewGradient.addColorStop(0.8, this.color + "2");
        myNewGradient.addColorStop(0.9, this.color + "1");
        myNewGradient.addColorStop(1.0, this.color + "0");
        let bigDot;
        bigDot = new Dot(0, this.x, this.y, this.diameter, myNewGradient).draw();
    }
}


function creategon(x, y, d, bgcolor, color) {
    var p = {};
    p.centerX = x;
    p.centerY = y;
    p.d = d;
    p.hr = p.d * Math.sin(Math.PI / 3);
    p.r = p.d * Math.cos(Math.PI / 3);
    p.x = p.centerX - (p.d / 2);
    p.y = p.centerY - (p.hr);
    p.bgcolor = bgcolor;
    p.color = color;
    p.radius = 0.1;
    p.alpha = 1;
    p.lineWidth = 6;

    p.draw = function () {
        if (p.x - p.r >= 0 && p.y + p.hr >= 0) {
            ctx.globalAlpha = p.alpha;
            ctx.fillStyle = p.bgcolor;
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p.x + p.d, p.y);
            ctx.lineTo(p.x + p.d + p.r, p.y + p.hr);
            ctx.lineTo(p.x + p.d, p.y + 2 * p.hr);
            ctx.lineTo(p.x, p.y + 2 * p.hr);
            ctx.lineTo(p.x - p.r, p.y + p.hr);
            ctx.lineTo(p.x, p.y);
            ctx.fill();
            ctx.closePath();
            ctx.lineWidth = p.lineWidth;
            ctx.strokeStyle = p.color;
            ctx.stroke();
            ctx.globalAlpha = 1;
            ctx.moveTo(p.x, p.y);
        }


    }
    return p;
}


window.onmousemove = function (e) {
    mouseMoving = true;
    pointerX = e.clientX;
    pointerY = e.clientY;
    // console.log(pointerX + " : " + pointerY);
    if (backpage.clientHeight !== h) {
        w = c.width = backpage.clientWidth;
        h = c.height = backpage.clientHeight;
        c.style.width = w + "px";
        c.style.height = h + "px";
    }


}


window.onresize = function (e) {
    w = c.width = backpage.clientWidth;
    h = c.height = backpage.clientHeight;

}

function preparePage(dist, pad, w, h) {
    // console.log(pad);
    let hr = dist * Math.sin(Math.PI / 3);
    let r = dist * Math.cos(Math.PI / 3);
    let hlineamount = Math.floor(h / (hr));
    let vlineamount = Math.floor(w / (dist + r)) + 1;
    //keeping the hlines odd
    if (hlineamount % 2 === 0) {
        hlineamount += 1;
        // console.log(hlineamount);
    }

    let lastVer;
    lastVer = -(r);
    let lastHor = -(hr);
    let voffset = true;
    let hoffset = false;
    let padPoints = Array();

    for (let ver = 0; ver < vlineamount; ver++) {
        if (voffset === true) {
            lastHor = - (hr);
        }

        for (let hor = 0; hor < hlineamount; hor++) {
            lastHor += (hr);
            if ((hoffset === false && voffset === false) || (hoffset === true && voffset === true)) {
                let point = [lastVer, lastHor];
                padPoints.push(point);
                // let bigot ;
                //  bigot= new Dot(0, lastVer ,lastHor, 10, "#f00").draw();
                // let myobj;
                // myobj = creategon(lastVer, lastHor, 50, "#0f0", "#00f").draw();
            }

            hoffset = !hoffset;
        }
        lastHor = 0;
        lastVer += (dist + r) + pad;
        voffset = !voffset;
    }
    lastVer = 0;
    lastHor = 0;
    return padPoints;


}

function loop() {

    window.requestAnimationFrame(loop);

    ++tick;

    // 
    ctx.shadowBlur = 0;
    var myNewGradient = ctx.createLinearGradient(h / 2, 0, h / 2, w);
    myNewGradient.addColorStop(0, rootStyle.getPropertyValue('--base-color'));
    myNewGradient.addColorStop(1.0, rootStyle.getPropertyValue('--fifth-color'));

    ctx.fillStyle = myNewGradient;
    ctx.fillRect(0, 0, w, h);
    // ctx.globalCompositeOperation = 'lighter';
    ctx.globalCompositeOperation = 'source-over';
    //do your thing
    // console.log(pointerX + " : " + pointerY);
    let myZone;
    myZone = new zone(0, pointerX, pointerY, zoneColor, zoneDiameter).draw();

    ctx.globalCompositeOperation = 'source-over';
    let distance = w / 20;
    if (distance < 90) {
        distance = 90;
    }
    else if (distance > 120) {
        distance = 120;
    }
    let padfactor = 100;
    let paddings = padfactor * ((100 - distance) / (100 * distance));

    let pagepoints = preparePage(distance, paddings, w, h);


    //check if a point is inside the zone
    let insidePoints = Array();

    //get distance from everypoint in the zone

    for (let i = 0; i < pagepoints.length; i++) {
        let thisPoint = pagepoints[i];
        let x = thisPoint[0];
        let y = thisPoint[1];
        let x1 = pointerX;
        let y1 = pointerY;
        let d = Math.sqrt((y1 - y) ** 2 + (x1 - x) ** 2);
        if (d < zoneDiameter) {
            delete pagepoints[i];
            let p = {
                x: thisPoint[0],
                y: thisPoint[1],
                dist: d,
            }

            insidePoints.push(p);
        }
        else {
            hexfillColor = rootStyle.getPropertyValue('--base-color');
            hexBorderColor = rootStyle.getPropertyValue('--base-color');
            myobj = creategon(x, y, distance, hexfillColor, hexBorderColor).draw();
        }


    }
    //pop the points and display them with preferences
    for (let s = 0; s < insidePoints.length; s++) {
        let point = insidePoints[s];

        let factor = 1 - point.dist / zoneDiameter;
        // console.log(factor);
        ctx.globalCompositeOperation = 'source-over';
        hexfillColor = rootStyle.getPropertyValue('--base-color');
        hexBorderColor = rootStyle.getPropertyValue('--base-color');
        myobj = creategon(point.x, point.y, distance - (20 * factor), hexfillColor, hexBorderColor).draw();




    }
    //display other points with different preferences

    // let myobj;
    // myobj = creategon(pointerX, pointerY, 50, "#0f0", "#00f").draw();



}

loop();