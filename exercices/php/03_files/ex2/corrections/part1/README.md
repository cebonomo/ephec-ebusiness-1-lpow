
# PHP - files - corrections

## Lecture dans un fichier

Pour le code complet et correct, voir directement les fichiers de code.

### Code principal simplifié

#### Déclaration de la fonction

On éclaration la fonction permettant de récupérer les données d'un user depuis le fichier, et ce en fonction de son email.

```php
function selectUserByEmail($fp, $email)
{       
    while (feof($fp) == false) {
        
        $line = fgets($fp); // la ligne contient toutes les données du user courant séparées par un ";"
        $user = explode(CSV_SEPARATOR, $line); // comme séparateur, on utilise la constante déjà définie
        
        if ($user[0] == $email) {
            return $user;
        }
    }
    
    return null; // le user n'a pas été trouvé
}
```

#### Appel de la fonction

Après ouverture du fichier, on appelle la fonction en lui précisant l'email entré par l'utilisateur depuis le formulaire.

```php
$fp = fopen('users.csv', 'a+'); // note le mode a+ est dû à la nécessité de lire et d'écrire dans le fichier.
$userFromFile = selectUserByEmail($fp, $_POST_['email']);
```

#### Gestion du formulaire

On gère les différentes logiques en fonction de l'état du fichier.

```php
if ($userFromFile == null) { // il s'agit d'un nouveau user (pas présent dans le fichier)
    insertUser($fp, $_POST); // on insert le user dans le fichier (voir exercice précédent)
    $message = 'Utilisateur rajouté!';
    
} elseif ($_POST['password'] == $userFromFile[1]) { // user ok!
    $message = 'Utilisateur connecté!';

} else { // mauvais pwd...
    $message = 'Le mot de passe n\'est pas correct!';
}
```
