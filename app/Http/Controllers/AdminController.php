<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Statyses;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $reports = Report::all(); // Получение всех заявок
        $statuses = Statyses::all(); // Получение всех статусов

    return view('admin.index', compact('reports', 'statuses')); // Передача данных в представление
    }
}
