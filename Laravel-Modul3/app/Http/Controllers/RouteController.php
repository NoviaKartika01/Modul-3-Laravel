<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function index() {
        return "Ini dari Controller";
    }

    public function profile($profileId) {
        return "Profil ini dari Controller, profile id: ".$profileId;
    }
}


