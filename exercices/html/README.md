# Exercices HTML

Les différents exercices présentés dans cette partie se complètent les uns les autres, et visent, au final, à créer une sorte de mini site contenant les balises HTML principales. Chaque exercice est donc la suite de celui qui le précède, et représente une nouvelle étape (une nouvelle version) dans la création d'un site en construction. Il est nécessaire d'aborder les exercices dans l'ordre pour une meilleure compréhension.

**Attention:** le code produit doit être validé par le [W3C validator](https://validator.w3.org/). 

1. [Exercice 1: document de base](./ex1)
2. [Exercice 2: structures et textes](./ex2)
3. [Exercice 3: images](./ex3)
4. [Exercice 4: listes](./ex4)
5. [Exercice 5: tableaux](./ex5)
6. [Exercice 6: liens](./ex6)
7. [Exercice 7: formulaires](./ex7)

## Remarques pratiques

### Validité du code HTML

Lors de l'écriture du code, il est important de conserver un code valide à tout moment. 

Pour déterminer si un code HTML est valide, il faut le soumettre au [W3C validator](https://validator.w3.org/).

### Comment bien écrire son code?

Procédure pour écrire du HTML valide (principe général du "quand on l'ouvre, on la ferme"):
 1. Ecrire la balise ouvrante dans son entièreté. (Une balise ouvrante valide se rapporte à la syntaxe suivante: `<` + mot-clé + `>`.) Ex: `<a>`
 2. S'il s'agit d'un élément avec contenu: écrire tout de suite la balise fermante (avant même d'écrire le contenu). (Une balise fermante valide se rapporte à la syntaxe suivante: `</` + mot-clé + `>`.). Ex: `<a></a>`
 3. S'il faut préciser un attribut: revenir dans la balise ouvrante et écrire le nom de l'attribut. (Un nom valide d'attribut est précédé d'un espace de séparation.) Ex: `<a href></a>`
 4. Si l'attribut possède une valeur: faire suivre le nom de l'attribut par `=""`, en veillant à bien écrire 2 fois les doubles-guillemets. Ex: `<a href=""></a>`
 5. S'il faut préciser une valeur non nulle à l'attribut: revenir entre les guillemets et préciser la valeur. Ex: `<a href="uri"></a>`
 6. Si l'élément doit contenir un contenu: se positionner entre la balise ouvrante et fermante et indiquer le contenu. Ex: `<a href="uri">Cliquez ici</a>`


## Ressources

 1. [MDN - Introduction au HTML](https://developer.mozilla.org/fr/docs/Learn/HTML/Introduction_to_HTML)
 2. [MDN - Apprendre le HTML : guides et didacticiels](https://developer.mozilla.org/fr/docs/Learn/HTML)
 4. [alsacréations - Structure de document HTML 5](https://www.alsacreations.com/article/lire/1374-html5-structure-globale-document.html)
