<?php

namespace App\Supports;

use App\Models\File;
use Illuminate\Support\Str;

class FileManager
{
	public function __construct(File $file)
	{
		$this->file = $file;
	}

	public function uploadFile($files, $penduduk_id, $fungsi)
	{
        if($files){
    		$i = 0;
    		$jumlah = is_array($files) ? count($files) : 0;
	        while($i < $jumlah){
	        	// $data = is_array($files) ? $files[$i] : $files;

	        	$file = new $this->file;
	            $file->penduduk_id  = $penduduk_id;
	            $file->nama         = $this->getFileName($files[$i]);
	            $file->fungsi       = $fungsi;
	            $file->save();

	            $i++;
	        }
        }else{
        	// return $beforeName;
			return 'hello';
        }
	}

	public function getFileName($files)
	{
		$extension      = $files->getClientOriginalExtension();
	    $fileName       = Str::random(8) . '.' . $extension;
	    $files->move("storages/", $fileName);
	    return $fileName;
	}
}