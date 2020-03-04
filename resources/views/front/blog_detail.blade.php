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
                                    <h2>{{$blog->title}}</h2>
                                    <img style="width: 100%" src="{{$blog->img_url}}" alt="">
                                    <p>{{$blog->content}}</p>
                                     </div>
                                    <div class="post">
                                        <a href="{{route('all_articles', $blog->user_id)}}"><button type="button" class="btn btn-secondary btn-lg btn-block">Yazarı Tüm Yazılarını Gör</button></a>
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