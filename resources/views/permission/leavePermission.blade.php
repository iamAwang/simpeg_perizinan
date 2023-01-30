@extends('layouts.app') @section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #ffc107b8">
                <h3 class="card-title" style="color: white">
                    Leave Permission
                </h3>
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
                            <th>Status</th>
                            <th>Rejected By</th>
                            <th>Rejection Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align: center">
                            <td>183</td>
                            <td>Ridho</td>
                            <td>123654</td>
                            <td>03-03-2023</td>
                            <td>03-05-2023</td>
                            <td>Leave</td>
                            <td>Marriage Leave</td>
                            <td>
                                <span class="tag tag-success">Approved</span>
                            </td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="card-footer" style="margin-left: 0pt">
    <button type="submit" class="btn btn-warning">
        <a href="/permission" style="color: white">Back</a>
    </button>
</div>
@endsection
