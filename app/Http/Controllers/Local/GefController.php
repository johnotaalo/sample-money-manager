<?php

namespace App\Http\Controllers\Local;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\Document;
use App\Esern;

class GefController extends Controller
{
	function index(){
		$directory = storage_path('app/PIRs');
		// echo $directory;die;
		$files = \File::allFiles($directory);

		foreach ($files as $file) {

			$filename = str_replace(' ','_',str_replace('-', '_', $file->getFileName()));
			$relativePath = $file->getRelativePathname();
			$year = explode('/', $relativePath)[0];
			$frags = explode('_', $filename);
			if (is_numeric($frags[0])) {
				$gef_id = $frags[0];

				$document = new Document();

				$document->year = $year;
				$document->gef_id = $gef_id;
				$document->path = $relativePath;

				$document->save();
			}
		}
	}

	function esern(){
		$directory = storage_path('app/ess_cleaned');
		$files = \File::allFiles($directory);
		$project_data = [];
		foreach ($files as $key => $file) {
			$project_id = str_replace('_', '', $file->getRelativePath());
			$project_data = [
				'project_id'	=> 	$project_id,
				'path'			=>	$file->getRelativePathname()
			];

			Esern::create($project_data);
		}

		// echo "<pre>";print_r($project_data);die;
	}
}
