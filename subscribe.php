<?php

$db = new PDO('mysql:host=internal-db.s198704.gridserver.com;dbname=db198704_reggeli;charset=utf8', 'db198704_reggeli', 'UzletiReggeli@2015');

$stmt = $db->prepare("INSERT INTO subscribers(name, company, email) VALUES(:name,:company,:email)");
$stmt->execute(array(':name' => $_POST['name'], ':company' => $_POST['company'], ':email' => $_POST['email']));
$affected_rows = $stmt->rowCount();

$msg = $_POST['name'] . '     ' . $_POST['company'] . '     ' . $_POST['email'];

mail("hajdu.gabor@danubiusinfo.hu", "Új regisztráló!!!", $msg);
mail("balogh.peter@danubiusinfo.hu", "Új regisztráló!!!", $msg);
mail("gaal.eniko@danubiusinfo.hu", "Új regisztráló!!!", $msg);