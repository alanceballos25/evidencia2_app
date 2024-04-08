<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BladeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {

        return view('store');
    }
}
