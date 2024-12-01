<?php

include ("Compte.php");
include ("Client.php");

$client1 = new Client ("MAISON", "Bernard", "02/23/2002", "Paris");

$compte1 = new Compte ("Compte courant", "1600", "Euros", $client1);
$compte2 = new Compte ("Livret A", "200", "Euros", $client1);

echo $compte1;

$compte1 -> virement($compte2, 600);

echo $compte1;

echo $client1;

echo $client1 -> afficherComptes();

