<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        $agencies = DB::table('agencies')->get();
        return view('agency.list', compact('agencies'));
    }

    public function search(Request $request)
    {
        $agencies = DB::table('agencies')->where('name_agency','LIKE','%'.$request->search.'%')->get();
        return view('agency.search', compact('agencies'));
    }
}
