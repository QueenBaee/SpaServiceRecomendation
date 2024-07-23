@extends('template')
@section('content')
<div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Form tambah data perawatan kuku
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <form action="/perawatanKuku/store" method="post" class="card">
                    @csrf
                  <div class="card-header">
                    <h4 class="card-title">Form tambah data perawatan kuku</h4>
                  </div>
                  <div class="card-body">
                    <div class="row g-5">
                      <div class="col-xl-4">
                        <div class="row">
                          <div class="col-md-6 col-xl-12">
                            <div class="mb-3">
                              <label class="form-label">Masukkan Nama anda</label>
                              <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="col-md-6 col-xl-12">
                            <div class="mb-3">
                              <label class="form-label">Masukkan alamat anda</label>
                              <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="input-icon">
                            <label class="form-label">Masukkan tanggal konsultasi</label>
                              <input type="date" name="tanggal_konsultasi" />
                            </div>
                            <div class="mb-3">
                              <div class="form-label">Perawatan Rutin</div>
                              <select class="form-select" name="perawatan_rutin" >
                                <option value="Potong Kuku">Potong Kuku</option>
                                <option value="Body Lotion">Body Lotion</option>
                                <option value="Manicure & Nail Art">Manicure & Nail Art</option>
                                <option value="Memakai Kutek">Memakai Kutek</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <div class="form-label">Perawatan Terakhir</div>
                              <select class="form-select" name="perawatan_sebelumnya" >
                              <option value="Potong Kuku">Potong Kuku</option>
                                <option value="Body Lotion">Body Lotion</option>
                                <option value="Manicure & Nail Art">Manicure & Nail Art</option>
                                <option value="Memakai Kutek">Memakai Kutek</option>
                              </select>
                              <div class="mb-3">
                              <div class="form-label">Saran Perawatan</div>
                              <select class="form-select" name="saran_perawatan" >
                              <option value="Potong Kuku">Potong Kuku</option>
                                <option value="Body Lotion">Body Lotion</option>
                                <option value="Manicure & Nail Art">Manicure & Nail Art</option>
                                <option value="Memakai Kutek">Memakai Kutek</option>
                              </select>
                              
                              <button type="submit">Submit</button>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </form>
                            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@endsection