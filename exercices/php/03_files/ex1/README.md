# Exercices PHP - files

## Exercice 1 - Ecriture de fichier

### Objectifs

 1. Savoir écrire un contenu multiligne dans un fichier texte.

### Enoncés

 1. Créer manuellement un fichier texte "users.csv" comprenant la ligne suivante: "email,password,lastname,firstname".
 
 2. Reprendre le formulaire d'inscription de l'exercice précédent pour la suite de l'exercice.

 2. Si le formulaire est valide, enregistrer les données dans le fichier (dans l'ordre donné par la première ligne), à l'aide de la fonction `fwrite` ([PHP doc - fwrite](https://www.php.net/manual/fr/function.fwrite.php)). 
    - Chaque donnée du user est sérarée par une virgule (",") (comme pour la première ligne). Pour cela, plusieurs techniques sont possibles:
        - Ecrire les données en plusieurs fois.
        - Recourir à une concaténation pour enregistrer l'ensemble de la ligne en une seule fois.
        - Voir éventuellement, par exemple, la méthode PHP `implode` ([PHP doc - implode](https://www.php.net/manual/fr/function.implode.php)) (hors cours) qui est l'inverse de la méthode `explode` ([PHP doc - explode](https://www.php.net/manual/fr/function.explode.php)).
    - Le charactère de séparation (",") doit être défini dans une constante, car cette valeur ne peut pas être modifiée lors de l'exécution du script.
    - Chaque user occupe une et une seule ligne. Pour délimiter la ligne, il faut ajouter un caractère spécial indiquant la fin de la ligne. (Voir remarques)
  
 3. (Optionnel, car hors cours) Par ailleurs, il faut s'assurer que l'utilisateur n'a pas envoyé involontairement d'espaces au début ou en fin des données soumises. Pour nettoyer les données des espaces indésirables, il faut utiliser la fonction PHP `trim` ([PHP doc - trim](https://www.php.net/manual/fr/function.trim.php)).

 4. (Optionnel, car hors cours) Pour des raisons de sécurité évidentes, le password ne peut pas être enregistré en clair dans le fichier. Il faut donc passer par la fonction PHP `password_hash` ([PHP doc - password_hash](https://www.php.net/manual/fr/function.password-hash.php)) pour hasher le password avant de l'enregistrer.

 5. (Optionnel, car hors cours) Il faut également vérifier que les données enregistrées dans le fichier ne contiennent pas le caractère "," dans le texte, sinon la ligne serait corrompues. Concrètement, dans le cas présent, cela peut se produire si l'utilisateur entre ce caractère dans l'un des champs, ou si PHP génère un hash de password qui ne nous convient pas. Pour détecter la présence d'un caractère, utiliser la fonction PHP `strpos` ([PHP doc - strpos](https://www.php.net/manual/fr/function.strpos.php)). Si le caractère est trouvé, ne pas enregister et afficher un message d'erreur spécifique.

### Remarques théoriques

#### Format CSV (pour information - hors cours)

A noter qu'un fichier de [format CSV](https://fr.wikipedia.org/wiki/Comma-separated_values) (MIME: "text/csv") est un fichier de texte permettant de stocker des valeurs tabulaires. Au sein de chaque ligne, les données sont séparées, normalement, par une virgule.

A noter que dans une vraie application, nous ne passerions pas par un fichier pour stocker nos données, mais par une base de données, un outil de stockage bien plus puissant. Un fichier CSV servirait plutôt lors de l'export de données que l'on souhaite, par exemple, télécharger.

A noter que PHP dispose de fonctions spécifiques au format CSV, mais que celles-ci ne sont pas étudiées ici, car l'objectif de l'exercice est bien de traiter un fichier texte de manière générale, quelque soit son format.
