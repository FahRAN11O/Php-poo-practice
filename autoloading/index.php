<?php
spl_autoload_register(function($className){
	$file = str_replace('\\', '/', $className.'.php') ;
	var_dump($file);
	if(file_exists($file)){
		require_once($file);
	}
});
use Voitures\Ferrari;


$maFerrari = new Ferrari();
$maFerrari -> demarrer();
echo $maFerrari -> getVitesse(), '<br>';
$maFerrari -> accelerer();
echo $maFerrari -> getVitesse(), '<br>';
$maFerrari -> accelerer();
echo $maFerrari -> getVitesse(), '<br>';


/*
$maToyota = new Toyota();
$maToyota -> demarrer();
echo $maToyota -> getVitesse(), '<br>';
$maToyota -> accelerer();
echo $maToyota -> getVitesse(), '<br>';
$maToyota -> accelerer();
echo $maToyota -> getVitesse(), '<br>';*/


    
