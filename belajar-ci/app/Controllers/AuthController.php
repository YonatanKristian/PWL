<?php  
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController 
{
    public function __construct()
    {
        helper('form');
    }
    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

           
            $users = [
                [
                    'id' => 1,
                    'username' => 'yonatan',
                    'password' => password_hash('123', PASSWORD_DEFAULT), 
                    'role' => 'admin'
                ],
                [
                    'id' => 2,
                    'username' => 'johndoe',
                    'password' => password_hash('userpass', PASSWORD_DEFAULT), 
                    'role' => 'user'
                ]
            ];

            
            $dataUser = null;
            foreach ($users as $user) {
                if ($user['username'] == $username) {
                    $dataUser = $user;
                    break;
                }
            }

            
            if ($dataUser) {
                if (password_verify($password, $dataUser['password'])) { 
                    session()->set([
                        'id' => $dataUser['id'],
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
                        'isLoggedIn' => TRUE
                    ]);

                    
                    if ($dataUser['role'] == 'admin') {
                        return redirect()->to(base_url('/admin/dashboard')); 
                    }if ($dataUser['role'] == 'admin' || $dataUser['role'] == 'user') {
                        return redirect()->to(base_url('/user/dashboard'));
                    }
                } else {
                    session()->setFlashdata('failed', 'Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            return view('v_login');
        }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
