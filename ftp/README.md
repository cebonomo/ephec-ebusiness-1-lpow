# Exercices FTP

Les différents exercices présentés dans cette partie vise à utiliser de manière élémentaire un client [FTP](https://fr.wikipedia.org/wiki/File_Transfer_Protocol), et, pour l'exemple, seront basés sur le logiciel [FileZilla](https://fr.wikipedia.org/wiki/FileZilla).

## Exercice 1: connexion rapide

 1. Se connecter à un serveur via des identifiants FTP (user + pwd).

### Erreurs courantes

 1. "530 Login authentication failed" indique que le nom d'utilisateur ou, plus vraisemblablement, le mot de passe n'est pas correct.
 2. "Impossible d’établir une connexion au serveur" indique que l'adresse IP de l'hôte est erronée.

## Exercice 2: ajouter la connexion au gestionnaire de sites

 1. Enregistrer la connexion actuelle dans son gestionnaire de site.
 2. Synchroniser le dossier racine distant avec un dossier local vierge et spécifique au projet.

## Exercice 3: téléverser

 1. Créer puis téléverser un fichier `index.*` à la racine du projet. 
 2. Naviguer sur la homepage de l'adresse HTTP du serveur et s'assurer du satut HTTP "200 OK".

### Remarques

Les extensions de fichier ne sont pas affichées par défaut par les gestionnaires de fichiers. Lire les [bonnes pratiques](../) à ce sujet.

Le statut de la réponse HTTP peut être connu via le [web tools](https://en.wikipedia.org/wiki/Web_development_tools) du navigateur.

### Erreurs courantes

 1. "403 Forbidden" indique que le fichier `index.*` n'a pas été créé correctement.

## Exercice 4: télécharger

 1. Télécharger les fichiers présents à la racine du serveur dans un dossier local vierge et spécifique au projet.

