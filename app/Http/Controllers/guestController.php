<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Contact;
use App\Gallery;
use App\Service;
use App\Sponsor;
use Illuminate\Http\Request;

class guestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function services()
    {
        $title = 'Услуги';
        $description = 'У нас самые лучшие услуги';
        $services = Service::orderBy('id', 'desc')->get();
        $sponsors = Sponsor::orderBy('id','desc')->get();

        return view('services', compact('title', 'description', 'services','sponsors'));
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
        $title = 'Галерея';
        $description = 'У нас самые лучшие услуги';
        $galleries= Gallery::orderBy('id', 'desc')->get();
        return view('gallery', compact('galleries', 'title', 'description'));
    }

    public function appointment() {
        $title = 'Запись';
        $description = 'У нас самые лучшие услуги';
        return view('appointment', compact('title', 'description'));
    }

    public function sendAppointment(Request $request) {
        $request->validate([
            'email'=> 'email|max:120|required',
            'name'=> 'max:120|required',
            'text'=> 'required',
            'index_number_auto' => 'max:10|required',
            'phone_number' => 'max:12|required'
        ]);

        if(Appointment::create([
            'email'=> $request->input('email'),
            'name'=> $request->input('name'),
            'text'=> $request->input('text'),
            'index_number_auto'=> $request->input('index_number_auto'),
            'phone_number'=> $request->input('phone_number')
        ])){
            return redirect('/appointment')->with(['success_delivery'=>true]);
        }else{
            abort(505);
        }
    }

    //Данный метод служит для отображения страницы
    public function contacts(){
        $title = 'Контакты';
        $description = 'У нас самые лучшие услуги';
        return view('contacts', compact('title', 'description'));
    }

    //Каждый метод может получить $request
    //Там храниться вся информация, а значит и то, что нам придет после отправки формы
    public function sendContact(Request $request){
        //У каждого request есть метод валидации, это поможет нам проверить данные
        //Если, что-то пойдет не так, то он отправит на пред. страницу с ошибкой, которая будет обработанна
        $request->validate([
           'email'=> 'email|max:120|required',
           'name'=> 'max:120|required',
           'text'=> 'required',
        ]);

        //Берем модель и на ее основе делаем запись
        if(Contact::create([
            'email'=> $request->input('email'),
            'name'=> $request->input('name'),
            'text'=> $request->input('text'),
        ])){
            //Отправка редиректа на страницу контактов и запись значения сессии в позицию true (это поможет показать надпись об удачной отправки).
            return redirect('/contacts')->with(['success_delivery' => true]);
        }else{
            abort(500);
        }
    }
}
