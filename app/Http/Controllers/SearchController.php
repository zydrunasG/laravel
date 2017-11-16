<?php

namespace App\Http\Controllers;

use App\Court;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function postSearch(Request $request)
    {
        $query = Court::where('city_id', '=', $request->input('city_id'))
            ->where('type_id', '=', $request->input('type_id'));
        if($request->has('search'))
            $query->where('title', 'like', '%'.$request->input('search').'%');
        $courts = $query->get();
        return view('search_results', compact('courts'));
    }
}
