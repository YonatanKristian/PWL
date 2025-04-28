<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardAdmin extends BaseController
{
    public function index()
    {
        
        if (session()->get('isLoggedIn') && session()->get('role') === 'admin') {
            return view('admin_dashboard');
        } else {
            return redirect()->to('/login'); 
        }
    }
}
