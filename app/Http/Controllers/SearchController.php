<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        $agency = DB::table('agencys')->get();
        return view('agency.list', compact('agency'));
    }

    public function search(Request $request)
    {
        $agency = DB::table('agencys')->where('title','LIKE','%'.$request->search.'%')->get();
        return view('agency.search', compact('agency'));
    }
}
