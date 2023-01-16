# Exercices PHP - forms

## Exercice 1: form - soumission

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


## Exercice 2: form - validation - required

### Objectifs

 1. Savoir tester la présence de champs obligatoires.

 2. Savoir si un formulaire soumis est valide.

### Enoncés

 1. Afficher un formulaire d'inscription avec un champ "Prénom", "Nom", "Adresse email", un champ "Mot de passe", un champ "Confirmer le mot de passe" et une checkbox "Accepter les conditions générales".

 2. Seuls les champs "Adresse email", "Mot de passe", "Confirmer le mot de passe" et la checkbox sont obligatoires. S'il manque une valeur obligatoire, afficher un message d'erreur du type "Le champ x est obligatoire.".
 
 3. Si les deux mots de passe sont différents, afficher un message d'erreur spécifique.
 
 4. Lorsque le formulaire est réaffiché avec les erreurs, les valeurs des champs ne doivent pas être perdues, sauf les mots de passe dont les champs doivent être vidés si les mots de passe ne correspondent pas.
 
 5. Si le formulaire est soumis de manière correcte, ne plus afficher le formulaire, et afficher un message "Bienvenue prénom/nom/email", suivant les valeurs disponibles.

### Remarques théoriques

Il existe deux validations de formulaires:
 - La validation des données côté client est une nécessité pour des raisons d'UX.
 - La validation des données côté serveur est une nécessité pour des raisons de sécurité.

Sur la validation côté client, voir [MDN docs - validation des données de formulaires](https://developer.mozilla.org/fr/docs/Learn/Forms/Form_validation).

Pour tester le comportement du côté serveur, il est nécessaire de pouvoir soumettre des données incorrectes. Il fut donc désactiver la validation du côté client, de manière temporaire. Pour cela, on peut utiliser l'attribut `novalidate`. 
