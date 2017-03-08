<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ControllerBase;

use App\User;

class UserController extends Controller
{
    /**
     * Gets the value of foo
     *
     * @return foo
     */
    public function index()
    {
        return view('admin/user/index')->withUsers(User::all());
    }
}
