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
                            <th>Sick License / Surat Keterangan Dokter</th>
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
                        <td>{{@$permission->status}}</td>
                        <td>{{@$permission->rejecteds->name}}</td>
                        <td>{{@$permission->rejection_reason}}</td>
                        <td><a target="_blank" href="{{asset('storage/photos')}}/{{@$permission->sick_license}}"><img src="{{asset('storage/photos')}}/{{@$permission->sick_license}}" alt="permission" srcset="" style="height: 50%; width: 50%"></a></td>
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