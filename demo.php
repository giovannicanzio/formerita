<?php 

require 'conf/config.inc';

if(!$_REQUEST['theme']) {
    $theme = "themes/development_theme";
} else {
    $theme = $_REQUEST['theme'];
}



include $theme."/index.php";

?>