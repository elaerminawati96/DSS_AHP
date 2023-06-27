<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AHPController extends Controller
{
    public function index(Request $request)
    {
        return view('apps._dashboard._index');
    }

    public function schedules(Request $request)
    {
        return view('apps._schedules._index');
    }

    public function create()
    {
        return view('apps._subjects._index');
    }
}