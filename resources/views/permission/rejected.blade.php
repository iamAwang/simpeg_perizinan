@extends('layouts.app') @section('content') 
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif
<div class="card">
    <div class="card-header" style="background-color: #800000">
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
                        <th>Permission Status / Status Izin</th>
                        <th>Rejected By / Ditolak Oleh</th>
                        <th>Rejection Reason / Alasan Penolakan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp @foreach ($rejecteds
                    as $permission)
                    <tr style="text-align: center">
                        <td>{{ $no }}</td>
                        <td>{{$permission->full_name}}</td>
                        <td>{{$permission->types->name}}</td>
                        <td>{{$permission->rejecteds->name}}</td>
                        <td>{{$permission->rejection_reason}}</td>
                    </tr>
                    @php $no++; @endphp @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card-footer" style="margin-left: 0pt">
    <button type="submit" class="btn" style="background-color: #800000">
        <a href="/permission" style="color: white">Back</a>
    </button>
</div>
@endsection