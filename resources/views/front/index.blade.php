@extends('front.layouts.app')
@section('content')
    <section class="blog-post-area">
        <div class="container">
            <div class="row">
                <div class="blog-post-area-style">
                    <div class="col-md-12">
                        <div class="single-post-big">
                            <div class="big-image">
                                <img style="width: 100%" src="{{$random_blog[0]->img_url}}" alt="">
                            </div>
                            <div class="big-text">
                                <h3><a href="{{route('blog_detail', $random_blog[0]->id)}}">{{$random_blog[0]->title}}</a></h3>
                                <p>{{$random_blog[0]->content}}</p>
                                <h4><span class="date">{{$random_blog[0]->created_at}}</span>
                                    <a href="{{route('all_articles', $random_blog[0]->user_id)}}">
                                    <span class="author">Yazar: <span
                                                class="author-name">{{$random_blog[0]->User->name}}</span></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @foreach($blogs as $blog)
                        <div class="col-md-3">
                            <div class="single-post">
                                <a href="{{route('blog_detail', $blog[0]->id)}}">
                                <img style="width: 100%" src="{{$blog[0]->img_url}}" alt="">
                                <h3>{{$blog[0]->title}}</h3>
                                </a>
                                <a href="{{route('all_articles', $blog[0]->User->id)}}">
                                <h4><span>Yazar: <span class="author-name">{{$blog[0]->User->name}}</span></span>
                                </h4>
                                </a>
                                <p>{{$blog[0]->content}}</p>
                                <h4><span>{{$blog[0]->created_at}}</span></h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="pegination">
        </div>
    </section>
@endsection