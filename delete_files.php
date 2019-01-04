<?php 

function delete_files($array_of_files,$type="")
{
	$type = ($type) ? $type : 'image' ;

	foreach ($array_of_files as $key => $file) 
	{
		$file = base_url().$file[$type] ;

		unlink($file);
	}
}


?>

