@extends('panel.layouts.master')
@section('title', 'Kategori Yönetimi')
@section('content')
    <h1 class="page-header">Kategori Yönetimi</h1>
    <h2 class="sub-header">
        Kategori Listesi
    </h2>
    <div class="table-responsive">
        <div class="btn-primary pull-right">
            <a href="{{ route('category_create_get') }}" class="btn btn-primary">Yeni</a>
        </div>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Kategori</th>
                <th>Güncelleme Tarihi</th>
                <th>Operasyonlar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $entry)
                <tr>
                    <td>{{ $entry->name }}</td>
                    <td>{{ $entry->updated_at }}</td>
                    <td style="width: 100px">
                       <a href="{{ route('category_edit_get', $entry->id) }}" class="btn btn-s btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                           <span class="fa fa-pencil"></span>
                       </a>
                        <a href="{{ route('category_delete', $entry->id) }}" class="btn btn-s btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Kategoriyi silmek istediğinize emin misin?')">
                        <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection