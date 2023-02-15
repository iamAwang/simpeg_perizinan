@extends('layouts.app') @section('content') 
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif
<div class="card">
    <div class="card-header" style="background-color: #1A4314">
        <h3 class="card-title" style="color: white">
            Accepted Permission / Izin Yang Disetujui
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
                        <th>Permission Type / Jenis Izin</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp @foreach ($accepteds
                    as $permission)
                    <tr style="text-align: center">
                        <td>{{ $no }}</td>
                        <td>{{$permission->full_name}}</td>
                        <td>{{$permission->types->name}}</td>
                        <td>{{$permission->status}}</td>
                    </tr>
                    @php $no++; @endphp @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card-footer" style="margin-left: 0pt">
    <button type="submit" class="btn" style="background-color: #1A4314">
        <a href="/permission" style="color: white">Back</a>
    </button>
</div>
@endsection