<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\reports;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = reports::all();
        return view('report.index', ['reports' => $reports]); 
    }
}
