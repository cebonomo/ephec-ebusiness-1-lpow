# Exercices PHP

Ces exercices complètent les exercices [HTML](../html) et [principes de programmation](../pp). Il est donc nécessaire d'avoir terminé ces chapitres précédents pour débuter celui-ci.


## Exercice 1: form - présence des données

### Remarques théoriques préalables

#### Récupération des données HTTP

En PHP, la récupération des données du formulaire transmises en HTTP peut se faire notamment via les [superglobales](https://www.php.net/manual/fr/language.variables.superglobals.php) suivantes:
    - `$_GET` ([PHP doc - $_GET](https://www.php.net/manual/fr/reserved.variables.get.php)) 
    - `$_POST` ([PHP doc - $_POST](https://www.php.net/manual/fr/reserved.variables.post.php)) 

#### Présence des variables

En PHP, pour s'assurer de l'existence d'une variable ou d'une entrée de tableau, il est possible d'utiliser notamment les fonctions suivantes:
    - `isset` ([PHP doc - isset](https://www.php.net/manual/fr/function.isset.php)) 
    - `empty` ([PHP doc - empty](https://www.php.net/manual/fr/function.empty.php)) 

### Ennoncés

 1. Input text/hidden/textarea
 2. Radio
 3. Checkbox
 4. Select

## Exercice 2: form - affichage des données récupérées

### Ennoncés

 1. Input text/hidden/textarea
 2. Radio
 3. Checkbox
 4. Select

## Exercice 3: form - validation - required

### Remarques théoriques préalables

#### Objectifs

L'objectif de l'exercice est de s'assurer de la présence de champs obligatoires. 

Il existe deux validations de formulaires:
 - La validation des données côté client est une nécessité pour des raisons d'UX.
 - La validation des données côté serveur est une nécessité pour des raisons de sécurité.

Sur la validation côté client, voir [MDN docs - validation des données de formulaires](https://developer.mozilla.org/fr/docs/Learn/Forms/Form_validation).

Pour tester le comportement du côté serveur, il est nécessaire de pouvoir soumettre des données incorrectes. Il fut donc désactiver la validation du côté client, de manière temporaire. 

### Enoncés

 1. Afficher un formulaire d'inscription avec un champ "Prénom", "Nom", "Adresse email", un champ "Mot de passe" et une checkbox "Accepter les conditions générales". Seuls les champs "Adresse email", "Mot de passe" et la checkbox sont obligatoires. S'il manque une valeur obligatoire, afficher "Le champ x est obligatoire.".

