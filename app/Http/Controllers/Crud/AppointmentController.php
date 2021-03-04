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

    /*
    public function delete() {

    }
    */
}
