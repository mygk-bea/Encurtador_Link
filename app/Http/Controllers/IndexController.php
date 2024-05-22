<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return View('site.index');
    }

    public function redirect() {
        return "oi tudo bem";
    }

    public function contact() {
        $menu = [
            ['route'=>'site', 'page'=>'index', 'name'=>'Início'],
            ['route'=>'site','page'=>'login',   'name'=>'Entrar'],
            ['route'=>'site', 'page'=>'register', 'name'=>'Cadastre-se']
        ];

        return View('site.contact', compact('menu'));
    }
}