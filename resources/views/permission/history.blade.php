@extends('layouts.app') 
@section('content') 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #343a40">
                <h3 class="card-title" style="color: white">Permission History / Riwayat Izin</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body table-responsive p-0" style="height: 300px">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr style="text-align: center">
                            <th>ID</th>
                            <th>Full Name / Nama</th>
                            <th>Employee Number / Nomor Induk Pegawai</th>
                            <th>Started Date / Tanggal Mulai</th>
                            <th>Ended Date / Tanggal Selesai</th>
                            <th>Permission Type / Jenis Izin</th>
                            <th>Reason / Alasan</th>
                            <th>Permission Status / Status Izin</th>
                            <th>Rejected By / Ditolak Oleh</th>
                            <th>Rejection Reason / Alasan Penolakan</th>
                            <th>Action / Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;    
                        @endphp
                       @foreach ($history_permissions  as $permission)
                       <tr style="text-align: center">
                        <td>{{$no}}</td>
                        <td>{{$permission->full_name}}</td>
                        <td>{{$permission->employee_number}}</td>
                        <td>{{$permission->started_date}}</td>
                        <td>{{$permission->ended_date}}</td>
                        <td>{{$permission->types->name}}</td>
                        <td>{{$permission->reason}}</td>
                        <td>{{$permission->status}}</td>
                        <td>{{$permission->rejecteds->name}}</td>
                        <td>{{$permission->rejection_reason}}</td>
                        <td>
                            <div class="btn-group">
                                <span
                                    class="btn btn-success col fileinput-button dz-clickable"
                                >
                                    <i class="fas fa-plus"></i>
                                    <a href="/edit_sick/{{$permission->id}}" style="color: white"
                                        >Edit</a
                                    >
                                </span>
                                <form action="/cancel/sick/{{$permission->id}}" method="post">
                                    @csrf
                                <button
                                    type="submit"
                                    class="btn btn-warning col cancel"
                                >
                                    <i
                                        class="fas fa-times-circle"
                                        style="color: white"
                                    ></i>
                                    <span style="color: white">Cancel</span>
                                </button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="card-footer" style="margin-left: 0pt">
    <button type="submit" class="btn btn-dark">
        <a href="/permission" style="color: white">Back</a>
    </button>
</div>
@endsection