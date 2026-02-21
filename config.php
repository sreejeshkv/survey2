<?php
session_start();

try {
$db = new PDO('sqlite:' . __DIR__ . '/database.sqlite');    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}

function require_admin(){
    if(!isset($_SESSION['admin'])){
        header("Location: login.php");
        exit;
    }
}

function require_student(){
    if(!isset($_SESSION['student'])){
        header("Location: login.php");
        exit;
    }
}
?>