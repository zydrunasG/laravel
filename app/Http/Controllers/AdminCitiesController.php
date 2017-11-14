<?php

namespace App\Http\Controllers;

use App\City;


use Illuminate\Http\Request;


class AdminCitiesController extends Controller
{
    public function index()
    {
        return view('admin.cities.list', array('cities' => City::all()));
    }

    public function create()
    {
        return view('admin.cites.create');

    }

    public function store(Request $request)
    {
        $city = new City;
        $city->title = $request->input('title');
        $city->save();
        return redirect('admin/miestai');
    }

    public function edit($id)
    {
        return view('admin.cities.edit', array('city' => City::find($id)));
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->title = $request->input('title');
        $city->save();
        return redirect('admin/miestai');
    }

    public function destroy($id)
    {
        City::find($id)->delete();
        return redirect('admin/miestai');
    }


}
