# Exercices PHP - files

## Exercice 1 - Ecriture de fichier

### Objectifs

 1. Savoir détecter si un fichier existe et est accessible en lecture et en écriture.

 2. Savoir écrire dans un fichier texte.

 3. Savoir hasher un password.

### Enoncés

 1. Reprendre le formulaire d'inscription de l'exercice précédent.

 2. Enregistrer les données dans un fichier "users.txt". Chaque user occupera une ligne. Chaque donnée du user sera sérarée par un charactère ":". Pour cela, il faut utiliser la méthode php `implode` ([PHP doc - implode](https://www.php.net/manual/fr/function.implode.php)). 
  
 3. Il faut donc vérifier que l'utilisateur n'entre pas ce caractère spécial dans l'un des champs, sinon, les données enregistrées seraient corrompues. Pour cela, utiliser la fonction PHP `strpos` ([PHP doc - strpos](https://www.php.net/manual/fr/function.strpos.php)). Si le caractère est trouvé, ne pas enregister et afficher un message spécifique.

 4. Pour des raisons de sécurité évidentes, le password ne peut pas être enregistré en clair dans le fichier. Il faut donc passer par la fonction PHP `password_hash` ([PHP doc - password_hash](https://www.php.net/manual/fr/function.password-hash.php)) pour hacher le password avant de l'enregistrer.

 5. Le script PHP doit gérer le cas où le fichier n'existe pas, ou n'est pas accessible en lecture et en écriture.


## Exercice 2 - Lecture de fichier

### Objectifs

 1. Savoir lire dans un fichier texte.

 2. Savoir séparer une chaîne de charactères.

 3. Savoir tester un password hashé.

### Enoncés

 1. Reprendre le script précédent (écriture de fichier). Rajouter une fonction qui retourne les données d'un user. La fonction doit lire le fichier et retourner les données d'un user dont on aura donné l'email en argument de la fonction. Pour cela, utiliser la méthode PHP `explode` ([PHP doc - explode](https://www.php.net/manual/fr/function.explode.php)).

 2. Lorsque le formulaire est soumis, avant d'enregistrer le user dans le fichier, vérifier si le user n'est pas déjà enregistré, sur base de l'email, grâce à la fonction précédemment codée. Il ne peut donc pas exister plus d'un email différent dans ce fichier. Si l'email existe déjà, ne pas enregistrer et afficher un message d'erreur spécifique.

 3. Créer un formulaire de connexion (email + pwd, champs required). Lorsque ce formulaire est soumis, vérifier si le user est présent dans le fichier, sur base de l'email, grâce à la fonction précédemment codée. S'il n'est pas présent, afficher un message d'erreur spécifique.
 
 4. Sinon (si le user est bien présent), vérifier si le password est correct. S'il n'est pas correct, afficher un mesage d'erreur spécifique. Pour tester le password hashé, il faut utiliser la méthode PHP `password_verify` ([PHP doc - password_verify](https://www.php.net/manual/fr/function.password-verify.php)).
 
 5. Si tout est correct, ne plus afficher le formulaire et afficher le message "Bienvenue prénom/nom/email", suivant les valeurs disponibles dans le fichier pour ce user.
