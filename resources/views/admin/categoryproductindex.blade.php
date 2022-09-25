@extends('admin.layouts.app')
@section('pageTitle', 'Kategori')
@section('breadcrumb', 'Kategori')
@section('breadcrumbUrl', url('admin/category'))
@section('childBreadcrumb', 'Kategori Produk')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <h2>Kategori Produk</h2>
        </div>
        <div class="col-lg-12">
            @foreach($data as $d)
            <div class="row">
                <div class="col-8">{{ $d->category_label }}</div>
                <div class="col-4">
                    <a href="" class="btn btn-warning">Edit <i class="fa fa-fw fa-edit"></i></a>
                    <a href="" class="btn btn-danger">Hapus <i class="fa fa-fw fa-trash"></i></a>
                </div>
            </div>
            @endforeach      
        </div>
    </div>
</div>
@endsection