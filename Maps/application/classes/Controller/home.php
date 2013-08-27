<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$view=View::factory('home');
		$view->_title = Helpers_Const::APPNAME.' - Inicio';
		$view->_menuid = Helpers_Const::MENUINICIOID;
		$view->_submenuid = Helpers_Const::MENUINICIOMAPAID;
		$view->_menutitle = Helpers_Const::MENUINICIOTITLE;
		$this->response->body($view->render());
	}
	
	public function action_getPostes(){
		$postes = Helpers_Poste::get();
		$postesarray = array();
		foreach($postes as $p){
			$parray = array();
			array_push($parray, $p->Num, $p->Lat, $p->Long);
			array_push($postesarray, $parray);
		}
		echo json_encode($postesarray);
	}
	
	public function action_getPoste(){
		echo json_encode(Helpers_Poste::get($_POST['num'])->Num);
	}

} // End Welcome
