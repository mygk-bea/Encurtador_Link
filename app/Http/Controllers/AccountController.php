<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function register() {
        return View('site.register');
    }

    public function recover() {
        $menu = [
            ['page'=>'contact','traducao'=>'Fale Conosco'],
            ['page'=>'login','traducao'=>'Entrar'],
        ];
        return View('site.recover', compact('menu'));
    }
    
    public function login() {
        return View('site.login');
    }

    public function logout() {
        return "tchau";
    }

}
