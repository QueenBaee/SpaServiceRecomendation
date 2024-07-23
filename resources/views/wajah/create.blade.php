@extends('template')
@section('content')
<div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Form tambah data perawatan Wajah
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <form action="/perawatanWajah/store" method="post" class="card">
                    @csrf
                  <div class="card-header">
                    <h4 class="card-title">Form tambah data perawatan Wajah</h4>
                  </div>
                  <div class="card-body">
                    <div class="row g-5">
                      <div class="col-xl-4">
                        <div class="row">
                          <div class="col-md-6 col-xl-12">
                            <div class="mb-3">
                              <label class="form-label">Masukkan Nama anda</label>
                              <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="col-md-6 col-xl-12">
                            <div class="mb-3">
                              <label class="form-label">Masukkan alamat anda</label>
                              <input type="text" class="form-control" name="alamat" id="alamat">
                            </div>
                            <div class="input-icon">
                            <label class="form-label">Masukkan tanggal konsultasi</label>
                              <input type="date" name="tanggal_konsultasi" id="tanggal_konsultasi" />
                            </div>
                            <div class="mb-3">
                              <div class="form-label">Perawatan Rutin</div>
                              <select class="form-select" name="perawatan_rutin" id="perawatan_rutin" >
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
                              <select class="form-select" name="perawatan_sebelumnya" id="perawatan_sebelumnya" >
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
                              <div class="mb-3">
                              <div class="form-label">Saran Perawatan</div>
                              <select class="form-select" name="saran_perawatan" id="saran_perawatan">
                              <option value="Menjaga kebersihan wajah">Menjaga kebersihan wajah</option>
    <option value="Facial manual">Facial manual</option>
    <option value="Facial 1 bulan sekali">Facial 1 bulan sekali</option>
    <option value="Facial Rutin">Facial Rutin</option>
    <option value="Facial Bengkoang dan susu untuk kulit kering">Facial Bengkoang dan susu untuk kulit kering</option>
    <option value="Rutin facial, pakai masker yogurt susu, tidak disarankan pakai toner beralkohol">Rutin facial, pakai masker yogurt susu, tidak disarankan pakai toner beralkohol</option>
    <option value="Facial">Facial</option>
    <option value="lebih sering memakai sunscreen meminum air putih">Lebih sering memakai sunscreen meminum air putih</option>
    <option value="Perawatan kulit normal">Perawatan kulit normal</option>
    <option value="melakukan laser">Melakukan laser</option>
    <option value="Perawatan kulit normal dan memakai masker bruntusan">Perawatan kulit normal dan memakai masker bruntusan</option>
    <option value="facial kulit kering">Facial kulit kering</option>
    <option value="Facial kulit normal">Facial kulit normal</option>
    <option value="Memakai toner lemon">Memakai toner lemon</option>
    <option value="Facial sentitif masker wajah yogurt , susu">Facial sentitif masker wajah yogurt, susu</option>
    <option value="pelembab lalu memakai totol jerawat , memakai sunscreen">Pelembab lalu memakai totol jerawat, memakai sunscreen</option>
    <option value="facial manual , toner kulit berminyak">Facial manual, toner kulit berminyak</option>
    <option value="Facial kulit kombinasi">Facial kulit kombinasi</option>
    <option value="perawatan khukus ke dokter">Perawatan khusus ke dokter</option>
</select>
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

    <script>
        // Fungsi untuk memvalidasi formulir
        function validateForm(event) {
            // Mengambil elemen-elemen formulir
            var nama = document.getElementById('nama').value.trim();
            var alamat = document.getElementById('alamat').value.trim();
            var tanggalKonsultasi = document.getElementById('tanggal_konsultasi').value;
            var perawatanRutin = document.getElementById('perawatan_rutin').value;
            var perawatanSebelumnya = document.getElementById('perawatan_sebelumnya').value;
            var saranPerawatan = document.getElementById('saran_Perawatan').value;

            // Memeriksa apakah semua field sudah diisi
            if (nama === "" || alamat === "" || tanggalKonsultasi === "" || perawatanRutin === "" || perawatanSebelumnya === "" || saranPerawatan === "") {
                alert('Harap isi semua field sebelum mengirim formulir.');
                event.preventDefault(); // Mencegah pengiriman formulir
                return false;
            }

            return true; // Mengizinkan pengiriman formulir
        }
    </script>
@endif
@endsection