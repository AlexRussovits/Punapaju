<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    public function read() {
        $sponsors = Sponsor::orderBy('id', 'asc')->get();
        return view('dashboard.sponsor_dashboard', compact('sponsors'));
    }

    public function showCreateSponsor() {
        return view('dashboard.create.sponsor_create');
    }

    public function createSponsor(Request $request) {
        $img = $request->file('img')->store('public');
        $pos = stripos($img , '/');
        $img = substr($img , $pos, strlen($img));
        $img  = 'storage' . $img ;

        Sponsor::create([
            'img' => $img,
        ]);
        return redirect('/dashboard/sponsor_dashboard')->with(['success_delivery' => true]);
    }


    public function showSponsor($id) {
        $sponsor = Sponsor::find($id);
        if(!empty($sponsor)) {
            return view('dashboard.edit.sponsor_edit', compact('sponsor'));
        }else{
            return abort('404');
        }
    }

    public function  editSponsor(Request $request, $id)
    {
        if (!empty($request->file('img'))) {
            $sponsor = Sponsor::find($id);
            $path = $sponsor->img;
            $pos = stripos($path, '/');
            $path = substr($path, $pos + 1, strlen($path));
            Storage::disk('public')->delete($path);

            if (!empty($sponsor->img)) {
                $img = $request->file('img')->store('public');
                $pos = stripos($img, '/');
                $img = substr($img, $pos, strlen($img));
                $img = 'storage' . $img;
                $sponsor->img = $img;
                $sponsor->save();
                return redirect('/dashboard/sponsor_dashboard')->with(['success_delivery' => true]);
            } else {
                return abort('404');
            }
        }
    }

    public function destroySponsor($id) {
        $sponsor = Sponsor::find($id);
        $sponsor->delete();
        return redirect('dashboard/sponsor_dashboard')->with(['success_delivery' => true]);
    }
}

