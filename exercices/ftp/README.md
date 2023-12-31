# Exercices FTP

Les différents exercices présentés dans cette partie vise à utiliser de manière élémentaire un client [FTP](https://fr.wikipedia.org/wiki/File_Transfer_Protocol), et, pour l'exemple, seront basés sur le logiciel [FileZilla](https://fr.wikipedia.org/wiki/FileZilla).

## Exercice 1: connexion rapide

 1. Se connecter à un serveur via des identifiants FTP (user + pwd).

### Erreurs courantes

 1. "530 Login authentication failed" indique que le nom d'utilisateur ou, plus vraisemblablement, le mot de passe n'est pas correct.
 2. "Impossible d’établir une connexion au serveur" indique que l'adresse IP de l'hôte est erronée.

## Exercice 2: ajouter la connexion au gestionnaire de sites

 1. Créer un dossier vide sur votre PC, qui ne soit pas sous votre dossier OneDrive et que vous pouvez nommez "[MATRICULE].lpow.ephec.be"
 2. Enregistrer la connexion actuelle dans son gestionnaire de site.
 3. Dans l'onglet "Avancé" du gestionnaire de site, indiquer le dossier local par défaut par celui que vous venez de créer ("[MATRICULE].lpow.ephec.be")

### Erreurs courantes

Ceci implique que le client FTP aient bien accès aux dossiers, ce qui n'est pas forcément le cas lors de l'utilisation d'un disque distant ("iCloud drive", "OneDrive", ...). Attention que FileZilla n'avertit pas de l'erreur.

## Exercice 3: téléverser

 1. Créer puis téléverser un fichier `index.html` à la racine du projet.
 2. Naviguer vers l'url du serveur (https://[MATRICULE].lpow.ephec.be/) et s'assurer du satut HTTP "200 OK"

### Remarques

Les extensions de fichier ne sont pas affichées par défaut par les gestionnaires de fichiers. Lire les [bonnes pratiques](../../#extensions-de-fichier-cach%C3%A9es) à ce sujet.

Le statut de la réponse HTTP peut être connu via le [web tools](https://en.wikipedia.org/wiki/Web_development_tools) du navigateur.

Suivez les [indications dans la page d'accueil](../../#devtools) pour ouvrir le web tools.

### Erreurs courantes

 1. "403 Forbidden" indique que le fichier `index.html` n'a pas été nommé correctement.

## Exercice 4: Synchroniser

 1. Créer puis téléverser un dossier "Test"
 2. Dans le gestionnaire de site, modifier le site que vous venez de créer, aller dans l'onglet "Avancé" et utiliser la navigation synchronisée
 3. Reconnecter vous
 4. Cliquer sur le dossier "Test"
 5. Que remarquez-vous ?

## Exercice 5: télécharger

 1. Télécharger les fichiers présents à la racine du serveur dans un dossier local vierge et spécifique au projet.


