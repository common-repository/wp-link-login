<?php
/* constants for general purpose*/
define("LSC_LOGIN_FOLDER", 			    dirname(plugin_basename(__FILE__)));
define("LSC_LOGIN_PATH", 				dirname(__FILE__));
define("LSC_LOGIN_URL",				    WP_PLUGIN_URL.'/'.LSC_LOGIN_FOLDER);
define("LSC_LOGIN_FILEMENUPATH",		LSC_LOGIN_PATH.'/file_menu');
define("LSC_LOGIN_LIBPATH",			    LSC_LOGIN_PATH.'/lib');
define("LSC_LOGIN_CLASSPATH",		    LSC_LOGIN_PATH.'/class');

define("LSC_LOGIN_CHOICE_MANUAL",	    '1');
define("LSC_LOGIN_CHOICE_FOOTER",	    '2');
define("LSC_LOGIN_CHOICE",	            'lsc_login_choice');
define("LSC_LOGIN_STYLE_LINK",	        'lsc_login_style_link');
define("LSC_LOGIN_STYLE_DEFAULT",       'lsc_ll_linklogin');
