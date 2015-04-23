<?php

foreach (['portada', 'creditos', 'descargar', 'enlaces', 'instrucciones', 'template'] as $modulo) {
	ob_start();
	include __DIR__ . '/sections/index.tpl';
	$contents = ob_get_clean();
	if ($modulo == 'portada') $modulo = 'index';
	file_put_contents("{$modulo}.html", $contents);
}