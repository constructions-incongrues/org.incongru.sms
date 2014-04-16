<?php
/**
 * SMS service "Pardon"
 * Envois un message pour se faire pardonner
 */

# http://www.textesms.fr/sms-pour-s-excuser-demander-pardon.php

header('Content-Type: text/html; charset=utf-8');
$say = [];

$say[]="Je te demande pardon, ce que j'ai fait était irraisonné et impulsif. Je ne voulais te blesser d'aucune façon. Désolé de t'avoir fait souffrir";

Je ne sais pas du tout comment nous pouvons améliorer les choses entre nous. Je peux seulement commencer en te disant sincèrement que je suis désolé.

Je ne voulais pas te faire souffrir. S'il te plaît pardonne moi. Je ne sais pas comment te dire que je suis vraiment désolé.

1000 excuses pour tout à l'heure. J'ai vraiment fait (dit) n'importe quoi. Pardonne moi. Vraiment je ne sais pas comment m'excuser.

Je m'excuse pour ce qu'il s'est passé tout à l'heure. Je crois que nous avons besoin d'en parler tous les deux. Qu'en penses-tu ?



shuffle($say);

echo $say[0];