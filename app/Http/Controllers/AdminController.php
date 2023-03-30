<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function add_view(){
        if(Auth::id()){
            if(Auth::user()->usertype == 1){
                return view('admin.add_doctor');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }
    }

    public function upload(Request $request){
        $doctor = new Doctor;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->image->move('doctorimage',$imagename);

        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;
        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function show_appointment(){
        if(Auth::id()){
            if(Auth::user()->usertype == 1){
                $data = Appointment::all();
                return view('admin.show_appointment',compact('data'));
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }
        
    }

    public function approved($id){
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id){
        $data = Appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back();
    }

    public function show_doctor(){
        $data = Doctor::all();
        return view('admin.show_doctor',compact('data'));
    }

    public function deletedoctor($id){
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editdoctor($id){
        $data = Doctor::find($id);
        return view('admin.edit_doctor',compact('data'));
    }

    public function update_doctor(Request $request,$id){
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;

        $image = $request->file;
        if($image){
        $imagename = time(). '.' .$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image = $imagename;
        }
        $doctor->save();
        return redirect()->back()->with('message','Doctor Information Updated Successfully!');
    }
}
