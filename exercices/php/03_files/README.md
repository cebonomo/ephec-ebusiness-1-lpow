# Exercices PHP - files

## Exercice 1 - Ecriture de fichier

### Objectifs

 1. Savoir détecter si un fichier existe et est accessible en lecture et en écriture.

 2. Savoir écrire dans un fichier texte un contenu multiligne.

 3. Comprendre l'importance de hasher un password.

### Enoncés

 1. Créer manuellement un fichier texte "users.csv" comprenant la ligne suivante: "email,password,lastname,firstname". Reprendre le formulaire d'inscription de l'exercice précédent pour la suite de l'exercice.

 2. Si le formulaire est valide, enregistrer les données dans le fichier (dans l'ordre donné par la première ligne), à l'aide de la fonction `fwrite` ([php doc - fwrite](https://www.php.net/manual/fr/function.fwrite.php)). 
    - Chaque user occupe une et une seule ligne. Pour délimiter la ligne, il faut utiliser la constante PHP `PHP_EOL` ([PHP doc - constantes pré-définies](https://www.php.net/manual/fr/reserved.constants.php)).
    - Chaque donnée du user est sérarée par une virgule (",") (comme pour la première ligne). Pour cela, il faut utiliser la méthode PHP `implode` ([PHP doc - implode](https://www.php.net/manual/fr/function.implode.php)).
  
 3. Il faut donc vérifier que l'utilisateur n'entre pas le caractère "," dans l'un des champs, sinon, les données enregistrées seraient corrompues. Pour cela, utiliser la fonction PHP `strpos` ([PHP doc - strpos](https://www.php.net/manual/fr/function.strpos.php)). Si le caractère est trouvé, ne pas enregister et afficher un message spécifique.

 4. Pour des raisons de sécurité évidentes, le password ne peut pas être enregistré en clair dans le fichier. Il faut donc passer par la fonction PHP `password_hash` ([PHP doc - password_hash](https://www.php.net/manual/fr/function.password-hash.php)) pour hacher le password avant de l'enregistrer.

 5. Le script PHP doit gérer le cas où le fichier n'existe pas, ou n'est pas accessible en lecture et en écriture.

### Remarques théoriques

#### Format CSV

A noter qu'un fichier de [format CSV](https://fr.wikipedia.org/wiki/Comma-separated_values) (MIME: "text/csv") est un fichier de texte permettant de stocker des valeurs tabulaires. Au sein de chaque ligne, les données sont séparées, normalement, par une virgule.

A noter que dans une vraie application, nous ne passerions pas par un fichier pour stocker nos données, mais par une base de données, un outil de stockage bien plus puissant. Un fichier CSV servirait plutôt lors de l'export de données que l'on souhaite, par exemple, télécharger.

A noter que PHP dispose de fonctions spécifiques au format CSV, mais que celles-ci ne sont pas étudiées ici, car l'objectif de l'exercice est bien de traiter un fichier texte de manière générale, quelque soit son format.

## Exercice 2 - Lecture de fichier

### Objectifs

 1. Savoir lire dans un fichier texte un contenu multiligne.

 2. Savoir séparer une chaîne de charactères.

### Enoncés

 1. Reprendre le script précédent (écriture de fichier). Rajouter une fonction qui retourne les données d'un user: la fonction doit lire le fichier à l'aide de la fonction `fread` ([php doc - fread](https://www.php.net/manual/fr/function.fread.php)), et retourner les données d'un user dont on aura donné l'email en argument de la fonction. Pour cela, utiliser la méthode PHP `explode` ([PHP doc - explode](https://www.php.net/manual/fr/function.explode.php)).

 2. Lorsque le formulaire est soumis, avant d'enregistrer le user dans le fichier, vérifier si le user n'est pas déjà enregistré, sur base de l'email, grâce à la fonction précédemment codée. Il ne peut donc pas exister plus d'un email différent dans ce fichier. Si l'email existe déjà, ne pas enregistrer et afficher un message d'erreur spécifique.

 3. Créer un formulaire de connexion (email + pwd, champs required). Lorsque ce formulaire est soumis, vérifier si le user est présent dans le fichier, sur base de l'email, grâce à la fonction précédemment codée. S'il n'est pas présent, afficher un message d'erreur spécifique.
 
 4. Sinon (si le user est bien présent), vérifier si le password est correct. S'il n'est pas correct, afficher un mesage d'erreur spécifique. Pour tester le password hashé, il faut utiliser la méthode PHP `password_verify` ([PHP doc - password_verify](https://www.php.net/manual/fr/function.password-verify.php)).
 
 5. Si tout est correct, ne plus afficher le formulaire et afficher le message "Bienvenue prénom/nom/email", suivant les valeurs disponibles dans le fichier pour ce user.
