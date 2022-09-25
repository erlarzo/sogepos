@extends('admin.layouts.app')
@section('pageTitle', 'Tambah Kategori')
@section('breadcrumb', 'Kategori')
@section('breadcrumbUrl', url('admin/category'))
@section('childBreadcrumb', 'Tambah Kategori Produk')

@section('content')
<div class="container mt-2">
    <div class="card">
        <div class="card-header">Tambah Kategori Produk</div>
        <div class="card-body row">
            <div class="form-control">
                <div class="col-12 w-100">
                    <form method="POST" action="{{ url('admin/category/save') }}">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="category_label" class="w-100" value="{{ $cat->category_label ?? '' }}">
                        </div>
                        <div class="form-group">
                            <select2></select2>
                        </div>
                        <input type="hidden" name="id" value="{{ $cat->id ?? '' }}">
                        <input type="hidden" name="group_by" value="product">
                        <div class="form-group">
                            <input id="is_active" type="checkbox" name="is_active" value="1" >
                            <label for="is_active" class="ml-2">Aktif</label>
                        </div>
                        <button class="btn btn-primary float-right ml-2" type="submit">Simpan</button>
                        <a href="{{ url('admin/category') }}" class="btn btn-secondary float-right">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection