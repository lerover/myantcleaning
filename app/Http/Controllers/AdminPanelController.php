<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController
{
    public function dashboard(){
        return view('admin.dashboard');
    }
}
