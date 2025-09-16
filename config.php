<?php
	if (!defined("ABSPATH"))
		define("ABSPATH", dirname(__FILE__) . "/");

	if (!defined("BASEURL"))
		//define("BASEURL", "/");
		define("BASEURL", "/xerife_pastell/");

	/** caminhos dos templates de header e footer **/
	define("HEADER_TEMPLATE", ABSPATH . "inc/header.php");
	define("FOOTER_TEMPLATE", ABSPATH . "inc/footer.php");

?>