<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.app.detail');
    }
}
