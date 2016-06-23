<?php
final class CONF{
	/**
	 *	CONFIGURATION FILE
	 *	
	 */
	//THEME
	public static $THEME = "WhiteTheme";

	//FUNCTIONS
	public static function THEMEPATH(){
		return DIR_THEMES."/".CONF::$THEME;
	}
}

?>