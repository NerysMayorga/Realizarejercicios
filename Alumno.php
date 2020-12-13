<?php 
class Alumno {
	public $Nombre;
	public $Apellidos;
	public $DNI;
	public $Parc1;
	public $Parc2;
	public $Nota;
	
	

	public function __construct($Nombre, $Apellidos,$DNI,$Parc1,$Parc2) {
		$this->Nombre = $Nombre;
		$this->Apellidos = $Apellidos;
		$this->DNI = $DNI;
		$this->Parc1 = $Parc1;
		$this->Parc2 = $Parc2;
		
	}
	
	public function Calcular() {
		
		$N1=$this->Parc1;
		$N2=$this->Parc2;
     	
		echo 'La nota Final es :' . ($N1+$N2)/2;   
	}
	
	public function mas_info() {
		return print('<ul>
	
				<li>Nombre <b>' . $this->Nombre . '</b></li>
				<li>Apellido <b>' . $this->Apellidos . '</b></li>
				<li>DNI <b>' . $this->DNI . '</b></li>
				<li>Parc1 <b>' . $this->Parc1 . '</b></li>
				<li>Parc2 <b>' . $this->Parc2 . '</b></li>
				
			
				
			</ul>');
	}	
}



	

echo '<h1>Notas Alumnos</h1>';

echo '<h2>Alumno1:</h2>';
$Al = new Alumno('Rosa', 'Mayorga','123','80','90');
$Al->Calcular();
$Al->mas_info();

echo '<h2>Alumno2:</h2>';
$Al = new Alumno('Julia', 'Mayorga','120','100','90');
$Al->Calcular();
$Al->mas_info();



echo '<h2>Alumno3:</h2>';
$Al = new Alumno('Carlos', 'Miranda','452','80','85');
$Al->Calcular();
$Al->mas_info();

