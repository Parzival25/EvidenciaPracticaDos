<?php
class Computadora {
	public $ano ;
	public $modelo;
	protected $alambrico = true;
	protected $comunicacion;

	public function __construct($ano,$modelo){
		$this->ano = $ano;
		$this->modelo = $modelo;
		$this->comunicacion = ($this -> alambrico) ? 'Alambrica' : 'Inalambrica';
}

	public function llamar() {
		return print ('<p> Hola Mundo </p>');
}

	public function mas_info(){
		
		//echo "<ul><li> Marca <b> $this->ano  </b></li></ul>";
		return print('<ul>
			<li> Año <b>' .$this ->ano . '</b></li>
			<li> Modelo <b>' . $this -> modelo . '</b></li>
			<li> Comunicacion <b>' . $this -> comunicacion . '</b></li>	
			
			</ul>');
			//<li> Dispositivo con Acceso a Internet</li>
			
	}
}

class Pc extends Computadora {
	protected $alambrico = true;

	public function __construct($ano,$modelo){
		parent::__construct($ano,$modelo);
	}
	public function mas_info(){
		return print('<ul>
			<li> Año <b>' .$this ->ano . '</b></li>
			<li> Modelo <b>' . $this -> modelo . '</b></li>
			<li> Comunicacion <b>' . $this -> comunicacion . '</b></li>	
			<li> Dispositivo con Acceso a Internet</li>
			</ul>');
			//<li> Dispositivo con Acceso a Internet</li>
	}
}

final class Laptop extends Pc{
	public $alambrico = false;

	public function __construct($ano,$modelo){
		parent:: __construct($modelo, $ano);
	}

	
}

echo '<h1> Evolucion del la Computadora</h1>';
echo '<h2> Computadora: </h2>';
$tel_casa= new Computadora('1944', 'ENIAC');
$tel_casa->llamar();
$tel_casa->mas_info();

echo '<h2>PC:</h2>';
$mi_cel = new PC ('1985', 'Apple I');
$mi_cel-> llamar();
$mi_cel-> mas_info();

echo '<h2>Laptop:</h2>';
$mi_sp = new Laptop ('1992', 'ThinkPad');
$mi_sp-> llamar();
$mi_sp-> mas_info();

echo '<h3>____________________________________________________________</h3>';
echo '<h3>Hecho por Eduardo Perez Hernadez </h3>';
echo '<h3>18270300</h3>';