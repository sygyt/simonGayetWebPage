<?php
$mailCorrespondant = $_POST["email"];
$mailDestinataire = 'gayetsimon@gmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mailDestinataire)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = $_POST["message"];
//==========
$message_txt = wordwrap($message_txt, 70, "\r\n");
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = $_POST["sujet"];
//=========
 
//=====Création du header de l'e-mail.
$header = "From: ".$mailCorrespondant.$passage_ligne;
$header.= "Reply-to: ".$mailCorrespondant.$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 9bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
echo($mailDestinataire.$sujet.$message.$header);
//=====Envoi de l'e-mail.
mail($mailDestinataire,$sujet,$message,$header);
//==========
header('Location: http://localhost:8888/simonGayetWebPage/accueil.html#contact');
 exit();
?>