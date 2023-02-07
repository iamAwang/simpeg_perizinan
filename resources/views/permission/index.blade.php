@extends('layouts.app')@section('header')
<h5>Your Permission / Izin Anda</h5>
@endsection @section('content') @if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif
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
@endsection
