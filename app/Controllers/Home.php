<?php namespace App\Controllers;
use App\Models\categoriasModel;
use App\Models\contactosModel;

class Home extends BaseController
{
	public function index(){
		$Crud = new contactosModel();
		$datos = $Crud->obtenerpersona();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];

		$vistas = view('Plantillas/header').
		view('index', $data).
		view('Plantillas/footer');
		return $vistas;
	}
	public function categoria(){
		$Crud = new categoriasModel();
		$datos = $Crud->listarCategoria();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];

		$vistas = view('Plantillas/header').
		view('Plantillas/categoria', $data).
		view('Plantillas/footer');
		return $vistas;
	}
	public function crear(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion']
		];
		$Crud = new categoriasModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/Cate')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/Cate')->with('mensaje','0');
		}
	}
	public function actuCat($idNombre){
		$data = ["id_categoria" => $idNombre];
		$Crud = new categoriasModel();
		$respuesta = $Crud->obtenerCategoria($data);
		$datos = ["datos"=>$respuesta];

		$vistas = view('Plantillas/header').
		view('Plantillas/actuCat', $datos).
		view('Plantillas/footer');
		return $vistas;
	}
	public function actCatG(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion']
		];
		$idNombre =  $_POST['idNombre'];

		$Crud = new categoriasModel();

		$respuesta = $Crud->actualizar($datos, $idNombre);

		if ($respuesta){
			return redirect()->to(base_url().'/Cate')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/Cate')->with('mensaje','3');
		}
	}
	public function eliminar($idNombre){
		$Crud = new categoriasModel();
		$data = ["id_categoria" => $idNombre];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/Cate')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/Cate')->with('mensaje','5');
		}
	}
	public function contacto(){

		$Crud = new contactosModel();
		$datos = $Crud->listarContactos();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];
		$vistas = view('Plantillas/header').
		view('Plantillas/contacto', $data).
		view('Plantillas/footer');
		return $vistas;
	}
	public function CrearCont(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'], 
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria']
		];
		$Crud = new contactosModel();
		$respuesta = $Crud->insertarc($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/Cont')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/Cont')->with('mensaje','0');
		}
	}
	public function obtCont($idNombre){
		$data = ["id_contacto" => $idNombre];
		$Crud = new contactosModel();
		$respuesta = $Crud->obtenerContactos($data);

		$datos = ["datos"=>$respuesta];

		$vistas = view('Plantillas/header').
		view('Plantillas/ActCont', $datos).
		view('Plantillas/footer');
		return $vistas;
	}
	public function ActuCont(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'],
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria']
		];
		$idNombre =  $_POST['idNombre'];

		$Crud = new contactosModel();

		$respuesta = $Crud->actualizar($datos, $idNombre);

		if ($respuesta){
			return redirect()->to(base_url().'/Cont')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/Cont')->with('mensaje','3');
		}
	}
	public function eliminarc($idNombre){
		$Crud = new contactosModel();
		$data = ["id_contacto" => $idNombre];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/Cont')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/Cont')->with('mensaje','5');
		}
	}

	//--------------------------------------------------------------------

}
