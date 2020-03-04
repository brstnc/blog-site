@extends('panel.layouts.master')
@section('title', 'Blog Ekleme')
@section('content')
    <h1 class="page-header">Blog Ekleme</h1>
    <form role="form" method="POST" enctype="multipart/form-data" action="{{route('blog_edit_post')}}">
        {{ csrf_field() }}
        @include('panel.layouts.partials.errors')
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="categories[]">Blog Kategorileri</label>
                    <select class="form-control" name="categories[]" id="categories" multiple>
                        @foreach($categories as $category)
                            <option @foreach($blog->Categories as $item) {{$item->Category->id == $category->id? 'selected': ' '}} @endforeach  value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        @if ($errors->has('categories'))
            <div class="alert alert-danger nomargin">
                {{ $errors->first('categories') }}
            </div> <br>
        @endif
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Blog Başlık</label>
                    <input hidden value="{{$blog->id}}" name="blog_id">
                    <input value="{{$blog->title}}" type="text" class="form-control" name="title" id="title"
                           placeholder="Bog Başlık">
                </div>
            </div>
        </div>
        @if ($errors->has('title'))
            <div class="alert alert-danger nomargin">
                {{ $errors->first('title') }}
            </div> <br>
        @endif
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="content">İçerik</label>
                    <textarea type="text" class="form-control" name="content" id="content"
                              placeholder="Blog İçeriği">{{$blog->content}}</textarea>
                </div>
            </div>
        </div>
        @if ($errors->has('content'))
            <div class="alert alert-danger nomargin">
                {{ $errors->first('content') }}
            </div> <br>
        @endif
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category_img">Mevcut Blog Fotoğrafı</label>
                    <img src="{{ $blog->img_url}}" style="width: 100%">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Blog Resmi</label>
                    <input type="file" name="blog_img" class="form-control"
                           title="Blog Resmi">
                </div>
            </div>
        </div>
        @if ($errors->has('blog_img'))
            <div class="alert alert-danger nomargin">
                {{ $errors->first('blog_img') }}
            </div> <br>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Yayınlansın mı ?</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="statu" value="0" {{$blog->statu == 0?'checked': ''}}>Hayır
                        </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="statu" value="1" {{$blog->statu == 1?'checked': ''}}>Evet</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
@endsection
@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $(function () {
            $('#categories').select2({
                placeholder: 'Lütfen kategori seçiniz'
            })
        })
    </script>
@endsection
