<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Feature;
use App\Models\Permission_Form;
use App\Models\Permission_Types;
use App\Models\Rejected_Bys;
use App\Models\Permission_History;

use Auth;

class PermissionController extends Controller
{
    public function index()
    {
        $accepteds = Permission_Form::where('status','Disetujui Atasan 1');
        $rejecteds = Permission_Form::where('id_RejectedBy',0);
        $history_permissions = Permission_Form::all()->where('status','Menunggu Konfirmasi')->where('id_RejectedBy', 0);
        // dd($history_permissions);
        $roles = Role::all();
        return view('permission.index',compact(['roles', 'history_permissions','accepteds','rejecteds']));
    }

    public function indexHistory()
    {
        $accepteds = Permission_Form::where('status','Disetujui Atasan 1');
        $rejecteds = Permission_Form::where('id_RejectedBy',0);
        $history_permissions = Permission_Form::all()->where('status','Menunggu Konfirmasi')->where('id_RejectedBy', 0);
        // dd($history_permissions);
        $roles = Role::all();
        return view('permission.indexHistory',compact(['roles', 'history_permissions','accepteds','rejecteds']));
    }

    public function create()
    {
        if(Auth::user()->employee->permissions->where('id_PermissionType',3)->count() > 4){
            return "dah ga boleh oi";
        }
        $id_permissionTypes = Permission_Types::all();
        $id_rejectedBys = Rejected_Bys::all();
        return view ('permission.createPermission',compact(['id_permissionTypes','id_rejectedBys']));
    }
    public function store(Request $request)
    {
        // dd($request);
        $name = "";
        if ($request->jenis_izin==1){
            $file = $request->file('foto');
            $name = $file->hashName();
            
        $ext = $file->getClientOriginalExtension();
        // dd($name);
        $file->store('photos','public');
        }
        Permission_Form::create([
        'full_name' => $request->nama_pegawai,
        'employee_number' => $request->nomor_induk_pegawai,
        'started_date' => $request->tanggal_mulai_izin,
        'ended_date' => $request->tanggal_selesai_izin,
        'id_PermissionType' => $request->jenis_izin,
        'reason' => $request->alasam_izin,
        'status' => 'Menunggu Konfirmasi',
        'id_RejectedBy' => 0,
        'rejection_reason' => null,
        'sick_license'=> $name
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
        $notHaveFile = true;

        $file = $request->file('foto');
        if($request->file('foto')!=null){
            $notHaveFile = false;
            
            $name = $file->hashName();
            $file->store('photos','public');
        }

        $permission = Permission_Form::find($id);

        $permission->full_name = $request->nama_pegawai;
        $permission->employee_number = $request->nomor_induk_pegawai;
        $permission->started_date = $request->tanggal_mulai_izin;
        $permission->ended_date = $request->tanggal_selesai_izin;
        $permission->id_PermissionType = $request->jenis_izin;
        $permission->reason = $request->alasam_izin;
        $permission->status = 'Menunggu Konfirmasi';
        $permission->id_RejectedBy = 0;
        if(!$notHaveFile){
            $permission->sick_license = $name;
        }
        // dd($request);
        if($request->alasan_penolakan){
        $permission->rejection_reason = $request->alasan_penolakan;
        }else{
            $permission->rejection_reason = null;
        }

        $permission->save();
        return redirect('/sick_permission')->with('success','Sick Permission Has Been Updated !');
    }
    public function cancel_sick($id){
        $permission = Permission_Form::find($id);
        $name = $permission->name;
        $permission->delete();
        return redirect('/sick_permission')->with('success','Sick Permission Has Been Cancelled !');
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
        $permission->status = 'Menunggu Konfirmasi';
        $permission->id_RejectedBy = 0;
        $permission->rejection_reason = null;

        $permission->save();
        return redirect('/permit_permission')->with('success','Permit Permission Has Been Updated !');
    }
    public function cancel_permit($id){
        $permission = Permission_Form::find($id);
        $name = $permission->name;
        $permission->delete();
        return redirect('/permit_permission')->with('success','Permit Permission Has Been Cancelled !');
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
        $permission->status = 'Menunggu Konfirmasi';
        $permission->id_RejectedBy = 0;
        $permission->rejection_reason = null;

        $permission->save();
        return redirect('/leave_permission')->with('success','Leave Permission Has Been Updated !');
    }
    public function cancel_leave($id){
        $permission = Permission_Form::find($id);
        $name = $permission->name;
        $permission->delete();
        return redirect('/leave_permission')->with('success','Leave Permission Has Been Cancelled !');
    }
    public function history()
    {
        $history_permissions = Permission_Form::all();
        return view ('permission.history',compact('history_permissions'));
    }

    public function accepted(){
        $accepteds = Permission_Form::where('status','Disetujui Atasan 1')->get();
        // dd($accepteds);
        return view('permission.accepted',compact('accepteds'));
    }
    public function store_accepted(Request $request){
        Permission_Form::create([
            'full_name'=> $request->nama_pegawai,
            'id_PermissionType'=> $request->jenis_izin,
            'status'=> $request->status_izin,
            'sick_license'=> $request->foto

        ]);
        return redirect('/accepted')->with('success','Permission Has Been Accepted !');
    }

    public function acceptation_form($id){
        $acceptation_forms = Permission_Form::find($id);
        $id_permissionTypes = Permission_Types::all();
        $id_rejectedBys = Rejected_Bys::all();
        return view ('permission.indexAtasan',compact(['acceptation_forms','id_permissionTypes','id_rejectedBys']));
        // return view('permission.createPermission',compact('acceptation_forms'));
    }
    public function update_acceptation(Request $request, $id){
        $permission = Permission_Form::find($id);
        // dd($permission);
        // dd($request);
        // $permission->full_name = $request->nama_pegawai;
        $permission->status = $request->status_izin;


        $permission->save();
        return redirect('/accepted')->with('success','Permission Has Been Accepted !');
    }


    public function rejected(){
        $rejecteds = Permission_Form::where('id_RejectedBy',1)->get();
        // dd($rejecteds);
        return view('permission.rejected',compact('rejecteds'));
    }
    public function store_rejected(Request $request){
        // dd($request);
        Permission_Form::create([
            'full_name'=> $request->nama_pegawai,
            'id_PermissionType'=> $request->jenis_izin,
            'id_RejectedBy' => $request->penolak_izin,
            'rejection_reason' => $request->alasan_penolakan
        ]);
        return redirect('/rejected')->with('success','Permission Has Been Rejected !');
    }

    public function rejection_form($id){
        $rejection_forms = Permission_Form::find($id);
        $id_permissionTypes = Permission_Types::all();
        $id_rejectedBys = Rejected_Bys::all();
        return view ('permission.indexAtasan',compact(['rejection_forms','id_permissionTypes','id_rejectedBys']));
        // return view('permission.createPermission',compact('rejection_forms'));
    }
    public function update_rejection(Request $request, $id){
        $permission = Permission_Form::find($id);
        // dd($permission);
        // dd($request);
        // $permission->full_name = $request->nama_pegawai;
        $permission->id_RejectedBy = $request->penolak_izin;
        $permission->rejection_reason = $request->alasan_penolakan;
        $permission->status = null;
        // dd($permission);


        $permission->save();
        return redirect('/rejected')->with('success','Permission Has Been Rejected !');
    }
}
