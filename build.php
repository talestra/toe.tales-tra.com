<?php

/*
foreach (scandir('sections') as $s) {
	$e = mb_detect_encoding(file_get_contents("sections/$s"));
	echo "$e\n";
}
*/

foreach (['portada', 'creditos', 'descargar', 'enlaces', 'instrucciones', 'template'] as $modulo) {
	ob_start();
	include __DIR__ . '/sections/index.tpl';
	$contents = ob_get_clean();
	if ($modulo == 'portada') $modulo = 'index';
	file_put_contents("{$modulo}.html", $contents);
}