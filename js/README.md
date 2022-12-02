# Exercices JS

Ces exercices complètent les exercices [HTML](../html), [CSS](../css) et [principes de programmation](../pp). Il est donc nécessaire d'avoir terminé ces chapitres précédents pour débuter celui-ci.

## Exercice 1: linked JS

 1. Créer un fichier de script JS `scripts/main.js` vide.
 2. Inclure ce script dans une page HTML (méthode "linked").

[Corrections](./ex1)

### Remarques théoriques

#### Incorporations JS dans HTML

**Attention:** ne sont pas abordés ici les autres types possibles d'inclusion de script:
 - "inline" ou intégré à un élément HTML (via divers attributs).
 - "embedded" ou interne à un document HTML (via la balise `script`).

(Sur ce sujet, voir [MDN docs - Utiliser JavaScript au sein d'une page web](https://developer.mozilla.org/fr/docs/Learn/HTML/Howto/Use_JavaScript_within_a_webpage)) 

#### Contenu ou ressource

La balise `script` sert à la fois à contenir du code JS et à inclure un fichier JS externe. Toutefois, une même balise ne peut pas faire les deux en même temps. Si un élement `script` définit une ressource dans son attribut `src`, il ne peut pas contenir de code à l'intérieur de ses balises, et inversément. C'est donc soit l'un ("embedded"), soit l'autre ("linked").

#### head ou body?

A noter que la balise `script` peut être inclue dans `head` ou dans `body`. Il arrive souvent qu'on la place à la fin du `body` pour déléguer le chargement et l'interprétation du script après celui des autres ressources de la page. 


## Exercices 2: evènements

### Click

 1. Afficher dans le navigateur le message "Qui aime les carottes?" ainsi qu'un bouton "Réponse". Lorsque l'utilisateur clique sur le bouton, le texte "Les lapins!" est affiché dans une boîte d'alerte.

 2. Soit un utilisateur possèdant (virtuellement) 3 billets de 5€ et 2 billets de 10€. Lorsque l'utilisateur clique sur le bouton "Montant total des billets de 5€", afficher le résultat pour les billets de 5€. Lorsque l'utilisateur clique sur le bouton "Montant total des billets de 10€", afficher le résulat pour les billets de 10€. Le calcul des montants doit se faire au sein d'une fonction, car il s'agit d'une fonctionnalité commune à tous les types de billets.

 3. Lorsque l'utilisateur clique sur un bouton "Passer ma commande", afficher une boîte de confirmation demandant si l'utilisateur confirme son action, avec le message "Confirmez-vous votre commande de x pizza", en sachant que le nombre de pizza est une variable et que s'il y a plus d'une pizza, le message doit prendre le pluriel. Si l'utilisateur confirme sa commande, une boîte d'alerte indiquera "Bon appétit!". Vous devez gérez tous les cas de valeurs du nombre de pizza (0 pizza par exemple).


## Exercices 3: contenu d'éléments

 1. Afficher un contenu rentré par l'utilisteur. Le contenu est rentré via un prompt et affiché dans un élément HTML.

 2. Lorsque l'utilisateur clique sur un bouton, intervertir le contenu de deux paragraphes spécifiques.

 3. Lorsque l'utilisateur clique sur un bouton "+", incrémenter un compteur affiché dans un élément HTML. Lorsque l'utilisateur clique sur un bouton "-", décrémenter ce même compteur.
 

## Exercices 4: contenu d'attributs

 1. Reprendre le script de commande de pizza. Le nombre de pizzas doit se trouver dans un champ.

 2. Reprendre le script de calcul de portefeuille. Le nombre de chaque type de billet doit se trouver dans un champ.

 3. Lorsque l'utilisateur clique sur un bouton, changer la couleur de fond de la page.


## Exercice bonus: current target / this

 1. Afficher des éléments HTML de forme carrée et de différentes couleurs. Lorsque l'utilisteur clique sur l'un des éléments, celui-ci change de couleur.

