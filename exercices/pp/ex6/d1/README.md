# Tableaux indexés simples

## Exercices 1: lecture

### Objectifs

 1. Savoir déclarer un tableau non vide.

 2. Savoir accéder à une valeur d'un tableau depuis un index.

 3. Savoir déterminer la longueur d'un tableau.

 4. Savoir boucler sur les valeurs d'un tableau.

 5. Savoir boucler sur les index d'un tableau.

 6. (Optionel) Comprendre l'instruction `break` dans une boucle. 

### Enoncés

#### 1. Sélection d'une entrée

Ecrire un programme choississant et affichant une entrée d'un tableau.

Pour cela, il est nécessaire de :
   1. Créer un tableau indexé listant plusieurs entrées (prénoms de chatons, élèves d'une classe, personnages de la communauté de l'anneau, ...).
   2. Déterminer un indice (ou index) existant du tableau et extraire l'entrée associée.

La difficulté de l'exercice réside dans la nécessité d'utiliser un indice extistant, et ce de manière dynamique. Pour cela, on s'aidera de la longueur du tableau. En PHP, la longueur d'un tableau peut être connue grâce à la fonction `count` ([PHP doc - count](https://www.php.net/manual/fr/function.count.php)).
 
Pour rendre l'exemple plus fun (optionnel), on peut imaginer déterminer l'indice de manière aléatoire. En PHP, voir par exemple la fonction `rand` ([PHP doc - rand](https://www.php.net/manual/fr/function.rand.php)) qui peut retourner un nombre compris entre deux valeurs (hors cours).

[Correction](./corrections/read/1-index/)

#### 2. Calculs

Ecrire un programme calculant et affichant la moyenne d'une liste de nombres.

Pour cela, il est donc nécessaire de:

 1. Calculer la somme des termes présents dans la liste. Pour cela, il faut extraire chaque valeur en parcourant la totalité de la liste, et additionner chaque valeur à un total.

 2. Diviser la somme des termes par le nombre de termes. Pour connaître le nombre de termes, il faut simplement connaître la longueur du tableau.

[Correction](./corrections/read/2-average/)

#### 3. Recherche d'entrée

Ecrire un programme affichant la valeur la plus élevée d'une liste de nombres.

Pour cela, il faut parcourir le tableau et retenir le nombre le plus élevé.

[Correction](./corrections/read/3-top/)

#### 4. Recherche d'indice

Ecrire un programme affichant l'indice (ou index) d'une valeur contenue dans un tableau. Si plusieurs valeurs identiques existent dans le tableau, la fonction retournera uniquement l'indice de la première valeur. Par exemple, pour le tableau `['chiot', 'chaton', 'chaton', ...]`, la fonction retournera l'indice `1` pour la valeur `'chaton'`.

[Correction](./corrections/read/4-search/)

## Exercices 2: écriture

### Objectifs

 1. Savoir écraser une valeur prédéfinie.

 2. Savoir ajouter des valeurs en fin de tableau.

 3. (Optionnel) Comprendre l'instruction `continue` dans une boucle.

### Enoncés

#### 1. Remplacement
 
Remplacer un élément de tableau selon son indice. Il s'agit de remplacer une entrée de l'indice x par une nouvelle valeur.

#### 2. Split
 
Ecrire un programme séparant, depuis une liste de nombres, les nombres strictements positifs, les 0 et les nombres strictement négatifs.
 
#### 3. Order (optionnel)

Ecrire une fonction classant par ordre croissant une liste de nombres.

Algorithme:

0. Soit un tableau de nombres.
1. Pour chaque entrée du tableau, boucler sur chaque entrée. Autrement dit, imbriquer deux boucles iétrant sur le tableau. Il est important de travailler avec les indices du tableau => utiliser for plutôt que foreach.
2. Si la valeur de i est plus petite que la valeur de j, intervertir les deux valeurs.
