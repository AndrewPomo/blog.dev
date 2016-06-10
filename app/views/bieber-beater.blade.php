<!DOCTYPE html>
<html>
<head>
	<title>Bieber Beater</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/whackamole.css">
</head>
<body>
	<audio id="punch">
			<source src="/Sounds/punch.mp3" type="audio/mp3">
	</audio>
	<audio id="ching">
			<source src="/Sounds/ching.wav" type="audio/wav">
	</audio>
	<div class="container mainContainer">
		<h1 class="title center-block text-center">Bieber Beater</h1>
		<div class="gameArea center-block">
			<div class="gameRow row center-block" id='topRow'>
				<img class="fist" id="topFist" src="/img/fist.png">
				<div class="bieberPit" id="bieberPitOne">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
				</div>
				<div class="bieberPit" id="bieberPitTwo">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
					<div class="blocker center-block "></div>
				</div>
				<div class="bieberPit" id="bieberPitThree">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
				</div>
			</div>
			<div class="gameRow row center-block" id='middleRow'>
				<img class="fist" id="middleFist" src="/img/fist.png">
				<div class="bieberPit" id="bieberPitFour">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
				</div>
				<div class="bieberPit" id="bieberPitFive">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
					<div id="middleBlocker" class="blocker"></div>
				</div>
				<div class="bieberPit" id="bieberPitSix">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
				</div>
			</div>
			<div class="gameRow row center-block" id='bottomRow'>
				<img class="fist" id="bottomFist" src="/img/fist.png">
				<div class="bieberPit" id="bieberPitSeven">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
				</div>
				<div class="bieberPit" id="bieberPitEight">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
					<div id="bottomBlocker" class="blocker"></div>
				</div>
				<div class="bieberPit" id="bieberPitNine">
					<div class="topHalf"></div>
					<div class="bottomHalf"></div>
				</div>
			</div>
			<div class="menu row center-block">
				<div class="row">
					<p class="inputLabel">Your Score: </p> <input class="scoreNum" value="0">
				</div>
				<div class="row">
					<p class="inputLabel">Your Highest Score: </p><input class="highScoreNum" value="0">
				</div>
				<div class="row">
					<p class="inputLabel">Time Remaining: </p><input class="timer" value="30">
				</div>
		    	<button id="start" class="startBtn center-block">Click to start!</button>
		    </div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="js/whackamole.js"></script>
</body>
</html>