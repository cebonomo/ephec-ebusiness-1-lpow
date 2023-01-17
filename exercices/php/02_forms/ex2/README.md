# Exercices PHP - forms

## Exercice 2: validation

### Objectifs

 1. Savoir tester la présence de champs obligatoires.

 2. Savoir si un formulaire soumis est valide.

### Enoncés

 1. Afficher un formulaire d'inscription avec un champ "Prénom", "Nom", "Adresse email", un champ "Mot de passe", un champ "Confirmer le mot de passe" et une checkbox "Accepter les conditions générales".

 2. Seuls les champs "Adresse email", "Mot de passe", "Confirmer le mot de passe" et la checkbox sont obligatoires. S'il manque une valeur obligatoire, afficher un message d'erreur du type "Le champ x est obligatoire.".
 
 3. Si les deux mots de passe sont différents, afficher un message d'erreur spécifique.

 4. Vérifier le format de l'email soumis. Il est nécessaire de s'assurer que la valeur transmise est effectivement un email. Pour cela, il faut utiliser la fonction PHP `filter_var` ([PHP doc - filter_var](https://www.php.net/manual/fr/function.filter-var.php)) avec le filtre de validation `FILTER_VALIDATE_EMAIL` ([PHP doc - types de filtres](https://www.php.net/manual/fr/filter.filters.php)). Si le format n'est pas valide, afficher un message d'erreur spécifique.
 
 5. Lorsque le formulaire est réaffiché avec les erreurs, les valeurs des champs ne doivent pas être perdues, sauf les mots de passe.
 
 6. Si le formulaire est soumis de manière correcte, ne plus afficher le formulaire, et afficher un message "Bienvenue prénom/nom/email", suivant les valeurs disponibles.

### Remarques pratiques

#### Client vs. server

Il existe deux validations de formulaires:
 - La validation des données côté client est une nécessité pour des raisons d'UX.
 - La validation des données côté serveur est une nécessité pour des raisons de sécurité.

Sur la validation côté client, voir [MDN docs - validation des données de formulaires](https://developer.mozilla.org/fr/docs/Learn/Forms/Form_validation).

#### novalidate

Pour tester le comportement du côté serveur, il est nécessaire de pouvoir soumettre des données incorrectes. Il faut donc désactiver la validation du côté client, de manière temporaire. Pour cela, on peut utiliser l'attribut `novalidate`. 
