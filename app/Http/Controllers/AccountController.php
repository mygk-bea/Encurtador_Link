<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function register() {
        $menu = [
            ['route'=>'site', 'page'=>'index', 'name'=>'Início'],
            ['route'=>'site', 'page'=>'contact', 'name'=>'Contato'],
            ['route'=>'site', 'page'=>'login',   'name'=>'Entrar']
        ];
        return View('site.register', compact('menu'));
    }

    public function recover() {
        $menu = [
            ['route'=>'site', 'page'=>'index', 'name'=>'Início'],
            ['route'=>'site', 'page'=>'contact', 'name'=>'Contato'],
            ['route'=>'site', 'page'=>'login',   'name'=>'Entrar']
        ];
        return View('site.recover', compact('menu'));
    }
    
    public function login() {
        $menu = [
            ['route'=>'site', 'page'=>'index', 'name'=>'Início'],
            ['route'=>'site', 'page'=>'contact', 'name'=>'Contato']
        ];

        return View('site.login', compact('menu'));
    }

    public function logout() {
        return "tchau";
    }

}
