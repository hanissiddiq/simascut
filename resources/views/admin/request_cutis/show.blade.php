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
            {{-- <a href="{{ route('cuti.create') }}" class="btn btn-primary ">Tambah Request Cuti</a> --}}
        </div>

        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                <h5 class="text-light">Detail Request Cuti</h5>
            </div>
            <div class="card-body table-responsive">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="" class="text-primary">Nama</label>
                    </div>
                    <div class="col-md-10">
                        <p>{{ $request_cutis->user->name }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="" class="text-primary">Jenis Cuti</label>
                    </div>
                    <div class="col-md-10">
                        <p>{{ $request_cutis->cuti->name }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="" class="text-primary">Reason</label>
                    </div>
                    <div class="col-md-10">
                        <p>{{ $request_cutis->reason }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="" class="text-primary">Start Date</label>
                    </div>
                    <div class="col-md-10">
                        <p>{{ \Carbon\Carbon::parse($request_cutis->start_date)->format('d-m-Y') }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="" class="text-primary">End Date</label>
                    </div>
                    <div class="col-md-10">
                        <p>{{ \Carbon\Carbon::parse($request_cutis->end_date)->format('d-m-Y') }}</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="" class="text-primary">Status</label>
                    </div>
                    <div class="col-md-10">
                        <p>{{ ucwords( $request_cutis->status) }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ========== end content =========== --}}
@endsection
