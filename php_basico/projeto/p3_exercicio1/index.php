<?php
session_start();
require_once ("util.php");
require_once ("header.php");
require_once ("menu.php");
if(!isset($_GET["page"])){
    require_once("home.php");
} else {
    require_once($_GET["page"] . ".php");
}
require_once("footer.php");
?>