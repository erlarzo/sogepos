@extends('layouts.app')
@section('breadcrumb', 'Order')
@section('breadcrumbUrl', url('order'))
@section('childBreadcrumb', 'Buat Order')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 mb-3">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 col-sm-4">
                      <h5>List Menu</h5>
                    </div>
                    <div class="col-lg-6 col-sm-8">
                    	<form action="{{ url('order/create') }}" method="GET" >
		                      <select name="category_id">
		                      	<option value="">Semua</option>
		                      	@foreach( $data['category'] as $c )
		                          <option value="{{ $c->id }}">{{ $c->category_label }}</option>
		                        @endforeach
		                      </select>
		                      <input type="text" name="keyword" class="mr-2"></input>
		                      <button type="submit" class=" btn btn-success fa fa-search"></button>
                    	</form>
                    </div>
                </div>
              </div>
              <div class="card-body overflow-auto" style="max-height: 400px">
                <div class="row">
                	<!-- start product loop -->
                	@foreach ($data['product'] as $p)
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>{{ $p->product_name }}</h6>
                        <p>Rp {{ $p->price }}</p>
                        <a href="javascript:void(0);" class="btn btn-success w-100 add-to-cart" data-id="{{ $p->id }}" role="button">
                          Tambah 
                          <i class="fa fa-plus-square"></i>
                          <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <!-- end product loop -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 mb-3">
            <div class="row">
              <div class="col-lg-12 col-sm-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <h5>Pelanggan</h5>
                    <input type="text" name="" placeholder="Masukkan nama pelanggan" class="mb-2 w-100">
                    <a href="" class="btn btn-success w-100">Simpan</a>
                    <div class="w-100 text-center">
                      <small><a href="">Punya akun member?</a></small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-sm-6 mb-3">
                <div class="card">
                  <div class="card-body px-4">
                    <h5>Pesanan</h5>
                    <hr>
                    <ul>
                      <li>Pesanan 1 <span class="float-right">5.000</span></li>
                      <li>Pesanan 2 </span><span class="float-right">4.500</span></li>
                      <li>Pesanan 3 </span><span class="float-right">9.500</span></li>
                    </ul>
                    <hr class="mt-2">
                    <label>Diskon</label>
                    <select class="float-right">
                      <option>Diskon 5%</option>
                      <option>Diskon 10%</option>
                      <option>Kupon malam minggu</option>
                    </select>
                    <div>PPn <span class="float-right">0%</span></div>
                    <div>Sub Total <span class="float-right">19.000</span></div>
                    <h4>Rp. 19.000,-</h4>
                    <hr>
                    <a href="" class="btn btn-success w-100 mb-2 py-2">Bayar Sekarang</a>
                    <div class="row">
                      <div class="col-6">
                        <a href="" class="btn btn-warning w-100 mb-2">Bayar Nanti</a>
                      </div>
                      <div class="col-6">
                        <a href="" class="btn btn-danger w-100 mb-2">Batalkan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button v-on:click="reverseMessage">Reverse Message</button>
    </div>
</div>
@endsection

@section('scripts')

    <script>
        // var vm = new Vue({
        //   methods: {
        //     reverseMessage: function () {
        //       console.log('clicked');
        //       // this.message = this.message.split('').reverse().join('')
        //     }
        //   }
        // });

        // $(".add-to-cart").click(function (e) {
        //   console.log('clicked');
        //     e.preventDefault();

        //     var ele = $(this);

        //     ele.siblings('.btn-loading').show();

            // $.ajax({
            //     url: '{{ url('add-to-cart') }}' + '/' + ele.attr("data-id"),
            //     method: "get",
            //     data: {_token: '{{ csrf_token() }}'},
            //     dataType: "json",
            //     success: function (response) {

            //         ele.siblings('.btn-loading').hide();

            //         $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');
            //         $("#header-bar").html(response.data);
            //     }
            // });
        // });
    </script>

@stop