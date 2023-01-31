# Exercices PHP - display

## Objectif

 1. Savoir générer du code HTML depuis PHP.

 2. Savoir conditionner du code HTML à l'aide de PHP.

 3. Savoir générer udu code HTML depuis une boucle en PHP


## Enoncés

 1. Générer du code HTML depuis PHP. (Voir remarques pratiques.)

 2. Conditionner du code HTML à l'aide de PHP. (Voir remarques pratiques.)

 3. Afficher un tableau HTML de dimension 4x3 (4 lignes sur 3 colonnes). Ce tableau doit être généré dynamiquement depuis PHP.
    - Chaque ligne doit posséder une classe indiquant si elle est paire ou impaire.
    - Chaque cellule doit contenir un identifiant basé sur le nommage d'Excel (la lettre majuscule de la colonne suivi du numéro de la ligne). Pour la conversion d'un nombre en lettre, voir la fonction PHP `chr` ([PHP doc - chr](https://www.php.net/manual/fr/function.chr.php)) (ex: `chr(65)` retournera la string "A").

 ![Tableau dynamique](../../../resources/images/dynamic-table.png)

[Corrections](./corrections/)


## Remarques pratiques

### Afficher du texte

Il existe plusieurs façons d'afficher du texte (du HTML, par exemple) dans un fichier PHP.

#### En dehors des balises PHP

Naturellement, PHP s'inscrit dans du texte. Tout ce qui n'est pas entre des balises PHP est donc du simple texte, non interprété.

```php
<?php 
  // code php
?>
Ceci est du texte.
<?php 
  // code php
?>
```

#### Au sein des balises PHP

Au sein d'un code PHP, il est possible, pour afficher du texte dans le navigateur, d'utiliser notamment la commande `echo` ([PHP doc - echo](https://www.php.net/manual/fr/function.echo.php)). 

```php
<?php 
  echo 'Ceci est du texte.';
?>
```

A noter qu'il existe aussi une syntaxe courte (appelée "short open tag").

```php
<?= 'Ceci est du texte.' ?>
```

### Contrôle du texte

#### En dehors des balises PHP

De même, on peut contrôler du texte qui se trouve entre deux balises PHP.

##### if

```php
<?php 
  if (true) {
?>
Ceci est visible.
<?php 
  } else {
?>
Ceci n'est PAS visible.
<?php 
  }
?>
```

##### for

```php
<?php 
  for ($i = 0; $i < 5; $i++) {
?>
Ceci est affiché 5 fois.
<?php 
  }
?>
```

##### Syntaxe alternative

A noter (hors cours) qu'il existe une syntaxe alternative des structures de contrôle, particulière à ce cas d'utilisation et plus lisible (voir [PHP doc - syntaxe alternative](https://www.php.net/manual/fr/control-structures.alternative-syntax.php)).
