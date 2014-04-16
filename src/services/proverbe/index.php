<?php
/**
 * SMS script
 * Proverbes
 * http://www.slateafrique.com/97497/proverbes-africains-sagesse-populaire-selection
 */
header('Content-Type: text/html; charset=utf-8');

$list = [];
$list[] = "Un grain de maïs a toujours tort devant une poule";
$list[] = "On ne marche pas deux fois sur les testicules d'un aveugle";// (Burkina Faso)
$list[] = "Qui avale une noix de coco fait confiance à son anus";//(Côte d'Ivoire)
$list[] = "Qui crache en l’air doit s’attendre à recevoir des crachats sur le visage";// (Côte d'Ivoire)
$list[] = "Un seul morceau de bois donne de la fumée mais pas de feu";// (Éthiopie)
$list[] = "Quelle que soit la maigreur d'un éléphant, ses couilles remplissent une marmite";//(Gabon)
$list[] = "Rire de l'anus de son voisin n'est pas un crime, mais convier toute sa famille à le faire est inadmissible";//(Mali)
$list[] = "Le putois ne sent pas l'odeur de ses aisselles";// (Niger)
#$list[] = "Attends d'avoir traversé la rivière pour dire que le crocodile a une sale gueule";// (Zambie)
$list[] = "Il faut attendre d'avoir traversé toute la rivière avant de dire que le crocodile a une sale gueule";
$list[] = "Lorsque tu offres un pagne à ta belle-mère, ne lui dis pas que c’est pour couvrir ses fesses";
$list[] = "La force du baobab est dans ses racines";
$list[] = "Même le poisson qui vit dans l’eau a toujours soif";//
$list[] = "Le serpent a beau courir, il ne va pas plus vite que sa tête";
$list[] = "Celui qui a été mordu par un serpent se méfie d'une chenille";
$list[] = "Le pauvre mort, ses pieds s'allongent";
$list[] = "Dans les yeux de chaque maman scarabée, son petit est une gazelle";
$list[] = "Le pied gauche marche toujours à gauche";
$list[] = "Si le bélier a tendance à reculer, il ne faut pas croire que c'est parce qu'il est lâche";
$list[] = "Un morceau de bois a beau séjourner dans l'eau, il ne deviendra jamais un caïman";
$list[] = "Quelle que soit la longueur du jet de l'urine, les dernières gouttes retombent toujours entre les cuisses";
$list[] = "Ce n'est pas parce que le crocodile a soif qu'il sort de son lac pour boire l'eau de la rosée du matin qui tombe sur les feuilles";
$list[] = "Même s'il n'y a pas de coq pour chanter à l'aube, le jour se lèvera";
$list[] = "La chèvre broute là où elle est attachée";
$list[] = "Quand tu sauras le prix d'une esclave, tu ne penseras jamais à vendre ta mère";
$list[] = "Le monde a beau changer, le chat ne pondra jamais";
$list[] = "L'éléphant ne peut courir et se gratter les fesses en même temps";
$list[] = "Celui qui veut du miel doit avoir le courage d'affronter les abeilles";
$list[] = "Si quelqu'un fait semblant de mourir, il faut faire semblant de l'enterrer";// (République démocratique du Congo)
$list[] = "Ce n'est pas parce que le mouton n'a pas de dent que tu mettras ta main dans sa bouche";
$list[] = "Celui qui sait qu’il ne sait pas saura. Celui qui ne sait pas qu’il sait ne saura jamais";
$list[] = "Celui qui rame dans le sens du courant fait rire les crocodiles";
$list[] = "L'oeuf ne danse pas avec la pierre";
$list[] = "Lorsque tu ne sais pas où tu vas, regarde d'où tu viens";
$list[] = "Si tu as de nombreuses richesses donne ton bien ; si tu possède peu, donne ton coeur";
$list[] = "Tout a une fin, sauf la banane qui en a deux";
$list[] = "Au bout de la patience, il y a le ciel";
$list[] = "Aussi longtemps que les lions n'auront pas leur historien, les récits de chasse tourneront toujours à la gloire du chasseur";
$list[] = "Là où on s'aime, il ne fait jamais nuit";
$list[] = "Si tu ne sais pas où tu vas, alors retourne d'où tu viens";
$list[] = "Que celui qui n'a pas traversé ne se moque pas de celui qui s'est noyé";
$list[] = "C'est en essayant encore et encore que le singe apprend à bondir";
$list[] = "Qui va loin revient près...";
$list[] = "Le derrière de la femme est plus doux que sa tête";//  (Proverbe Ivoirien)
$list[] = "La buse qui plane ne se doute pas que ceux qui sont en bas devinent ses intentions";
$list[] = "Les marques du fouet disparaissent, la trace des injures, jamais";
$list[] = "Si le crocodile achète un pantalon, c'est qu'il a trouvé où mettre sa queue";
$list[] = "L'oiseau qui chante ne sait pas faire son nid";
$list[] = "A force de patience et de saindoux, l'éléphant sodomise le pou";
$list[] = "Le mensonge donne des fleurs mais pas de fruits";
$list[] = "L'eau chaude n'oublie pas qu'elle a été froide";
$list[] = "La langue qui fourche fait plus de mal que le pied qui trébuche";
$list[] = "Le coassement des grenouilles n'empêche pas l'éléphant de boire";
$list[] = "Qui vit longtemps voit la danse de la colombe";
$list[] = "L'espoir est le pilier du monde";
$list[] = "Dieu n'a fait qu'ébaucher l'homme, c'est sur terre que chacun se crée";
$list[] = "Au chef, il faut des hommes et aux hommes, un chef";
$list[] = "C'est au bout de la vieille corde qu'on tisse la nouvelle";
$list[] = "Ce n'est pas à toute oreille percée que l'on met des anneaux d'or";
$list[] = "Celui qui t'empêche de te battre, donne-lui une récompense";
$list[] = "L'herbe ne pousse jamais sur la route où tout le monde passe";
$list[] = "L'homme a inventé la montre, mais Dieu a inventé le temps";
$list[] = "Si tu vois une chèvre dans le repaire d'un lion, aie peur d'elle";
$list[] = "Une pirogue n'est jamais trop grande pour chavirer";
$list[] = "La mort engloutit l'homme, elle n'engloutit pas son nom et sa réputation";
$list[] = "Si haut que parvienne une chose lancée, c'est à terre qu'elle retourne";
$list[] = "C'est celui dont tu as soigné l'impuissance qui te prend ta femme";
$list[] = "La mort est l'aînée, la vie sa cadette ; nous, humains, avons tort d'opposer la mort à la vie";
$list[] = "Ne te lasse pas de crier ta joie d'être en vie et tu n'entendras plus d'autres cris";
$list[] = "Il n'y a pas qu'un jour, demain aussi le soleil brillera";
$list[] = "On est plus le fils de son époque que le fils de son père";
$list[] = "C'est celui qui a du lait qui peut faire la crème";
$list[] = "Chaque filet d'eau a son chemin";
$list[] = "Tous les champignons sont comestibles, certains une fois seulement";
$list[] = "On boira du lait quand les vaches mangeront du raisin";
$list[] = "Pire qu'un caillou dans la chaussure : un grain de sable dans la capote";
$list[] = "Certains hommes aiment tellement leur femme que, pour ne pas l'user ils se servent de celle des autres";
$list[] = "Les hommes mentiraient moins si les femmes posaient moins de questions";
$list[] = "Ne buvez pas au volant, buvez à la bouteille";
$list[] = "qui roule plein roule bien";
$list[] = "Qui boit sans soif vomira sans effort";
$list[] = "La parole est d'argent mais le silence endort";
$list[] = "Il n'y a pas de fumée sans Indiens";
$list[] = "Qui ne dit mot consent, mais quand on a mauvaise haleine, c'est quand on dit mot qu'on sent";
$list[] = "T'as pas besoin d'un flash quand tu photographies un lapin qui a déjà les yeux rouges";
$list[] = "Si tu invites des gens qui ont tous le même groupe sanguin à une fête, mais que tu le leur dis pas, ils vont parler d'autre chose";
$list[] = "Si tu dors et que tu rêves que tu dors, il faut que tu te réveilles deux fois pour te lever";
$list[] = "Si t'es perdu dans la forêt et que tu restes immobile pendant deux ans, il va pousser de la mousse sur un côté de tes jambes. C'est le Nord";
$list[] = "Si tu parles à ton eau de javel pendant que tu fais la lessive, elle est moins concentrée";
$list[] = "Si tu attends le mois d'octobre pour faire des poissons d'avril, tu attrapes plus de gens";
$list[] = "L'ombre du zèbre n'a pas de rayures";

shuffle($list);# randomize
echo $list[0];
