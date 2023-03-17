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
                        0 -1px black;"
            >Your Permission
            </h5>
        </div>
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
 @endsection 

@section('content') 
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif

<div>
    <div class="row" style="margin: 1px;">
        <a href="/permission_history" class="card card-widget widget-user">
        <div class="item1" style="width: 100%;">
                <div class="widget-user-header bg-dark">
                    <h3 class="widget-user-username">History</h3>
                    <h5 class="widget-user-desc">PERMISSION</h5>
                </div>
                <div class="widget-user-image">
                    <img
                        class="img-circle elevation-2"
                        src="{{ asset("wallpaper/wallpaper25.jpg") }}"
                        alt=""
                        style="width: 100px; height: 100px; display:inline-block; vertical-align:middle;"
                    />
                </div>
                <div class="card-footer">
                    <div class="progress">
                        <?php if(@Auth::user()->employee->permissions == null){@$progress=0; }else{ @$progress = Auth::user()->employee->permissions->count()/12 * 100; }?>
                        <div class="progress-bar" style="width: {{@$progress}}%"></div>
                    </div>
                        <span class="progress-description">{{Auth::user()->employee->permissions->count()}}/12</span>
                </div>
            </a>
        </div>
    </div>
</a>
    <div class="row" style="justify-content: space-between; margin: 1px;">
        <a href="/sick_permission" class="card card-widget widget-user">
        <div class="item2" style="width: 300px">
                <div class="widget-user-header bg-dark">
                    <h3 class="widget-user-username">SICK</h3>
                    <h5 class="widget-user-desc">PERMISSION</h5>
                </div>
                <div class="widget-user-image">
                    <img
                        class="img-circle elevation-2"
                        src="{{ asset("wallpaper/wallpaper1.jpg") }}"
                        alt=""
                        style="width: 100px; height: 100px; display:inline-block; vertical-align:middle;"
                    />
                </div>
                <div class="card-footer">
                    <div class="progress">
                        <?php if(@Auth::user()->employee->permissions == null){@$progress_sakit=0; }else{ @$progress_sakit = Auth::user()->employee->permissions->where('id_PermissionType',1)->count()/4* 100; } ?>
                        <div class="progress-bar" style="width: {{$progress_sakit}}%"></div>
                    </div>
                        <span class="progress-description">{{Auth::user()->employee->permissions->where('id_PermissionType',1)->count()}}/4</span>
                </div>
        </div>
        </a>
    
        <a href="/permit_permission" class="card card-widget widget-user">
        <div class="item2" style="width: 300px">
                <div class="widget-user-header bg-dark">
                    <h3 class="widget-user-username">PERMIT</h3>
                    <h5 class="widget-user-desc">PERMISSION</h5>
                </div>
                <div class="widget-user-image">
                    <img
                        class="img-circle elevation-2"
                        src="{{ asset("wallpaper/wallpaper6.jpg") }}"
                        alt=""
                        style="width: 100px; height: 100px; display:inline-block; vertical-align:middle;"
                    />
                </div>
                <div class="card-footer">
                    <div class="progress">
                        <?php if(@Auth::user()->employee->permissions == null){@$progress_izin=0; }else{ @$progress_izin = Auth::user()->employee->permissions->where('id_PermissionType',2)->count()/4* 100; } ?>
                        <div class="progress-bar" style="width: {{ $progress_izin }}%"></div>
                    </div>
                        <span class="progress-description">{{Auth::user()->employee->permissions->where('id_PermissionType',2)->count()}}/4</span>
                </div>
        </div>
         </a>
    
        <a href="/leave_permission" class="card card-widget widget-user">
        <div class="item2" style="width: 300px">
                <div class="widget-user-header bg-dark">
                    <h3 class="widget-user-username">LEAVE</h3>
                    <h5 class="widget-user-desc">PERMISSION</h5>
                </div>
                <div class="widget-user-image">
                    <img
                        class="img-circle elevation-2"
                        src="{{ asset("wallpaper/wallpaper2.jpg") }}"
                        alt=""
                        style="width: 100px; height: 100px; display:inline-block; vertical-align:middle;"
                    />
                </div>
                <div class="card-footer">
                    <div class="progress">
                        <?php if(@Auth::user()->employee->permissions == null){@$progress_cuti=0; }else{ @$progress_cuti = Auth::user()->employee->permissions->where('id_PermissionType',3)->count()/4* 100; } ?>
                        <div class="progress-bar" style="width: {{ $progress_cuti }}%"></div>
                    </div>
                        <span class="progress-description">{{Auth::user()->employee->permissions->where('id_PermissionType',3)->count()}}/4</span>
                </div>
        </div>
       </a>
    
    </div>
        
</div>
@endsection @endif

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

<div>
<div class="row" style="justify-content: space-between; margin: 1px;">
    <a href="/accepted" class="card card-widget widget-user">
    <div class="item1" style="width: 495px;">
        <div class="widget-user-header bg-dark">
            <h3 class="widget-user-username">ACEPTATION</h3>
            <h5 class="widget-user-desc">PERMISSION</h5>
        </div>
        <div class="widget-user-image">
            <img
                class="img-circle elevation-2"
                src="{{ asset("wallpaper/wallpaper18.jpg") }}"
                alt=""
                style="width: 100px; height: 100px; display:inline-block; vertical-align:middle;"
            />
        </div>
        <div class="card-footer">
        </div>
    </div>
    </a>

    <a href="/rejected" class="card card-widget widget-user">
    <div class="item2" style="width: 495px">
        <div class="widget-user-header bg-dark">
            <h3 class="widget-user-username">REJECTION</h3>
            <h5 class="widget-user-desc">PERMISSION</h5>
        </div>
        <div class="widget-user-image">
            <img
                class="img-circle elevation-2"
                src="{{ asset("wallpaper/wp1.jpg") }}"
                alt=""
                style="width: 100px; height: 100px; display:inline-block; vertical-align:middle;"
            />
        </div>
        <div class="card-footer">
        </div>
    </div>
    </a>
</div>
</div>  
@endsection @endif