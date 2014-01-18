<?php
include_once("config.php");
//------------------------------------------------------------------------------------------------
// RECUPERO IL VALORE DI TUTTI I DATI INVIATI DALL'UTENTE
//------------------------------------------------------------------------------------------------
$str_ind_ip = $_SERVER['REMOTE_ADDR'];
foreach ($_POST as $key=>$value) {
	$$key = $value;
}

$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];
$email_to = trim($_POST['your_email']);
$urlWebSite = trim($_POST['your_web_site_name']);

//------------------------------------------------------------------------------------------------
//  PROCEDURA DI INVIO MAIL
//-------------------------------------
$str_oggetto			= OGGETTO_MAIL;
$str_contenuto_email 	= str_replace("{name}",$visitor,$str_contenuto_email);
$str_contenuto_email 	= str_replace("{mail}",$visitormail,$str_contenuto_email);
$str_contenuto_email 	= str_replace("{ip}", $str_ind_ip,$str_contenuto_email);
$str_contenuto_email 	= str_replace("{corpo}",$notes,$str_contenuto_email);
$str_contenuto_email 	= str_replace("{url}",$urlWebSite,$str_contenuto_email);
$headers = 'From: ' . $urlWebSite . ' <' . $email_to . '>' . "\r\n" . 'Reply-To: ' . $visitormail;;

if (!@mail($email_to,$str_oggetto,$str_contenuto_email,$headers)) {
	echo "<div class=\"error\">Have been some problems sending the email.</div>";
} else {
    echo "<div class=\"success\">The email has been sent successfully.</div>";
}