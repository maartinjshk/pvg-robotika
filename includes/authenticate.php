<?php
session_start();
require './db_inc.php';
// LIETOTĀJU AUTORIZĀCIJA
// Pārbaudām, vai ir ievadīti abi lauciņi login etapā:
if ( !isset($_POST['email'], $_POST['password']) ) {
	// Ja kāds no tiem nav aizpildīts, rādām šo:
	exit('Please fill both the email and password fields!');
}

// Sagatavojam SQL
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE email = ?')) {
	// Parametri (s = string, i = int, b = blob, utt.)
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Uzglabājam rezultātu, lai varam pārbaudīt lietotājvārda eksistenci datubāzē:
	$stmt->store_result();


  // Iegūstam lietotāja datus no datubāzes, lai uzglabātu sesijā
	$sql = "SELECT first_name, last_name FROM accounts WHERE email = '" .$_POST['email']. "' LIMIT 1";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();

  if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Ja profils eksistē, nākamais solis ir paroļu pārbaude
  //Lai pārbaudītu 'hashed' paroli, izmantojam:
  // if (password_verify($_POST['password'], $password)) {
	if ($_POST['password'] === $password) { // Pārbaude veiksmīga, dodamies tālāk
		// Izveidojam sesiju
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['id'] = $id;
		$_SESSION['first_name'] = $row['first_name'];
		$_SESSION['last_name'] = $row['last_name'];
		header("Location:../index.php");
	} else {
		// Nepareizas paroles gadījumā:
		header("Location:../login.php?login=incorrect");
	}
} else {
	// Nepareiza lietotājvārda gadījumā:
	header("Location:../login.php?login=incorrect");
}
	$stmt->close();
}
?>
