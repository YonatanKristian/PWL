<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
       
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $role = session()->get('role');

        
       
        if ($role === 'admin') {
            return view('admin_dashboard');
        } elseif ($role === 'user') {
            return view('user_dashboard');
        } else {
           
            return redirect()->to('/login');
        }
    }
    
    public function keranjang()
        {
            
            if (!session()->get('isLoggedIn') || session()->get('role') !== 'user') {
                return redirect()->to('/login');
            }

            return view('user_keranjang');
        }
        
    public function produk()
        {
            
            if (!session()->get('isLoggedIn') || session()->get('role') !== 'admin') {
                return redirect()->to('/login');
            }

            return view('user_produk');
        }

    
}
