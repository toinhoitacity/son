<?php session_start(); ?>
<?php require_once "util.php"; ?>
<?php require_once "header.php"; ?>
<?php require_once "menu.php"; ?>
<?php
    if(!isset($_GET["page"])){
        require_once "home.php";
    } else {
        require_once $_GET["page"].".php";
    }
?>

<?php require_once "footer.php";?>