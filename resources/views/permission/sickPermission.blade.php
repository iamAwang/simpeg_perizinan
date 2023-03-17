@extends('layouts.app') @section('content') @if ($message =
Session::get('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
    {{ $message }}
</div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #343a40">
                <h3 class="card-title" style="color: white">
                    Sick Permission / Izin Sakit
                </h3>
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
                            <th>Action / Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $no=1; @endphp @foreach ($sick_permissions as $permission)
                        <tr style="text-align: center">
                            <td>{{ $no }}</td>
                            <td>{{$permission->full_name}}</td>
                            <td>{{$permission->employee_number}}</td>
                            <td>{{$permission->started_date}}</td>
                            <td>{{$permission->ended_date}}</td>
                            <td>{{$permission->types->name}}</td>
                            <td>{{$permission->reason}}</td>
                            <td>{{@$permission->status}}</td>
                            <td>{{@$permission->rejecteds->name}}</td>
                            <td>{{@$permission->rejection_reason}}</td>
                            <td>
                                <a
                                    target="_blank"
                                    href="{{
                                        asset('storage/photos')
                                    }}/{{@$permission->sick_license}}"
                                    ><img
                                        src="{{
                                            asset('storage/photos')
                                        }}/{{@$permission->sick_license}}"
                                        alt="permission"
                                        srcset=""
                                        style="height: 50%; width: 50%"
                                /></a>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <span
                                        class="btn btn-success col fileinput-button dz-clickable"
                                    >
                                        <a
                                            href="
                                            <?php 
                                            if($permission->status == "Disetujui Atasan 1" || $permission->status == "Ditolak Atasan 1") {
                                                printf("#");    
                                            }
                                            else{
                                                printf('/edit_sick').printf("/").printf($permission->id);
                                            }

                                            ?>"
                                            data-toggle="tooltip"
                                            style="color: white"
                                            ><i class="fas fa-pencil-alt"></i>
                                            Edit
                                        </a>
                                    </span>
                                    <form
                                        action="/cancel/sick/{{$permission->id}}"
                                        method="post"
                                    >
                                        @csrf
                                        <button
                                            type="submit"
                                            class="btn btn-warning col cancel"
                                        >
                                            <i
                                                class="fas fa-trash"
                                                style="color: white"
                                            ></i>
                                            <span style="color: white"
                                                >Cancel</span
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
        </div>
    </div>

    <div class="col-12" style="text-align: center">
        <button
            type="submit"
            class="btn btn-dark"
            style="width: 100px; height: auto"
        >
            <a href="/permission/history" style="color: white; display: block"
                >Back</a
            >
        </button>
    </div>
</div>
@endsection
