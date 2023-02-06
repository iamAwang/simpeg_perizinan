@extends('layouts.app') @section('content')
<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Permission Form</h3>
    </div>

    <form action=<?php @$edit!=null? 
    // @if (@$edit->id_PermissionType === 1)
    // printf('/save_update_sick'.'/'.$edit->id)
    // @elseif (@$edit->id_PermissionType === 2)
    // printf('/save_update_permit'.'/'.$edit->id)
    // @else
    // printf('/save_update_leave'.'/'.$edit->id)
    // @endif 
    printf('/save_update_sick'.'/'.$edit->id) :
    printf('/create_permission') ?> method="post"> @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Full Name</label>
            <div class="input-name">
                <input
                    name="nama_pegawai"
                    class="form-control"
                    type="text"
                    placeholder="Employee Name"
                    value="<?php if(@$edit!=null) printf($edit->full_name) ?>"
                />
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
              </div>
            @enderror
            </div>
        </div>

        <div class="form-group">
            <label>Employee Number</label>
            <div class="input-employee-number">
                <input
                    name="nomor_induk_pegawai"
                    class="form-control"
                    type="text"
                    placeholder="Employee Number"
                    value="<?php if(@$edit!=null) printf($edit->employee_number)
            ?>"
                />
            </div>
        </div>

        <div class="form-group">
            <label>Started Date:</label>
            <div
                class="input-group date"
                id="reservationdate"
                data-target-input="nearest"
            >
                <input
                    name="tanggal_mulai_izin"
                    type="date"
                    class="form-control datetimepicker-input"
                    data-target="#reservationdate"
                    placeholder="Started Date"
                    value="<?php if(@$edit!=null) printf($edit->started_date)
            ?>"
                />
            </div>
        </div>

        <div class="form-group">
            <label>Ended Date:</label>
            <div
                class="input-group date"
                id="reservationdate"
                data-target-input="nearest"
            >
                <input
                    name="tanggal_selesai_izin"
                    type="date"
                    class="form-control datetimepicker-input"
                    data-target="#reservationdate"
                    placeholder="Ended Date"
                    value="<?php if(@$edit!=null) printf($edit->ended_date)
            ?>"
                />
            </div>
        </div>

        <div class="form-group" data-select2-id="29">
            <label>Permission Types</label>
            <select
                name="jenis_izin"
                class="form-control select2 select2-danger select2-hidden-accessible"
                data-dropdown-css-class="select2-danger"
                style="width: 100%"
                data-select2-id="12"
                tabindex="-1"
                aria-hidden="true"
            >

        @foreach ($id_permissionTypes as $id_permissionType)
            @if (@$edit->id_PermissionType == $id_permissionType->id)
                <option value="{{$id_permissionType->id}}" selected>{{$id_permissionType->name}}</option>
            @else 
                <option value="{{$id_permissionType->id}}">{{$id_permissionType->name}}</option>
            @endif
        @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Reason</label>
            <textarea
                name="alasam_izin"
                class="form-control"
                rows="3"
                placeholder="Reason ..."
            >
<?php if(@$edit!=null) printf($edit->reason)
                ?></textarea
            >
        </div>
        <div class="form-group" data-select2-id="29">
            <label>Permission Status</label>
            <select
                name="status_izin"
                class="form-control select2 select2-danger select2-hidden-accessible"
                data-dropdown-css-class="select2-danger"
                style="width: 100%"
                data-select2-id="12"
                tabindex="-1"
                aria-hidden="true"
            >
                {{-- <option value="" disabled selected>Permission Status</option> --}}
                {{-- @if (@$edit->status->status_izin)
                @endif --}}
                <option data-select2-id="37" value="1">Menunggu Konfirmasi</option>
                <option data-select2-id="37" value="2">Disetujui Atasan 1</option>
                <option data-select2-id="38" value="3">Disetujui Atasan 2</option>
                <option data-select2-id="39" value="4">Disetujui Atasan 3</option>
            </select>
            
            <span
                class="select2 select2-container select2-container--default select2-container--above select2-container--focus"
                dir="ltr"
                data-select2-id="13"
                style="width: 100%"
                ><span class="selection"></span
                ><span class="dropdown-wrapper" aria-hidden="true"></span
            ></span>
        </div>

        <div class="form-group" data-select2-id="29">
            <label>Rejected By</label>
            <select
                name="penolak_izin"
                class="form-control select2 select2-danger select2-hidden-accessible"
                data-dropdown-css-class="select2-danger"
                style="width: 100%"
                data-select2-id="12"
                tabindex="-1"
                aria-hidden="true"
            >
                @foreach ($id_rejectedBys as $id_rejectedBy) 
                @if (@$edit->id_RejectedBy == $id_rejectedBy->id)
                <option value="{{$id_rejectedBy->id}}" selected>
                    {{$id_rejectedBy->name}}
                </option>
                @else
                <option value="{{$id_rejectedBy->id}}">
                    {{$id_rejectedBy->name}}
                </option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Rejection Reason</label>
            <textarea
                name="alasan_penolakan"
                class="form-control"
                rows="3"
                placeholder="Rejection Reason ..."
            >
<?php if(@$edit!=null) printf($edit->rejection_reason)
                ?></textarea
            >
        </div>
        <div class="row">
            <div class="card-footer" style="margin-left: 0pt">
                <button type="submit" class="btn btn-danger">
                    <a href="/permission" style="color: white">Back</a>
                </button>
            </div>
            <div class="card-footer" style="margin-right: 0pt">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
        @endsection
    </div>
</div>
