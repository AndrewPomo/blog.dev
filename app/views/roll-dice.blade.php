
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dice Game</title>
</head>
<body>
    <h1>Dice Game</h1>
    <p> {{{$guess}}} </p>
    <p> {{{$dieMessage}}} </p>
    <p> {{{$outcome}}} </p>
    <a href="{{{ action('HomeController@rollDice', [1]) }}}">Guess 1</a>
    <a href="{{{ action('HomeController@rollDice', [2]) }}}">Guess 2</a>
    <a href="{{{ action('HomeController@rollDice', [3]) }}}">Guess 3</a>
    <a href="{{{ action('HomeController@rollDice', [4]) }}}">Guess 4</a>
    <a href="{{{ action('HomeController@rollDice', [5]) }}}">Guess 5</a>
    <a href="{{{ action('HomeController@rollDice', [6]) }}}">Guess 6</a>
</body>
</html>