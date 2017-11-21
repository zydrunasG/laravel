<?php

namespace App\Http\Controllers;

use App\Court;
use App\Http\Requests\SearchRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function postSearch(SearchRequest $request)
    {
     //   $query = Court::where('city_id', '=', $request->input('city_id'))
     //       ->where('type_id', '=', $request->input('type_id'));
        if($request->has('search'))
            $query = Court::where('title', 'like', '%'.$request->input('search').'%');
        $courts = $query->get();
        return view('search_results', compact('courts'));
    }
}
