<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ControllerBase;

class HomeController extends ControllerBase
{
    public function index() {
        return view('admin/index');
    }
}
