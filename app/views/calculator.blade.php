@extends('layouts.master')

@section('title-tag')
    Full-Stack Web Developer
@stop

@section('top-links')
    <title>Pomo's Calculator</title>
    <meta charset "utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" href="/css/calculator.css">
@stop

@section('content')
<div id="calculator_holder" class="container">
	<div class="row" id="display_circle_holder">
    	<div id="red_circle" class="circles">
    		<p class="circle_hover"> x</p>
    	</div>
    	<div id="yel_circle" class="circles">
    		<p class="circle_hover"> -</p>
    	</div>
    	<div id="grn_circle" class="circles">
    		<p class="circle_hover"> +</p>
    	</div>
        <input id="display_field"  class="input col-xs-12" name="display" type="text" placeholder="0">
    </div>
    <div class="row value_row">
        <input id="left_operand" value="" class="input col-xs-5" name="Left Operand" type="text" placeholder="First #">
        <input id="operator" value="" class="input col-xs-2 operator" name="Operator" type="text" placeholder="Operator">
        <input id="right_operand" value="" class="input right_operand col-xs-5"  name="Right Operand" type="text" placeholder="Second #">
    </div>
    <div class="row row_1">
    	<button id="clearBtn" class="spec_button col_1 ">C</button>
    	<button id="pos_neg" class="spec_button col_2 ">+/-</button>
    	<button id="percent" class="spec_button col_3 ">%</button>
        <button id="divideBtn" value="/" class="op_button col_4 ">÷</button>
    </div>
    <div class="row row_2">
    	<button id="sevenBtn" value="7" class="num_button col_1 ">7</button>
        <button id="eightBtn" value="8" class="num_button col_2 ">8</button>
        <button id="nineBtn" value="9" class="num_button col_3 ">9</button>
        <button id="multiplyBtn" value="*" class="op_button col_4 ">x</button>
    </div>
    <div class="row row_3">
    	<button id="fourBtn" value="4"class="num_button col_1 ">4</button>
        <button id="fiveBtn" value="5" class="num_button col_2 ">5</button>
        <button id="sixBtn" value="6" class="num_button col_3 ">6</button>
        <button id="subtractBtn" value="-" class="op_button col_4 ">-</button>
    </div>
    <div class="row row_4">
        <button id="oneBtn" value="1"class="num_button col_1 ">1</button>
        <button id="twoBtn" value="2"class="num_button col_2 ">2</button>
        <button id="threeBtn" value="3"class="num_button col_3 ">3</button>
        <button id="addBtn" value="+" class="op_button col_4 ">+</button>
    </div>
    <div class="row row_5">
        <button id="zeroBtn" value="0" class="num_button col_2">0</button>
        <button id="decimal" value="."class="num_button col_2 ">.</button>
        <button id="equalsBtn" class="equals_button col_4 ">=</button>
    </div>
</div>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/calculator.js"></script>