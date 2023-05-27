<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
	public function upload(Request $request) {
		$path = $request->file('thumbnail')->store('public/images');
		return redirect()->route('upload');

		// $file = $request->hasFile('thumbnail');
		// if ($file) {
		// 	$newFile = $request->file('thumbnail');
		// 	// dump($newFile);
		// 	$newFile->store('images');
		// }
	}
}
