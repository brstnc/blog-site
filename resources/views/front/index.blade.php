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
                                <h3><a href="#">{{$random_blog[0]->title}}</a></h3>
                                <p>{{$random_blog[0]->content}}</p>
                                <h4><span class="date">{{$random_blog[0]->created_at}}</span><span class="author">Yazar: <span
                                                class="author-name">{{$random_blog[0]->User->name}}</span></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @foreach($blogs as $blog)
                        <div class="col-md-3">
                            <div class="single-post">
                                <img style="width: 100%" src="{{$blog[0]->img_url}}" alt="">
                                <h3><a href="#">{{$blog[0]->title}}</a></h3>
                                <h4><span>Yazar: <span class="author-name">{{$blog[0]->User->name}}</span></span>
                                </h4>
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