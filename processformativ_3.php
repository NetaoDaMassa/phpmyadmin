<?php

$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_prt_043_bd';

$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die ('Error connecting to MySQL Server.');

$fabricante = $_POST['fabricante'];
$ano_fabricacao = $_POST['ano_fabricacao'];
$quilometragem = $_POST['quilometragem'];

$query = "INSERT INTO autos (fabricante, ano_fabricacao, quilometragem) VALUES ('$fabricante', '$ano_fabricacao', '$quilometragem')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');

mysqli_close($link);
?>