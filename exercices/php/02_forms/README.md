# Exercices PHP - forms

## Exercices

 1. [Exercices 1: soumission](./ex1/)
 2. [Exercices 2: validation (hors cours)](./ex2/)

## Documentation

 1. [PHP tuto - utiliser un formulaire](https://www.php.net/manual/fr/tutorial.forms.php)

## Remarques théoriques

Revoir la partie HTML consacrée aux [formulaires](../../../exercices/html/ex7).

### Récupération des données HTTP

En PHP, la récupération des données du formulaire transmises en HTTP peut se faire notamment via les [superglobales](https://www.php.net/manual/fr/language.variables.superglobals.php) suivantes:

 - `$_GET` ([PHP doc - $_GET](https://www.php.net/manual/fr/reserved.variables.get.php)) récupère les données passées à l'URL en [querystring](https://en.wikipedia.org/wiki/Query_string) (depuis, par exemple, un lien ou un formulaire en GET).
 - `$_POST` ([PHP doc - $_POST](https://www.php.net/manual/fr/reserved.variables.post.php)) récupère les données passées dans le body de la requête HTTP (depuis, par exemple, un formulaire en POST).

 Ces variables superglobales sont des array associatifs (potentiellement multidimensionnels).

 A noter qu'il existe d'autres superglobales qui seront utilisées dans d'autres cas (fichiers, cookies, ...).

 #### Exemple avec un formulaire

 Si l'information provient d'un formulaire HTML, pour chaque champ du formulaire posté correspondent les informations suivantes:

  - Le "name" du champ constitue une clé.
  - La "value" du champ constitue la valeur associée à la clé.

Soit le formulaire HTML suivant:
```html
<form method="post" action="form.php">
    <input type="submit" name="pet" value="petit chaton">
</form>
```
Lorsque le formulaire est envoyé, on retrouve les valeurs suivantes dans PHP:
```php
<?php
// fichier form.php

if (isset($_POST['pet'])) { // (hors cours) si la clé "pet" existe (càd si le formulaire a été envoyé avec ce champ)
    echo $_POST['pet']; // affiche "petit chaton"
}
```

On remarque que seule la variable `$_POST` contient les informations provenant du formulaire, étant donné que le formulaire est envoyé via une requête HTTP en POST, tel que spécifié dans l'attribut `method` (ce qui est le comportement le plus fréquent pour un formulaire).

De même, c'est bien la ressource spécifiée dans l'attribut `action` qui est appelée par la requête HTTP.

### Présence des variables (hors cours)

#### isset et empty

En PHP, pour s'assurer de l'existence d'une variable ou d'une entrée de tableau, il est possible d'utiliser notamment les fonctions suivantes:

 - `isset` ([PHP doc - isset](https://www.php.net/manual/fr/function.isset.php)) 
 - `empty` ([PHP doc - empty](https://www.php.net/manual/fr/function.empty.php)) 

Le rôle premier des fonctions `isset` et `empty` est de tester si une variable (ou un index/clé de tableau) existe.

```php
<?php

$number = 0; // affecte la valeur 0 par défaut
if (isset($_GET['number'])) { // si la valeur GET existe (et qu'elle n'est pas null)
    $number = $_GET['number']; // affecte la valeur GET
}
```

Attention: au-delà de tester l'existance d'une variable, les fonctions `isset` et `empty` testent également la valeur même des variables.

La fonction `isset` retourne `true` si la variable existe ET si elle n'est pas `null`.

La fonction `empty` retourne `true` si la variable n'existe PAS OU pour toutes les valeurs "falsy" (`false`, `0`, `''`, `'0'`, `[]`, `null`). (Attention que PHP considère également la string `'0'` comme "falsy". Pour plus d'information sur la conversion vers les booléens, voir [PHP doc - booléen](https://www.php.net/manual/fr/language.types.boolean.php).)

Un `!empty` vaut donc `true` si la variable existe ET si la valeur n'est pas "falsy" (ce qui est plus étendu comme restriction que `isset` qui ne restreint que sur `null`).

Voir [l'exemple en ligne](https://onlinephp.io/c/10a76).

#### Opérateur de coalescence

Une autre possibilité consoste à utiliser l'opérateur `??` (dit de [coalescence](https://www.php.net/manual/fr/language.operators.assignment.php)) qui permet de définir une valeur par défaut si l'entrée n'existe pas ou si elle est `null` (comme pour `isset`).

Exemple:

```php
<?php

$number = $_GET['number'] ?? 0; // affecte la valeur GET ou 0 par défaut
```

### Validation des formulaires

**DISCLAIMER:** Les formulaires constituant une entrée majeure dans un programme, les données soumises doivent impérativement faire l'objet de différents types de vérification, en particulier de vérification de sécurité. Sans cela, le programme est vulnérable à de nombreuses attaques. Toutefois, ce sujet dépasse le cadre de ce cours et n'est donc pas traité ici. Attention toutefois, dans un vrai programme, à ne jamais coder de formulaire sans validation!
