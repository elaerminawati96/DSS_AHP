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

    public function createProker($subject, Request $request)
    {
        return view('apps._subjects._proker');
    }

    public function createCandidateCriteria($subject, Request $request)
    {
        return view('apps._subjects._index_candidate');
    }

    public function createCandidate($subject, Request $request)
    {
        return view('apps._subjects._candidate');
    }

    public function detail($id){
        return view('apps._schedules._detail', ['id' => $id]);
    }

    public function result($id){
        return view('apps._schedules._result', ['id' => $id]);
    }
}