<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Status;
use App\Models\Statyses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        $statuses = Status::all();
        $userId = Auth::id();

        return view('admin.index', compact('reports', 'userId' , 'statuses')); //передача данных в представление
    }
}
