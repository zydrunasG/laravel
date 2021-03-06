<?php
namespace App\Http\Controllers;

use App\Court;
use App\Http\Requests\CreateCourtsRequest;
use App\Type;
use App\City;
use Illuminate\Http\Request;

class AdminCourtsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.courts.list', array('courts' => Court::all()));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.courts.create', array('types' => Type::all(), 'cities' => City::all()));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCourtsRequest $request)
	{
		$court = new Court;
		$court->title = $request->input('title');
		$court->address = $request->input('address');
		$court->description = $request->input('description');
		$court->type_id = $request->input('type_id');
		$court->city_id = $request->input('city_id');
		$court->save();
		return redirect('admin/aiksteles');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.courts.edit', array('court' => Court::find($id), 'types' => Type::all(), 'cities' => City::all()));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateCourtsRequest $request, $id)
	{
		$court = Court::find($id);
		$court->title = $request->input('title');
		$court->address = $request->input('address');
		$court->description = $request->input('description');
		$court->type_id = $request->input('type_id');
		$court->city_id = $request->input('city_id');
		$court->save();
		return redirect('admin/aiksteles');		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Court::find($id)->delete();
		return redirect('admin/aiksteles');		
	}


}
