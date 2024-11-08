<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamionetasController extends Controller
{
    public function index() {
        return view("camionetas");
    }
}
