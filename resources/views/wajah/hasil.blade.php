@extends('template')
@section('content')
<body>
<div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Hasil Rekomendasi
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
    @if (session('rekomendasi'))
            <div class="result">
                <p>Menurut hasil perawatan rutin dan perawatan terakhir anda, kami menyarankan anda untuk melakukan perawatan: <strong>{{ session('rekomendasi') }}</strong>.</p>
            </div>
        @endif

        @if (session('accuracy'))
            <div class="result">
                <p><strong>Akurasi rekomendasi:</strong> {{ round(session('accuracy') * 100, 2) }}%</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <a href="{{ url('/perawatanWajah/create') }}">Kembali ke Form</a>
</div>
</div>
</div>
</div>
</body>
@endsection