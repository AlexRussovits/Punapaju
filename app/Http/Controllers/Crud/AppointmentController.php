<?php

namespace App\Http\Controllers\Crud;

use App\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function read() {
        $appointments = Appointment::orderBy('id','asc')->get();
        return view('dashboard.appointment_dashboard', compact('appointments'));
    }

    public function showEdit($id) {
        $appointment = Appointment::find($id);
        if(!empty($appointment)) {
            return view('dashboard.edit.appointment_edit', compact('appointment'));
        }else{
            return abort('404');
        }
    }

    public function editAppointment($id,Request $request) {
        $appointment = Appointment::find($id);
        if(!empty($appointment)) {
            $request->validate([
                'email'=> 'email|max:120|required',
                'name'=> 'max:120|required',
                'text'=> 'required',
                'index_number_auto' => 'max:10|required',
                'phone_number' => 'max:12|required'
            ]);
        }else{
            return abort('404');
        }
        if(($appointment->fill($request->except(['_token'])))->save()) {
            return redirect('/dashboard/appointment_dashboard')->with(['success_delivery'=>true]);
        }else{
            return abort('404');
        }
    }

    /*
    public function delete() {

    }
    */
}
