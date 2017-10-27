<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function __construct() {
		$this->middleware('auth');
	}
	public function __invoke() {
    	$breadcrumbs = array();
		$params = [
			'breadcrumbs' => $breadcrumbs
		];
		return view('dashboard', $params);
    }
}
