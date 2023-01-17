# Exercices PHP - forms

## Exercice 1: soumission

### Objectifs

 1. Savoir récupérer les valeurs d'un formulaire utilisant la méthode HTTP "post".

 2. Savoir si un formulaire a été soumis.

 3. Savoir si un champ a été soumis.

 4. Savoir afficher la valeur d'un champ.

### Ennoncés

 1. Créer un formulaire dont l'action est la page courante, de sorte que la page soit rafraîchie lorsque l'utilisateur soumet le formulaire. Ce formulaire doit comprendre les champs suivants:
    - Text
    - Textarea
    - Radio
    - Checkbox
    - Select

 2. Tester si le formulaire a été soumis et afficher un message en conséquence.

 3. Pour chacun des champs, tester si une valeur a été remplie par l'utilisateur, et afficher un message en conséquence.

 4. Pour chacun des champs, afficher dans le champ la valeur soumise par l'utilisateur de sorte que cette valeur ne soit pas perdue lorsque la page se rafraîchit.

### Remarques théoriques

#### Récupération des données HTTP

En PHP, la récupération des données du formulaire transmises en HTTP peut se faire notamment via les [superglobales](https://www.php.net/manual/fr/language.variables.superglobals.php) suivantes:

 - `$_GET` ([PHP doc - $_GET](https://www.php.net/manual/fr/reserved.variables.get.php)) 
 - `$_POST` ([PHP doc - $_POST](https://www.php.net/manual/fr/reserved.variables.post.php)) 

#### Présence des variables

En PHP, pour s'assurer de l'existence d'une variable ou d'une entrée de tableau, il est possible d'utiliser notamment les fonctions suivantes:

 - `isset` ([PHP doc - isset](https://www.php.net/manual/fr/function.isset.php)) 
 - `empty` ([PHP doc - empty](https://www.php.net/manual/fr/function.empty.php)) 

##### isset vs. empty

Le rôle premier des fonctions `isset` et `empty` est de tester si une variable (ou un index/clé de tableau) existe. Mais attention: au-delà de tester l'existance d'une variable, les fonctions `isset` et `empty` testent également la valeur même des variables.

La fonction `isset` retourne `true` si la variable existe ET pour toutes les valeurs sauf `null`.

La fonction `empty` retourne `true` si la variable n'existe PAS OU pour toutes les valeurs "falsy" (`false`, `0`, `''`, `'0'`, `[]`). (Attention que PHP considère également la string `'0'` comme "falsy". Pour plus d'information sur la conversion vers les booléens, voir [PHP doc - booléen](https://www.php.net/manual/fr/language.types.boolean.php).)

Un `!empty` faut donc `true` si la variable existe ET si la valeur n'est pas "falsy" (ce qui est plus étendu comme restriction que `isset` qui ne restreint que sur `null`).

Voir [l'exemple en ligne](https://onlinephp.io/c/10a76).
