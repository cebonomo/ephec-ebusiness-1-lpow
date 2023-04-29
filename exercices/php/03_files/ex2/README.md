# Exercices PHP - files

## Exercice 2 - Lecture de fichier

### Objectifs

 1. Savoir lire un contenu multiligne depuis un fichier texte.

### Enoncés

 1. Reprendre le script précédent (écriture de fichier). Rajouter une fonction qui retourne les données d'un user depuis le fichier: la fonction doit lire le fichier à l'aide de la fonction `fgets` ([PHP doc - fgets](https://www.php.net/manual/fr/function.fgets.php)), et retourner les données d'un user dont on aura donné l'email en argument de la fonction. Pour cela, utiliser la méthode PHP `explode` ([PHP doc - explode](https://www.php.net/manual/fr/function.explode.php)).

 2. Lorsque le formulaire est soumis, avant d'enregistrer le user dans le fichier, vérifier si le user n'est pas déjà enregistré, sur base de l'email, grâce à la fonction précédemment codée. Il ne peut donc pas exister plus d'un email différent dans ce fichier. Si l'email existe déjà, ne pas enregistrer et afficher un message d'erreur spécifique.

 3. Créer un formulaire de connexion (email + pwd, champs required). Lorsque ce formulaire est soumis, vérifier si le user est présent dans le fichier, sur base de l'email, grâce à la fonction précédemment codée. S'il n'est pas présent, afficher un message d'erreur spécifique. (Attention également aux espaces accidentels (trim).)
 
 4. Sinon (si le user est bien présent), vérifier si le password est correct. S'il n'est pas correct, afficher un mesage d'erreur spécifique. (Optionnel, car hors cours:) Pour tester le password hashé, il faut utiliser la méthode PHP `password_verify` ([PHP doc - password_verify](https://www.php.net/manual/fr/function.password-verify.php)). (Attention également aux espaces accidentels (trim).)
 
 5. Si tout est correct, ne plus afficher le formulaire et afficher le message "Bienvenue prénom/nom/email", suivant les valeurs disponibles dans le fichier pour ce user.

## Remarques techniques

### Fin de ligne

A noter que le caractère de fin de ligne (ex: "\n" sous Linux, "\n\r" sous Windows ou "\r" sous MacOS) (voir aussi `PHP_EOL`) est inclu dans la valeur retournée par `fgets`. Si l'on désire nettoyer le texte, on peut utiliser la fonction PHP `rtrim` ([PHP doc - rtrim](https://www.php.net/manual/fr/function.rtrim.php)) (en spécifiant éventuellement la valeur `PHP_EOL` comme second argument, selon les cas) (hors cours).
