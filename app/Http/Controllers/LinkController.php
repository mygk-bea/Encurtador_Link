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
        return View('site.list'); 
    }
}
