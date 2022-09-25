@extends('admin.layouts.app')
@section('pageTitle', 'Kategori')
@section('breadcrumb', 'Kategori')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ url('admin/category/create') }}" class="btn btn-primary">Tambah Kategori</a>
        </div>
        <div class="col-lg-12">
            <table class="w-100">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Kategori</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dasasa</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit <i class="fa fa-fw fa-edit"></i></a>
                            <a href="" class="btn btn-danger">Hapus <i class="fa fa-fw fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection