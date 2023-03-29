# Exercices PHP - forms

## Exercices

 1. [Exercice 1: soumission](./ex1/)
 2. [Exercice 2: validation](./ex2/)

## Documentation

 1. [PHP tuto - utiliser un formulaire](https://www.php.net/manual/fr/tutorial.forms.php)

## Remarques théoriques

### Récupération des données HTTP

En PHP, la récupération des données du formulaire transmises en HTTP peut se faire notamment via les [superglobales](https://www.php.net/manual/fr/language.variables.superglobals.php) suivantes:

 - `$_GET` ([PHP doc - $_GET](https://www.php.net/manual/fr/reserved.variables.get.php)) 
 - `$_POST` ([PHP doc - $_POST](https://www.php.net/manual/fr/reserved.variables.post.php)) 

 Ces variables sont des array associatifs.

 #### Exemple avec un formulaire

 Si l'information provient d'un formulaire HTML, pour chaque champ du formulaire posté correspondra les informations suivantes:

  - Le "name" du champ constitue une clé
  - La "value" du champ constitue la valeur associé à la clé

Soit le formulaire HTML suivant:
```html
<form method="post" action="">
    <input name="pet" value="petit chaton">
</form>
```
Lorsque le formulaire est envoyé, on retrouve les valeurs suivantes dans PHP:
```php
<?php

if (isset($_POST['pet'])) { // si la clé existe (càd si le formulaire a été envoyé avec ce champ)
    echo $_POST['pet']; // affiche "petit chaton"
}
```

On remarque que seule la variable `$_POST` contient les informations provenant du formulaire, étant donné que le formulaire est envoyé en POST.

### Présence des variables (hors cours)

En PHP, pour s'assurer de l'existence d'une variable ou d'une entrée de tableau, il est possible d'utiliser notamment les fonctions suivantes:

 - `isset` ([PHP doc - isset](https://www.php.net/manual/fr/function.isset.php)) 
 - `empty` ([PHP doc - empty](https://www.php.net/manual/fr/function.empty.php)) 

#### isset vs. empty

Le rôle premier des fonctions `isset` et `empty` est de tester si une variable (ou un index/clé de tableau) existe. Mais attention: au-delà de tester l'existance d'une variable, les fonctions `isset` et `empty` testent également la valeur même des variables.

La fonction `isset` retourne `true` si la variable existe ET pour toutes les valeurs sauf `null`.

La fonction `empty` retourne `true` si la variable n'existe PAS OU pour toutes les valeurs "falsy" (`false`, `0`, `''`, `'0'`, `[]`). (Attention que PHP considère également la string `'0'` comme "falsy". Pour plus d'information sur la conversion vers les booléens, voir [PHP doc - booléen](https://www.php.net/manual/fr/language.types.boolean.php).)

Un `!empty` vaut donc `true` si la variable existe ET si la valeur n'est pas "falsy" (ce qui est plus étendu comme restriction que `isset` qui ne restreint que sur `null`).

Voir [l'exemple en ligne](https://onlinephp.io/c/10a76).

 