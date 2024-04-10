<?php
include('trip.php');
require_once('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

//$html_content =  $twig->render('zad7.twig', ['trips' => $trips]);
//file_put_contents('index.html', $html_content);
echo $twig -> render('zad7.twig', ['trips' => $trips]);
?>