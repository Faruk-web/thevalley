<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor; // Assuming your model is named Visitor

class VisitorController extends Controller
{
    public function count()
    {
        $visitorCount = Visitor::count();
        $visitorsPerProject = Visitor::selectRaw('project, count(*) as count')
        ->groupBy('project')
        ->orderBy('project', 'asc')
        ->get();
        return view('visitor_count', compact('visitorCount','visitorsPerProject'));
    }
}
