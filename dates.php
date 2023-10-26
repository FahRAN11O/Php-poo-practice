<?php
$date = new DateTime('2023-10-26');

//rechercher une date par l'intervale de 1 Day aprés
$date->add(new DateInterval('P1D'));

//une date par l'intervale de 1 Day avant
$date->sub(new DateInterval('P1D'));


$nbJours = $date->diff(new DateTime('2023-01-01'));

echo $nbJours->format('%a jours');