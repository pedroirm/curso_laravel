<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index()
	{

		$teste = 123;
		$teste2 = [1, 2, 3];
		echo "Olá";
		return view('admin.pages.products.index', compact('teste', 'teste2'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.pages.products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\StoreUpdateProductRequest  $request
	 * @return \Illuminate\Http\Response
	 */

	public function store(StoreUpdateProductRequest $request)
	{
		dd('ok');
		// if ($request->file('photo')->isValid()) {
		// 	$filename = $request->name . $request->photo->extension();
		// 	dd($request->photo->storeAs('products', $filename));
		// }

		// dd($request->except('_token'));

		// dd($request->only(['name', 'description']));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		return view('admin.pages.products.edit', compact('id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		dd("Editando o produto {$id}");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
