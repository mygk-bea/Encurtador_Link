<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contato;

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

    public function contact(Request $request) {
        $menu = [
            ['route'=>'site', 'page'=>'index', 'name'=>'Início'],
            ['route'=>'site', 'page'=>'login',   'name'=>'Entrar'],
            ['route'=>'site', 'page'=>'register', 'name'=>'Cadastre-se']
        ];

        // $contato = new Contato();
        // $contato->create($request->all());

        return View('site.contact', compact('menu'));
    }

    public function save(Request $request) {
        $request->validate([
            'email'=>'email',
            'nome'=>'required|min:3|max:40',
            'mensagem'=>'required|max:2000',
            'motivo'=>'required'
        ]);

        Contato::create($request->all());
        return redirect()->route('site.index');
    }
}