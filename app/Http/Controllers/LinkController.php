<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function generate() {
        return View('site.generate');
    }

    public function remove() {
        return "to vendo o que eu faço";
    }

    public function list() {
        $menu = [
            ['page'=>'register','traducao'=>'Cadastro'],
            ['page'=>'contact','traducao'=>'Fale Conosco'],
            ['page'=>'index','traducao'=>'Home'],
            ['page'=>'recover','traducao'=>'Recuperar'],
            ['page'=>'login','traducao'=>'Entrar'],
        ];

        return View('site.list', compact('menu')); 
    }
}
