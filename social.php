<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAmQvwwriACv5qz8Dn-T-LpJNpGy_h0UH8" 
          type="text/javascript"></script>
<link href= 'zstyle.css' rel= 'stylesheet' >

</head>

<body>

	<div class="div1">
	<div class="navigation">
	
	<ul>
		<li><a href = "http://delphi.cs.csubak.edu/~careerai/frontpage.php">Home</a></li>
		<li><a>Games</a>
			<ul id = "sub_navlist">
				<li><a href = "https://www.cs.csubak.edu/~asolorio/project/test3.html">Play Now!</a></li>
				<li><a>Scores</a></li>
			</ul>
		</li>
		<li><a>Progress</a>
			<ul id = "sub_navlist">
				<li><a>Suggested Careers</a></li>
				<li><a>Training Tips</a></li>
			</ul>
		</li>
		<li><a href = "ptimeline.php">Timeline</a></li>
		<li><a href = "http://delphi.cs.csubak.edu/~careerai/social">Social</a></li>
		<li><a>Contact</a>
			<ul id = "sub_navlist">
				<li><a>About Us</a></li>
				<li><a>Email Us</a></li>
			</ul>
		</li>
	</ul>
	
	</div>
	</div>

	  <div id="map" style="width: 2000px; height: 1000px; z-index:-1; position:relative;"></div>

	<script type="text/javascript">

	        var map = new google.maps.Map(document.getElementById('map'), {
        	          zoom: 5,
                            center: new google.maps.LatLng(-33.92, 151.25),
     			    mapTypeId: google.maps.MapTypeId.ROADMAP
          });

	        var infowindow = new google.maps.InfoWindow();

	</script>
</body>
</html>
