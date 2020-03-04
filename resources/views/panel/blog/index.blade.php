@extends('panel.layouts.master')
@section('title', 'Yönetim Anasayfa')
@section('content')
    <h1 class="page-header">Blog Yönetimi</h1>
    <h2 class="sub-header">
        Blog Listesi
    </h2>
    <div class="table-responsive">
        <div class="btn-primary pull-right">
            <a href="{{route('blog_create_get')}}" class="btn btn-primary">Yeni</a>
        </div>
        <table class="table table-hover table-bordered">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <thead class="thead-dark">
            <tr>
                <th>Başlık</th>
                <th>Yayında mı?</th>
                <th>Kayıt Tarihi</th>
                <th>Operasyonlar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->title}}</td>
                    <td> {{$blog->statu == 1? 'Evet': 'Hayır'}} </td>
                    <td>{{$blog->created_at}}</td>
                    <td style="width: 100px">
                        <a href="{{route('blog_edit_get', $blog->id)}}" class="btn btn-s btn-success" data-toggle="tooltip" data-placement="top"
                           title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('blog_delete', $blog->id)}}" class="btn btn-s btn-danger delete" data-toggle="tooltip" data-placement="top" title="Sil"
                           onclick="return confirm('Bloğu silmek istediğinize emin misin?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

