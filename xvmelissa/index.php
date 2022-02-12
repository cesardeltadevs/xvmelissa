<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<8.0)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

if($f3->get('DEBUG') == 0) {
	$f3->set('ruta', 'http://' . $f3->get('HOST') . '/apps/regina/');
}
else {
	$f3->set('ruta', 'http://' . $f3->get('HOST') . ':' . $f3->get('PORT') . '/');
}

$f3->route('GET /', function ($f3) {
	$f3->set('codigo', false);
	echo \Template::instance()->render('Invitacion.html');
});

$f3->route('GET /@codigo', 'datos\Confirmaciones->Invitacion');
$f3->route('POST /confirmar/@inv', 'datos\Confirmaciones->Confirmar');

$f3->run();
