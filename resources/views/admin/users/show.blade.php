<style>
    @media print {
        .btn {
            display: none !important;
        }
        .card-header, .alert {
            display: none !important;
        }
    }
</style>
@extends('admin.layouts.frame')
@section('content')
    {{-- ========== start content =========== --}}
    <div class="card basic-data-table">



        <div class="card-header flex flex-wrap align-items-center  gap-2 justify-content-between ">
            {{-- Alert Sukses --}}
            @if (session('success'))
                {{-- <div class="alert alert-success w-100"> --}}
                <div
                    class="alert alert-success bg-success-100 text-success-600 border-success-600 border-start-width-4-px border-top-0 border-end-0 border-bottom-0 px-24 py-13 mb-0 fw-semibold text-lg radius-4 d-flex align-items-center justify-content-between mb-3">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Alert Error --}}
            @if ($errors->any())
                {{-- <div class="alert alert-danger w-100"> --}}
                <div
                    class="alert alert-danger bg-danger-100 text-danger-600 border-danger-600 border-start-width-4-px border-top-0 border-end-0 border-bottom-0 px-24 py-13 mb-0 fw-semibold text-lg radius-4 d-flex align-items-center justify-content-between mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- <a href="{{ route('user.create') }}" class="btn btn-primary ">Tambah User</a> --}}
        </div>

        <div class="container border p-6 bg-white" id="printArea" >
            <!-- Header -->
            <div class="text-center bg-warning py-2 mb-4 border">
                <h3 class="fw-bold mb-0">BIODATA DIRI</h3>
            </div>

            <!-- Informasi -->
            <h5 class="fw-bold mb-3 mx-12">Informasi</h5>
            <div class="row mb-4 mx-2">
                <div class="col-md-3 mb-3 text-center">
                    @if ($user->detail && $user->detail->photo_profile)
                        <img src="{{ asset('storage/' . $user->detail->photo_profile) }}" class="img-fluid rounded border"
                            alt="Foto Profil">
                    @else
                        <img src="https://placehold.co/200x280?text=No+Photo&font=roboto" class="img-fluid rounded border" alt="No Photo">
                    @endif
                </div>
                <div class="col-md-9">
                    <p><strong>Nama :</strong> {{ $user->name }}</p>
                    <p><strong>Email :</strong> {{ $user->email }}</p>
                    <p><strong>Telepon :</strong> {{ $user->detail->phone_number ?? '-' }}</p>
                    <p><strong>Alamat :</strong>
                        {{ $user->detail->address ?? '-' }},
                        {{ $user->detail->kecamatan ?? '' }},
                        {{ $user->detail->kabupaten ?? '' }},
                        {{ $user->detail->provinsi ?? '' }},
                        {{ $user->detail->post_code ?? '' }}
                    </p>
                    <p><strong>Seksi :</strong> {{ $user->detail->seksi->name ?? '-' }}</p>
                    <p><strong>Jabatan :</strong> {{ $user->detail->jabatan->name ?? '-' }}</p>
                </div>
            </div>

            {{-- <!-- Pendidikan -->
        <h5 class="fw-bold mb-3">Pendidikan</h5>
        <ul class="list-group mb-4">
            <li class="list-group-item">2000 - 2006 SD Negeri Contoh</li>
            <li class="list-group-item">2006 - 2009 SMP Negeri Contoh</li>
            <li class="list-group-item">2009 - 2012 SMA Negeri Contoh</li>
            <li class="list-group-item">2012 - 2016 Universitas Contoh</li>
        </ul> --}}

            {{-- <!-- Pengalaman Kerja -->
        <h5 class="fw-bold mb-3">Pengalaman Kerja</h5>
        <ul class="list-group">
            <li class="list-group-item">2017 - 2019 Staff IT di PT Contoh</li>
            <li class="list-group-item">2020 - 2022 Web Developer di CV Contoh</li>
        </ul> --}}

            <div class="col-12 mt-3  d-flex justify-content-end">
                <button type="submit" onclick="printDiv('printArea')" class="btn btn-primary me-4 mb-2">Print</button>
                <button type="button" class="btn btn-secondary me-4 mb-2" onclick="window.history.back()">Cancel</button>
            </div>
        </div>




    </div>

    {{-- ========== end content =========== --}}
    <script>
    function printDiv(divId) {
        let printContents = document.getElementById(divId).innerHTML;
        let originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload(); // reload agar layout kembali normal setelah print
    }
</script>
@endsection
