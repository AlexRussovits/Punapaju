<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Service;
use Illuminate\Http\Request;

class guestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function services()
    {
        $title = 'Our Services';
        $description = 'The Best Services Forever';
        $services = Service::orderBy('id', 'desc')->get();

        return view('services', compact('title', 'description', 'services'));
    }

    public function serviceOne($id)
    {
        $service = Service::find($id);
        if (!empty($service)) {
            $title = $service->title;
            $description = $service->description;
            return view('service_one', compact('title', 'description', 'service'));
        } else {
            return abort(404);
        }
    }

    public function gallery()
    {
        $title = 'Our Gallery';
        $galleries= Gallery::orderBy('id', 'desc')->get();
        return view('gallery', compact('galleries', 'title'));
    }

    public function appointment() {
        $title = 'Appointment';

        return view('appointment', compact('title'));
    }
}
