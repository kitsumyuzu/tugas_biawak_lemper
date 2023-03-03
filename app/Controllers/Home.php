<?php namespace App\Controllers;

use CodeIngiter\Controller;
use App\Models\information;
class Home extends baseController {

	public function index() {

		return view('welcome_message');

	}

	/* ---------------------------------------------------------------------- */

}