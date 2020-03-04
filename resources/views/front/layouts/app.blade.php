<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
</head>
<body>
@php
    $categories = \App\Models\Category::inRandomOrder()->take(5)->get();
@endphp
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <h2><a href="{{route('index')}}">Blog</a></h2>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="menu">
                        <ul>
                            <li class="active"><a href="{{route('index')}}">Ana Sayfa</a></li>
                            @foreach($categories as $category)
                                <li><a href="{{route('category_articles', $category->id)}}">{{$category->name}}</a></li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bg">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="footer-menu">
                                    <ul>
                                        <li class="active"><a href="{{route('index')}}">Ana Sayfa</a></li>
                                        @foreach($categories as $category)
                                            <li><a href="{{route('category_articles', $category->id)}}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="footer-icon">
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                        </div> .
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('front/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/active.js')}}"></script>
</body>

</html>