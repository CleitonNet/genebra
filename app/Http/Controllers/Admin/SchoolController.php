<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index () {
        return view('admin.schools.index');
    }

    public function create () {
        return view('admin.schools.create');
    }

    public function edit ($id) {

        return view('admin.schools.edit', compact('id'));
    }
}
