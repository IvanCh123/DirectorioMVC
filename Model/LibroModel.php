<?php

/**
 * Modelo Libro.  Un libro de visitas tiene dos posibles métodos grabe y liste.
 *
 */
class LibroModel
{
	function liste()
	{
        $json = file_get_contents('directorio.json');
        return json_decode($json);
	}

	function cree(DireccionModel $direccion)
	{
		$data = file_get_contents('directorio.json');
		$json_arr = json_decode($data);
		array_push($json_arr, $direccion);
		
		return file_put_contents('directorio.json', json_encode($json_arr));
	}

	function busque($correo){
		$data = file_get_contents('directorio.json');
		
		$json_arr = json_decode($data, true);

		$arr_index = array();

		print_r($json_arr);
		foreach ($json_arr as $key => $value)
		{
			if ($value['correo'] == $correo)
			{
				print_r($key);
				return $key;
			}
		}
	}

	function borre($key){
		$data = file_get_contents('directorio.json');
		$json_arr = json_decode($data);

		$size_temp = count($json_arr);

		unset($json_arr[$key]);
		$json_arr = array_values($json_arr);

		file_put_contents('directorio.json', json_encode($json_arr));

		return ($size_temp != count($json_arr))?true:false;
	}
}
