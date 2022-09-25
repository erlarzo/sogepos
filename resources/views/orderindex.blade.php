@extends('layouts.app')
@section('breadcrumb', 'Order')

@section('content')
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<a href="{{ url('order/create')}}" class="btn btn-success">Buat Transaksi</a>
		</div>
		<div class="card-body">
			<p>List daftar transaksi</p>
		</div>
	</div>
</div>
@endsection