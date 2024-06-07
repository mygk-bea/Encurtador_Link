<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $menu = [
            ['route'=>'site', 'page'=>'index', 'name'=>'Início'],
            ['route'=>'site', 'page'=>'contact', 'name'=>'Fale Conosco'],
            ['route'=>'site', 'page'=>'login',   'name'=>'Entrar'],
            ['route'=>'site', 'page'=>'register', 'name'=>'Cadastre-se']
        ];

        return View('site.index', compact('menu'));
    }

    public function redirect() {
        return "oi tudo bem";
    }

    public function contact() {
        $menu = [
            ['route'=>'site', 'page'=>'index', 'name'=>'Início'],
            ['route'=>'site', 'page'=>'login',   'name'=>'Entrar'],
            ['route'=>'site', 'page'=>'register', 'name'=>'Cadastre-se']
        ];

        return View('site.contact', compact('menu'));
    }
}