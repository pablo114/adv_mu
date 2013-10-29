<?php
//TUTAJ ROBIMY TYLKO TE DUPERELE KTORE POBIERAJA DANE Z LINKU np. ?module= i/lub action=
class Router {

	public function prepareUrl($str) {
	
		$str = explode('/', $str);
	
		foreach($str as $key => $value) {
		
			if(strpos($value, '.') !== false)
				unset($str[$key]);
		
		}
		
		$str = implode('/', $str);
		
		return $str;
	
	}

	public function route() {
	
		var_dump($_SERVER['REQUEST_URI']);
		var_dump($_SERVER['SERVER_NAME']);
		//var_dump(explode('/', $_SERVER['REQUEST_URI']));
		
		$url = $this->prepareUrl($_SERVER['REQUEST_URI']);
		
		var_dump($url);

	
	}
	
}

?>