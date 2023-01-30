@extends('layouts.app') @section('content')
<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Permission Form</h3>
    </div>

    <form action="" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Full Name</label>
                <div class="input-name">
                    <input
                        class="form-control"
                        type="text"
                        placeholder="Employee Name"
                    />
                </div>
            </div>

            <div class="form-group">
                <label>Employee Number</label>
                <div class="input-employee-number">
                    <input
                        class="form-control"
                        type="text"
                        placeholder="Employee Number"
                    />
                </div>
            </div>

            <div class="form-group">
                <label>Started Date:</label>
                <div
                    class="input-group date"
                    id="reservationdate"
                    data-target-input="nearest"
                >
                    <input
                        type="text"
                        class="form-control datetimepicker-input"
                        data-target="#reservationdate"
                        placeholder="Started Date"
                    />
                    <div
                        class="input-group-append"
                        data-target="#reservationdate"
                        data-toggle="datetimepicker"
                    >
                        <div class="input-group-text">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Ended Date:</label>
                <div
                    class="input-group date"
                    id="reservationdate"
                    data-target-input="nearest"
                >
                    <input
                        type="text"
                        class="form-control datetimepicker-input"
                        data-target="#reservationdate"
                        placeholder="Ended Date"
                    />
                    <div
                        class="input-group-append"
                        data-target="#reservationdate"
                        data-toggle="datetimepicker"
                    >
                        <div class="input-group-text">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group" data-select2-id="29">
                <label>Permission Types</label>
                <select
                    class="form-control select2 select2-danger select2-hidden-accessible"
                    data-dropdown-css-class="select2-danger"
                    style="width: 100%"
                    data-select2-id="12"
                    tabindex="-1"
                    aria-hidden="true"
                >
                    <option selected="selected" data-select2-id="14">
                        Sick
                    </option>
                    <option data-select2-id="37">Sick</option>
                    <option data-select2-id="38">Permit</option>
                    <option data-select2-id="39">Leave</option></select
                ><span
                    class="select2 select2-container select2-container--default select2-container--above select2-container--focus"
                    dir="ltr"
                    data-select2-id="13"
                    style="width: 100%"
                    ><span class="selection"></span
                    ><span class="dropdown-wrapper" aria-hidden="true"></span
                ></span>
            </div>

            <div class="form-group">
                <label>Reason</label>
                <textarea
                    class="form-control"
                    rows="3"
                    placeholder="Reason ..."
                ></textarea>
            </div>

            <div class="form-group">
                <label>Status:</label>
                <div class="input-group">
                    <button
                        type="button"
                        class="btn btn-default float-right"
                        id="daterange-btn"
                    >
                        <i class="fa fa-user-check"></i> Permission Status
                        <i class="fas fa-caret-down"></i>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label>Status:</label>
                <div class="input-group">
                    <button
                        type="button"
                        class="btn btn-default float-right"
                        id="daterange-btn"
                    >
                        <i class="fa fa-user-slash"></i> Rejected By
                        <i class="fas fa-caret-down"></i>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label>Rejection Reason</label>
                <textarea
                    class="form-control"
                    rows="3"
                    placeholder="Rejection Reason ..."
                ></textarea>
            </div>
            <div class="row">
                <div class="card-footer" style="margin-left: 0pt">
                    <button type="submit" class="btn btn-danger">
                        <a href="/permission" style="color: white">Back</a>
                    </button>
                </div>
                <div class="card-footer" style="margin-right: 0pt">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </div>
            @endsection
        </div>
    </form>
</div>
