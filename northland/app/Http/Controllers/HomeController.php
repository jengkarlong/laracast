<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $menu = Menu::topMenu();

        return  view('home.index', compact('menu'));

    }
}
