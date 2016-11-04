@extends('layouts.main')

@section('title', '| Homepage')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
          <h1>Welcome to my Blog!</h1>
          <p class="lead">Thank you for visiting. This is my test site built with Laravel. Please read my popular post!</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
    </div>
</div> <!--end of header .row-->
<div class="row">
    <div class="col-md-8">
        <div class="post">
            <h2>Post Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h2>Post Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h2>Post Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h2>Post Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim...</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
</div>
@endsection