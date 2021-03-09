<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function read() {
        $services = Service::orderBy('id', 'asc')->get();
        return view ('dashboard.services_dashboard', compact('services'));
    }

    public function showCreateService() {
        return view ('dashboard.create.services_create');
    }

    public function createService(Request $request) {
        $title = $request->title;
        $description = $request->description;
        $descr_long = $request->descr_long;
        $image = $request->file('image')->store('public');
        $pos = stripos($image , '/');
        $image = substr($image , $pos, strlen($image));
        $image  = 'storage' . $image ;
        Service::create([
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'descr_long' => $descr_long
        ]);
        return redirect('/dashboard/services_dashboard')->with(['success_delivery' => true]);
    }


    public function showService($id) {
        $service = Service::find($id);
        if(!empty($service)) {
            return view('dashboard.edit.services_edit', compact('service'));
        } else{
            return abort('404');
        }
    }

    public function editService(Request $request,$id) {
        $service = Service::find($id);
        if(!empty($service)) {
            $request->validate([
               'title' =>  'max:255|required',
                'description' => 'max:255|required',
                'image' => 'required',
                'descr_long' => 'required'
            ]);
        }else {
            return abort('404');
        }
        if(($service->fill($request->except(['_token'])))->save()) {
            if(!empty($request->file('image'))) {
                $service = Service::find($id);
                $path = $service->image;
                $pos = stripos($path, '/');
                $path = substr($path, $pos + 1, strlen($path));
                Storage::disk('public')->delete($path);

                if(!empty($service->image)) {
                    $image = $request->file('image')->store('public');
                    $pos = stripos($image , '/');
                    $image = substr($image , $pos, strlen($image));
                    $image  = 'storage' . $image ;
                    $service->image = $image;
                    $service->save();
                    return redirect('/dashboard/services_dashboard')->with(['success_delivery'=>true]);
                } else {
                    return abort('404');
                }
            }
        }
    }

    public function destroyService($id) {
        $service = Service::find($id);
        $service->delete();
        return redirect('/dashboard/services_dashboard')->with(['success_delivery'=>true]);
    }
}
