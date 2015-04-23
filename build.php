<?php

/*
foreach (scandir('sections') as $s) {
	$rfile = "sections/$s";
	//$e = mb_detect_encoding(file_get_contents("sections/$s"));
	file_put_contents(
		$rfile,
		mb_convert_encoding(file_get_contents($rfile), 'utf-8', 'ISO-8859-1')
	);
	//echo "$s: $e\n";
}
*/

foreach (['portada', 'creditos', 'descargar', 'enlaces', 'instrucciones', 'template'] as $modulo) {
	ob_start();
	include __DIR__ . '/sections/index.tpl';
	$contents = ob_get_clean();
	if ($modulo == 'portada') $modulo = 'index';
	file_put_contents("{$modulo}.html", $contents);
}