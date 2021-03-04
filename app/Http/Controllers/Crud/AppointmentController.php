<?php

namespace App\Http\Controllers\Crud;

use App\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /*
    public function create() {

    }
    */

    /*
    public function update() {

    }
    */


    public function read() {
        $appointments = Appointment::orderBy('id','desc')->get();
        return view('dashboard.appointment_dashboard', compact('appointments'));
    }

    /*
    public function delete() {

    }
    */
}
