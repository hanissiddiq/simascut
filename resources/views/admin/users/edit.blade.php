@extends('admin.layouts.frame')
@section('content')
    {{-- ========== start content =========== --}}

    <div class="card-header flex flex-wrap align-items-center  gap-2 justify-content-between ">
        {{-- <a href="{{ route('seksi.create') }}" class="btn btn-primary ">Tambah Seksi</a> --}}
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Update Data User</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <div class="col-12 mb-1">
                            <label class="form-label">Nama User</label>
                            <select name="user_id" class="form-control">
                                <option value="">-- Pilih User --</option>
                               @foreach ($user as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $request_cutis->user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div> --}}
                    {{-- <div class="col-12 mb-1">
                            <label class="form-label">Jenis Cuti</label>
                            <select name="cuti_id" class="form-control">
                                <option value="">-- Pilih Cuti --</option>
                                @foreach ($cutis as $cuti)
                                    <option value="{{ $cuti->id }}" {{ $cuti->id == $request_cutis->cuti->id ? 'selected' : '' }}>
                                        {{ $cuti->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div> --}}

                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            value="{{ $user->name }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ $user->email }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="seksi" class="form-label">Seksi</label>
                        <select name="seksi_id" class="form-control">
                            <option value="">-- Pilih Seksi --</option>
                            @foreach ($seksi as $seksi)
                                {{-- <option value="{{ $seksi->id }}" {{ $seksi->id == $user->seksi->id ? 'selected' : '' }}>
                                                    {{ $seksi->name }}
                                                </option> --}}
                                <option value="{{ $seksi->id ?? '' }}"
                                    {{ $seksi->id == optional($user->detail)->seksi_id ? 'selected' : '' }}>
                                    {{ $seksi->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select name="jabatan_id" class="form-control">
                            <option value="">-- Pilih Jabatan --</option>
                            @foreach ($jabatan as $jabatan)
                                <option value="{{ $jabatan->id ?? '' }}"
                                    {{ $jabatan->id == optional($user->detail)->jabatan_id ? 'selected' : '' }}>
                                    {{ $jabatan->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 ">
                        <label for="photo_profile" class="form-label">Photo Profile</label>
                        <input type="file" id="photo_profile" name="photo_profile" class="form-control ">
                        <div class="input-group mt-1">
                            <img src="{{ $user->detail && $user->detail->photo_profile
                                ? Storage::url($user->detail->photo_profile)
                                : 'https://placehold.co/150x150?text=No+Photo&font=roboto' }}"
                                width="50" alt="Profile" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" name="address" class="form-control"
                            value="{{ $user->detail->address ?? '' }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" id="kecamatan" name="kecamatan" class="form-control"
                            value="{{ $user->detail->kecamatan ?? '' }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" id="kabupaten" name="kabupaten" class="form-control"
                            value="{{ $user->detail->kabupaten ?? '' }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" id="provinsi" name="provinsi" class="form-control"
                            value="{{ $user->detail->provinsi ?? '' }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control"
                            value="{{ $user->detail->phone_number ?? '' }}">
                    </div>

                    {{-- <div class="col-md-6 mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="customer"
                                            {{ $user->getRoleNames()->first() == 'customer' ? 'selected' : '' }}>Customer
                                        </option>
                                        <option value="staff"
                                            {{ $user->getRoleNames()->first() == 'staff' ? 'selected' : '' }}>Staff
                                        </option>
                                        <option value="owner"
                                            {{ $user->getRoleNames()->first() == 'owner' ? 'selected' : '' }}>Owner
                                        </option>
                                    </select>
                                </div> --}}

                    <div class="col-md-6 mb-3">
                        <label for="post_code" class="form-label">Post Code</label>
                        <input type="text" id="post_code" name="post_code" class="form-control"
                            value="{{ $user->detail->post_code ?? '' }}">
                    </div>

                    {{-- <div class="col-12 mb-1">
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
