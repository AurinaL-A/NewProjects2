<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $report = report::all();
        return view('report.index', ['report' => $report]); 
    }

    public function destroy(Report $report){
        $report -> delete();
        return redirect()->back();
    }
    public function store(Request $request,Report $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
        ]);
        $report->create($data);
        return redirect()->back();
    }

    public function show(Report $report)
    {
       
        return view('report.show', compact('report')); 
    }
    public function update(Request $request,Report $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
        ]);
        $report->update($data);
        return redirect()->back();
    }

}
