# Exercices CSS

## Exercice 1: linked CSS

 1. Créer une feuille de style `styles/main.css` vide.
 2. Inclure cette feuille de style dans toutes les pages du site (méthode "linked").

### Remarques théoriques

**Attention:** ne sont pas abordés ici les autres types d'inclusion de style:
 - "inline"
 - "embedded" 

## Exercice 2: sélecteurs

 1. Jouer sur https://flukeout.github.io/ (indiquer le bon sélecteur CSS).


### Remarques théoriques

Ne sont abordés ici que les principes théoriques suivants:
 - Les principaux types de sélecteurs: id, class, tag, ...
 - La combinaison de sélecteurs.

**Attention:** ne sont pas abordés ici notamment les principes théoriques suivants:
 - L'association de style: un élément HTML hérite des styles de l'ensemble des sélecteurs qui le détermine.
 - La surcharge des déclarations: une déclaration de style écrase les mêmes déclarations qui la précédent, à poids de sélecteur égal ou supérieur.
 - La priorité (ou poids) des sélecteurs: `!important`, inline, #id, .class (ou pseudo-class), tag (ou pseudo-element) (le sélecteur universel `*` n'étant pas pris en compte).


## Exercice 3: polices et textes

 1. Utiliser les propriétés de police:
    - famille
    - taille
    - style
    - poids
 2. Utiliser les propriétés de texte:
    - couleur
    - alignement
    - décoration
    - transformation


### Exemples

#### Universel
 1. Appliquer une police de caractère à l'ensemble des textes.
 2. Appliquer une couleur à l'ensemble des textes.
 3. Appliquer une taille à l'ensemble des textes.

#### Id
 1. Appliquer une couleur particulière au texte d'un parapgraphe particulier via son id.

#### Class
 1. Définir une classe "big", avec une taille de police plus grande et un poids plus gras, et appliquer cette classe à un `span` dans un paragraphe.
 2. Définir une classe "italic", avec un style italique, et appliquer cette classe à un `span` dans un paragraphe.

#### Tag
 1. Appliquer une couleur uniquement aux titres (autre que celle par défaut).
 2. Souligner les titres qui se trouvent uniquement dans des balises `article`.
 3. Centrer le titre principal et mettez-le en lettres capitales.


### Remarques théoriques

 1. Les couleurs (d'une manière générale) peuvent potentiellement être définies de plusieurs façons:
    - Par mot-clé (noms anglais).
    - Par valeur hexadécimale (pécédée du symbole `#`).
    - Par valeur RGB ou RGBa (red, green, blue, alpha).
 2. Les tailles (d'une manière générale) peuvent être exprimées de plusieurs façons:
    - Valeur numérique absolue pour écran (px, ...)
    - Valeur numérique absolue pour papier (pt, ...)
    - Valeur numérique relative à l'élément parent (%, em (taille de police), rem, ...)
    - Valeur numérique relative au viewport
    - Par mot-clé absolu (small, medium, large, ...)
    - Par mot-clé relatif à l'élément parent (smaller, larger, ...)

## Exercice 4: arrière-plans

 1. Utiliser les propriétés d'arrière-plan:
    - Couleur de fond
    - Image de fond

### Exemples

 1. Appliquer une couleur de fond aux pages entières.
 2. Appliquer une image de fond à une page entière.


## Exercice 5: affichage

 1. Utiliser les propriétés de visibilité (pas vues en théorie, donc étape optionnelle):
   - Visibilité
   - Opacité

