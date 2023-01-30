@extends('layouts.app') @section('header')
<h5>Permission History</h5>
@endsection @section('content')
<div class="row">
    <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box bg-info">
            <span class="info-box-icon">
                <i class="fa fa-hospital-user"></i>
            </span>
            <div class="info-box-content">
                <a href="/sick_permission" style="color: white">Sick</a>
                <!-- <span class="info-box-text">Sick</span> -->
                <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <span class="progress-description"> 2/4 </span>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box bg-success">
            <span class="info-box-icon">
                <i class="fa fa-file-signature"></i>
            </span>
            <div class="info-box-content">
                <a href="/permit_permission" style="color: white">Permit</a>
                <!-- <span class="info-box-text">Permit</span> -->
                <div class="progress">
                    <div class="progress-bar" style="width: 25%"></div>
                </div>
                <span class="progress-description"> 1/4 </span>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box bg-warning">
            <span class="info-box-icon">
                <i class="fa fa-house-user" style="color: white"></i>
            </span>
            <div class="info-box-content">
                <a href="/leave_permission" style="color: white">Leave</a>
                <!-- <span class="info-box-text">Leave</span> -->
                <div class="progress">
                    <div class="progress-bar" style="width: 75%"></div>
                </div>
                <span class="progress-description"> 3/4 </span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box bg-danger">
            <span class="info-box-icon">
                <i class="fa fa-folder-plus"></i>
            </span>
            <div class="info-box-content">
                <a href="/create_permission" style="color: white"
                    >Create Permission</a
                >
                <!-- <span class="info-box-text">Create Permission</span> -->
                <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <span class="progress-description"> 6/12 </span>
            </div>
        </div>
    </div>

    <div class="col-8">
        <div class="card bg-gradient-default">
            <div
                class="card-header border-0 ui-sortable-handle"
                style="cursor: move"
            >
                <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                </h3>

                <div class="card-tools">
                    <div class="btn-group">
                        <button
                            style="color: black"
                            type="button"
                            class="btn btn-default btn-sm dropdown-toggle"
                            data-toggle="dropdown"
                            data-offset="-52"
                        >
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="#" class="dropdown-item">Add new event</a>
                            <a href="#" class="dropdown-item">Clear events</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">View calendar</a>
                        </div>
                    </div>
                    <button
                        style="color: black"
                        type="button"
                        class="btn btn-default btn-sm"
                        data-card-widget="collapse"
                    >
                        <i class="fas fa-minus"></i>
                    </button>
                    <button
                        style="color: black"
                        type="button"
                        class="btn btn-default btn-sm"
                        data-card-widget="remove"
                    >
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body pt-0">
                <div id="calendar" style="width: 100%">
                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                        <ul class="list-unstyled">
                            <li class="show">
                                <div class="datepicker">
                                    <div class="datepicker-days" style="">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th
                                                        style="
                                                            text-align: center;
                                                        "
                                                        class="prev"
                                                        data-action="previous"
                                                    >
                                                        <span
                                                            class="fa fa-chevron-left"
                                                            title="Previous Month"
                                                        ></span>
                                                    </th>
                                                    <th
                                                        style="
                                                            text-align: center;
                                                        "
                                                        class="picker-switch"
                                                        data-action="pickerSwitch"
                                                        colspan="5"
                                                        title="Select Month"
                                                    >
                                                        January 2023
                                                    </th>
                                                    <th
                                                        style="
                                                            text-align: center;
                                                        "
                                                        class="next"
                                                        data-action="next"
                                                    >
                                                        <span
                                                            class="fa fa-chevron-right"
                                                            title="Next Month"
                                                        ></span>
                                                    </th>
                                                </tr>
                                                <tr style="text-align: center">
                                                    <th class="dow">Sunday</th>
                                                    <th class="dow">Monday</th>
                                                    <th class="dow">Tuesday</th>
                                                    <th class="dow">
                                                        Wednesday
                                                    </th>
                                                    <th class="dow">
                                                        Thursday
                                                    </th>
                                                    <th class="dow">Friday</th>
                                                    <th class="dow">
                                                        Saturday
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center">
                                                <tr style="color: black">
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/01/2023"
                                                        class="day weekend"
                                                    >
                                                        1
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/02/2023"
                                                        class="day"
                                                    >
                                                        2
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/03/2023"
                                                        class="day"
                                                    >
                                                        3
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/04/2023"
                                                        class="day"
                                                    >
                                                        4
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/05/2023"
                                                        class="day"
                                                    >
                                                        5
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/06/2023"
                                                        class="day"
                                                    >
                                                        6
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/07/2023"
                                                        class="day weekend"
                                                    >
                                                        7
                                                    </td>
                                                </tr>
                                                <tr style="color: black">
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/08/2023"
                                                        class="day weekend"
                                                    >
                                                        8
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/09/2023"
                                                        class="day"
                                                    >
                                                        9
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/10/2023"
                                                        class="day"
                                                    >
                                                        10
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/11/2023"
                                                        class="day"
                                                    >
                                                        11
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/12/2023"
                                                        class="day"
                                                    >
                                                        12
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/13/2023"
                                                        class="day"
                                                    >
                                                        13
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/14/2023"
                                                        class="day weekend"
                                                    >
                                                        14
                                                    </td>
                                                </tr>
                                                <tr style="color: black">
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/15/2023"
                                                        class="day weekend"
                                                    >
                                                        15
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/16/2023"
                                                        class="day"
                                                    >
                                                        16
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/17/2023"
                                                        class="day"
                                                    >
                                                        17
                                                    </td>
                                                    <td
                                                        style="color: black"
                                                        data-action="selectDay"
                                                        data-day="01/18/2023"
                                                        class="day active today"
                                                    >
                                                        18
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/19/2023"
                                                        class="day"
                                                    >
                                                        19
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/20/2023"
                                                        class="day"
                                                    >
                                                        20
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/21/2023"
                                                        class="day weekend"
                                                    >
                                                        21
                                                    </td>
                                                </tr>
                                                <tr style="color: black">
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/22/2023"
                                                        class="day weekend"
                                                    >
                                                        22
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/23/2023"
                                                        class="day"
                                                    >
                                                        23
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/24/2023"
                                                        class="day"
                                                    >
                                                        24
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/25/2023"
                                                        class="day"
                                                    >
                                                        25
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/26/2023"
                                                        class="day"
                                                    >
                                                        26
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/27/2023"
                                                        class="day"
                                                    >
                                                        27
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/28/2023"
                                                        class="day weekend"
                                                    >
                                                        28
                                                    </td>
                                                </tr>
                                                <tr style="color: black">
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/29/2023"
                                                        class="day weekend"
                                                    >
                                                        29
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/30/2023"
                                                        class="day"
                                                    >
                                                        30
                                                    </td>
                                                    <td
                                                        data-action="selectDay"
                                                        data-day="01/31/2023"
                                                        class="day"
                                                    >
                                                        31
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/01/2023"
                                                        class="day new"
                                                    >
                                                        1
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/02/2023"
                                                        class="day new"
                                                    >
                                                        2
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/03/2023"
                                                        class="day new"
                                                    >
                                                        3
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/04/2023"
                                                        class="day new weekend"
                                                    >
                                                        4
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/05/2023"
                                                        class="day new weekend"
                                                    >
                                                        5
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/06/2023"
                                                        class="day new"
                                                    >
                                                        6
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/07/2023"
                                                        class="day new"
                                                    >
                                                        7
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/08/2023"
                                                        class="day new"
                                                    >
                                                        8
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/09/2023"
                                                        class="day new"
                                                    >
                                                        9
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/10/2023"
                                                        class="day new"
                                                    >
                                                        10
                                                    </td>
                                                    <td
                                                        style="color: gray"
                                                        data-action="selectDay"
                                                        data-day="02/11/2023"
                                                        class="day new weekend"
                                                    >
                                                        11
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div
                                        class="datepicker-months"
                                        style="display: none"
                                    >
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="prev"
                                                        data-action="previous"
                                                    >
                                                        <span
                                                            class="fa fa-chevron-left"
                                                            title="Previous Year"
                                                        ></span>
                                                    </th>
                                                    <th
                                                        class="picker-switch"
                                                        data-action="pickerSwitch"
                                                        colspan="5"
                                                        title="Select Year"
                                                    >
                                                        2023
                                                    </th>
                                                    <th
                                                        class="next"
                                                        data-action="next"
                                                    >
                                                        <span
                                                            class="fa fa-chevron-right"
                                                            title="Next Year"
                                                        ></span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7">
                                                        <span
                                                            data-action="selectMonth"
                                                            class="month active"
                                                            >Jan</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Feb</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Mar</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Apr</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >May</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Jun</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Jul</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Aug</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Sep</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Oct</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Nov</span
                                                        ><span
                                                            data-action="selectMonth"
                                                            class="month"
                                                            >Dec</span
                                                        >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div
                                        class="datepicker-years"
                                        style="display: none"
                                    >
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="prev"
                                                        data-action="previous"
                                                    >
                                                        <span
                                                            class="fa fa-chevron-left"
                                                            title="Previous Decade"
                                                        ></span>
                                                    </th>
                                                    <th
                                                        class="picker-switch"
                                                        data-action="pickerSwitch"
                                                        colspan="5"
                                                        title="Select Decade"
                                                    >
                                                        2020-2029
                                                    </th>
                                                    <th
                                                        class="next"
                                                        data-action="next"
                                                    >
                                                        <span
                                                            class="fa fa-chevron-right"
                                                            title="Next Decade"
                                                        ></span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7">
                                                        <span
                                                            data-action="selectYear"
                                                            class="year old"
                                                            >2019</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2020</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2021</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2022</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year active"
                                                            >2023</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2024</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2025</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2026</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2027</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2028</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year"
                                                            >2029</span
                                                        ><span
                                                            data-action="selectYear"
                                                            class="year old"
                                                            >2030</span
                                                        >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div
                                        class="datepicker-decades"
                                        style="display: none"
                                    >
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="prev"
                                                        data-action="previous"
                                                    >
                                                        <span
                                                            class="fa fa-chevron-left"
                                                            title="Previous Century"
                                                        ></span>
                                                    </th>
                                                    <th
                                                        class="picker-switch"
                                                        data-action="pickerSwitch"
                                                        colspan="5"
                                                    >
                                                        2000-2090
                                                    </th>
                                                    <th
                                                        class="next"
                                                        data-action="next"
                                                    >
                                                        <span
                                                            class="fa fa-chevron-right"
                                                            title="Next Century"
                                                        ></span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7">
                                                        <span
                                                            data-action="selectDecade"
                                                            class="decade old"
                                                            data-selection="2006"
                                                            >1990</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2006"
                                                            >2000</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2016"
                                                            >2010</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade active"
                                                            data-selection="2026"
                                                            >2020</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2036"
                                                            >2030</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2046"
                                                            >2040</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2056"
                                                            >2050</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2066"
                                                            >2060</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2076"
                                                            >2070</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2086"
                                                            >2080</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade"
                                                            data-selection="2096"
                                                            >2090</span
                                                        ><span
                                                            data-action="selectDecade"
                                                            class="decade old"
                                                            data-selection="2106"
                                                            >2100</span
                                                        >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                            <li class="picker-switch accordion-toggle"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6 col-12">
    <div class="card card-widget widget-user-2">
        <div class="widget-user-header bg-dark">
            <div class="widget-user-image">
                <img
                    class="img-circle elevation-2"
                    src="../dist/img/user7-128x128.jpg"
                    alt="User Avatar"
                />
            </div>

            <h3 class="widget-user-username">Ridho S</h3>
            <h5 class="widget-user-desc">CEO</h5>
        </div>
        <div class="card-footer p-0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: black">
                        Sick
                        <span class="float-right badge bg-info">31</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: black">
                        Permit
                        <span class="float-right badge bg-success">5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: black">
                        Leave
                        <span class="float-right badge bg-warning">12</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
