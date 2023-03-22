# PP - tableaux indexés à n dimensions

## Objectifs

 1. Savoir déclarer un tableau à 2 dimensions.

 2. Parcourir chaque dimension à l'aide d'une boucle.

 3. Savoir accéder aux valeurs finales.

## Enoncés

### 1. Jeux du morpion
 
Soit un jeux du [morpion](https://fr.wikipedia.org/wiki/Morpion_(jeu)) de 3 lignes x 3 colonnes, contenant 3 valeurs possibles ("", "o" et "x").

Ecrire un programme qui vérifie l'état du jeu en déterminant si des "o" ou des "x" sont alignés horizontalement, verticalement ou en diagonale.

Ce problème étant avancé, il est intéressant de construire des versions différentes de plus en plus avancées:
 - Dans un premier temps, ne vérifier que les lignes:
    - Ecrire une fonction qui vérifie le jeu en fonction d'une valeur ("o" ou "x") et retourne une valeur boolean.
    - Réécrire la fonction pour qu'elle retourne un array dont la clé sera l'index de la ligne et la valeur sera un boolean indiquant si la ligne est valide.
 - Dans un second temps, étendre la vérification aux colonnes.
 - Enfin, étendre la vérification aux lignes diagonales.

[Correction](./corrections/morpions/)
