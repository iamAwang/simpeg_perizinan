@extends('layouts.app') @section('content') @if ($message =
Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif

<div class="col-12">
    <div class="card">
        <div class="card-header" style="background-color: #343a40">
            <h3 class="card-title" style="color: white">
                Accepted Permission / Izin Yang Disetujui
            </h3>
        </div>

        <div class="card-body table-responsive p-0" style="height: 300px">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr style="text-align: center">
                        <th>ID</th>
                        <th>Full Name / Nama</th>
                        <th>Permission Status / Status Izin</th>
                        <th>Permission Type / Jenis Izin</th>
                        <th>Sick License / Surat Keterangan Dokter</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no=1; @endphp @foreach ($accepteds as $permission)
                    <tr style="text-align: center">
                        <td>{{ $no }}</td>
                        <td>{{$permission->full_name}}</td>
                        <td>{{$permission->types->name}}</td>
                        <td>{{$permission->status}}</td>
                        <td>
                            @if($permission->sick_license)
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

                            @endif
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
@endsection
