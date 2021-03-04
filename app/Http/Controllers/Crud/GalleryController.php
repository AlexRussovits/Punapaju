<?php

namespace App\Http\Controllers\Crud;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function read() {
        $galleries = Gallery::orderBy('id', 'asc')->get();
        return view('dashboard.gallery_dashboard', compact('galleries'));
    }
}
