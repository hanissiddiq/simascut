@extends('admin.layouts.frame')
@section('content')
    {{-- ========== start content =========== --}}

        <div class="card-header flex flex-wrap align-items-center  gap-2 justify-content-between ">
            {{-- <a href="{{ route('seksi.create') }}" class="btn btn-primary ">Tambah Seksi</a> --}}
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Update Data Tipe Cuti</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('cuti.update', $cuti->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Tipe Cuti</label>
                            <input type="text" name="name" class="form-control" value="{{ $cuti->name }}">
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="active" {{ $cuti->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="unactive" {{ $cuti->status == 'unactive' ? 'selected' : '' }}>Unactive</option>
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    {{-- ========== end content =========== --}}
@endsection
