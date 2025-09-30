@extends('admin.layouts.frame')
@section('content')
    {{-- ========== start content =========== --}}

        <div class="card-header flex flex-wrap align-items-center  gap-2 justify-content-between ">
            {{-- <a href="{{ route('seksi.create') }}" class="btn btn-primary ">Tambah Seksi</a> --}}
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Input Data Request Cuti</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('request_cuti.store') }}" method="POST">
                        @csrf
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama User</label>
                            <select name="user_id" class="form-control">
                                <option value="">-- Pilih User --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Jenis Cuti</label>
                            <select name="cuti_id" class="form-control">
                                <option value="">-- Pilih Cuti --</option>
                                @foreach ($cutis as $cuti)
                                    <option value="{{ $cuti->id }}">{{ $cuti->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control">
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Reason</label>
                            <textarea name="reason" id="" cols="10" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="col-12 mb-1">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="approve">Approve</option>
                                <option value="pending">Pending</option>
                                <option value="reject">Reject</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    {{-- ========== end content =========== --}}
@endsection
