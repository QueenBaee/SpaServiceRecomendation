@extends('template')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Form Edit Data Perawatan Wajah
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <form action="{{ route('perawatanWajah.update', $wajah->id) }}" method="post" class="card">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Data Perawatan Wajah</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Masukkan Nama anda</label>
                                            <input type="text" class="form-control" name="nama" value="{{ $wajah->nama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Masukkan alamat anda</label>
                                            <input type="text" class="form-control" name="alamat" value="{{ $wajah->alamat }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Masukkan tanggal konsultasi</label>
                                            <input type="date" class="form-control" name="tanggal_konsultasi" value="{{ $wajah->tanggal_konsultasi }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Perawatan Rutin</label>
                                            <select class="form-select" name="perawatan_rutin">
                                            <option value="Skincare rutin" {{ $wajah->perawatan_rutin == 'Skincare rutin' ? 'selected' : '' }}>Skincare rutin</option>
                            <option value="Facial" {{ $wajah->perawatan_rutin == 'Facial' ? 'selected' : '' }}>Facial</option>
                            <option value="Facial Manual" {{ $wajah->perawatan_rutin == 'Facial Manual' ? 'selected' : '' }}>Facial Manual</option>
                            <option value="Basic Facial" {{ $wajah->perawatan_rutin == 'Basic Facial' ? 'selected' : '' }}>Basic Facial</option>
                            <option value="Facial anti aging" {{ $wajah->perawatan_rutin == 'Facial anti aging' ? 'selected' : '' }}>Facial anti aging</option>
                            <option value="Pelembab" {{ $wajah->perawatan_rutin == 'Pelembab' ? 'selected' : '' }}>Pelembab</option>
                            <option value="memakai cream pepaya" {{ $wajah->perawatan_rutin == 'memakai cream pepaya' ? 'selected' : '' }}>Memakai cream pepaya</option>
                            <option value="mosturazier,skincare" {{ $wajah->perawatan_rutin == 'mosturazier,skincare' ? 'selected' : '' }}>Mosturazier, skincare</option>
                            <option value="Krim" {{ $wajah->perawatan_rutin == 'Krim' ? 'selected' : '' }}>Krim</option>
                            <option value="Facel wash dan pelembab" {{ $wajah->perawatan_rutin == 'Facel wash dan pelembab' ? 'selected' : '' }}>Facel wash dan pelembab</option>
                            <option value="Facial 2 bulan lalu" {{ $wajah->perawatan_rutin == 'Facial 2 bulan lalu' ? 'selected' : '' }}>Facial 2 bulan lalu</option>
                            <option value="Facial kemarin" {{ $wajah->perawatan_rutin == 'Facial kemarin' ? 'selected' : '' }}>Facial kemarin</option>
                            <option value="Jarang" {{ $wajah->perawatan_rutin == 'Jarang' ? 'selected' : '' }}>Jarang</option>
                            <option value="belum pernah" {{ $wajah->perawatan_rutin == 'belum pernah' ? 'selected' : '' }}>Belum pernah</option>
                            <option value="tidak pernah" {{ $wajah->perawatan_rutin == 'tidak pernah' ? 'selected' : '' }}>Tidak pernah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Perawatan Terakhir</label>
                                            <select class="form-select" name="perawatan_sebelumnya">
                                            <option value="Skincare rutin" {{ $wajah->perawatan_rutin == 'Skincare rutin' ? 'selected' : '' }}>Skincare rutin</option>
                            <option value="Facial" {{ $wajah->perawatan_rutin == 'Facial' ? 'selected' : '' }}>Facial</option>
                            <option value="Facial Manual" {{ $wajah->perawatan_rutin == 'Facial Manual' ? 'selected' : '' }}>Facial Manual</option>
                            <option value="Basic Facial" {{ $wajah->perawatan_rutin == 'Basic Facial' ? 'selected' : '' }}>Basic Facial</option>
                            <option value="Facial anti aging" {{ $wajah->perawatan_rutin == 'Facial anti aging' ? 'selected' : '' }}>Facial anti aging</option>
                            <option value="Pelembab" {{ $wajah->perawatan_rutin == 'Pelembab' ? 'selected' : '' }}>Pelembab</option>
                            <option value="memakai cream pepaya" {{ $wajah->perawatan_rutin == 'memakai cream pepaya' ? 'selected' : '' }}>Memakai cream pepaya</option>
                            <option value="mosturazier,skincare" {{ $wajah->perawatan_rutin == 'mosturazier,skincare' ? 'selected' : '' }}>Mosturazier, skincare</option>
                            <option value="Krim" {{ $wajah->perawatan_rutin == 'Krim' ? 'selected' : '' }}>Krim</option>
                            <option value="Facel wash dan pelembab" {{ $wajah->perawatan_rutin == 'Facel wash dan pelembab' ? 'selected' : '' }}>Facel wash dan pelembab</option>
                            <option value="Facial 2 bulan lalu" {{ $wajah->perawatan_rutin == 'Facial 2 bulan lalu' ? 'selected' : '' }}>Facial 2 bulan lalu</option>
                            <option value="Facial kemarin" {{ $wajah->perawatan_rutin == 'Facial kemarin' ? 'selected' : '' }}>Facial kemarin</option>
                            <option value="Jarang" {{ $wajah->perawatan_rutin == 'Jarang' ? 'selected' : '' }}>Jarang</option>
                            <option value="belum pernah" {{ $wajah->perawatan_rutin == 'belum pernah' ? 'selected' : '' }}>Belum pernah</option>
                            <option value="tidak pernah" {{ $wajah->perawatan_rutin == 'tidak pernah' ? 'selected' : '' }}>Tidak pernah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Saran Perawatan</label>
                                            <select class="form-select" name="saran_perawatan">
                                            <option value="Menjaga kebersihan wajah" {{ $wajah->perawatan_rutin == 'Menjaga kebersihan wajah' ? 'selected' : '' }}>Menjaga kebersihan wajah</option>
                            <option value="Facial" {{ $wajah->perawatan_rutin == 'Facial' ? 'selected' : '' }}>Facial</option>
                            <option value="Memakai toner lemon" {{ $wajah->perawatan_rutin == 'Memakai toner lemon' ? 'selected' : '' }}>Memakai toner lemon</option>
                            <option value="sabun muka setiap hari" {{ $wajah->perawatan_rutin == 'sabun muka setiap hari' ? 'selected' : '' }}>Sabun muka setiap hari</option>
                            <option value="facial 1 bulan sekali" {{ $wajah->perawatan_rutin == 'facial 1 bulan sekali' ? 'selected' : '' }}>Facial 1 bulan sekali</option>
                            <option value="Facial basic kulit kering dan pelembab" {{ $wajah->perawatan_rutin == 'Facial basic kulit kering dan pelembab' ? 'selected' : '' }}>Facial basic kulit kering dan pelembab</option>
                            <option value="Facial manual" {{ $wajah->perawatan_rutin == 'Facial manual' ? 'selected' : '' }}>Facial manual</option>
                            <option value="Facial Rutin" {{ $wajah->perawatan_rutin == 'Facial Rutin' ? 'selected' : '' }}>Facial Rutin</option>
                            <option value="Perawatan kulit berminyak" {{ $wajah->perawatan_rutin == 'Perawatan kulit berminyak' ? 'selected' : '' }}>Perawatan kulit berminyak</option>
                            <option value="Manual kosmetik kering, banyak minum air putih dan mengurangi makanan lemak" {{ $wajah->perawatan_rutin == 'Manual kosmetik kering, banyak minum air putih dan mengurangi makanan lemak' ? 'selected' : '' }}>Manual kosmetik kering, banyak minum air putih dan mengurangi makanan lemak</option>
                            <option value="pelembab lalu memakai totol jerawat , memakai sunscreen" {{ $wajah->perawatan_rutin == 'pelembab lalu memakai totol jerawat , memakai sunscreen' ? 'selected' : '' }}>Pelembab lalu memakai totol jerawat, memakai sunscreen</option>
                            <option value="Facial Bengkoang dan susu untuk kulit kering" {{ $wajah->perawatan_rutin == 'Facial Bengkoang dan susu untuk kulit kering' ? 'selected' : '' }}>Facial Bengkoang dan susu untuk kulit kering</option>
                            <option value="Facial kulit normal" {{ $wajah->perawatan_rutin == 'Facial kulit normal' ? 'selected' : '' }}>Facial kulit normal</option>
                            <option value="Rutin facial, pakai masker yogurt susu, tidak disarankan pakai toner beralkohol" {{ $wajah->perawatan_rutin == 'Rutin facial, pakai masker yogurt susu, tidak disarankan pakai toner beralkohol' ? 'selected' : '' }}>Rutin facial, pakai masker yogurt susu, tidak disarankan pakai toner beralkohol</option>
                            <option value="Masker susu" {{ $wajah->perawatan_rutin == 'Masker susu' ? 'selected' : '' }}>Masker susu</option>
                            <option value="Lebih sering memakai sunscreen meminum air putih" {{ $wajah->perawatan_rutin == 'Lebih sering memakai sunscreen meminum air putih' ? 'selected' : '' }}>Lebih sering memakai sunscreen, meminum air putih</option>
                            <option value="Skincare rutin" {{ $wajah->perawatan_rutin == 'Skincare rutin' ? 'selected' : '' }}>Skincare rutin</option>
                            <option value="perawatan Facial dan serum" {{ $wajah->perawatan_rutin == 'perawatan Facial dan serum' ? 'selected' : '' }}>Perawatan Facial dan serum</option>
                            <option value="melakukan laser" {{ $wajah->perawatan_rutin == 'melakukan laser' ? 'selected' : '' }}>Melakukan laser</option>
                            <option value="perawatan khusus ke dokter" {{ $wajah->perawatan_rutin == 'perawatan khusus ke dokter' ? 'selected' : '' }}>Perawatan khusus ke dokter</option>
                            <option value="Facial kulit kering" {{ $wajah->perawatan_rutin == 'Facial kulit kering' ? 'selected' : '' }}>Facial kulit kering</option>
                            <option value="facial sentitif masker wajah yogurt, susu" {{ $wajah->perawatan_rutin == 'facial sentitif masker wajah yogurt, susu' ? 'selected' : '' }}>Facial sensitif masker wajah yogurt, susu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
            </div>
        </div>
    </div>
</div>
@endsection
