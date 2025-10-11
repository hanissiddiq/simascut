@extends('admin.layouts.frame')
@section('content')
    {{-- ========== start content =========== --}}
    <div class="card basic-data-table">



        <div class="card-header flex flex-wrap align-items-center  gap-2 justify-content-between ">
            {{-- Alert Sukses --}}
                    @if (session('success'))
                        {{-- <div class="alert alert-success w-100"> --}}
                        <div class="alert alert-success bg-success-100 text-success-600 border-success-600 border-start-width-4-px border-top-0 border-end-0 border-bottom-0 px-24 py-13 mb-0 fw-semibold text-lg radius-4 d-flex align-items-center justify-content-between mb-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Alert Error --}}
                    @if ($errors->any())
                        {{-- <div class="alert alert-danger w-100"> --}}
                            <div class="alert alert-danger bg-danger-100 text-danger-600 border-danger-600 border-start-width-4-px border-top-0 border-end-0 border-bottom-0 px-24 py-13 mb-0 fw-semibold text-lg radius-4 d-flex align-items-center justify-content-between mb-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <a href="{{ route('request_cuti.create') }}" class="btn btn-primary ">Tambah Request Cuti</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>

                        <th scope="col">No</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">Tipe Cuti</th>
                        {{-- <th scope="col">Reason</th> --}}
                        <th scope="col">Status</th>
                        <th scope="col" width=30>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($request_cutis as $requestCuti)
                        <tr>
                            <td>
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        {{ $loop->iteration }}
                                    </label>
                                </div>
                            </td>
                            {{-- <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td> --}}
                            <td>
                                <div class="d-flex align-items-center">
                                    {{-- <img src="{{asset('wowdash/assets/images/user-list/user-list1.png')}}" alt="" class="flex-shrink-0 me-12 radius-8"> --}}
                                    <h6 class="text-md mb-0 fw-medium flex-grow-1">{{ $requestCuti->user->name }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    {{-- <img src="{{asset('wowdash/assets/images/user-list/user-list1.png')}}" alt="" class="flex-shrink-0 me-12 radius-8"> --}}
                                    <h6 class="text-md mb-0 fw-medium flex-grow-1">{{ $requestCuti->cuti->name }}</h6>
                                </div>
                            </td>
                            {{-- <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('wowdash/assets/images/user-list/user-list1.png')}}" alt="" class="flex-shrink-0 me-12 radius-8">
                                    <h6 class="text-md mb-0 fw-medium flex-grow-1">{{ $requestCuti->reason }}</h6>
                                </div>
                            </td> --}}
                            <td>
                                @if ($requestCuti->status == "approve")
                                <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">{{ ucfirst($requestCuti->status) }}</span>
                                @elseif (($requestCuti->status == "pending"))
                                <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">{{ ucfirst($requestCuti->status) }}</span>
                                @else
                                <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">{{ ucfirst($requestCuti->status) }}</span>

                                @endif

                            </td>
                            <td>
                                <a href="{{ route('request_cuti.show', $requestCuti->id) }}"
                                    class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center" data-bs-toggle="tooltip"
                                        title="Detail">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                    {{-- <i class="fa fa-eye"></i> --}}
                                </a>
                                <a href="{{ route('request_cuti.edit', $requestCuti->id) }}"
                                    class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center" data-bs-toggle="tooltip"
                                        title="Edit">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <form action="{{ route('request_cuti.destroy', $requestCuti->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin Menghapus Data?');" class="d-inline-flex">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-32-px h-32-px bg-danger-focus text-danger-main hover:text-danger rounded-circle d-inline-flex align-items-center justify-content-center" data-bs-toggle="tooltip"
                                        title="Delete">
                                        <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                    </button>
                                </form>
                                {{-- <a href="{{ route('seksi.destroy', $seksi->id) }}" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                    </a> --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Tidak ada data cuti.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

    {{-- ========== end content =========== --}}
@endsection
