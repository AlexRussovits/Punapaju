<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function read() {
        $services = Service::orderBy('id', 'asc')->get();
        return view ('dashboard.services_dashboard', compact('services'));
    }
}
