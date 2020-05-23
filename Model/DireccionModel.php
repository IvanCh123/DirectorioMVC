<?php

/**
 * Modelo Directorio.
 *
 */
class DireccionModel
{
	/**
	 * Constructor
	 */
	function __construct($nombre, $apellidos, $telefono_casa, $direccion_casa, $telefono_trabajo, $direccion_trabajo, $correo)
	{
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->telefono_casa = $telefono_casa;
		$this->direccion_casa = $direccion_casa;
		$this->telefono_trabajo = $telefono_trabajo;
		$this->direccion_trabajo = $direccion_trabajo;
		$this->correo = $correo;
	}

	function serialice(){
		return json_encode($this);
	}
}
