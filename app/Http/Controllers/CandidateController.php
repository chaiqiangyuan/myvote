<?php

namespace App\Http\Controllers;

use App\Election;
use App\User;
use App\Vote;
use DB;
use App\Charts\ElectionResultChart;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        $elections = Election::all()->sortByDesc('end_date');
        $candidates = User::where('role', 1)->get();
        return view('index', compact('candidates', 'elections'));
    }

    public function store(Request $request)
    {
        //
    }
}
