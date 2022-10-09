# ephec-lpow-site

Est présenté ici le code développé durant les TP du cours de LPOW de l'EPHEC.

Les TP sont organisés en 3 temps, selon la matière abordée durant les cours de théorie.
Chaque matière se retrouve dans dossier spécifique:
 1. [HTML](./html)
 2. CSS (à venir)
 3. Javascript (à venir)

Chaque dossier contient les différentes étapes d'élaboration du code.


## Bonnes pratiques

### Création du dossier de projet

Au préalable de tout code, il est nécessaire de créer un dossier spécifique visant à contenir (uniquement) le projet.
(Par exemple: `Documents\MesSites\lpow`.) Dans le cadre d'un site, c'est ce dossier qui sera déployé (via FTP, par exemple) sur le serveur d'hébergement.

### Extension de fichier

Attention que, généralement, les explorateurs de fichiers cachent par défaut les extensions de fichier (`.html`, `.php`, `.jpg`, ...),
ce qui peut poser problème lors du nommage des fichiers ou de la lecture des noms de fichier.
Dès lors qu'est utilisé un explorateur de fichier dans le cadre des TP, il est conseillé d'activer l'affichage des extensions de fichiers.

### Nommage des fichiers

Le nommage des fichiers posant souvent problème, il est recommandé de suivre les règles de bonne pratique suivantes `[a-z]|-`:
 - Tout en minuscule.
 - Remplacer les espaces ` ` par des tirets `-`.
 - Utiliser uniquement des caractères alphabétiques sans accent.

### Fichiers de code

Par convention, les fichiers `index.*` sont utilisés par les serveurs web (par exemple: Apache) lorsque aucun fichier n'est précisé dans le chemin de l'URL.

Dans le cours, les fichiers contenant du HTML peuvent se terminer l'extension `.html` ou `.php` (pour faire la jonction avec le cours de PP). 
Attention toutefois que, dans le cas d'une extension `.php`, il est nécessaire de passer par un serveur web.

### Organisation du code

Le code pouvant contenir un grand nombre de fichiers, il est recommandé de ranger les ressources (images, styles, scripts, fonts, ...) dans des dossiers spécifiques.



## Exercices

Le code produit doit être validé par le [W3C validator](https://validator.w3.org/). 


### Exercice 1

 1. Créer un fichier `index.*`.
 2. Dans ce fichier, créer la structure de base d'un document HTML.

[Corrections](./html/v1)


### Exercice 2

 1. Dans ce fichier, utiliser des balises de structure et de texte, de sorte à:
    - Afficher un en-tête
    - Afficher un pied de page
    - Afficher des articles
    - Afficher des titres
    - Afficher des paragraphes
    - Afficher des retours à la ligne

[Corrections](./html/v2)


### Exercice 3

 1. Dans ce fichier, afficher des images.

[Corrections](./html/v3)


### Exercice 4

 1. Créer un fichier `listes.*`
 2. Dans ce fichier, afficher 3 types de listes

[Corrections](./html/v4)


### Exercice 5

 1. Créer un fichier `tableaux/index.*`
 2. Dans ce fichier, afficher un tableau complexe, avec au moins:
    - Un titre de tableau
    - Un en-tête de tableau
    - Un pied de tableau
    - Une jonction de colonne
    - Une jonction de ligne

### Exercice 5

 1. Dans toutes les pages HTML, ajouter un menu de navigation interne, avec chemins relatifs.
 2. Dans une des pages, jouter un lien vers un website externe.


