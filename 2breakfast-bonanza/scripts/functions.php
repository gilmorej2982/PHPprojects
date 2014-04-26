<?php 
$root_pathname = $_SERVER['DOCUMENT_ROOT'].'/php424/2breakfast-bonanza/includes/';

function get_banner()
{
	global $root_pathname;
	include $root_pathname.'banner.php';
}

function get_sidebar()
{
	global $root_pathname;
	include $root_pathname.'sidebar.php';
}

function get_footer()
{
	global $root_pathname;
	include $root_pathname.'footer.php';
}
?>