<?php
session_start();

$dbconn = pg_connect("host=localhost dbname=careerai port=5432 user=careerai password=pal92Dizj")
or die('Could not connect: ' . pg_last_error());

?>

<html>
<body>
	<link href= 'zstyle.css' rel= 'stylesheet' >
	<div class="div1">
	<div id="navigation">
	<ul>
		<li><a>Home</a></li>
		<li><a>Games</a>
			<ul>
				<li><a>Play Now!</a></li>
				<li><a>Scores</a></li>
			</ul>
		</li>
		<li><a>Progress</a>
			<ul>
				<li><a>Suggested Careers</a></li>
				<li><a>Training Tips</a></li>
			</ul>
		</li>
		<li><a>Timeline</a></li>
		<li><a>Social</a></li>
		<li><a>Contact</a>
			<ul>
				<li><a>About Us</a></li>
				<li><a>Email Us</a></li>
			</ul>
		</li>
	</ul>
	</div>
	</div>
</body>

</html>
