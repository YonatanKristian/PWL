<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardUser extends BaseController
{
    public function index()
    {
        
        if (session()->get('isLoggedIn') && session()->get('role') === 'user') {
            return view('user_dashboard');
        } else {
            return redirect()->to('/login'); 
        }
    }
    

    }

