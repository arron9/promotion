<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Categories;

class ControllerBase extends Controller
{
    public function __construct(Request $request) {
        $request->session()->forget('top_categories');

        $categories = Categories::all()->toArray();
        session(['top_categories' => json_encode($categories)]);
    }
}
