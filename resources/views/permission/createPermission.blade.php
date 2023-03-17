@extends('layouts.app') 
@section('content')

<div class="card">
    <div class="card-header" style="background-color: #343a40">
        <h3 class="card-title" style="color: white">Permission Form / Formulir Izin</h3>
    </div>

    <?php
        $url_permission = "";
        if(@$edit){
            if($edit->id_PermissionType == 1){
                $url_permission = "/save_update_sick/$edit->id";
            }
            elseif($edit->id_PermissionType == 2){
                $url_permission = "/save_update_permit/$edit->id";
            }
            else{
                $url_permission = "/save_update_leave/$edit->id";
            }
        }
    ?>

    <form action=<?php @$edit!=null? 
    printf( $url_permission):
    printf('/create_permission') ?> method="post" enctype="multipart/form-data"> 
    @csrf

    <div class="card-body">
        <div class="form-group">
            <label>Full Name / Nama</label>
            <div class="input-name">
                <input
                    name="nama_pegawai"
                    class="form-control"
                    type="text"
                    placeholder="Employee Name / Nama Pegawai"
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
            <label>Employee Number / Nomor Induk Pegawai</label>
            <div class="input-employee-number">
                <input
                    name="nomor_induk_pegawai"
                    class="form-control"
                    type="text"
                    placeholder="Employee Number / Nomor Induk Pegawai"
                    value="<?php if(@$edit!=null) printf($edit->employee_number)?>"
                />
            </div>
        </div>

        <div class="form-group">
            <label>Started Date / Tanggal Mulai</label>
            <div
                class="input-group date"
                id="reservationdate"
                data-target-input="nearest"
            >
                <input
                    name="tanggal_mulai_izin"
                    type="date"
                    onfocus="this.showPicker()"
                    class="form-control datetimepicker-input"
                    data-target="#reservationdate"
                    placeholder="Started Date"
                    value="<?php if(@$edit!=null) printf($edit->started_date)?>"
                />
            </div>
        </div>

        <div class="form-group">
            <label>Ended Date / Tanggal Selesai</label>
            <div
                class="input-group date"
                id="reservationdate"
                data-target-input="nearest"
            >
                <input
                    name="tanggal_selesai_izin"
                    type="date"
                    onfocus="this.showPicker()"
                    class="form-control datetimepicker-input"
                    data-target="#reservationdate"
                    placeholder="Ended Date"
                    value="<?php if(@$edit!=null) printf($edit->ended_date)?>"
                />
            </div>
        </div>

        <div class="form-group" data-select2-id="29">
            <label>Permission Types / Jenis Izin</label>
            <select
                name="jenis_izin"
                class="form-control select2 select2-danger select2-hidden-accessible"
                data-dropdown-css-class="select2-danger"
                style="width: 100%"
                data-select2-id="12"
                tabindex="-1"
                aria-hidden="true"
                onchange="getComboA(this)"
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
            <label>Reason / Alasan</label>
            <textarea name="alasam_izin" class="form-control" rows="3" placeholder="Reason / Alasan ..."><?php if(@$edit!=null) printf($edit->reason)?></textarea>
        </div>
        
        <div class="form-group" id="filesss">
            <label>Surat Keterangan Dokter</label>
            <input type="file" name="foto"><?php if(@$edit!=null) printf($edit->sick_license)?>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-dark" style="float: left; width: 100px">
                <a href="/permission" data-toggle="tooltip" style="color: white">Back</a>
            </button>
            <button type="submit" data-toggle="tooltip" class="btn btn-dark" style="float: right; width: 100px">Submit</button>
        </div>
    </div>
</div>
@endsection

@push('page_scripts')
    <script>
        function getComboA(selectObject) {
        var value = selectObject.value;
        const input_upload = document.getElementById('filesss');

        console.log(value)
        if(value == 2 || value == 3){
            input_upload.remove();
        }
        }
    </script>
       
@endpush
