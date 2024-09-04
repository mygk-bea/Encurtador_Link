<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function generate() {
        $menu = [
            ['route'=>'site','page'=>'register','name'=>'Cadastro'],
            ['route'=>'site','page'=>'contact', 'name'=>'Fale Conosco'],
            ['route'=>'site','page'=>'index',   'name'=>'Home'],
            ['route'=>'site','page'=>'recover', 'name'=>'Recuperar'],
            ['route'=>'site','page'=>'login',   'name'=>'Entrar'],
        ];

        return View('site.generate', compact('menu'));
    }

    public function remove() {
        return View('site.remove');
    }

    public function list() {
        $menu = [
            ['route'=>'site','page'=>'register','name'=>'Cadastro'],
            ['route'=>'site','page'=>'contact', 'name'=>'Fale Conosco'],
            ['route'=>'site','page'=>'index',   'name'=>'Home'],
            ['route'=>'site','page'=>'recover', 'name'=>'Recuperar'],
            ['route'=>'site','page'=>'login',   'name'=>'Entrar'],
        ];

        return View('site.list', compact('menu')); 
    }
}
