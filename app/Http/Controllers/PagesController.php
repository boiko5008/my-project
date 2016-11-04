<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');
	}

	public function getAbout() {
		$first = "Boyko";
		$last = "Kutev";
		$fullname = $first . " " . $last;
		$email = 'boyko@example.com';

		return view('pages.about', compact('fullname', 'email'));
	}

	public function getContact() {
		return view('pages.contact');
	}


}