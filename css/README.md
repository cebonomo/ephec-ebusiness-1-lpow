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
    - famille
    - taille
    - style
    - graisse
 2. Utiliser les propriétés de texte:
    - couleur
    - alignement
    - décoration
    - transformation

[Corrections](./v2)

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


### Remarques théoriques

#### Les couleurs

Les [couleurs](https://developer.mozilla.org/fr/docs/Web/CSS/color_value) (d'une manière générale) peuvent potentiellement être définies de plusieurs façons:
   - Par mot-clé (noms anglais).
   - Par valeur hexadécimale (pécédée du symbole `#`).
   - Par valeur RGB ou RGBa (red, green, blue, alpha).

#### Les tailles

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

### Exemples

 1. Appliquer une couleur de fond aux pages entières.
 2. Appliquer une image de fond à une page entière.


## Exercice 6: affichage (exercice optionnel)

 1. Utiliser les propriétés de visibilité (ces propriétés n'ayant pas été vues durant le cours de théorie, cette étape est donc optionnelle):
   - Visibilité
   - Opacité


## Exercice 7: listes

 1. Utiliser les propriétés de liste:
   - type
   - (image)
   - (position)

### Exemples

 1. Elever les puces d'une liste.
 2. Changer la forme des puces d'une liste (ou utiliser une image pour définir les puces).
 3. Afficher une numérotation romaine à une liste ordonnée.


## Exercice 8: tailles

 1. Utiliser les propriétés de taille sur un élément de type bloc ("block box"):
    - Lageur
    - Hauteur
 2. Utiliser les mêmes propriétés de taille sur un élément de type en ligne par défaut ("inline box").

### Exemples

#### Block box

TODO

#### Inline box

TODO

### Remarques théoriques

#### Box model

TODO

https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/The_box_model


## Exercice 9: bordures

 1. Utiliser les propriétés de bordure sur un élément de type bloc ("block box"):
    - largeur
    - style
    - couleur
    - position
    - arrondi
    - fusion/séparation
 2. Utiliser les mêmes propriétés de bordure sur un élément de type en ligne par défaut ("inline box").

### Exemples

#### Block box

 1. Afficher des bordures à un tableau.
 2. Afficher des bordures en pointillé aux cellules d'un tableau.
 3. Enlever l'espace entre les bordures des cellules d'un tableau.

 1. Afficher des bordures arrondies à un élément `nav`.

#### Inline box

 1. Afficher une bordure verticale séparant chaque élément `a` dans un élément `nav` 

### Remarques théoriques

#### Gestion des déclarations multiples

#### Plusieurs propriétés par déclaration

TODO

#### Plusieurs positions par déclaration

TODO

#### Affectation de la taille

TODO


## Exercice 10: marges

 1. Utiliser les propriétés de marge sur un élément de type bloc ("block box") possédant une bordure:
    - Marges intérieures
    - Marges extérieures
 2. Utiliser les mêmes propriétés de marge sur un élément de type en ligne par défaut ("inline box") possédant une bordure.


### Exemples

#### Block box

TODO

#### Inline box

TODO



