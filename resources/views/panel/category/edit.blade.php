@extends('panel.layouts.master')
@section('title', 'Kategori Düzenleme')
@section('content')
    <h1 class="page-header">Kategori Düzenleme</h1>
    <form role="form" method="post" enctype="multipart/form-data" action="{{ route('category_edit_post') }}">
        {{ csrf_field() }}
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @include('panel.layouts.partials.errors')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Kategori Adı</label>
                    <input hidden name="category_id" value="{{$category->id}}">
                    <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}"
                           placeholder="Kategori Adı">
                </div>
            </div>
        </div>
        @if ($errors->has('category_name'))
            <div class="alert alert-danger nomargin">
                {{ $errors->first('category_name') }}
            </div> <br>
        @endif
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
@endsection

