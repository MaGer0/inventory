<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function getString()
    {
        return 'memet botak';
    }

    public function sayHello($name)
    {
        return "Hello {$name}";
    }
}
