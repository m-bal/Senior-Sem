<?php
session_start();

$dbconn = pg_connect("host=localhost dbname=careerai port=5432 user=careerai password=pal92Dizj")
or die('Could not connect: ' . pg_last_error());

?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href= 'zmodal.css' rel= 'stylesheet' >
	<link href= 'zstyle.css' rel= 'stylesheet' >
	<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
</head>
<body>
	
	<div class="div1">
	<div class="navigation">
	
	<ul>
		<li><a href = "http://delphi.cs.csubak.edu/~careerai/frontpage">Home</a></li>
		<li><a>Games</a>
			<ul>
				<li><a href = "https://www.cs.csubak.edu/~asolorio/project/test3.html">Play Now!</a></li>
				<li><a>Scores</a></li>
			</ul>
		</li>
		<li><a>Progress</a>
			<ul>
				<li><a>Suggested Careers</a></li>
				<li><a>Training Tips</a></li>
			</ul>
		</li>
		<li><a href = "ptimeline.php">Timeline</a></li>
		<li><a href = "http://delphi.cs.csubak.edu/~careerai/social">Social</a></li>
		<li><a>Contact</a>
			<ul>
				<li><a>About Us</a></li>
				<li><a>Email Us</a></li>
			</ul>
		</li>
	</ul>
	
	</div>
	</div>
	<!--script src="//cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5/dat.gui.min.js" type="text/javascript"></script>
	<canvas id="canvas"></canvas-->
	<div id="myModal" class="modal">
	  <div class="modal-content">
		<span class="close">&times;</span>
		<div class="modal-body">
		  <p style="font-family: 'Allura'; position: relative; font-color: 003366; font-size: 150px; text-align:center; text-shadow: 0 0 80px #FFFFFF, 0 0 80px #FFFFFF;"><b>Welcome</b></p>
		</div>
		<div class="box">
			<p style="position: absolute; bottom: 10%; top:43%; left: 20%; right: 18%; background-color: white; font-size: 20px; overflow:auto; padding: 20px; opacity: 0.7";>
			<link href= 'zscroll.css' rel= 'stylesheet'>
				This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. 
				This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. 
				This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. This is your news. 
				
			</p>
		</div>
	  </div>
	</div>
	<!-- SEPERATE SCRIPT FILE -->
	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	modal.style.display = "block";

	/* When the user clicks on <span> (x), close the modal */
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	
/*MOUSE ANIMATION
	
var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
var cancelAnimationFrame = window.cancelAnimationFrame || window.mozCancelAnimationFrame;
var rAF;
var canvas = document.getElementById("canvas"),
    context = canvas.getContext("2d"),
    width = canvas.width = window.innerWidth,
    height = canvas.height = window.innerHeight,
    particles = [],
    mouseX = 0,
    mouseY = 0,
    total = 15,
    followSpeed = 0.1,
    size = 25;

document.body.addEventListener("mousemove", function (event) {
    mouseX = event.clientX;
    mouseY = event.clientY;
});

window.addEventListener('resize', function () {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
});

function init() {
    cancelAnimationFrame(rAF);

    particles = [];

    for (var i = 0; i < total; i += 1) {
        particles.push(new Particle(i));
    }

    draw();
}

function draw() {
    context.clearRect(0, 0, width, height);

    for (var i = 0; i < total; i += 1) {
        particles[i].update();
    }

    rAF = requestAnimationFrame(draw);
}*/


/**
 * Particle
 */
 /*
var Particle, p;

Particle = function (index) {
    this.initialize(index);
};

p = Particle.prototype;

p.initialize = function (index) {
    this.x = -50;
    this.y = height;
    this.id = index + 1;
    this.angleX = Math.PI * 2 * Math.random();
    this.angleY = Math.PI * 2 * Math.random();
    this.speedX = .03 * Math.random() + .03;
    this.speedY = .03 * Math.random() + .03;
    this.radius = 150;

    return this;
};

p.update = function () {
    var aim, dx, dy, scale, angle;

    if (this.id > 1) {
        aim = particles[this.id - 1 - 1];
        dx = aim.x - this.x;
        dy = aim.y - this.y;

        this.x += dx * con.speed;
        this.y += dy * con.speed;
    } else {
        if (mouseX === 0 && mouseY === 0) {
            dx = width / 2 + Math.cos(this.angleX) * this.radius - this.x;
            dy = height / 2 + Math.sin(this.angleY) * this.radius - this.y;

            this.x = width / 2 + Math.cos(this.angleX) * this.radius;
            this.y = height / 2 + Math.sin(this.angleY) * this.radius;

            this.angleX += this.speedX;
            this.angleY += this.speedY;

        } else {
            dx = mouseX - this.x;
            dy = mouseY - this.y;

            this.x += dx * con.speed;
            this.y += dy * con.speed;
        }
    }

    angle = Math.atan2(dy, dx);
    scale = Math.cos(Math.PI / 2 * (this.id / total));

    context.save();
    context.translate(this.x, this.y);
    context.rotate(angle);
    context.scale(scale, scale);

    context.beginPath();
    context.moveTo(-size / 2 * 1.732, -size / 2);
    context.lineTo(0, 0);
    context.lineTo(-size / 2 * 1.732, size / 2);
    context.lineTo(-size / 2 * 1.2, 0);
    context.fillStyle = 'white';
    context.fill();

    context.restore();
};

// control bar
var ControlBar = function () {
    this.num = total;
    this.speed = followSpeed;
};

var con = new ControlBar();
var gui = new dat.GUI();
var conSpeed = gui.add(con, 'speed', 0.05, 0.25).step(0.05);
var conNum = gui.add(con, 'num', 10, 30).step(1);

conNum.onFinishChange(function (value) {
    total = value;

    init();
});
*/
	
	</script>
</body>

</html>
