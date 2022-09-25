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
                      <select>
                          <option>Coffee</option>
                          <option>Softdrink</option>
                          <option>Dessert</option>
                          <option>Meal</option>
                      </select>
                      <input type="text" class="mr-2"></input>
                      <a href="" type="submit" class=" btn btn-success fa fa-search"></a>
                    </div>
                </div>
              </div>
              <div class="card-body overflow-auto" style="max-height: 400px">
                <div class="row">
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <img src="">
                        <h6>Judul Menu</h6>
                        <p>Rp 5.600</p>
                        <button class="btn btn-success w-100">Tambah <i class="fa fa-plus-square"></i></button>
                      </div>
                    </div>
                  </div>
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
    </div>
</div>
@endsection