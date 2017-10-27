<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$breadcrumbs = $this->getBreadcrumbs('index');
		$items = User::all();
		$params = [
			'breadcrumbs' => $breadcrumbs,
			'items' => $items
		];
		return view('users/index', $params);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

	private function getBreadcrumbs($view) {
		$model = 'users';
		$breadcrumbs = array();

		$breadcrumb = new \stdClass();
		$breadcrumb->name = $model;
		if($view =! 'index') {
			$breadcrumb->link = url($model);
			$breadcrumbs[] = $breadcrumb;
			$breadcrumb->name = $view;
		}
		$breadcrumb->link = url('#');
		$breadcrumbs[] = $breadcrumb;

		return $breadcrumbs;
	}
}
