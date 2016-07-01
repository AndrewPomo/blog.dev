@extends('layouts.master')

@section('title-tag')
    My Resume
@stop

@section('top-links')
   <title>Instant Weather Forecast by QuickWeather</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<style type="text/css">

		body	{
			font-family: Open Sans;
			font-weight: 300;
			background-color: skyblue;
		}

		#map-canvas {
            height: 380px;
            border-radius:6px;
        }

        .mapHolder, .jumbotron {
        	margin-top:30px;
        	margin-bottom:30px;
        }

        .jumbotron	{
        	background-color: rgba(255, 255, 255, .9);
        	padding-top: 10px;
        	padding-bottom: 10px;
        }

        .dayHolder	{
        
        	background-color: rgba(255, 255, 255, .8);
        	border: 1px solid grey;
        	border-top:none;
        	margin-bottom:30px;
        }

        #cityNameHolder {
        	margin-top:30px;
        	border-radius:6px;
        }

        #cityNameBar {
        	background-color: rgba(255, 255, 255, .8);
        	margin-bottom: 0px;
        	border: 1px solid grey;
        	font-size:18px;
        	padding-bottom:5px;
        	padding-top:5px;
        	display:none;
        }

        #mainHeader {
        	font-size:23px;
        }

        .tempHolder {
        	padding-bottom: 0px;
        	font-size:22px;
        }

        #coordinateInputs {
        	margin-bottom: 10px;
        }

        .dayInfo	{
        	font-size: 20px;
        }

        .descriptionInfo {
        	font-style: italic;
        }

        .hiTempInfo {
        	margin-top:none;
        }

        .weathInfoHolder {
        	margin-top:-2px;
        	padding-right:0px;
        }

        .dataRow	{
        	font-size:16px;
        }

        .weatherStuffHolder {
        	border:none;
        	background-color: skyblue;
        	height:100%;
        }

        .navbar-default{
        	margin-bottom:0px;
        }

        .forecast-holder {
        	margin-bottom:30px;
        }

        #jumbograph	{
        	margin-bottom:0px;
        }

	</style>
@stop

@include('partials.navbar')

@section('content')
	

    <div class="container-fluid weatherStuffHolder">
    	<div class="jumbotron col-xs-10 col-xs-offset-1">
			<p id="jumbograph">Welcome to Quickweather - the fastest and easiest way to get a simple forecast for any location on earth. Get your forecast by dragging the pin below to any location!</p>
    	</div>
	<!-- Map Holder -->
	    <div class="container mapHolder col-xs-10 col-xs-offset-1" id="mapHolder">
	    	<div class="col-xs-12" id="map-canvas"></div>
		</div>

		<div class="jumbotron col-xs-6 col-xs-offset-3 text-center">
			<p id="jumbograph">Once you drop the pin, your forecast will appear here!</p>
		</div>

		<!-- Weather Holder -->
		<div class="col-xs-10 col-xs-offset-1" id="cityNameHolder">
			<p id="cityNameBar" class="col-xs-12 text-center"></p>
		</div>
		<div class="col-xs-10 col-xs-offset-1" id="forecastHolder">
		</div>
	</div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARqkh-TCsnLSJyU72z5IxXWDKhAKAaaIo"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Script to show address on map -->
    <script type="text/javascript">
    (function() {
        "use strict";
        $(document).ready(function() {

	        // Set our map options
	        var mapOptions = {
	            // Set the zoom level
	            center: {lat: 37.0902, lng: -95.7129},
	            zoom: 4,
	        }

	        // Render the map
	        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	        // Add a marker
	        var defaultPos = {lat: 37.0902, lng: -95.7129};
	        var marker = new google.maps.Marker({
		    	position: defaultPos,
		    	map: map,
		    	draggable: true,
		    	title: 'Pick your place!'
		  	});
	
	        //Get Lat/Long from dropped pin.
		  	google.maps.event.addListener(marker, 'dragend', function(event){
			    var latitude = event.latLng.lat().toFixed(3);
			    var longitude = event.latLng.lng().toFixed(3);
				map.setCenter(marker.position);
				marker.setMap(map);
				map.setZoom(7);
				$('.jumbotron').hide();

			//Get forecast from dropped pin.
				$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		    		APPID: "fba2f94408480f3524293a3e6354afa5",
		    		lat: latitude,
		    		lon: longitude,
		    		units: "imperial",
		    		cnt: "3"
				}).done(function(data) {
				    console.log(data);
				    var day = data.list;
		            var forecastData = "";
		            var cityName = data.city.name;
		            $('#cityNameBar').html("Here's the forecast for <strong>" + cityName + '</strong>! Try Another City.');
		            $('#cityNameBar').css({
		            	'display' : 'block'
		            });

		            //Display Stuff
		            day.forEach(function(day,index){
				    	var date = new Date(day.dt*1000);
				    	var month = date.getMonth();
				    	var specDate = date.getDate();
				    	var dayName = date.getDay();
				    	var weatherDesc = day.weather[0].icon;
				    	
				    	// Forecast Info & Background Image
		            	forecastData += '<div class="dayHolder col-xs-4"><div class="dateHolder"><p class="dayInfo text-center"><strong>'
		            	if (index == 0) {
				    		forecastData += 'Today - ';
				    		if (weatherDesc == '01d') {
							$(".weatherStuffHolder").css({
								'background-image' : 'url(img/clearSky.jpg)'
								 });
					    	} else if (weatherDesc == '02d') {
					    		$(".weatherStuffHolder").css({
					    			'background-image' : 'url(img/fewClouds.jpg)'
					    			 });
					    	} else if (weatherDesc == '03d') {
					    		$(".weatherStuffHolder").css({
					    			'background-image' : 'url(img/scatteredClouds.jpg)'
					    			 });
					    	} else if (weatherDesc == '04d') {
					    		$(".weatherStuffHolder").css({
					    			'background-image' : 'url(img/brokenClouds.jpg)'
					    			 });
					    	} else if (weatherDesc == '09d') {
					    		$(".weatherStuffHolder").css({
					    			'background-image' : 'url(img/showerRain.jpg)'
					    			 });
					    	} else if (weatherDesc == '10d') {
					    		$(".weatherStuffHolder").css({
					    			'background-image' : 'url(img/rain.jpg)'
					    			 });
					    	} else if (weatherDesc == '11d') {
					    		$(".weatherStuffHolder").css({
					    			'background-image' : 'url(img/thunderstorm.jpg)'
					    			 });
					    	} else if (weatherDesc == '13d') {
					    		$(".weatherStuffHolder").css({
					    			'background-image' : 'url(img/snow.jpg)'
					    			 });
					    	} else if (weatherDesc == '50d') {
					    		$(".weatherStuffHolder").css({
					    			'background-image' : 'url(img/mist.jpg)'
					    			 });
					    	};
				    	} else if (index <= 2) {
				    		if (dayName == 0) {
				    			forecastData += 'Mon. - '
				    		} else if (dayName == 1) {
				    			forecastData += 'Tue. - '
				    		} else if (dayName == 2) {
				    			forecastData += 'Wed. - '
				    		} else if (dayName == 3) {
				    			forecastData += 'Thu. - '
				    		} else if (dayName == 4) {
				    			forecastData += 'Fri. - '
				    		} else if (dayName == 5) {
				    			forecastData += 'Sat. - '
				    		} else if (dayName == 6) {
				    			forecastData += 'Sun. - '
				    		}
				    	}
		            	
		            	if (month == 0) {
							forecastData += 'Jan.'
						} else if (month == 1) {
							forecastData += 'Feb.'
						} else if (month == 2) {
							forecastData += 'Mar.'
						} else if (month == 3) {
							forecastData += 'Apr.'
						} else if (month == 4) {
							forecastData += 'May.'
						} else if (month == 5) {
							forecastData += 'Jun.'
						} else if (month == 6) {
							forecastData += 'Jul.'
						} else if (month == 7) {
							forecastData += 'Aug.'
						} else if (month == 8) {
							forecastData += 'Sep.'
						} else if (month == 9) {
							forecastData += 'Oct.'
						} else if (month == 10) {
							forecastData += 'Nov.'
						} else if (month == 11) {
							forecastData += 'Dec.'
						}
		            	forecastData += ' ' + parseInt(specDate) + '</strong></p></div>'
		            	forecastData += '<div class="row iconTempRow"><div class="weathInfoHolder col-xs-7"><img class="center-block" id="weatherIcon" src="http://openweathermap.org/img/w/' + day.weather[0].icon + '.png"><p class="descriptionInfo text-center">' + day.weather[0].description +'</p></div>'
		            	forecastData += '<div class="tempHolder col-xs-5"><p class="hiTempInfo text-left"><strong>' + parseInt(day.temp.max) + '&deg;</strong></p><p class="loTempInfo text-left">' + parseInt(day.temp.min) + '&deg</p></div></div>'
		            	forecastData += '<div class="row windRow dataRow col-xs-10 col-xs-offset-1"><div class="windHolder col-xs-3 center-block"><p class="windInfo text-left"><strong>Wind: </strong></p></div><div class="windSpeedHolder col-xs-9 center-block"><p class="windInfo text-right">' + day.deg +'&deg, ' + parseInt(day.speed) + 'mph</p></div></div>'
		            	forecastData += '<div class="row humidRow dataRow col-xs-10 col-xs-offset-1"><div class="humidHolder col-xs-3 center-block"><p class="humidityInfo text-left"><strong>Humidity:</strong></p></div><div class="humidNumberHolder col-xs-9 center-block"><p class="humidNumber text-right"> ' + day.humidity + '%</p></div></div>'
		            	forecastData += '<div class="row pressureRow dataRow col-xs-10 col-xs-offset-1"><div class="pressureHolder col-xs-3 center-block"><p class="pressureInfo text-left"><strong>Pressure:</strong></p></div><div class="pressureNumberHolder col-xs-9 center-block"><p class="pressureNumber text-right"> ' + parseInt(day.pressure*.0295301) + 'in.</p></div></div>'
		            	forecastData += '</div>'
	            	});
	                $("#forecastHolder").html(forecastData);
				});
			});
        });
    })();
    </script>
</body>
</html>