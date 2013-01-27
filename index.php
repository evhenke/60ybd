<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300|Sorts+Mill+Goudy:400,400italic' rel='stylesheet' type='text/css'>	
	<!--link rel="stylesheet" href="reset.css" type="text/css" charset="utf-8"/-->

	<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8"/>
	
	<link rel="icon" href="favicon.ico" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO4QibmxwXBOYVh4sPTRaEU-VLQslomPA&sensor=true">
    </script>
    <script type="text/javascript">
      function initialize() {
		var map;
		var salernes = new google.maps.LatLng(43.572991,6.242369);

		var stylez = [
		    {
		      featureType: "all",
		      elementType: "all",
		      stylers: [
		        { saturation: -100 } // <-- THIS
		      ]
		    }
		];

		var mapOptions = {
		    zoom: 16,
			panControl: true,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false,
			scrollwheel: false,
		    center: salernes,
		    // mapTypeControlOptions: {
		    //      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gray']
		    // }
		};

		map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

		var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });    
		map.mapTypes.set('gray', mapType);
		map.setMapTypeId('gray');
		
		//var image = "map_pin_alt_16x32.png"
		var image = "img/map_pin_stroke_20x32.png"
		//var image = "map_pin_fill_20x32.png"
		//var image = "map_pin_stroke_15x24.png"
		//var image = "map_pin_alt_12x24.png"
		var marker = new google.maps.Marker({
	      position: salernes,
	      map: map,
	      title:"Le petit reve",
	      icon: image
	  	});
      }
    </script>

	<title>30 + 30</title>

</head>

<body onload="initialize()">

<header>
	<img src="img/petitreve.jpg" alt="60" />
</header>

<div id="sixty" onclick="this.style.visibility='hidden'">
	<span>60</span>
</div>


<div class="grid">
  <h1><span class="fr">30</span> <span class="de">+ 30</span> <span class="en"> = 60</span></h1>

  <div class="col-1 fr">
  	<h3>Nos 60 ans</h3>
    <p>Fetez nos 60 ans avec nous en la merveilleuse Provence!</p>
  </div>
  <div class="col-2 de">
     <h3>Wir werden 60</h3>
     <p>Fetez nos 60 ans avec nous en la merveilleuse Provence!</p>
  </div>
  <div class="col-3 en">
  	 <h3>Nos 60 ans</h3>
     <p>Join us in Southern France for a decent party.</p>
  </div>
</div>

<div class="grid">
  <h1><span class="fr">Lieu.</span> <span class="de">Location.</span> <span class="en">Location.</span></h1>

  <div class="col-1 fr">
  	<h3>SALERNES</h3>
    <p>Petit Reve</p>
  </div>
  <div class="col-2 de">
     <h3>SALERNES</h3>
     <p>Fetez nos 60 ans avec nous en la merveilleuse Provence!</p>
  </div>
  <div class="col-3 en">
  	 <h3>SALERNES</h3>
     <p>Please do <u>not</u> consider to do any part of the travel with Deutsche Bahn.</p>
  </div>
</div>


<div class="grid">

	<h1><span class="fr">Voyage.</span> <span class="de">Anreise.</span> <span class="en">Travel.</span></h1>

  <div class="col-1 fr">
    <img src="img/train_fr.png" alt="60" />
  </div>
  <div class="col-2 de">
     <img src="img/train_de.png" alt="60" />
  </div>
  <div class="col-3 en">
  	 <img src="img/train_en.png" alt="60" />
     <p>The next train station from Salernes is Les Arcs/Draguignan.</p>
     <p>For train tickets check <a href="http://www.raileurope.com/index.html">rail-europe</a> or <a href="http://www.tgv-europe.com/en/">tgv-europe</a>.
     Let us know when you arrive and someone is coming to pick you up.</p>
     <p>Please do <u>not</u> consider to do any part of your travel with Deutsche Bahn.</p>
  </div>
</div>


<div id="map_canvas" class="grid" style="width:100%; height:450px"></div>


<!-- div id="footer">
Wir freuen uns auf Euch!
</div-->



<i class="frame-top"><i></i></i><i class="frame-right"></i><i class="frame-bottom"><i></i></i><i class="frame-left"></i>





</body>

</html>