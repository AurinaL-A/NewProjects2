<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\reports;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = reports::all();
        return view('report.index', ['reports' => $reports]); 
    }

    public function destroy(Reports $report){
        $report -> delete();
        return redirect()->back();
    }
    public function store(Request $request,Reports $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
        ]);
        $report->create($data);
        return redirect()->back();
    }

    public function show(Report $report)
    {
       
        return view('reports.show', compact('report')); 
    }
    public function update(Request $request,Reports $report){
        $data = $request -> validate([
            'number' => 'string',
            'description' => 'string',
        ]);
        $report->update($data);
        return redirect()->back();
    }

}
