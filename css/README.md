# Exercices CSS

Ces exercices complètent les exercices [HTML](../html) en rajoutant au code une couche de style CSS. Il est donc nécessaire d'avoir terminé la partie HTML pour débuter celle-ci, de même qu'il est, d'une manière générale, impératif de comprendre le HTML avant de débuter l'étude du CSS.


## Exercice 1: linked CSS

 1. Créer une feuille de style `styles/main.css` vide.
 2. Inclure cette feuille de style dans toutes les pages du site (méthode "linked").

 [Corrections](./v1)

### Remarques théoriques

**Attention:** ne sont pas abordés ici les autres types possibles d'inclusion de style:
 - "inline"
 - "embedded"

(Sur ce sujet, voir [MDN docs - Appliquer CSS à votre document HTML](https://developer.mozilla.org/fr/docs/Learn/CSS/First_steps/How_CSS_is_structured#appliquer_css_%C3%A0_votre_document_html)) 

## Exercice 2: sélecteurs

 1. Jouer sur https://flukeout.github.io/ (indiquer le bon sélecteur CSS).


### Remarques théoriques

Ne sont abordés ici que les principes théoriques suivants:
 - Les principaux types de sélecteurs: id, class, tag, ...
 - La combinaison de sélecteurs (ou combinateurs).

(Sur ce sujet, voir [MDN docs - sélecteurs](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Selectors).)

**Attention:** ne sont pas abordés ici notamment les principes théoriques suivants:
 - L'association des règles: un élément HTML bénéficie des règles de style de l'ensemble des sélecteurs qui le désignent.
 - La cascade (ou surcharge) des déclarations: une déclaration de style écrase les mêmes déclarations qui la précédent, à poids de sélecteur égal ou supérieur.
 - La [spécificité](https://developer.mozilla.org/fr/docs/Web/CSS/Specificity) (ou priorité, ou poids) des sélecteurs: un sélecteur peut être prioritaire sur un autre, ce qui annule *de facto* le principe de cascade.
 - L'[héritage](https://developer.mozilla.org/fr/docs/Web/CSS/inheritance) des déclarations: un élément enfant peut hériter des déclarations d'un élément parent.

 (Sur ce sujet, voir [MDN docs - Cascade, spécificité et héritage](https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Cascade_and_inheritance))


## Exercice 3: polices et textes

 1. Utiliser les propriétés de police:
    - Famille
    - Taille
    - Style
    - Graisse
 2. Utiliser les propriétés de texte:
    - Couleur
    - Alignement
    - Décoration
    - Transformation

### Exemples

#### Universel
 1. Appliquer une police de caractère à l'ensemble des textes.
 2. Appliquer une couleur à l'ensemble des textes.

#### Id
 1. Appliquer une couleur particulière au texte d'un paragraphe particulier via son id.

#### Class
 1. Définir une classe "big", avec une taille de police plus grande et un poids plus gras, et appliquer cette classe à un `span` dans un paragraphe.
 2. Définir une classe "italic", avec un style italique, et appliquer cette classe à un `span` dans un paragraphe.

#### Tag
 1. Appliquer une couleur uniquement aux titres (autre que celle par défaut).
 2. Souligner les titres qui se trouvent uniquement dans des balises `article`.
 3. Centrer le titre principal et mettez-le en lettres capitales.

[Corrections](./v2)

### Remarques théoriques

#### Valeurs de couleur

Les [couleurs](https://developer.mozilla.org/fr/docs/Web/CSS/color_value) (d'une manière générale) peuvent potentiellement être définies de plusieurs façons:
   - Par mot-clé (noms anglais).
   - Par valeur hexadécimale (pécédée du symbole `#`).
   - Par valeur RGB ou RGBa (red, green, blue, alpha).

#### Valeurs de taille

Les tailles (d'une manière générale) peuvent être exprimées de plusieurs façons:
   - Valeur numérique absolue pour écran (px, ...)
   - Valeur numérique absolue pour papier (pt, ...)
   - Valeur numérique relative à l'élément parent (%, em (taille de police), rem, ...)
   - Valeur numérique relative au viewport
   - Par mot-clé absolu (small, medium, large, ...)
   - Par mot-clé relatif à l'élément parent (smaller, larger, ...)


## Exercice 4: polices importées

 1. Utiliser une police qu'un navigateur ne supporte pas par défaut.


## Exercice 5: arrière-plans

 1. Utiliser les propriétés d'arrière-plan:
    - Couleur de fond
    - Image de fond
    - Dégradé de couleur

### Exemples

 1. Appliquer une couleur de fond aux pages entières.
 2. Appliquer une image de fond à une page entière.
 3. Appliquer un dégradé de couleur en arrière plan d'un élément header.


## Exercice 6: visibilité, opacité et transitions

 1. Utiliser les propriétés de visibilité:
    - Visibilité (cette propriété n'ayant pas été expliquée en théorie, cette partie de l'exercice est optionelle.)
    - Opacité (cette propriété n'ayant pas été expliquée en théorie, cette partie de l'exercice est optionelle.)
    - Transition


## Exercice 7: listes

 1. Utiliser les propriétés de liste:
    - Type
    - (Image)
    - (Position)

### Exemples

 1. Elever les puces d'une liste.
 2. Changer la forme des puces d'une liste (ou utiliser une image pour définir les puces).
 3. Afficher une numérotation romaine à une liste ordonnée.


## Exercice 8: dimensions d'affichage

 1. Utiliser les propriétés de dimension sur un élément de type bloc ("block box"):
    - Largeur
    - Hauteur
 2. Utiliser les mêmes propriétés de dimension sur un élément de table ("block box").
 3. Utiliser les mêmes propriétés de dimension sur un élément de type en ligne par défaut ("inline box").

### Exemples

#### Block box

##### Block
 1. Afficher un paragraphe avec une hauteur et une largeur fixe.
 2. Optionnel (car propriété pas expliquée en théorie): remplissez l'élément avec plus de texte que ce dont ne dispose l'espace du paragraphe, et tester les différents types de dépassement.
 3. Afficher un `body` possédant une largeur maximum (ex: 1024px) inférieure à la largeur de l'écran (ex: 1920px), et jouer avec la taille de la fenêtre pour imaginer l'affichage sous différentes tailles d'écran.

##### Table
 1. Afficher un tableau à 50% de largeur de la page.

#### Inline box

 1. Harmoniser la dimension d'images présentes sur une même page.

### Remarques théoriques

#### Box model et dimensions d'affichage

Les propriétés suivantes fonctionnent selon le [modèle de boîte](https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/The_box_model) CSS:
 - Hauteur + largeur
 - Marges internes + externes
 - Bordures

Ce modèle conditionne chaque élément grâce à la propriété d'affichage `display`, laquelle spécifie le type de comportement de boîte. Seuls les élément de type bloc (valeurs communes: `block`, `table`, `inline-block`) sont impactés par la modification de dimension d'affichage.

La taille totale des boîtes de type bloc est définie non seulement par la hauteur et la largeur, lesquelles propriétés constituent la [taille intrinsèque](https://developer.mozilla.org/fr/docs/Glossary/Intrinsic_Size) de l'élément (càd sa taille interne), mais également, de manière additionnelle, par les bordures et les marges (internes et externes), lesquelles propriétés constituent la [taille extrinsèque](https://developer.mozilla.org/fr/docs/Glossary/Intrinsic_Size).


#### Valeurs de taille

Voir le commentaire sur les valeurs de taille pécédent.

A noter également, dans le cas des dimensions d'affichage, la possibilité de définir des tailles maximales, c'est-à-dire qui ne peuvent pas être dépassées.


#### Dimensions des images

Il est à noter que les balises HTML `img` disposent également d'attributs de hauteur (`height`) et de largeur (`width`). Ces attributs représentent normalement les dimensions réelles de l'image en pixels (l'unité "px" ne devant normalement pas être mentionnée). Ces dimensions réelles seront normalement écrasées par les dimensions d'affichage, telles que définies par le CSS.


## Exercice 9: bordures

 1. Utiliser les propriétés de bordure sur un élément de type bloc ("block box"):
    - Largeur
    - Style
    - Couleur
    - Position
    - Arrondi
    - Fusion/séparation
 2. Utiliser les mêmes propriétés de bordure sur un élément de type en ligne par défaut ("inline box").

### Exemples

#### Block box

##### Block
 1. Afficher des bordures arrondies à un élément `nav`.

##### Table
 1. Afficher des bordures à un tableau.
 2. Afficher des bordures en pointillé aux cellules d'un tableau.
 3. Enlever l'espace entre les bordures des cellules d'un tableau.


#### Inline box

 1. Afficher une bordure verticale séparant chaque élément `a` dans un élément `nav` 

### Remarques théoriques

#### Gestion des déclarations multiples

#### Plusieurs propriétés par déclaration

TODO

#### Plusieurs positions par déclaration

TODO





## Exercice 10: marges

 1. Utiliser les propriétés de marge sur un élément de type bloc ("block box") possédant une bordure:
    - Marges intérieures
    - Marges extérieures
 2. Utiliser les mêmes propriétés de marge sur un élément de type en ligne par défaut ("inline box") possédant une bordure.


### Exemples

#### Block box
 
 1. Centrer un `body` possédant une largeur maximum inférieure à la largeur de l'écran.

TODO

#### Inline box

TODO

