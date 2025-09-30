@extends('admin.layouts.frame')
@section('content')
    {{-- ========== start content =========== --}}

        <div class="card-header flex flex-wrap align-items-center  gap-2 justify-content-between ">
            {{-- <a href="{{ route('seksi.create') }}" class="btn btn-primary ">Tambah Seksi</a> --}}
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Update Data Request Cuti</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('request_cuti.update', $request_cutis->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama User</label>
                            <select name="user_id" class="form-control">
                                <option value="">-- Pilih User --</option>
                               @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $request_cutis->user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Jenis Cuti</label>
                            <select name="cuti_id" class="form-control">
                                <option value="">-- Pilih Cuti --</option>
                                @foreach ($cutis as $cuti)
                                    <option value="{{ $cuti->id }}" {{ $cuti->id == $request_cutis->cuti->id ? 'selected' : '' }}>
                                        {{ $cuti->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control" value="{{ $request_cutis->start_date }}">
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control" value="{{ $request_cutis->end_date }}">
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Reason</label>
                            <textarea name="reason" id="" cols="10" rows="5" class="form-control">{{ $request_cutis->reason }}</textarea>
                        </div>

                        <div class="col-12 mb-1">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="approve" {{ $request_cutis->status == 'approve' ? 'selected' : '' }}>Approve</option>
                                <option value="pending" {{ $request_cutis->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="reject" {{ $request_cutis->status == 'reject' ? 'selected' : '' }}>Reject</option>
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
