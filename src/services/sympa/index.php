<?php
/**
 * SMS service "Sympa"
 * Envois un message sympa
 */

//http://www.1messagedamour.com/search/label/SMS%20d%27amour#ixzz2yKQrV2Lv
//http://lesamoureuxdumonde.blogspot.fr/2012/02/sms-tu-me-manque.html
//http://www.adoskuat.com/article-ados-7071-25_sms_qui_lui_donneront_envie_de_decrocher_son_portable.html
//http://123smsdamour.blogspot.fr/2013/05/les-plus-beau-sms-damour.html
//http://123smsdamour.blogspot.fr/2013/06/beaux-sms-damour.html
//
header('Content-Type: text/html; charset=utf-8');
$say = [];

$say[]= "Je t'adore";
$say[]= "Tu seras toujours dans mon coeur";
$say[]= "Je t'aime";
$say[]= "Je te kiffe trop";

$say[]= "La mer est faite pour nager, le vent pour souffler, et moi je suis fait pour t'aimer";

$say[]= "Ca me ferait plaisir de te voir";

$say[]= "Tu me manque";

$say[]= "Tu sais quoi ? je t'adore !";

$say[]= "Si tu étais à côté de moi, je ne pourrais pas me retenir de t'embrasser";

$say[]= "Ca fait peu de temps depuis qu'on se connait mais je t'aime bcp déjà";

$say[]= "Je ne cesse de penser à toi, que ce soit en dormant, en chantant sous la douche, je ne cesse de penser à toi, à tes bras, à tes lèvres. Tu me manques mon amour";

$say[]= "Quand je pense à toi mon coeur s’accélère, quand je dors je rêve de toi... je crois que je t’aime";

$say[]= "Tu me manques trop. Ce SMS n’est pas assez puissant pour exprimer à quel point tu me manques";

$say[]= "Il n'y a pas une seconde où je ne pense pas à toi";
$say[]= "je t'envoie pleins de bisous tous doux, j'ai hate de te retrouver";
$say[]= "Tu me manques, gros calins mon ange";
$say[]= "Je pense fort à toi mon pti coeur, pleins de bisous partout";


$say[]= "Avant de te coucher, regarde à ta fenêtre et les étoiles que tu verras sont les milliers de baisers que je t'envoie";

$say[]= "j'ai voulu d’envoyé un gros bisou tellement tu me manque, mais tant qu'il y a pas d'appareils qui envoie les bisous, je t'envoie cet SMS";

$say[]= "J'aimerais que tu sois mon rayon de soleil toute la vie";

$say[]= "Ton sourire est beau. ton regard est très chaud. ton charme m'a découpé en morceaux. et être avec toi est le plus beau cadeau";

$say[]= "Quand je pense à toi, mon corps et mon coeur sont envahis par une chaleur douce";

$say[]= "Vivre pour toi c'est mon rêve et mon objectif, tu peux pas imaginer comment je t'aime";

$say[]= "Je t'envoie un bouquet d'amour et de baiser pour que tu sache que tu es toujours dans mon coeur";

$say[]= "Ta beauté extérieure m'a attiré vers toi mais c'est ta beauté intérieure qui m'a retenu";

$say[]= "Tu est mon dernier pensée avant de dormir tu es mon seule plaisir et mes idées à écrire tu es ma joie pour sourire mais ton absence me fait souffrir";

$say[]= "S'il suffisait d'une larme pour te dire JE T'AIME, j'en pleurerai des fontaines";

$say[]= "Une petite pensée pour toi et d'énormes baisers...tu me manques";

$say[]= "Si tu gardes ce SMS ce qui tu m'aime , si tu l’efface ce qui tu m'adore et si tu l'ignores ce qui tu veux m'avoir et maintenant qui va tu faire";


#Si un jour le soleil venait à disparaître, je n'aurai rien à craindre puisque mon seul soleil, c'est toi
#Tu doubles mes joies et tu réduits mes peines tu illumines mes journées toi et seulement toi
#Si l'amour se comptait en grain de sable, je t'aimerai comme le désert.



shuffle($say);

die( $say[0] );
