<?php

class StringHelper {

	public static function removeLastColSeparator($str) {
	
		return substr($str, 0, (strlen(dbQueryColSeparator) * -1));
	
	}
	
	public static function searchPrefix($str, $prefix) {
	
		if(strpos(substr($str, 0, strlen($prefix)), $prefix) !== false)
			return true;
		else return false;
	
	}

}

?>