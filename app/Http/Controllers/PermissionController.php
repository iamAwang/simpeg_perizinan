<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Feature;
use App\Models\Permission_Form;
use App\Models\Permission_Types;
use App\Models\Rejected_Bys;

class PermissionController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('permission.index',compact('roles'));
    }

    public function create()
    {
        $id_permissionTypes = Permission_Types::all();
        $id_rejectedBys = Rejected_Bys::all();
    return view ('permission.createPermission',compact(['id_permissionTypes','id_rejectedBys']));
    }
    public function store(Request $request)
    {
        // dd($request);
        Permission_Form::create([
        'full_name' => $request->nama_pegawai,
        'employee_number' => $request->nomor_induk_pegawai,
        'started_date' => $request->tanggal_mulai_izin,
        'ended_date' => $request->tanggal_selesai_izin,
        'id_PermissionType' => $request->jenis_izin,
        'reason' => $request->alasam_izin,
        'status' => $request->status_izin,
        'id_RejectedBy' => $request->penolak_izin,
        'rejection_reason' => $request->alasan_penolakan
        ]);

        if ($request->jenis_izin==1) {
            return redirect('/sick_permission')->with('success','Permission Has Been Added');
        }
        elseif ($request->jenis_izin==2) { 
            return redirect('/permit_permission')->with('success','Permission Has Been Added');
        }
        else {
            return redirect('/leave_permission')->with('success','Permission Has Been Added');
        }
    }

    public function sick()
    {
        $sick_permissions = Permission_Form::where('id_permissionType', 1)->get();
    return view ('permission.sickPermission',compact('sick_permissions'));
    }
    public function edit_sick($id){
        $edit = Permission_Form::find($id);
        // dd($edit);
        $id_permissionTypes = Permission_Types::all();
        $id_rejectedBys = Rejected_Bys::all();
        return view ('permission.createPermission',compact(['edit','id_permissionTypes','id_rejectedBys']));
    }
    public function update_sick(Request $request, $id){
        $permission = Permission_Form::find($id);

        $permission->full_name = $request->nama_pegawai;
        $permission->employee_number = $request->nomor_induk_pegawai;
        $permission->started_date = $request->tanggal_mulai_izin;
        $permission->ended_date = $request->tanggal_selesai_izin;
        $permission->id_PermissionType = $request->jenis_izin;
        $permission->reason = $request->alasam_izin;
        $permission->status = $request->status_izin;
        $permission->id_RejectedBy = $request->penolak_izin;
        $permission->rejection_reason = $request->alasan_penolakan;

        $permission->save();
        return redirect('/sick_permission')->with('success','Sick Permission Has Been Updated !');
    }
    public function cancel_sick($id){
        $permission = Permission_Form::find($id);
        $name = $permission->name;
        $permission->delete();
        return redirect('/permission')->with('success','Sick Permission Has Been Cancelled !');
    }

    public function permit()
    {
        $permit_permissions = Permission_Form::where('id_permissionType', 2)->get();
    return view ('permission.permitPermission',compact('permit_permissions'));
    }
    public function edit_permit($id){
        $edit = Permission_Form::find($id);
        $id_permissionTypes = Permission_Types::all();
        $id_rejectedBys = Rejected_Bys::all();
        return view ('permission.createPermission',compact(['edit','id_permissionTypes','id_rejectedBys']));
    }
    public function update_permit(Request $request, $id){
        $permission = Permission_Form::find($id);

        $permission->full_name = $request->nama_pegawai;
        $permission->employee_number = $request->nomor_induk_pegawai;
        $permission->started_date = $request->tanggal_mulai_izin;
        $permission->ended_date = $request->tanggal_selesai_izin;
        $permission->id_PermissionType = $request->jenis_izin;
        $permission->reason = $request->alasam_izin;
        $permission->status = $request->status_izin;
        $permission->id_RejectedBy = $request->penolak_izin;
        $permission->rejection_reason = $request->alasan_penolakan;

        $permission->save();
        return redirect('/permit_permission')->with('success','Permit Permission Has Been Updated !');
    }
    public function cancel_permit($id){
        $permission = Permission_Form::find($id);
        $name = $permission->name;
        $permission->delete();
        return redirect('/permission')->with('success','Permit Permission Has Been Cancelled !');
    }

    public function leave()
    {
        $leave_permissions = Permission_Form::where('id_permissionType', 3)->get();
    return view ('permission.leavePermission',compact('leave_permissions'));
    }
    public function edit_leave($id){
        $edit = Permission_Form::find($id);
        $id_permissionTypes = Permission_Types::all();
        $id_rejectedBys = Rejected_Bys::all();
        return view ('permission.createPermission',compact(['edit','id_permissionTypes','id_rejectedBys']));
    }
    public function update_leave(Request $request, $id){
        $permission = Permission_Form::find($id);

        $permission->full_name = $request->nama_pegawai;
        $permission->employee_number = $request->nomor_induk_pegawai;
        $permission->started_date = $request->tanggal_mulai_izin;
        $permission->ended_date = $request->tanggal_selesai_izin;
        $permission->id_PermissionType = $request->jenis_izin;
        $permission->reason = $request->alasam_izin;
        $permission->status = $request->status_izin;
        $permission->id_RejectedBy = $request->penolak_izin;
        $permission->rejection_reason = $request->alasan_penolakan;

        $permission->save();
        return redirect('/leave_permission')->with('success','Leave Permission Has Been Updated !');
    }
    public function cancel_leave($id){
        $permission = Permission_Form::find($id);
        $name = $permission->name;
        $permission->delete();
        return redirect('/permission')->with('success','Leave Permission Has Been Cancelled !');
    }
}
