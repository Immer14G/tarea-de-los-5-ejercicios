<?php
class Imagenes{
	public $insertar;

	public function __construct($insertar)
	{
		$this->insertar=$insertar;
	}
	function mostrar() {
		for ($i = 0; $i < $this->insertar; $i++) {
			echo '<img src="./img/z.jpg" alt="card image cap" style="width: 15rem; height:13rem;">';
		}
	}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$insertar = $_POST['numero'];

	if (is_numeric($insertar) && $insertar > 0) {
		$imagenes = new Imagenes($insertar);
		$imagenes->mostrar();
	} else {
		echo 'ese no es un numero XD';
	}
}
?>