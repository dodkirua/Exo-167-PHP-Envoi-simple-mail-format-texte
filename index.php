<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

/*$from = '';
$to = '';
$message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.
$header = array("from" => $from);
mail($to,"first mail from exo",$message,$header);*/

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.
$mail = "";
$mailTo = "";
$message2 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut dolore in iure nam nesciunt porro rem saepe soluta, totam ut voluptatibus? Autem dolorum eligendi quae quos suscipit tempora temporibus.";
$sujet = "Mail part3";
$message3 = wordwrap($message2,70,"\r\n");
$header2 = array(
    "from" => $mail,
    "Reply-To" => $mail,
    "X-Mailer" => 'PHP/' . phpversion()
);

if (mail($mailTo,$sujet,$message2,$header2)){
    echo "<p>Le message a bien été envoyé. Merci !</p>";
    $file = fopen("mail.txt","a+b");
    fwrite($file,$message2."|".$mailTo."\r\n");
    fclose($file);

}
else {
    echo "<p>Une erreur est survenue lors de l'envoi du mail</p>";
}
