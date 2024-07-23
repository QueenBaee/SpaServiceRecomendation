@extends('template')
@section('content')
<div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Form Rekomendasi Perawatan Selanjutnya
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <form action="/perawatanWajah/hasil" method="post" class="card">
                    @csrf
                  <div class="card-header">
                    <h4 class="card-title">Lengkapi form dibawah untuk mengetahui rekomendasi perawatan selanjutnya</h4>
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
                              <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                              </span>
                              <input class="form-control" placeholder="Select a date" id="datepicker-icon-prepend" value="2020-06-20"/>
                            </div>
                            <div class="mb-3">
                              <div class="form-label">Perawatan Rutin</div>
                              <select class="form-select" name="rutin" >
                              <option value="Pembersihan muka dengan sabun">Pembersihan muka dengan sabun</option>
    <option value="Skincare">Skincare</option>
    <option value="Foundation">Foundation</option>
    <option value="Makeup dan pembersihan setelah beraktivitas dan sebelum tidur">Makeup dan pembersihan setelah beraktivitas dan sebelum tidur</option>
    <option value="Pembersihan">Pembersihan</option>
    <option value="Scrub 1 minggu sekali">Scrub 1 minggu sekali</option>
    <option value="Pembersihan dan pembersihan rutin">Pembersihan dan pembersihan rutin</option>
    <option value="Pembersihan makeup setelah beraktivitas dan sebelum tidur">Pembersihan makeup setelah beraktivitas dan sebelum tidur</option>
    <option value="Serum">Serum</option>
    <option value="Krim malam dan serum sebelum tidur">Krim malam dan serum sebelum tidur</option>
    <option value="Serum dan krim siang">Serum dan krim siang</option>
    <option value="Rutin memakai serum malam">Rutin memakai serum malam</option>
    <option value="Toner">Toner</option>
    <option value="Krim siang dan malam">Krim siang dan malam</option>
    <option value="Rutin masker">Rutin masker</option>
    <option value="Masker 1 minggu sekali">Masker 1 minggu sekali</option>
    <option value="Krim rutin">Krim rutin</option>
    <option value="Makeup">Makeup</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <div class="form-label">Perawatan Terakhir</div>
                              <select class="form-select" name="terakhir" >
                              <option value="Skincare rutin">Skincare rutin</option>
    <option value="Facial">Facial</option>
    <option value="Facial manual">Facial manual</option>
    <option value="belum pernah">Belum Pernah</option>
    <option value="memakai cream pepaya">Memakai Cream Pepaya</option>
    <option value="Facial 2 bulan lalu">Facial 2 Bulan Lalu</option>
    <option value="Krim">Krim</option>
    <option value="Facial Basic">Facial Basic</option>
    <option value="Facial anti aging">Facial Anti Aging</option>
    <option value="Facial, Skincare">Facial, Skincare</option>
    <option value="Skincare">Skincare</option>
    <option value="make up dan facial">Makeup dan Facial</option>
    <option value="pelembab">Pelembab</option>
    <option value="tidak pernah">Tidak Pernah</option>
    <option value="kemarin perawatan anti alergi">Kemarin Perawatan Anti Alergi</option>
    <option value="Krim malam dan serum sebelum tidur">Krim Malam dan Serum Sebelum Tidur</option>
    <option value="Facial kemarin">Facial Kemarin</option>
    <option value="Facial, skincare">Facial, Skincare</option>
    <option value="Facial 1 bulan sekali">Facial 1 Bulan Sekali</option>
    <option value="mosturazier,skincare">Mosturazier, Skincare</option>
    <option value="Facel wash dan pelembab">Facel Wash dan Pelembab</option>
                              </select>
                              <button type="submit">Get Recommendation</button>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </form>
                            @if(isset($result))
        <h2>Rekomendasi Perawatan Selanjutnya: {{ $result['rekomendasi'] }}</h2>
        <p>Accuracy: {{ $result['accuracy'] * 100 }}%</p>
    @endif
@endsection