@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    <a href="{{ url('order') }}" class="btn btn-success">Masuk ke POS</a>
                    <button onclick="test()" class="btn btn-success">Test SweetAlert2</button>
                    <button onclick="topRight()" class="btn btn-info">Test SweetAlert2 TopRight</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    function test() {
        Swal.fire({
          title: 'Error!',
          text: 'Do you want to continue',
          icon: 'error',
          confirmButtonText: 'Cool'
        });
    };

    function topRight() {
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Your work has been saved',
          showConfirmButton: false,
          timer: 1500
        });
    }
</script>
@endsection
