
# Exercices HTML

Les différents exercices présentés dans cette partie se complètent les uns les autres, et visent, au final, à créer une sorte de mini site contenant les balises HTML principales. Chaque exercice est donc la suite de celui qui le précède, et représente une nouvelle étape (une nouvelle version) dans la création d'un site en construction. Il est nécessaire d'aborder les exercices dans l'ordre pour une meilleure compréhension.

**Attention:** le code produit doit être validé par le [W3C validator](https://validator.w3.org/). 


## Exercice 1: document de base

 1. Créer un fichier `index.*`.
 2. Veiller à comprendre pour quelle raison ce fichier est ainsi nommé et par quelles URL y accéder en HTTP.
 3. Dans ce fichier, créer la structure de base d'un document HTML.

[Corrections](./v1)


## Exercice 2: textes

 1. Dans ce fichier, utiliser des balises de structure et de texte, de sorte à:
    - Afficher un en-tête de page/section
    - Afficher un pied de page/section
    - Afficher des articles
    - Afficher des titres de section
    - Afficher des paragraphes
    - Afficher des saut de ligne

[Corrections](./v2)


## Exercice 3: images

 1. Par ce fichier, afficher des images propres au site (c'est-à-dire se trouvant dans le même [domaine](https://developer.mozilla.org/fr/docs/Learn/Common_questions/Pages_sites_servers_and_search_engines)), via des **chemins relatifs**.

### Procédure de débuggage

Si l'image ne s'affiche pas correctement, appliquer la procédure de débuggage suivante:

 1. Valider le code HTML auprès [W3C validator](https://validator.w3.org/).
 2. S'assurer que le fichier d'image à bien été déployé sur le serveur.
 3. Vérifier que le fichier HTML est bien à jour sur le serveur. Pour ce faire, par exemple, inspecter le code affiché à l'aide du DevTools.
 4. Vérifier le chemin de fichier indiqué dans le code HTML. Pour ce faire, dans l'onglet "Network" du DevTools du navigateur, après rafraîchissement de la page, vérifier le statut HTTP du chargement de l'image (Si code `200`, tout est OK. Si code `404`, la ressource n'a pas été trouvée.) 

 ![Erreur 404 sur une image](../resources/images/image-404.png)


[Corrections](./v3)


## Exercice 4: listes

 1. Créer un fichier `listes.*`.
 2. Veiller à comprendre par quelle URL y accéder en HTTP.
 3. Par ce fichier, afficher 3 types de listes:
    - Liste à puces
    - Liste ordonnée
    - Liste de descriptions

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
    - Une fusion de cellules par colonne
    - Une fusion de cellules par ligne

Exemple de tableau complexe:
![Tableau complexe](../resources/images/tableau.png)

Pour afficher les bordures du tableau, appliquer le style suivant à la balise `head` de la page:
```html
	<style>
		table {
			width: 50%;
		}
		table, th, td {
			border: 1px solid black;
		}
	</style>
```   

[Corrections](./v5)

## Exercice 6: liens

**Attention:** cet exercice vise à relier entre elles plusieurs pages d'un même site, par l'intermédiaire d'une navigation interne. Il est donc impératif d'avoir créé au préalable plusieurs fichiers HTML. Pour une compréhension totale des **chemins relatifs**, il est important qu'un de ces fichiers soit situé dans un dossier. Se reporter à la [v5](./v5) pour la structure des fichiers.

 1. Dans toutes les pages HTML, ajouter un menu de navigation interne (vers toutes les pages), avec **chemins relatifs**.
 2. Dans une des pages, ajouter un lien vers un website externe (avec **URL absolue**).
 

[Corrections](./v6)
