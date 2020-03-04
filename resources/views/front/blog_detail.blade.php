@extends('front.layouts.app')
@section('content')

    <section class="single-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-top">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="blog-area">
                                <div class="blog-area-part">
                                    <h2>The Best Wave Of Your Life Is Stil Out There. Lorem Ipsum Dolor...</h2>
                                    <div class="for-style">
                                        <p><span class="drop_caps">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
                                    </div>
                                    <img src="{{asset('front/img/single-bg.jpg')}}" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <h3><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo<i class="fa fa-quote-right" aria-hidden="true"></i></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="image-one">
                                                <img src="{{asset('front/img/blog-image1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="image-two">
                                                <img src="{{asset('front/img/blog-image2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui <a href="#">officia deserunt mollit</a> anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                    <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
                                </div>
                                <div class="ads-area">
                                    <img src="{{asset('front/img/ads.jpg')}}" alt="">
                                    <p>Your Ad Banner Goes Here</p>
                                </div>
                                    <div class="post">
                                        <a href="#"><button type="button" class="btn btn-secondary btn-lg btn-block">Yazarı Tüm Yazılarını Gör</button></a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection