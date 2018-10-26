<?php
session_start();

$dbconn = pg_connect("host=localhost dbname=careerai port=5432 user=careerai password=pal92Dizj")
or die('Could not connect: ' . pg_last_error());

	/*if(isset($_POST['user']) && isset($_POST['pass'])){ /*Anna Check this Part of the website 
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
	$queryAccount = "SELECT * FROM ACCOUNT;"*/
	
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
	<meta name="viewport" content="width=device-width", initial=scale=1.0">
    <!--link rel="stylesheet" href="zlogin.css"-->
	<link rel="stylesheet" href="zsignup.css">
	<link rel="stylesheet" href="zmouse.css">
	<script src="ysignup.js"></script>
    <!--script src="ylogin.js"></script-->
    <!--script src="yTweenMax.min.js"></script-->
    
</head>
<body>


	
	<center><div class="container"  style=" top: 230px; width:30%;">
	  <form action="/action_page.php" >  
		  <h2 style="text-align:center">Log In to PathFinder</h2>
			<input type="text" name="username" style="width:93%;" placeholder="Username" required>
			<input type="password" name="password" style="width:93%;"  placeholder="Password" required>
			<input type="submit" a href = "frontpage.php"; value="Login" style="width:49%; background-color: #82bcde; color: #eaeaea;">
		  		

	<!--/form--
	  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button-->
	  <input type = "submit" value = "Signup" onclick="document.getElementById('id01').style.display='block'" style="width:49%; background-color: #82bcde ; color:eaeaea ;">
	  </form>
	</div>
	<center><div id="id01" class="modal">
	  
	  <form class="modal-content" action="/action_page.php">
	  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<div class="container">
		  <h1>Sign Up</h1>
		  <p>Please fill in this form to create an account.</p>
		  <hr>
		  <label for="email"><b>Email</b></label>
		  <input type="text" placeholder="Enter Email" style="width:95%;" name="email" required>

		  <label for="psw"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" style="width:95%;" name="psw" required>

		  <label for="psw-repeat"><b>Repeat Password</b></label>
		  <input type="password" placeholder="Repeat Password" style="width:95%;" name="psw-repeat" required>

		  <div class="clearfix">
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn">Sign Up</button>
		  </div>
		</div>
	  </form>
	</div></center>


    
    <!--div class="full-container-wrapper">
        <div class="title">
            <h1 >Welcome to Pathfinder</h1>
            <h4>Your personal career path assistant</h4>
        </div>
        <div class="container">
            <button class="login" onclick="toggleLogin()">Login</button>
            <div class="loginFields" id="loginFields" style="display:none;">
                <form action="" id="loginForm" style="opacity: 0.0">
                    Email<br>
                    <input type="text" name="username" placeholder="Enter Email">
                    <br>
                    Password<br>
                    <input type="password" name="password" placeholder="Enter Password">
                    <br>
                    <button class="submit">Submit</button>
                    <br>
                    <a href="pwrecovery">Forgot Password?</a>
                </form>
            </div>
        </div>
		
        <div class="container">
            <p> or </p>
        </div>
        <div class="container">
            <button class="signUp" onclick="toggleSignUp()">Sign Up</button>
            <div class="signUpFields" id="signUpFields" style="display:none;">
                <form action="" id="signUpForm" style="opacity: 0.0">
                    First Name<br>
                    <input type="text" name="fname" placeholder="First Name">
                    <br>
                    Last Name<br>
                    <input type="text" name="lname" placeholder="Last Name">
                    <br>
                    Email<br>
                    <input type="text" name="email" placeholder="Email">
                    <br>
                    Password<br>
                    <input type="password" name="signUpPassword" placeholder="Password">
                    <br>
                    Verify Password<br>
                    <input type="password" name="verifyPassword" placeholder="Verify Password">
                    <br>
                    <button class="submit">Submit</button>
                </form>
			</div>
		</div-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5/dat.gui.min.js" type="text/javascript"></script>
		<canvas id="canvas"></canvas>
		<script>
	//MOUSE ANIMATION
	
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
	}


	/**
	 * Particle
	 */
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
</script>
</body>
	
