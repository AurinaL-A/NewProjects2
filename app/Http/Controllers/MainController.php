<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        
        $array = [
            ['path' => '../image/plays.png', 'title' => 'Товар 1', 'price' => 1000],
            ['path' => '../image/plays.png', 'title' => 'Товар 2', 'price' => 1500],
            ['path' => '../image/plays.png', 'title' => 'Товар 3', 'price' => 2000],
            ['path' => '../image/plays.png', 'title' => 'Товар 4', 'price' => 2500],
            ['path' => '../image/plays.png', 'title' => 'Товар 5', 'price' => 3000],
            ['path' => '../image/plays.png', 'title' => 'Товар 5', 'price' => 3000],
        ];

        return view('array', compact('array'));
    }
}
