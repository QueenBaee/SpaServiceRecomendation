@extends('template')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Form Edit Data Perawatan Kuku
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <form action="{{ route('perawatanKuku.update', $kuku->id) }}" method="post" class="card">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Data Perawatan Kuku</h4>
                    </div>
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Masukkan Nama anda</label>
                                            <input type="text" class="form-control" name="nama" value="{{ $kuku->nama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Masukkan alamat anda</label>
                                            <input type="text" class="form-control" name="alamat" value="{{ $kuku->alamat }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Masukkan tanggal konsultasi</label>
                                            <input type="date" class="form-control" name="tanggal_konsultasi" value="{{ $kuku->tanggal_konsultasi }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Perawatan Rutin</label>
                                            <select class="form-select" name="perawatan_rutin">
                                                <option value="Potong Kuku" {{ $kuku->perawatan_rutin == 'Potong Kuku' ? 'selected' : '' }}>Potong Kuku</option>
                                                <option value="Body Lotion" {{ $kuku->perawatan_rutin == 'Body Lotion' ? 'selected' : '' }}>Body Lotion</option>
                                                <option value="Manicure & Nail Art" {{ $kuku->perawatan_rutin == 'Manicure & Nail Art' ? 'selected' : '' }}>Manicure & Nail Art</option>
                                                <option value="Memakai Kutek" {{ $kuku->perawatan_rutin == 'Memakai Kutek' ? 'selected' : '' }}>Memakai Kutek</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Perawatan Terakhir</label>
                                            <select class="form-select" name="perawatan_sebelumnya">
                                                <option value="Potong Kuku" {{ $kuku->perawatan_sebelumnya == 'Potong Kuku' ? 'selected' : '' }}>Potong Kuku</option>
                                                <option value="Body Lotion" {{ $kuku->perawatan_sebelumnya =='Body Lotion' ? 'selected' : '' }}>Body Lotion</option>
                                                <option value="Manicure & Nail Art" {{ $kuku->perawatan_sebelumnya == 'Manicure & Nail Art' ? 'selected' : '' }}>Manicure & Nail Art</option>
                                                <option value="Memakai Kutek" {{ $kuku->perawatan_sebelumnya == 'Memakai Kutek' ? 'selected' : '' }}>Memakai Kutek</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Saran Perawatan</label>
                                            <select class="form-select" name="saran_perawatan">
                                                <option value="Potong Kuku" {{ $kuku->saran_perawatan == 'Potong Kuku' ? 'selected' : '' }}>Potong Kuku</option>
                                                <option value="Body Lotion" {{ $kuku->saran_perawatan == 'Body Lotion' ? 'selected' : '' }}>Body Lotion</option>
                                                <option value="Manicure & Nail Art" {{ $kuku->saran_perawatan == 'Manicure & Nail Art' ? 'selected' : '' }}>Manicure & Nail Art</option>
                                                <option value="Memakai Kutek" {{ $kuku->saran_perawatan == 'Memakai Kutek' ? 'selected' : '' }}>Memakai Kutek</option>
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
