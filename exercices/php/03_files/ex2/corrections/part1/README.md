
# PHP - files - corrections

## Lecture dans un fichier

Pour le code complet et correct, voir directement les fichiers de code: 
 - [index.php](./index.php)

### Code principal simplifié

#### Déclaration de la fonction

```php
function selectUserByEmail($fp, $email)
{       
    while (feof($fp) == false) {
        
        $line = fgets($fp); //la ligne contient toutes les données du user séparées par un ";"
        $user = explode(CSV_SEPARATOR, $line);
        
        if ($user[0] == $email) {
            return $user;
        }
    }
    
    return null;
}
```

#### Appel de la fonction

```php
$userFromFile = selectUserByEmail($fp, $_POST_['email']);
```

#### Gestion du formulaire

```php
if ($userFromFile == null) { // il s'agit d'un nouveau user (pas présent dans le fichier)
    insertUser($fp, $_POST); //on insert le user dans le fichier
    $message = 'Utilisateur rajouté!';
    
} elseif ($_POST['password'] == $userFromFile[1]) { // user ok!
    $message = 'Utilisateur connecté!';

} else { // mauvais pwd...
    $message = 'Le mot de passe n\'est pas correct!';
}
```
