<?php
// Definējam datubāzes datus
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'LQAOO13lQubr';
$DATABASE_NAME = 'robotu_inventarizacija';

// Savienojuma izveide ar datubāzi
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

  // Kļūdas gadījumā
	exit('Kļūda, savienojoties ar datubāzi: ' . mysqli_connect_error());
}
?>
