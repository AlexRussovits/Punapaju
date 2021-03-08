<?php

namespace App\Http\Controllers\Crud;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function read()
    {
        $galleries = Gallery::orderBy('id', 'asc')->get();
        return view('dashboard.gallery_dashboard', compact('galleries'));
    }

    public function showGallery($id)
    {
        $gallery = Gallery::find($id);
        if (!empty($gallery)) {
            return view('dashboard.edit.gallery_edit', compact('gallery'));
        } else {
            return abort('404');
        }
    }

    public function editGallery(Request $request,$id) {

        if(!empty($request->file('img'))) {
            $gallery = Gallery::find($id);
            $path = $gallery->img;
            $pos = stripos($path, '/');
            $path = substr($path, $pos + 1, strlen($path));
            Storage::disk('public')->delete($path);

            if(!empty($gallery->img)) {
                $img = $request->file('img')->store('public');
                $pos = stripos($img , '/');
                $img = substr($img , $pos, strlen($img));
                $img  = 'storage' . $img ;
                $gallery->img = $img;
                $gallery->save();
                return redirect('/dashboard/gallery_dashboard')->with(['success_delivery'=>true]);
            } else {
                return abort('404');
            }
        }
    }
}

