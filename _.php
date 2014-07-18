<?php
define("version","0.0.1");
 
class _ {

	public static function get_val(&$source , $default = null){
		return isset($source) ? $source : $default;
	}

	//enhance the build in function - assert($exp)
	public static function assert($exp,$description = ''){
		if(is_bool($exp) && !$exp){
			echo 'Failed in ' . __file__ . ' on line ' . __line__ . "\n";
			if($description)
				echo $description . "\n";
		}
	}

}

