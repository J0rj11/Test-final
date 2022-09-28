<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class UsersAccountController extends Controller
{
    

    public function index()
    {
        
        return view('admin.usersAccount.index');
    }
}
