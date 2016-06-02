@extends('layouts.master')

@section('content')
<div class="container">
    <h1> {{{$post->title}}} </h1>
    <h4> Written by: {{{$post->author}}} </h4>
    <p>Tags: {{{$post->categories}}} </p>
    <p> {{{$post->body}}} </p>
</div>
@stop