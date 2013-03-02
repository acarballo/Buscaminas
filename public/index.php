<?php
$dimension_max= 60;
if(!empty($_GET['dimension']))
	$dimension=$_GET['dimension'];
else 
	$dimension=10;

if($dimension>$dimension_max)
	$dimension=$dimension_max;

$campominas=array();
$minas=array();?>
<head>
	<title>Buscaminas - Andrés Carballo</title>
    <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Buscaminas</h1>
<p>Dimension: <?=$dimension?>x<?=$dimension?></p>
<?php 
require_once('assets/funtions.php');
$campominas = init_minefield($campominas,$dimension);
$minas= init_mines($minas,$dimension,$minas);
$campominas = show_all_mines($campominas, $minas, $dimension);
?>
<p>Numero Minas: <?=count($minas)?></p>
<div>
<?php
show_minefield($campominas,$dimension);
?>
</div>

</body>
<?php 
//echo('<hr/>');
//echo "<pre>";
//print_r($campominas);
//print_r($minas);
//echo "</pre>";
