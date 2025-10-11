@extends('admin.layouts.frame')
@section('content')
    {{-- ========== start content =========== --}}

        <div class="card-header flex flex-wrap align-items-center  gap-2 justify-content-between ">

        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Input Data User</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama User</label>
                            <input class="form-control" type="text" name="name" placeholder="Masukkan Nama User">
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Masukkan Email User">
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Password</label>
                            <input type="text" for="password" id="password" name="password"
                                    class="form-control"></input>
                        </div>

{{--
                        <div class="col-12 mb-1">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="approve" {{ $request_cutis->status == 'approve' ? 'selected' : '' }}>Approve</option>
                                <option value="pending" {{ $request_cutis->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="reject" {{ $request_cutis->status == 'reject' ? 'selected' : '' }}>Reject</option>
                            </select>
                        </div> --}}
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
