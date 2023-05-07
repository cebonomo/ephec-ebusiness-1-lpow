# Exercices PHP - forms

## Exercices 2: validation (hors cours)

### Objectifs

 1. Savoir tester la présence de champs obligatoires.

 2. Savoir si un formulaire soumis est valide.

### Enoncés

 1. Afficher un formulaire d'inscription avec les champs suivants:
    - "Civilité"
    - "Prénom"
    - "Nom"
    - "Adresse email"
    - "Mot de passe"
    - "Confirmer le mot de passe"
    - "Accepter les conditions générales" (checkbox)

 2. Seuls les champs "Adresse email", "Mot de passe", "Confirmer le mot de passe" et la checkbox sont obligatoires. S'il manque une valeur obligatoire, afficher un message d'erreur du type "Le champ x est obligatoire.".
 
 3. Si les deux mots de passe sont différents, afficher un message d'erreur spécifique.

 4. (Optionnel, car hors cours) Vérifier le format de l'email soumis. Il est nécessaire de s'assurer que la valeur transmise est effectivement un email. Pour cela (hors cours), il faut utiliser, par exemple, la fonction PHP `filter_var` ([PHP doc - filter_var](https://www.php.net/manual/fr/function.filter-var.php)) avec le filtre de validation `FILTER_VALIDATE_EMAIL` ([PHP doc - types de filtres](https://www.php.net/manual/fr/filter.filters.php)). Si le format n'est pas valide, afficher un message d'erreur spécifique.
 
 5. Lorsque le formulaire est réaffiché avec les erreurs, les valeurs des champs ne doivent pas être perdues, sauf les mots de passe erronés.
 
 6. Si le formulaire est soumis de manière correcte, ne plus afficher le formulaire, et afficher un message "Bienvenue prénom/nom/email", suivant les valeurs disponibles.

### Remarques techniques

#### Validation client vs. server

Il existe deux validations de formulaires:
 - La validation des données côté client est une nécessité pour des raisons d'UX.
 - La validation des données côté serveur est une nécessité pour des raisons de sécurité.

Sur la validation côté client, voir [MDN docs - validation des données de formulaires](https://developer.mozilla.org/fr/docs/Learn/Forms/Form_validation).

