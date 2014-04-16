<?php
/**
 * SMS script
 * Blagues courtes
 */
header('Content-Type: text/html; charset=utf-8');

$list = [];

$list[]= "Vous savez pourquoi grand mère sait faire un bon café?\nElle a que ça à foutre";

$list[]= "Qu’est ce qui a 4 jambes, 3 bras, 2 têtes, un revolver et un chapeau?\nLe cow-boy de Tchernobyl!";

$list[]= "C’est l’histoire de 2 prostituées qui se disputent";

$list[]= "Que fait JCVan Damme quand il rentre dans sa voiture ?\nIl fout le contact";

$list[]= "Qu'est ce qui est pire que de trouver un ver de terre dans une pomme ?\nUn génocide";

$list[]= "Pourquoi l'enfant a fait tomber sa glace ?\nParce qu'il s'est fait renverser par un bus";

$list[]= "Concours de sosie en chine : tous le monde a gagne";

$list[]= "C'est l'histoire d'un mec qui rentre dans un cafe : et plouf";

$list[]= "Pourquoi les femmes aiment lecher les montres ?\nPar ce qu'un tictac contient moins de 2 calories";

$list[]= "Boire au volant, c'est pas bien ! Faut boire à la bouteille";

$list[]= "Que fait un éléphant dans un orchestre ?\nDe la trompette !";

$list[]= "Connaissez-vous la blague de la chaise ?\n Non ?\nC'est dommage elle est pliante !";

$list[]= "Qu'est-ce qui travaille 8 heures par jour dans l'administration ?\n La machine à café!";

$list[]= "Un programmeur ne s’enfuit pas, il C# !";

$list[]= "Un muet dit à un sourd: ";

$list[]= "Il y a deux sortes d'OVNI : l'OVNI tender et l'OVNI true";

$list[]= "Qu'est ce qui est vert et qui se déplace sous l'eau?\nUn choux marin !";

$list[]= "Qu'est ce qui est plus drole que de faire tourner des enfants sur un tourniquet ?\nLes arrêter avec une pelle";

$list[]= "L'homme descend du singe, le singe descend de l'arbre et toi, vu ta tête, t'as dû rater la branche";

$list[]= "Salut je suis ton tel portable et j'ai une faveur a te demander, la prochaine fois que tu me recharges vazy molo avec la prise !";

shuffle($list);

die( $list[0] );
