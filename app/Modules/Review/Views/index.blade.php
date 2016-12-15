<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    <div class="sharebee">
        <div class="row">
            <div class="col-md-12 text-center">
                <img width="150" src="https://camo.githubusercontent.com/c79c958a5fcf3a7499c95d548cbb1ac04e138ce7/68747470733a2f2f6c61726176656c2e636f6d2f6c61726176656c2e706e67" data-canonical-src="https://laravel.com/laravel.png" style="max-width:100%;">
                <br> <br>
                <p><b>Laravel 5.2</b></p>
            </div>
        </div>

         <div class="row">
             <div class="col-md-12 text-center">
                 <h2> SHAREBEE </h2>
             </div>
         </div>
        <br>
        <div class="row">
            <div class="col-md-offset-4 col-md-2 text-center">
                <div id="review-form-btn"></div>
            </div>
            <div class="col-md-1 text-center">
                <div id="review-list-btn"></div>
            </div>
        </div>
    </div>
</div>

<div class="rl-loader" style="display:none;"><img src="{{ URL::to('assets/images/loader.gif') }}" alt=""> </div>
<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/review.min.js') }}" async data-baseUrl="{{ URL::to('/') }}" data-review-param="1" ></script>
</body>
</html>
