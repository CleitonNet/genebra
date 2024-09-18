<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    public function index () {
        return view('admin.slides.index');
    }

    public function create () {
        return view('admin.slides.create');
    }

    public function edit ($id) {

        return view('admin.slides.edit', compact('id'));
    }
}
