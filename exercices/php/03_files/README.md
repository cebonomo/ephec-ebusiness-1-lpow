# Exercices PHP - files

## Exercice 1 - Ecriture de fichier

### Objectifs

 1. Savoir écrire un contenu multiligne dans un fichier texte.

### Enoncés

 1. Créer manuellement un fichier texte "users.csv" comprenant la ligne suivante: "email,password,lastname,firstname". Reprendre le formulaire d'inscription de l'exercice précédent pour la suite de l'exercice.

 2. Si le formulaire est valide, enregistrer les données dans le fichier (dans l'ordre donné par la première ligne), à l'aide de la fonction `fwrite` ([PHP doc - fwrite](https://www.php.net/manual/fr/function.fwrite.php)). 
    - Chaque user occupe une et une seule ligne. Pour délimiter la ligne, il faut utiliser la constante PHP `PHP_EOL` ([PHP doc - constantes pré-définies](https://www.php.net/manual/fr/reserved.constants.php)).
    - Chaque donnée du user est sérarée par une virgule (",") (comme pour la première ligne). Pour cela, il faut utiliser la méthode PHP `implode` ([PHP doc - implode](https://www.php.net/manual/fr/function.implode.php)). Le charactère de séparation (",") doit être défini dans une constante, car ne peut pas être modifié lors de l'exécution du script.
  
 3. Il faut donc vérifier que l'utilisateur n'entre pas le caractère "," dans l'un des champs, sinon, les données enregistrées seraient corrompues. Pour cela, utiliser la fonction PHP `strpos` ([PHP doc - strpos](https://www.php.net/manual/fr/function.strpos.php)). Si le caractère est trouvé, ne pas enregister et afficher un message spécifique.

 4. Par ailleurs, il faut s'assurer que l'utilisateur n'a pas envoyé involontairement des espaces au début ou à la fin des données soumises. Pour nettoyer les données d'espaces indésirables, il faut utiliser la fonction PHP `trim` ([PHP doc - trim](https://www.php.net/manual/fr/function.trim.php)).

 5. Pour des raisons de sécurité évidentes, le password ne peut pas être enregistré en clair dans le fichier. Il faut donc passer par la fonction PHP `password_hash` ([PHP doc - password_hash](https://www.php.net/manual/fr/function.password-hash.php)) pour hasher le password avant de l'enregistrer.


### Remarques théoriques

#### Format CSV

A noter qu'un fichier de [format CSV](https://fr.wikipedia.org/wiki/Comma-separated_values) (MIME: "text/csv") est un fichier de texte permettant de stocker des valeurs tabulaires. Au sein de chaque ligne, les données sont séparées, normalement, par une virgule.

A noter que dans une vraie application, nous ne passerions pas par un fichier pour stocker nos données, mais par une base de données, un outil de stockage bien plus puissant. Un fichier CSV servirait plutôt lors de l'export de données que l'on souhaite, par exemple, télécharger.

A noter que PHP dispose de fonctions spécifiques au format CSV, mais que celles-ci ne sont pas étudiées ici, car l'objectif de l'exercice est bien de traiter un fichier texte de manière générale, quelque soit son format.

### Remarques pratiques

#### Chemin de fichier

Plusieurs types de chemin de fichier peuvent être passés en argument. S'il s'agit d'un chemin relatif vers un fichier présent sur le serveur, ce qui sera souvent le cas, le chemin absolu est établi d'après le "CWD" (current working directory), c'est-à-dire le répertoire contenant le script principal appelé (souvent celui référencé dans l'URL). Le CWD va donc changer en fonction de l'emplacement du script appelé.

```php
<?php
$relativePath = 'file.txt';
$cwd = getcwd();
$absolutePath = realpath($relativePath);
var_dump($relativePath, $cwd, $absolutePath);
```

Pour plus d'information (notions avancées), voir l'article de [phpdelusions](https://phpdelusions.net/articles/paths).

#### Accessibilité d'un fichier

A noter que la fonction `fopen` peut émettre une erreur si le fichier n'existe pas ou s'il n'est pas accessible en lecture et/ou en écriture. Une bonne pratique consiste donc à tester l'accessibilité du fichier au préalable de toute manipulation.

```php
<?php

$filePath = 'file.txt';

if (!is_readable($filePath)) {
    // traitement en cas d'impossibilité de lecture
} elseif (!is_writable($filePath)) {
    // traitement en cas d'impossibilité d'écriture
} else {
    $fp = fopen($filePath, 'w+');
    if ($fp === false) {
        // traitement en cas d'erreur d'ouverture du fichier
    } else {
        // traitement normal
    }
}
```

## Exercice 2 - Lecture de fichier

### Objectifs

 1. Savoir lire un contenu multiligne depuis un fichier texte.

### Enoncés

 1. Reprendre le script précédent (écriture de fichier). Rajouter une fonction qui retourne les données d'un user: la fonction doit lire le fichier à l'aide de la fonction `fgets` ([PHP doc - fgets](https://www.php.net/manual/fr/function.fgets.php)), et retourner les données d'un user dont on aura donné l'email en argument de la fonction. Pour cela, utiliser la méthode PHP `explode` ([PHP doc - explode](https://www.php.net/manual/fr/function.explode.php)).

 2. Lorsque le formulaire est soumis, avant d'enregistrer le user dans le fichier, vérifier si le user n'est pas déjà enregistré, sur base de l'email, grâce à la fonction précédemment codée. Il ne peut donc pas exister plus d'un email différent dans ce fichier. Si l'email existe déjà, ne pas enregistrer et afficher un message d'erreur spécifique.

 3. Créer un formulaire de connexion (email + pwd, champs required). Lorsque ce formulaire est soumis, vérifier si le user est présent dans le fichier, sur base de l'email, grâce à la fonction précédemment codée. S'il n'est pas présent, afficher un message d'erreur spécifique. (Attention également aux espaces accidentels (trim).)
 
 4. Sinon (si le user est bien présent), vérifier si le password est correct. S'il n'est pas correct, afficher un mesage d'erreur spécifique. Pour tester le password hashé, il faut utiliser la méthode PHP `password_verify` ([PHP doc - password_verify](https://www.php.net/manual/fr/function.password-verify.php)). (Attention également aux espaces accidentels (trim).)
 
 5. Si tout est correct, ne plus afficher le formulaire et afficher le message "Bienvenue prénom/nom/email", suivant les valeurs disponibles dans le fichier pour ce user.

### Remarques pratiques

#### Fin de ligne

A noter que le charctère de fin de ligne est inclu dans la valeur retournée par `fgets`. Si l'on désire nettoyer le texte, on peut utiliser la fonction PHP `rtrim` ([PHP doc - rtrim](https://www.php.net/manual/fr/function.rtrim.php)) (en spécifiant éventuellement la valeur `PHP_EOL` comme second argument, selon les cas).

