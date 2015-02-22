<?php
/**
 *  Controlador del ente colegio
 */
 class ColegioController extends CI_CONTROLLER
 {
 	
 	public function agregarColegio(){
 		$this->load->model('colegioModel');
 		$this->load->view('agregarColegioView');

 			$nombre = $this->input->post('nombreColegio');
 			$direccion = $this->input->post('direccionColegio');
 		if($nombre !== '' && $direccion!=='')
 		{
 			$this->colegioModel->agregarColegios($nombre,$direccion);
 		}
 		
 	}

 	public function listaColegios(){
 		$this->load->model('colegioModel');
 		$data['colegios'] = $this->colegioModel->listaColegios();
 		$this->load->view('listaColegiosView',$data);
 	}

 	public function editarColegio($idColegios, $nombre, $direccion){
 		$this->load->model('colegioModel');
 		$data[0]['nombre'] = $nombre;
 		$data[1]['direccion'] = $direccion;

 		$this->load->view('', $data)

 		//Hacer la ventana (fancy box) con un formulario que envie los datos editados por post.

 	}
 } 
?>