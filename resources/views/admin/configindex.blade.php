@extends('admin.layouts.app')
@section('pageTitle', 'Config')
@section('breadcrumb', 'Config')

@section('content')
<div class="container">
    <h4>Ini halaman Configindex</h4>
    <hr>
    <div class="form-control">
        <form action="{{ url('admin/config/save') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="company_name">Nama Resto/Cafe</label>
                <input type="text" id="company_name" name="company_name" value="{!! $data['company_name'] !!}">
            </div>
            <div class="form-group">
                <label for="company_address">Alamat Resto/Cafe</label>
                <input type="text" id="company_address" name="company_address" value="{!! $data['company_address'] !!}">
            </div>
            <div class="form-group">
                <label for="company_phone">No. Telp. Resto/Cafe</label>
                <input type="text" id="company_phone" name="company_phone" value="{!! $data['company_phone'] !!}">
            </div>
            <div class="form-group">
                <label for="company_email">Email Resto/Cafe</label>
                <input type="text" id="company_email" name="company_email" value="{!! $data['company_email'] !!}">
            </div>
            <div class="form-group">
                <label for="company_website">Website Resto/Cafe</label>
                <input type="text" id="company_website" name="company_website" value="{!! $data['company_website'] !!}">
            </div>
            <div class="form-group">
                <label for="invoice_prefix">Prefix Invoice</label>
                <input type="text" id="invoice_prefix" name="invoice_prefix" value="{!! $data['invoice_prefix'] !!}">
            </div>
            <div class="form-group">
                <label for="invoice_postfix">Postfix Invoice</label>
                <input type="text" id="invoice_postfix" name="invoice_postfix" value="{!! $data['invoice_postfix'] !!}">
            </div>
            <div class="form-group">
                <label for="invoice_note">Catatan Invoice</label>
                <textarea id="invoice_note" name="invoice_note">{!! $data['invoice_note'] !!}</textarea>
            </div>
            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
    </div>
</div>

@endsection