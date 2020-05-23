<?php

/*
 * Controlador de direcciones
 *
 */
class DirectorioController extends Controller {
	function index()
	{
		$libro = new LibroModel();
		$this->view->assign('direcciones', $libro->liste());
	}

    /*
     * Acción cree:
     */
	function cree()
	{
        if (count($_POST) != 0) {
            $libro = new LibroModel();
            $direccion = new DireccionModel($_POST['nombre'], $_POST['apellidos'], $_POST['telefono_casa'], $_POST['direccion_casa'], $_POST['telefono_trabajo'], $_POST['direccion_trabajo'], $_POST['correo']);
            if ($libro->cree($direccion))
            {
                $mensaje = 'Su nueva dirección fue guardada.';
            }
            else
            {
                $mensaje = 'Su dirección no se pudo guardar.';
            }
            header('Location: index.php?action=index&mensaje='.urlencode($mensaje));
        }
	}

	function edite()
	{
		if (count($_POST) == 0) {
			$libro = new LibroModel();

			$direccion = $libro->busque($_GET['id'],0);

            $this->view->assign('direccion', $direccion);
            
            $libro->borre($libro->busque($_GET['id'],1));
        }
	}

	function borre()
	{
		$libro = new LibroModel();
        
        if ($libro->borre($libro->busque($_GET['id'],1)))
		{
			$mensaje = 'Su dirección ha sido borrada satisfactoriamente.';
		}
		else
		{
			$mensaje = 'Su dirección no se pudo borrar.';
        }
        
        header('Location: index.php?action=index&mensaje='.urlencode($mensaje));
	}
}
