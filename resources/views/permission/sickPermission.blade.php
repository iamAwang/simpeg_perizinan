@extends('layouts.app') @section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #17a2b8">
                <h3 class="card-title" style="color: white">Sick Permission</h3>
                <div class="card-tools">
                    <div
                        class="input-group input-group-sm"
                        style="width: 150px"
                    >
                        <input
                            type="text"
                            name="table_search"
                            class="form-control float-right"
                            placeholder="Search"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0" style="height: 300px">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr style="text-align: center">
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Employee Number</th>
                            <th>Started Date</th>
                            <th>Ended Date</th>
                            <th>Permission Type</th>
                            <th>Reason</th>
                            <th>Permission Status</th>
                            <th>Rejected By</th>
                            <th>Rejection Reason</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;    
                        @endphp
                       @foreach ($sick_permissions as $permission)
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
    <button type="submit" class="btn btn-info">
        <a href="/permission" style="color: white">Back</a>
    </button>
</div>
@endsection
