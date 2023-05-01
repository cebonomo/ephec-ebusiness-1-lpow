# Exercices PHP - files

## Exercice 2 - Lecture de fichier

### Objectifs

 1. Savoir lire un contenu multiligne depuis un fichier texte.

### Enoncés

#### 1. Lecture d'un user

 1. Reprendre le script précédent ([écriture de fichier](../ex1/corrections/part1/index.php)). 
 
 2. Rajouter une fonction qui retourne les données d'un user depuis le fichier: la fonction doit lire le fichier à l'aide de la fonction `fgets` ([PHP doc - fgets](https://www.php.net/manual/fr/function.fgets.php)), et retourner les données d'un user dont on aura donné l'email en argument de la fonction. Pour cela, utiliser la méthode PHP `explode` ([PHP doc - explode](https://www.php.net/manual/fr/function.explode.php)).

 3. Lorsque le formulaire est soumis, avant d'enregistrer le user dans le fichier, vérifier si le user n'est pas déjà enregistré, sur base de l'email, grâce à la fonction précédemment codée. Il ne peut donc pas exister plus d'un email différent dans ce fichier.
 
 4. Si l'email existe déjà (càd si le user est bien présent), ne pas enregistrer. Vérifier si le password est correct et afficher un message en fonction. SI le password est correct, on peut considérer que l'utilisateur est connecté.
 
[Correction](./corrections/part1/)

#### 2. Validations supplémentaires (optionnel)

 1. (Hors cours) Par ailleurs, il faut s'assurer que l'utilisateur n'ait pas envoyé involontairement d'espaces au début ou en fin des données soumises. Pour nettoyer les données des espaces indésirables, il faut utiliser la fonction PHP `trim` ([PHP doc - trim](https://www.php.net/manual/fr/function.trim.php)).

 2. (Hors cours) Pour tester le password hashé, il faut utiliser la méthode PHP `password_verify` ([PHP doc - password_verify](https://www.php.net/manual/fr/function.password-verify.php)).

## Remarques techniques

### Fin de ligne

A noter que le caractère de fin de ligne (ex: "\n" sous Linux, "\n\r" sous Windows ou "\r" sous MacOS) (voir aussi `PHP_EOL`) est inclu dans la valeur retournée par `fgets`. Si l'on désire nettoyer le texte, on peut utiliser la fonction PHP `rtrim` ([PHP doc - rtrim](https://www.php.net/manual/fr/function.rtrim.php)) (en spécifiant éventuellement la valeur `PHP_EOL` comme second argument, selon les cas) (hors cours).
