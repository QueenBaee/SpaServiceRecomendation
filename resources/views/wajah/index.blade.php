@extends('template')
@section('content')
<div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Data Perawatan Kuku
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container-xl">
        <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                        <a href="/perawatanWajah/create" class="btn btn-light w-100">
                          Rekomendasi Perawatan
                        </a>
                      </div>
                    </div>
        <div class="container-xl">
        <div class="col-12">
        <div class="page-body">
                <div class="card">
                  <div class="table-responsive">
<table class="table table-vcenter card-table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tanggal Konsultasi</th>
                          <th>Perawatan Rutin</th>
                          <th>Perawatan Sebekumnya</th>
                          <th>Perawatan yang disarankan</th>
                          <th class="w-1">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($wajah as $item)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item -> nama }}</td>
                        <td>{{ $item -> alamat}}</td>
                        <td>{{ $item -> tanggal_konsultasi  }}</td>
                        <td>{{ $item -> perawatan_rutin}}</td>
                        <td>{{ $item -> perawatan_sebelumnya}}</td>
                        <td>{{ $item -> saran_perawatan }}</td>
                        <td>
                          <a href="{{ route('perawatanWajah.edit', $item->id) }}">Edit</a>
                          <a href="perawatanWajah/delete/{{ $item->id }}">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$wajah -> links()}}
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>
@endsection