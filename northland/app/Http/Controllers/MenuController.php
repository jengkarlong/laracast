<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;


class MenuController extends Controller
{
    public function index(Menu $item)
    {
        $items = $item->all();

        return view('menu.index', compact('items'));
    }

    
}
