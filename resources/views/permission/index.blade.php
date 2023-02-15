@extends('layouts.app')
@if(Auth::user()->role_id == 2) @section('pegawai')
@section('header')
<h5>Your Permission / Izin Anda</h5>
@endsection 
@section('content') 
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif
<div class="row">
    <div
        style="
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-auto-rows: minmax(100px, auto);
            grid-gap: 15px;
        "
    >
        <div style="grid-column: 3/7">
            <div class="info-box bg-dark">
                <span class="info-box-icon">
                    <i class="fa fa-folder-plus"></i>
                </span>
                <div class="info-box-content">
                    <a href="/create_permission" style="color: white"
                        >Create Permission / Buat Izin</a
                    >
                    <!-- <span class="info-box-text">Create Permission</span> -->
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description"> 6/12 </span>
                </div>
            </div>
        </div>

        <div style="grid-column: 7/11">
            <div class="info-box bg-dark">
                <span class="info-box-icon">
                    <i class="fa fa-clock-rotate-left"></i>
                </span>
                <div class="info-box-content">
                    <a href="/permission_history" style="color: white"
                        >History / Riwayat Izin</a
                    >
                    <!-- <span class="info-box-text">Create Permission</span> -->
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description"> 6/12 </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box bg-info">
            <span class="info-box-icon">
                <i class="fa fa-hospital-user"></i>
            </span>
            <div class="info-box-content">
                <a href="/sick_permission" style="color: white">Sick / Sakit</a>
                <!-- <span class="info-box-text">Sick</span> -->
                <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <span class="progress-description"> 2/4 </span>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box bg-info">
            <span class="info-box-icon">
                <i class="fa fa-file-signature"></i>
            </span>
            <div class="info-box-content">
                <a href="/permit_permission" style="color: white"
                    >Permit / Izin</a
                >
                <!-- <span class="info-box-text">Permit</span> -->
                <div class="progress">
                    <div class="progress-bar" style="width: 25%"></div>
                </div>
                <span class="progress-description"> 1/4 </span>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box bg-info">
            <span class="info-box-icon">
                <i class="fa fa-house-user" style="color: white"></i>
            </span>
            <div class="info-box-content">
                <a href="/leave_permission" style="color: white"
                    >Leave / Cuti</a
                >
                <!-- <span class="info-box-text">Leave</span> -->
                <div class="progress">
                    <div class="progress-bar" style="width: 75%"></div>
                </div>
                <span class="progress-description"> 3/4 </span>
            </div>
        </div>
    </div>
</div>
@endsection @endif


@if(Auth::user()->role_id == 3) @section('atasan')
@section('header')
<h5>Your Aceptation & Rejection / Persetujuan & Penolakan Anda</h5>
@endsection
<div
    style="
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-auto-rows: minmax(100px, auto);
        grid-gap: 15px;
    "
>
    <div style="grid-column: 3/7">
        <div class="info-box" style="background-color: #1A4314">
            <span class="info-box-icon" style="color: white">
                <i class="fa fa-circle-check"></i>
            </span>
            <div class="info-box-content">
                <a href="/accepted" style="color: white"
                    >Accepted / Diterima</a
                >                
            </div>
        </div>
    </div>

    <div style="grid-column: 7/11">
        <div class="info-box" style="background-color: #800000">
            <span class="info-box-icon" style="color: white">
                <i class="fas fa-times-circle" style="color: white"></i>
            </span>
            <div class="info-box-content">
                <a href="/rejected" style="color: white"
                    >Rejected / Ditolak</a
                >                
            </div>
        </div>
    </div>
    <div style="grid-column: 1/13">
        <div class="card">
            <div class="card-header" style="background-color: #17a2b8">
                <h3 class="card-title" style="color: white">
                    Employee Permission / Izin Pegawai
                </h3>
                <div class="card-tools"></div>
            </div>
            <div class="row">
                <div
                    class="card-body table-responsive p-0"
                    style="height: 300px"
                >
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr style="text-align: center">
                                <th>ID</th>
                                <th>Full Name / Nama</th>
                                <th>Permission Type / Jenis Izin</th>
                                <th>Permission Status / Status Izin</th>
                                <th>Action / Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp @foreach ($history_permissions
                            as $permission)
                            <tr style="text-align: center">
                                <td>{{ $no }}</td>
                                <td>{{$permission->full_name}}</td>
                                <td>{{$permission->types->name}}</td>
                                <td>{{$permission->status}}</td>
                                <td>
                                    <div class="btn-group">
                                        <span
                                            class="btn btn-success col fileinput-button dz-clickable"
                                            style="height: 50%; background-color:#1A4314"
                                        >
                                            <i class="fa fa-circle-check"></i>
                                            <a
                                                href="/edit_permission_acceptation/{{$permission->id}}"
                                                style="
                                                    text-decoration: none;
                                                    color: white;
                                                "
                                                >Accept</a
                                            >
                                        </span>
                                        <form
                                            action="/edit_permission_rejection/{{$permission->id}}"
                                            method="get"
                                        >
                                            @csrf
                                            <button
                                                type="submit"
                                                class="btn btn-danger col cancel"
                                                style="background-color: #800000"
                                            >
                                                <i
                                                    class="fas fa-times-circle"
                                                    style="color: white"
                                                ></i>
                                                <span style="color: white"
                                                    >Reject</span
                                                >
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @php $no++; @endphp @endforeach
                        </tbody>
                    </table>
                </div>
                @endsection @endif
            </div>
        </div>
    </div>
</div>
