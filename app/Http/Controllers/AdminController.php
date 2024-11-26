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
        $report = Report::all(); // Получение всех заявок
        $status = Statyses::all(); // Получение всех статусов

    return view('admin.index', compact('report', 'status')); // Передача данных в представление
    }
}
