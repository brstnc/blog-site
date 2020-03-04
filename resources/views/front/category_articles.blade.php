@extends('front.layouts.app')
@section('content')
    <section class="blog-post-area">
        <div class="container">
            <div class="row">
                <div class="blog-post-area-style">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <h2>{{$category->name}} Kategorisindeki Tüm Yazılar</h2>
                        </div>
                        @foreach($category_articles as $article)
                            @php
                                $content = $article->Blog->content;
                                    if (strlen($content) > 500)
                                        $content = substr($content,0,500).'...'
                            @endphp
                            <div class="col-md-4">
                                <div class="single-post">
                                    <a href="{{route('blog_detail', $article->Blog->id)}}">
                                        <img width="100%" src="{{$article->Blog->img_url}}" alt="">
                                        <h3>{{$article->Blog->title}}</h3>
                                    </a>
                                    <a href="{{route('all_articles', $article->Blog->User->id)}}">
                                        <h4><span>Yazar: <span
                                                        class="author-name">{{$article->Blog->User->name}}</span></span></h4>
                                    </a>
                                    <p>{{$content}}</p>
                                    <h4><span>{{$article->Blog->created_at}}</span></h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </div>
        </div>
        <div class="pegination">
        </div>
    </section>
@endsection
