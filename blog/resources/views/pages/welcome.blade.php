@extends('main')

@section('title', '| Homepage')


<!--
@section('stylesheets')
    <link rel="stylesheets" type="text/css" href="styles.css">
@endsection
-->


@section('content')    
     <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank tou so much for visiting. This is my test website built with Laravel. Please read my latest post</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
        </div> <!-- end of header .row-->

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Loremm......</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Loremm......</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Loremm......</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Loremm......</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection

{{--
@section('scripts')
    <script>confirm('I loaded up some JS');</script>
@endsection
--}}