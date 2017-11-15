<?php
namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class AdminTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.types.list', array('types' => Type::all()));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.types.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$type = new Type;
		$type->title = $request->get('title');
		$type->save();
		return redirect('admin/aiksteliu_tipai');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.types.edit', array('type' => Type::find($id)));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$type = Type::find($id);
		$type->title = $request->get('title');
		$type->save();
		return redirect('admin/aiksteliu_tipai');		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Type::find($id)->delete();
		return redirect('admin/aiksteliu_tipai');		
	}


}
