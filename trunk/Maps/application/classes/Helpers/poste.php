<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Poste {

	public static function exists($lat, $long){
		$poste = ORM::factory('poste')
			->where('Lat', '=', $lat)
			->and_where('Long', '=', $long)
			->find();
		return $poste->loaded();
	}
	
	public static function get($num = NULL){
		if($num != NULL){
			return ORM::factory('poste')
				->where('Num', '=', $num)->find();
		}
		else{
			return ORM::factory('poste')
				->order_by('Num')
				->find_all();
		}
	}
}