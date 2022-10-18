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

## Exercice 2: sélecteurs

 1. Jouer sur https://flukeout.github.io/ (indiquer le bon sélecteur CSS).


### Remarques théoriques

Ne sont abordés ici que les principes théoriques suivants:
 - Les principaux types de sélecteurs: id, class, tag, ...
 - La combinaison de sélecteurs (ou combinateurs).

(Sur ce sujet, voir [MDN docs - sélecteurs](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Selectors).)

**Attention:** ne sont pas abordés ici notamment les principes théoriques suivants:
 - L'association de style: un élément HTML hérite des règles de style de l'ensemble des sélecteurs qui le désignent.
 - La surcharge des déclarations: une déclaration de style écrase les mêmes déclarations qui la précédent, à poids de sélecteur égal ou supérieur.
 - La spécificité (ou priorité, ou poids) des sélecteurs (voir [MDN docs - spécificité](https://developer.mozilla.org/fr/docs/Web/CSS/Specificity)).


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

 1. Utiliser les propriétés de visibilité (ces propriétés n'ayant pas été vues durant le cours de théorie, cette étape ets donc optionnelle):
   - Visibilité
   - Opacité

