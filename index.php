<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 'on');
error_reporting(E_ALL);

require_once 'class/palindromo.class.php';
$palindromo = new Palindromo();
var_dump($palindromo->isPolindromo("racificar"));
echo $palindromo->getPdmString();