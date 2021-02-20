<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class guestController extends Controller
{
    public function index(){
        return view('index');
    }
    public function services() {
        $title = 'Our Services';
        $description = 'The Best Services Forever';
        $services = Service::orderBy('id','desc')->get();




        return view('services', compact('title','description', 'services'));
    }


}
