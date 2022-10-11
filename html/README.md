
# Exercices HTML

Le code produit doit être validé par le [W3C validator](https://validator.w3.org/). 


## Exercice 1: document de base

 1. Créer un fichier `index.*`.
 2. Veiller à comprendre pour quelle raison ce fichier est ainsi nommé et par quelles URL y accéder en HTTP.
 3. Dans ce fichier, créer la structure de base d'un document HTML.

[Corrections](./v1)


## Exercice 2: textes

 1. Dans ce fichier, utiliser des balises de structure et de texte, de sorte à:
    - Afficher un en-tête
    - Afficher un pied de page
    - Afficher des articles
    - Afficher des titres
    - Afficher des paragraphes
    - Afficher des retours à la ligne

[Corrections](./v2)


## Exercice 3: images

 1. Par ce fichier, afficher des images propres au site (c'est-à-dire se trouvant dans le même [domaine](https://fr.wikipedia.org/wiki/Domain_Name_System)), via des **chemins relatifs**.

Si l'image ne s'affiche pas correctement, appliquer la procédure de débuggage suivante:

 1. Valider le code HTML auprès [W3C validator](https://validator.w3.org/).
 2. S'assurer que le fichier d'image à bien été déployé sur le serveur.
 3. Vérifier que le fichier HTML est bien à jour sur le serveur. Pour ce faire, par exemple, inspecter le code affiché à l'aide du DevTools.
 4. Vérifier le chemin de fichier indiqué dans le code HTML. Pour ce faire, dans l'onglet "Network" du DevTools du navigateur, vérifier le statut HTTP du chargement de l'image (Sicode `200`, tout est OK. Si code `404`, la ressource n'a pas été trouvée.) 

[Corrections](./v3)


## Exercice 4: listes

 1. Créer un fichier `listes.*`.
 2. Veiller à comprendre par quelle URL y accéder en HTTP.
 3. Par ce fichier, afficher 3 types de listes:
    - Liste à puces
    - Liste ordonnée
    - Liste de description

[Corrections](./v4)


## Exercice 5: tableaux

 1. Créer un fichier `tableaux/index.*`.
 2. Veiller à comprendre par quelles URL y accéder en HTTP.
 3. Par ce fichier, afficher un tableau simple, avec au moins:
    - Plusieurs lignes
    - Plusieurs colonnes
 4. Complexifier le tableau, avec au moins:
    - Une légende de tableau
    - Un en-tête de tableau
    - Un corps de tableau
    - Un pied de tableau
    - Une jonction de colonne
    - Une jonction de ligne

Exemple de tableau complexe:
![Tableau complexe](../resources/images/tableau.png)

[Corrections](./v5)

## Exercice 6: liens

 1. Dans toutes les pages HTML, ajouter un menu de navigation interne (vers toutes les pages), avec **chemins relatifs**.
 2. Dans une des pages, ajouter un lien vers un website externe (avec **URL absolue**).
 
[Corrections](./v6)
