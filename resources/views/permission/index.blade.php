@extends('layouts.app') 
@if(Auth::user()->role_id == 2) 
@section('pegawai')

@section('header')
<div class="row">
<div class="container" style="position: relative">
    <img src={{ asset("wallpaper/wallpaper4.jpg") }} alt="wallpaper4bg" style="max-width: 100%; height: auto; border-radius: 5px">
    <div class="title">
        <h5
            style="
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -190%);
                font-size: 25px;
                color: white;
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black,
                    0 -1px black;
            "
        >Your Permission
        </h5>
        <a
            href="/permission"
            class="btn btn-app bg-dark"
            data-toggle="tooltip"
            style="
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-130%, -15%);
                border: none;
            "
        >
            <i class="fa fa-chart-simple"></i> Dashboard
        </a>
        <a
            href="/permission/history"
            class="btn btn-app bg-dark"
            data-toggle="tooltip"
            style="
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-0%, -15%);
                border: none;
            "
        >
            <i class="fa fa-book-bookmark"></i> History
        </a>
    </div>
</div>
</div>
@endsection 

@section('content') 

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif

<div class="row" style="margin: 1px;">
<a href="/create_permission" class="card card-widget widget-user">
    <div class="item1" style="width: 995px">
        <div class="widget-user-header bg-dark">
            <h3 class="widget-user-username">CREATE</h3>
            <h5 class="widget-user-desc">PERMISSION</h5>
        </div>
        <div class="widget-user-image">
            <img
                class="img-circle elevation-2"
                src="{{ asset("wallpaper/wallpaper5.jpg") }}"
                alt=""
                style="width: 100px; height: 100px; display:inline-block; vertical-align:middle;"
            />
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>
</a>
@endsection 
@endif 

@if(Auth::user()->role_id == 3) 
@section('atasan')
@section('header')
<div class="row">
    <div class="container" style="position: relative">
        <img src={{ asset("wallpaper/cnv.png") }} alt="wallpaper4bg" style="max-width: 100%; height: auto; border-radius: 5px">
        <div class="title">
            <h5
                style="
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -190%);
                    font-size: 25px;
                    color: white;
                    text-shadow: -1px 0 black, 0 1px black, 1px 0 black,
                        0 -1px black;
                "
            >Your Aceptation & Rejection
            </h5>
            <a
                href="/permission"
                class="btn btn-app bg-dark"
                data-toggle="tooltip"
                style="
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-130%, -15%);
                    border: none;
                "
            >
                <i class="fa fa-chart-simple"></i> Dashboard
            </a>
            <a
                href="/permission/history"
                class="btn btn-app bg-dark"
                data-toggle="tooltip"
                style="
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-0%, -15%);
                    border: none;
                "
            >
                <i class="fa fa-book-bookmark"></i> History
            </a>
        </div>
    </div>
</div>
@endsection

<div class="card">
    <div class="card-header" style="background-color: #343a40">
        <h3 class="card-title" style="color: white">Employee Permission / Izin Pegawaii</h3>
    </div>

    <div class="card-body table-responsive p-0" style="height: 300px">
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
                @php 
                    $no=1; 
                @endphp 
                @foreach ($history_permissions as $permission)
                <tr style="text-align: center">
                    <td>{{ $no }}</td>
                    <td>{{$permission->full_name}}</td>
                    <td>{{$permission->types->name}}</td>
                    <td>{{$permission->status}}</td>
                    <td>
                        <div class="btn-group">
                            <span
                                class="btn btn-success col fileinput-button dz-clickable"
                                style="
                                    height: 50%;
                                    background-color: #1a4314;"
                                    >
                                    <a href="/edit_permission_acceptation/{{$permission->id}}" data-toggle="tooltip" style="text-decoration: none;color: white;"><i class="fa fa-circle-check"></i> Accept
                                    </a>
                            </span>
                            <form
                                action="/edit_permission_rejection/{{$permission->id}}"
                                method="get">
                                @csrf
                                <button
                                    type="submit"
                                    class="btn btn-danger col cancel"
                                    style="background-color: #800000;">
                                    <i
                                        class="fas fa-times-circle"
                                        style="color: white">
                                    </i>
                                    <span style="color: white">Reject
                                    </span>
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
@endsection 
@endif
</div>