<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/login.template.php begin -->
<?php header("Location: http://".$_SERVER['SERVER_ADDR'];); ?>
<?php 
if ($net2ftp_settings["net2ftpdotcom"] == "yes") {
	require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/login_n2fcom.template.php"); 
}
else {
	require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/login_other.template.php"); 
}
?>
<!-- Template /skins/shinra/login.template.php end -->
