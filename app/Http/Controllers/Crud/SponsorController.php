<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function read() {
        $sponsors = Sponsor::orderBy('id', 'asc')->get();
        return view('dashboard.sponsor_dashboard', compact('sponsors'));
    }
}
