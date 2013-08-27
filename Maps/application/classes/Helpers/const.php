<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Const {
	/******** APLICACION *********/
	const APPNAME = 'Maps';
	
	const ITEMACTIVE = 'Y';
	const ITEMINACTIVE = 'N';
	
	/******** MENU *********/
	const MENUINICIOID = '0';
	
	/******** SUBMENU *********/
	const MENUINICIOMAPAID = '0';
	
	/******** MENUTITLES ********/
	const MENUINICIOTITLE = 'Inicio';
	
	public static function getNumbersArray($amount){
		$numbers = array();
		for($i=0;$i<=$amount;$i++){
			array_push($numbers, $i);
		}
		return $numbers;
	}
}