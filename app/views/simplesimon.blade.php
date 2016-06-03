@extends('layouts.master')

@section('title-tag')
    Simple Simon Game
@stop

@section('top-links')
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Orbitron:900' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body {
		font-family: Open Sans;
	}

	.title {
		font-family:VT323;
	}

	#birdie {
		position: absolute;
		left: -180px;
		top:80px;
		bottom:0px;
		margin-top:60px
	}

	#madBirdie {
		position: absolute;
		left: -180px;
		top:80px;
		bottom:0px;
		margin-top:60px;
		display:none;
	}

	.birdieConvo {
		position:absolute;
		left:-320px;
		top:80px;
	}

	.bambiConvo {
		position: absolute;
		right: -350px;
		top:-20px;
		bottom:0px;
		margin-top:60px;
	}

	#bambiSorry, #bambiWait {
		position: absolute;
		right: -230px;
		top:-20px;
		bottom:0px;
		margin-top:60px;
	}

	#bambi {
		position: absolute;
		right: -170px;
		top:50px;
		bottom:0px;
		margin-top:60px;
	}

	#madBambi {
		position: absolute;
		right: -170px;
		top:50px;
		bottom:0px;
		margin-top:60px;
		display:none;
	}

	.gameArea {
		width:200px;
		position: absolute;
		background-color: white;
		border-radius: 100px;
		top:30px;
		left:43%;
	}
	.gameBtn {
		height:100px;
		width:100px;
		float:left;
		opacity: .6;
	}

	.startBtn {
		margin-top:5px;
		font-family:VT323;
		font-size: 16px;
		background-color: white;
	}

	#blue	{
		background-color: blue;
		border: 1px solid blue;
		border-radius: 100px 0 0 0;
	    -moz-border-radius: 100px 0 0 0;
	    -webkit-border-radius: 100px 0 0 0;
	}

	#yellow	{
		background-color: yellow;
		border: 1px solid yellow;
		border-radius: -100px 0 0 100px;
	    -moz-border-radius: 0 0 0 100px;
	    -webkit-border-radius: 0 0 0 100px;
	}

	#red	{
		background-color: red;
		border: 1px solid red;
		border-radius: 0 100px 0 0;
	    -moz-border-radius: 0 100px 0 0;
	    -webkit-border-radius: 0 100px 0 0;
	}

	#green	{
		background-color: green;
		border: 1px solid green;
		border-radius: 0 0 100px 0;
	    -moz-border-radius: 0 0 100px 0;
	    -webkit-border-radius: 0 0 100px 0;
	}

	.roundNum {
		background-color: black;
		border:none;
		margin-top:15px;
		font-size: 20px;
		font-weight: bold;
		color:darkred;
		opacity:0;
		width:200px;
		font-family: Orbitron;
	}

	
	button:focus {
    background-color: none;
    outline: 0;
    -webkit-box-shadow: none;
          box-shadow: none;
}



	</style>
@stop
@section('content')
	<!-- simplesimon.dev -->
	<audio id="bigSwitch">
			<source src="/Sounds/bigSwitch.wav" type="audio/wav">
	</audio>
	<audio id="simonRed">
			<source src="/Sounds/simonRed.wav" type="audio/wav">
	</audio>
	<audio id="simonBlue">
			<source src="/Sounds/simonBlue.wav" type="audio/wav">
	</audio>
	<audio id="simonGreen">
			<source src="/Sounds/simonGreen.wav" type="audio/wav">
	</audio>
	<audio id="simonYellow">
			<source src="/Sounds/simonYellow.wav" type="audio/wav">
	</audio>
	<audio id="powerUp">
			<source src="/Sounds/powerUp.mp3" type="audio/mp3">
	</audio>
	<audio id="morningMood" autoplay>
			<source src="/Sounds/morningMood.wav" type="audio/mp3">
	</audio>
	<audio id="hum"  loop>
			<source src="/Sounds/simonHum.wav" type="audio/wav">
	</audio>
	<div class="container">
		<div class="gameArea center-block">
			<h1 class="title center-block text-center">Simple Simon!</h1>
			<div class="happyConvoHolder">
				<img class="birdieConvo happyConvo" id="birdieHello" src="/img/simonImg/birdieHello.png">
				<img class="birdieConvo happyConvo" id="birdieQuiet" src="/img/simonImg/birdieQuiet.png">
				<img class="bambiConvo happyConvo" id="bambiHooray" src="/img/simonImg/bambiHooray.png">
				<img class="bambiConvo happyConvo" id="bambiMusic" src="/img/simonImg/bambiMusic.png">
				<img class="bambiConvo happyConvo" id="bambiSorry" src="/img/simonImg/bambiSorry.png">
				<img class="bambiConvo happyConvo" id="bambiWait" src="/img/simonImg/bambiWait.png">
				<img class="birdieConvo happyConvo" id="birdieWait" src="/img/simonImg/birdieWait.png">
				<img class="bambiConvo happyConvo" id="bambiArm" src="/img/simonImg/bambiArm.png">
				<img class="birdieConvo happyConvo" id="birdieHurry" src="/img/simonImg/birdieHurry.png">
				<img class="bambiConvo happyConvo" id="bambiMad" src="/img/simonImg/bambiMad.png">
				<img class="birdieConvo happyConvo" id="birdieStammer" src="/img/simonImg/birdieStammer.png">
				<img class="bambiConvo happyConvo" id="bambiArgue" src="/img/simonImg/bambiArgue.png">
				<img class="birdieConvo happyConvo" id="birdieCold" src="/img/simonImg/birdieCold.png">
				<img class="bambiConvo happyConvo" id="bambiGary" src="/img/simonImg/bambiGary.png">
				<img class="birdieConvo evilConvo" id="birdieGotcha" src="/img/simonImg/birdieGotcha.png">
				<img class="bambiConvo evilConvo" id="bambiCopy" src="/img/simonImg/bambiCopy.png">
				<img class="birdieConvo evilConvo" id="birdieComplex" src="/img/simonImg/birdieComplex.png">
				<img class="bambiConvo evilConvo" id="bambiComplex" src="/img/simonImg/bambiComplex.png">
				<img class="birdieConvo evilConvo" id="birdieCant" src="/img/simonImg/birdieCant.png">
				<img class="birdieConvo evilConvo" id="birdieSuck" src="/img/simonImg/birdieSuck.png">
			</div>
			<div class="evilConvoHolder">
				
			</div>
			<img id="birdie" src="/img/simonImg/simonBird.png">
			<img id="madBirdie" src="/img/simonImg/simonAngryBird.png">
			<img id="bambi" src="/img/simonImg/simonBambi.gif">
			<img id="madBambi" src="/img/simonImg/simonAngryBambi.gif">
			<div class="row center-block">
				<button id="blue" class="gameBtn"></button>
				<button id="red" class="gameBtn"></button>
			</div>
			<div class="row center-block">
				<button id="yellow" class="gameBtn"></button>
				<button id="green" class="gameBtn"></button>
			</div>
			<div class="menu">
				<input class="roundNum center-block text-center">
		    	<button id="start" class="startBtn center-block">Click to start!</button>
	    	</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
"use strict";
(function() {
			
    $(document).ready(function() {

    	//available colors
	    var colors = ['red', 'yellow', 'green', 'blue'];

	    //selects a random color
	    var color = colors[Math.floor(Math.random()*colors.length)];
		
		//holds correct color sequence
	    var solution = []

	    //refers to index of solution array
	    var index = 0

	    // refers to convo state
	    var state = 'happy'



	    // Conversations
	    $('.birdieConvo').hide();
	    $('.bambiConvo').hide();
	    	// happy convo
	    	$('#birdieHello').delay(2000).fadeIn(0);
	    	$('#birdieHello').delay(3000).fadeOut(0);
	    	$('#bambiHooray').delay(4000).fadeIn(0);
	    	$('#bambiHooray').delay(3000).fadeOut(0);
	    	$('#bambiWait').delay(13000).fadeIn(0);
	    	$('#bambiWait').delay(3000).fadeOut(0);
	    	$('#bambiMusic').delay(16500).fadeIn(0);
	    	$('#bambiMusic').delay(3000).fadeOut(0);
	    	$('#birdieQuiet').delay(19500).fadeIn(0);
	    	$('#birdieQuiet').delay(3000).fadeOut(0);
	    	$('#bambiSorry').delay(22500).fadeIn(0);
	    	$('#bambiSorry').delay(2000).fadeOut(0);
	    	$('#bambiWait').delay(16000).fadeIn(0);
	    	$('#bambiWait').delay(2000).fadeOut(0);
	    	$('#birdieWait').delay(33000).fadeIn(0);
	    	$('#birdieWait').delay(2000).fadeOut(0);
	    	$('#bambiWait').delay(2000).fadeIn(0);
	    	$('#bambiWait').delay(2000).fadeOut(0);
	    	$('#birdieWait').delay(2000).fadeIn(0);
	    	$('#birdieWait').delay(2000).fadeOut(0);
	    	$('#bambiArm').delay(39000).fadeIn(0);
	    	$('#bambiArm').delay(2000).fadeOut(0);
	    	$('#birdieHurry').delay(41000).fadeIn(0);
	    	$('#birdieHurry').delay(2000).fadeOut(0);
	    	$('#bambiMad').delay(43000).fadeIn(0);
	    	$('#bambiMad').delay(7000).fadeOut(0);
	    	$('#birdieStammer').delay(50000).fadeIn(0);
	    	$('#birdieStammer').delay(2000).fadeOut(0);
	    	$('#bambiArgue').delay(52000).fadeIn(0);
	    	$('#bambiArgue').delay(5000).fadeOut(0);
	    	$('#birdieWait').delay(19000).fadeIn(0);
	    	$('#birdieWait').delay(2000).fadeOut(0);
	    	$('#birdieCold').delay(60000).fadeIn(0);
	    	$('#birdieCold').delay(5000).fadeOut(0);
	    	$('#bambiGary').delay(65000).fadeIn(0);
	    	$('#bambiGary').delay(5000).fadeOut(0);
	 	
	    	
	    function playSound(userInput) {
	    	switch (userInput) {
				case "red":
	                $('#simonRed').get(0).play();
					break;
				case "yellow":
	                $('#simonYellow').get(0).play();
					break;
				case "green":
	                $('#simonGreen').get(0).play();
					break;
				case "blue":
	                $('#simonBlue').get(0).play();
					break;
			};
		};

	    function showSolution(value) {
	    	switch (value) {
				case "red":
	                $('#red').animate ({
	                    'opacity' : '1'
	                }, 10);
	                setTimeout(function(){
						$('#red').animate ({
		                    'opacity' : '.6'
		                }, 10);
	                },501)
	                $('#simonRed').get(0).play();
					break;
				case "yellow":
					$('#yellow').animate ({
	                    'opacity' : '1'
	                }, 10);
	                setTimeout(function(){
						$('#yellow').animate ({
		                    'opacity' : '.6'
		                }, 10);
	                },501)
	                $('#simonYellow').get(0).play();
					break;
				case "green":
					$('#green').animate ({
	                    'opacity' : '1'
	                }, 10);
	                setTimeout(function(){
						$('#green').animate ({
		                    'opacity' : '.6'
		                }, 10);
	                },501)
	                $('#simonGreen').get(0).play();
					break;
				case "blue":
					$('#blue').animate ({
	                    'opacity' : '1'
	                }, 10);
	                setTimeout(function(){
						$('#blue').animate ({
		                    'opacity' : '.6'
		                }, 10);
	                },501)
	                $('#simonBlue').get(0).play();
					break;
			};
			index = 0;
	    };

	    function showFirstColor() {
	    	switch (color) {
				case "red":
	                $('#red').animate ({
	                    'opacity' : '1'
	                }, 10);
	                setTimeout(function(){
						$('#red').animate ({
		                    'opacity' : '.6'
		                }, 10);
	                },501)
	                $('#simonRed').get(0).play();
	                solution.push(color);
	                console.log(solution);
					break;
				case "yellow":
					$('#yellow').animate ({
	                    'opacity' : '1'
	                }, 10);
	                setTimeout(function(){
						$('#yellow').animate ({
		                    'opacity' : '.6'
		                }, 10);
	                },501)
	                $('#simonYellow').get(0).play();
	                solution.push(color);
	                console.log(solution);
					break;
				case "green":
					$('#green').animate ({
	                    'opacity' : '1'
	                }, 10);
	                setTimeout(function(){
						$('#green').animate ({
		                    'opacity' : '.6'
		                }, 10);
	                },501)
	                $('#simonGreen').get(0).play();
	                solution.push(color);
	                console.log(solution);
					break;
				case "blue":
					$('#blue').animate ({
	                    'opacity' : '1'
	                }, 10);
	                setTimeout(function(){
						$('#blue').animate ({
		                    'opacity' : '.6'
		                }, 10);
	                },501)
	                $('#simonBlue').get(0).play();
	                solution.push(color);
	                console.log(solution);
					break;
			}
		};

		// game button functionality
		$('.gameBtn').mousedown(function(event) {
		    	$(this).css ({
	                    'opacity' : 1
	                });
	   			var userInput = $(this).attr('id');
	   			playSound(userInput);
	   			console.log(userInput);
	   			if ( userInput == solution[index] ) {
	   				console.log("That's right!");
	   				console.log(index);
	   				index++;
	        		if (index == solution.length) {
	        			$('.roundNum').val('Round ' + (index + 1));
	        			var newColor = colors[Math.floor(Math.random()*colors.length)];
		    			console.log(newColor);
	        			solution.push(newColor);
	        			console.log(solution);
	        			var showIndex = 0
	        			var interval = setInterval(function(){
	        				showSolution(solution[showIndex]);
	        					showIndex++;
	        					if (showIndex >= solution.length){
	        						clearInterval(interval);
	        					}
    					}, 750);
	        		};
	   			} else {
		        	$('.roundNum').val('WRONG!');
		        	$('#birdieSuck').delay(0).fadeIn(0);
	    			$('#birdieSuck').delay(2000).fadeOut(0);
	        		// displayString = "";
		   			// var wrongString = "WRONG!"
					// $('.codeEntry').val( wrongString );
		        	index = 0;
		        	solution = [];
		        	$('#start').show();
		        	console.log(solution);
        		};
	   		});

		function powerFlash(color, upTime, downTime){
			setTimeout(function(){
	    		$(color).animate({
	    		opacity : 1
	    		}, 175)
	    	}, upTime)
	    	setTimeout(function(){
	    		$(color).animate({
	    		opacity : 0
	    		}, 175)
	    	}, downTime);
    	};

	    // the game

	    $('.startBtn').click(function(event) {
	    	$('.happyConvo').css({
	    		'height': '0px',
	    		'width': '0px'
	    	});
	    	// Evil Convo
	    	$('#birdieGotcha').fadeIn(0);
	    	$('#birdieGotcha').delay(2000).fadeOut(0);
	    	$('#bambiCopy').delay(2000).fadeIn(0);
	    	$('#bambiCopy').delay(2000).fadeOut(0);
	    	$('#birdieComplex').delay(4000).fadeIn(0);
	    	$('#birdieComplex').delay(3000).fadeOut(0);
	    	$('#bambiComplex').delay(7000).fadeIn(0);
	    	$('#bambiComplex').delay(3000).fadeOut(0);
	    	$('#birdieWait').delay(10000).fadeIn(0);
	    	$('#birdieWait').delay(2000).fadeOut(0);
	    	$('#birdieCant').delay(12000).fadeIn(0);
	    	$('#birdieCant').delay(2000).fadeOut(0);

	    	// Game Intro
	    	$('#morningMood').get(0).pause();
	    	$('#start').hide();
	    	$('#bambi').hide();
	    	$('#birdie').hide();
	    	$('#madBambi').show();
	    	$('#madBirdie').show();
	    	$('#start').html('Try again!');
	    	$('.roundNum').val('Round ' + (index + 1));
	    	$('#bigSwitch').get(0).play();
	    	$('body').css ({
	    		'background-color' : 'black'
	    	});
	    	$('h1').css ({
	    		'color' : 'darkred',
	    		'font-family' : 'Orbitron'
	    	});
	    	$('h1').html('COMPLEX SIMON');
	    	$('.gameArea').css ({
	    		'background-color' : 'black'
	    	})
	    	$('.gameBtn').animate({
	    		opacity : 0
	    	}, 1)
	    	// Power Up
	    	setTimeout(function(){
	    	$('#powerUp').get(0).play();
	    	},1000);
	    	// Power wave 1
	    	powerFlash('#red', 2400, 2510);
	    	powerFlash('#green', 2510, 2620);
	    	powerFlash('#yellow', 2620, 2730);
	    	powerFlash('#blue', 2730, 2840);
	    	powerFlash('#red', 2840, 2950);
	    	powerFlash('#green', 2950, 3060);
	    	powerFlash('#yellow', 3060, 3170);
	    	powerFlash('#blue', 3170, 3280);
	    	// Power wave 2
	    	powerFlash('#blue', 3400, 3510);
	    	powerFlash('#yellow', 3510, 3620);
	    	powerFlash('#green', 3620, 3730);
	    	powerFlash('#red', 3730, 3840);
	    	powerFlash('#blue', 3840, 3950);
	    	powerFlash('#yellow', 3950, 4060);
	    	powerFlash('#green', 4060, 4170);
	    	powerFlash('#red', 4170, 4280);
	    	// Power wave 3 (early, too short)
	    	powerFlash('#blue', 5700, 5810);
	    	powerFlash('#yellow', 5810, 5920);
	    	powerFlash('#green', 5920, 6030);
	    	powerFlash('#red', 6030, 6140);
	    	powerFlash('#blue', 6140, 6250);
	    	powerFlash('#yellow', 6250, 6360);
	    	powerFlash('#green', 6360, 6470);
	    	powerFlash('#red', 6470, 6580);
	    	powerFlash('#blue', 6580, 6690);
	    	powerFlash('#yellow', 6690, 6800);
	    	powerFlash('#green', 6800, 6910);
	    	powerFlash('#red', 6910, 7020);
	    	powerFlash('#blue', 7020, 7130);
	    	powerFlash('#yellow', 7130, 7240);
	    	powerFlash('#green', 7240, 7350);
	    	powerFlash('#red', 7350, 7460);
	    	powerFlash('#blue', 7460, 7570);
	    	powerFlash('#yellow', 7570, 7680);
	    	powerFlash('#green', 7680, 7790);
	    	powerFlash('#red', 7900, 8010);

	    	// Show Game Board
	    	setTimeout(function(){
	    		$('.gameBtn').animate({
	    			opacity : 1
	    		}, 1800);
	    		$('.gameBtn').animate({
	    			opacity :'.6'
	    		}, 1000);
	    		$('#hum').get(0).play();
	    	},9000);

	    	setTimeout(function(){
	    		$('.roundNum').animate({
	    			opacity : 1
	    		}, 1000);
	    	}, 10000);
   			setTimeout(showFirstColor, 12000);

		    $('.gameBtn').mouseup(function(event) {
				$(this).css ({
                    'opacity' : '.6'
                });
                // figure out how to play sounds
			});
		});
     })
})();

</script>
@stop