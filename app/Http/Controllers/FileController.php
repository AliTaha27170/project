<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function download($id)
    {
        $report = Report::findOrFail($id);
        
        $path = storage_path('app/public/' . $report->file);
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        return response()->download($path , $report->name . '-' . now()->toDateTimeString() . "." . $extension);
         
    }
}
