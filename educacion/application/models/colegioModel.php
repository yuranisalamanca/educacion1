<?php


class ColegioModel extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	/** Agregar un colegio a la base de datos
	**/
	public function agregarColegios($nombre, $direccion){
		$query = $this->db->query("INSERT INTO Colegios (nombre, direccion) VALUES('".$nombre."' , '".$direccion."')");
	}

	/** Lista de colegios que hay en la base de datos
	**/
	public function listaColegios(){
		$query = $this->db->query("SELECT idColegios, nombre, direccion FROM Colegios");
		if($query->num_rows()>0){
			$arreglo = array();
			$i=0;
			foreach ($query->result() as $resultado) {
				$arreglo[$i]['idColegios'] = $resultado->idColegios;
				$arreglo[$i]['nombre'] = $resultado->nombre;
				$arreglo[$i]['direccion'] = $resultado->direccion;
				$i++;
			}
			return $arreglo;
		}
	}

	public function editarColegio($idColegios,$nombre,$direccion){
		$query = $this->db->query("UPDATE Colegios SET nombre ='".$nombre."' , direccion = '".$direccion."' WHERE idColegios =".$idColegios);
		
	}
} 
?>