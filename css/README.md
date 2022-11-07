# Exercices CSS

Ces exercices complètent les exercices [HTML](../html) en rajoutant au code une couche de style CSS. Il est donc nécessaire d'avoir terminé la partie HTML pour débuter celle-ci, de même qu'il est, d'une manière générale, impératif de comprendre le HTML avant de débuter l'étude du CSS.


## Exercice 1: linked CSS

 1. Créer une feuille de style `styles/main.css` vide.
 2. Inclure cette feuille de style dans toutes les pages du site (méthode "linked").

 [Corrections (v1)](./v1)

### Remarques théoriques

#### Incorporations CSS dans HTML

**Attention:** ne sont pas abordés ici les autres types possibles d'inclusion de style:
 - "inline" ou intégré à un élément HTML (via l'attribut `style`).
 - "embedded" ou interne à un document HTML (via la balise `style`).

(Sur ce sujet, voir [MDN docs - Appliquer CSS à votre document HTML](https://developer.mozilla.org/fr/docs/Learn/CSS/First_steps/How_CSS_is_structured#appliquer_css_%C3%A0_votre_document_html)) 

#### Charset UTF-8

A noter (notions avancées) qu'il n'est pas nécessaire, _a priori_, de déclarer le charset UTF-8 (`@charset`) dans un fichier CSS (notamment car aucun caractère non-ASCII n'est idéalement utilisé). (Pour plus d'information sur l'utilisation du charset en CSS, voir [W3-org - gestion de l'encodage](https://www.w3.org/International/tutorials/tutorial-char-enc/).)


## Exercice 2: sélecteurs

 1. Jouer sur https://flukeout.github.io/ (indiquer le bon sélecteur CSS, sur au moins les 10 premiers exercices).

### Remarques théoriques

Ne sont abordés ici que les principes théoriques suivants:
 - Les principaux types de sélecteurs: id, class, tag, ...
 - La combinaison de sélecteurs (ou combinateurs).

Sur ce sujet, voir [MDN docs - sélecteurs](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Selectors).

**Attention:** ne sont pas abordés ici notamment les principes théoriques suivants:
 - L'association des règles: un élément HTML bénéficie des règles de style de l'ensemble des sélecteurs qui le désignent.
 - La cascade (ou surcharge) des déclarations: une déclaration de style écrase les mêmes déclarations qui la précédent (à poids de sélecteur égal ou supérieur).
 - La [spécificité](https://developer.mozilla.org/fr/docs/Web/CSS/Specificity) (ou priorité, ou poids) des sélecteurs: un sélecteur peut être prioritaire sur un autre, ce qui annule *de facto* le principe normal de cascade.
 - L'[héritage](https://developer.mozilla.org/fr/docs/Web/CSS/inheritance) des déclarations: un élément enfant hérite de certaines déclarations d'un élément parent.

 Sur ce sujet, voir [MDN docs - Cascade, spécificité et héritage](https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Cascade_and_inheritance).


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
 2. Appliquer une couleur en hexadécimal à l'ensemble des textes.

#### Id
 1. Appliquer une couleur particulière au texte d'un paragraphe particulier via son id.

#### Class
 1. Définir une classe "italic", avec un style italique, et appliquer cette classe à un `span` dans un paragraphe.
 2. Définir une classe "bigger", avec une taille de police plus grande et un poids plus gras, et appliquer cette classe à un `span` dans un paragraphe.

#### Tag
 1. Centrer le titre principal et mettez-le en lettres capitales.
 2. Appliquer une couleur en RGB uniquement aux titres (autre que celle par défaut).
 3. Définir une taille en pixels pour les textes des des balises `article`.
 3. Souligner les titres qui se trouvent uniquement dans des balises `article`, ainsi qu'une taille en pixels, autre que la taille définie pour la balise `article`.
 4. Justifier les paragraphes présents uniquement dans des balises `article`.

#### Pseudo-class
 1. Appliquer un soulignage des liens uniquement au survol de la souris.
 2. Appliquer une couleur plus claire aux liens déjà visités.

[Corrections (v2)](./v2)

### Remarques théoriques

#### Valeurs de couleur

Les [couleurs](https://developer.mozilla.org/fr/docs/Web/CSS/color_value) (d'une manière générale) peuvent potentiellement être définies de plusieurs façons:
   - Par mot-clé (noms anglais).
   - Par valeur hexadécimale (pécédée du symbole `#`).
   - Par valeur absolue RGB (ou RGBa) (red, green, blue, alpha).
   - A noter que d'autres types de valeur sont encore possibles (hors cours).

#### Valeurs de taille

Les tailles (d'une manière générale) peuvent être exprimées de plusieurs façons:
   - Valeur numérique absolue pour écran (px, ...).
   - Valeur numérique absolue pour papier (pt, ...).
   - Valeur numérique relative à l'élément parent (%, em (taille de police), rem, ...).
   - Valeur numérique relative au viewport.
   - Par mot-clé absolu (small, medium, large, ...).
   - Par mot-clé relatif à l'élément parent (smaller, larger, ...).

### Valeurs de réinitialisation

A noter qu'il existe plusieurs valeurs de réinitialisation (d'une manière générale).

#### Absence de style

   - `none`: permet de ne pas appliquer de style. (Ne s'applique qu'aux propriétés acceptant cette valeur.)

#### Gestion de l'héritage

(Notions avancées)

   - `initial`: permet d'appliquer la valeur initiale ([MDN docs - initial](https://developer.mozilla.org/fr/docs/Web/CSS/initial)).
   - `inherit`: permet d'appliquer la valeur héritée du parent ([MDN docs - inherit](https://developer.mozilla.org/fr/docs/Web/CSS/inherit)).
   - `unset`: permet d'appliquer la valeur héritée du parent ou, si aucune valeur n'ets hérité, d'appliquer la valeur initiale ([MDN docs - unset](https://developer.mozilla.org/fr/docs/Web/CSS/unset)).
   - (`revert`: variante de `unset` ([MDN docs - revert](https://developer.mozilla.org/fr/docs/Web/CSS/revert)).)

A noter que les valeurs de gestion d'héritage peuvent être utilisées avec n'importe quelle propriété, y compris la propriété raccourcie `all` ([MDN docs- all](https://developer.mozilla.org/fr/docs/Web/CSS/all)). 


## Exercice 4: polices importées

 1. Utiliser une police qu'un navigateur ne supporte pas par défaut.

[Corrections (v3)](./v3)

### Remarques théoriques

#### Inclusion de la police

A noter, pour aller plus loin (notions avancées), que, au final, une police doit toujours être inclue par CSS via `@font-face` ([MDN docs - @font-face](https://developer.mozilla.org/fr/docs/Web/CSS/@font-face)). Il est toutefois possible, plutôt que d'inclure directement la police en CSS via cette méthode, soit d'inclure un fichier CSS dans le HTML (via `link`), soit d'inclure des règles CSS dans le fichier CSS via `@import` ([MDN docs - @import](https://developer.mozilla.org/fr/docs/Web/CSS/@import)), lesquels utiliseront `@font-face`.

#### @ rules

A noter, pour aller plus loin (notions avancées), qu'il existe de nombreuses et diverses [@ rules](https://developer.mozilla.org/en-US/docs/Web/CSS/At-rule) CSS.


## Exercice 5: fonds

 1. Utiliser les propriétés d'arrière-plan:
    - Couleur de fond
 2. Utiliser les propriétés d'arrière-plan:
    - Image de fond
 3. Utiliser les propriétés d'arrière-plan:
    - Dégradé de couleur

### Exemples

 1. Appliquer une couleur de fond aux pages entières.
 2. Appliquer une image de fond à une page entière.
 3. Appliquer un dégradé de couleur en arrière-plan d'un élément `header`.

[Corrections (v4)](./v4)

### Remarques théoriques

#### Zone de fond

Par défaut (notions avancées: [MDN docs - background-clip](https://developer.mozilla.org/fr/docs/Web/CSS/background-clip)), la zone de fond comprend la boîte de contenu ("content box") de l'élément, ainsi que ses marges internes ("padding box") et ses bordures ("border box") (les bordures pouvant toutefois couvrir visuellement le fond). La zone de fond s'arrête donc avant les marges externes.

A noter que, toutefois, l'élément `body` est une [exception à cette règle](https://stackoverflow.com/questions/33282363/background-image-appearing-in-the-body-margin), dans la mesure où sa zone de fond s'étend sur toute la zone d'affichage du navigateur (viewport), laquelle comprend donc également les marges externes de l'élément, et quelque soit aussi les dimensions réelles de l'élément. Autrement dit, affecter un fond à l'élément `body` revient en somme à l'appliquer à l'élément `html`.  

#### Couleur vs. images

Une image apparaît au-dessus de la couleur d'un élément.

A noter qu'un dégradé de couleur généré en CSS est considéré comme une [image](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Images).

#### Plusieurs propriétés par déclaration

A noter que la propriété raccourcie `background` permet de définir la valeur de plusieurs propriétés de fond ([MDN docs - background](https://developer.mozilla.org/fr/docs/Web/CSS/background)).

#### Les fonctions CSS

A noter que l'URL de l'image ou encore le dégradé de couleur sont gérés via des fonctions CSS ([MDN docs - fonctions](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Functions)).


## Exercice 6: visibilité, opacité et transitions

 1. Utiliser les propriétés de visibilité:
    - Visibilité (cette propriété n'ayant pas été expliquée en théorie, cette partie de l'exercice est optionelle.)
    - Opacité (cette propriété n'ayant pas été expliquée en théorie, cette partie de l'exercice est optionelle.)
    - Transition

[Corrections (v5)](./v5)


## Exercice 7: listes

 1. Utiliser les propriétés de liste:
    - Type
    - (Image)
    - (Position)

### Exemples

 1. Enlever les puces d'une liste.
 2. Changer la forme des puces d'une liste (ou utiliser une image pour définir les puces).
 3. Afficher une numérotation romaine à une liste ordonnée.

[Corrections (v6)](./v6)


## Exercice 8: dimensions d'affichage

 1. Utiliser les propriétés de dimension sur un élément de type bloc ("block box"):
    - Largeur
    - Hauteur
 2. Utiliser les mêmes propriétés de dimension sur un élément de table ("block box").
 3. Utiliser les mêmes propriétés de dimension sur un élément de type en ligne par défaut ("inline box").

### Exemples

#### Block box

##### display: block
 1. Afficher un paragraphe avec une hauteur et une largeur fixe.
 2. Optionnel (car propriété pas expliquée en théorie): remplissez l'élément avec plus de texte que ce dont ne dispose l'espace du paragraphe, et tester les différents types de dépassement.
 3. Afficher un `body` possédant une largeur maximum (ex: 1024px) inférieure à la largeur de l'écran (ex: 1920px), et jouer avec la taille de la fenêtre pour imaginer l'affichage sous différentes tailles d'écran.

##### display: table
 1. Afficher un tableau à 50% de largeur de la page.

#### Inline box

 1. Harmoniser la dimension des images des articles.
 2. Afficher une largeur fixe aux liens du menu de navigation.

[Corrections (v7)](./v7)
 
### Remarques théoriques

#### Box model et dimensions d'affichage

Les propriétés suivantes fonctionnent selon le [modèle de boîte](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Box_Model) CSS:
 - Hauteur (`height`) + largeur (`width`)
 - Marges internes (`padding`) + externes (`margin`)
 - Bordures (`border`)

Ce modèle conditionne chaque élément grâce à la propriété d'affichage `display`, laquelle spécifie le type de comportement de boîte. Seuls les éléments de type "bloc" (valeurs communes: `block`, `table`, `inline-block`) sont impactés par la modification de dimensions d'affichage, au contraire des éléments de type "en ligne" (valeur commune: `inline`).

Par défaut (notions avancés: [MDN docs - box-sizing](https://developer.mozilla.org/fr/docs/Web/CSS/box-sizing)), la hauteur et la largeur définissent la seule taille de la boîte de contenu ("content box") des éléments de type "bloc". 

Toutefois, il ne faut pas perdre de vue qu'au-delà de la boîte de contenu se trouvent les marges internes, puis les bordures, et enfin les marges externes de l'élément. Autrement dit, la taille totale d'un élément est donc définie non seulement par la hauteur et la largeur (lesquelles propriétés constituent la [taille intrinsèque](https://developer.mozilla.org/fr/docs/Glossary/Intrinsic_Size) de l'élément), mais également, de manière additionnelle, par les marges internes, les bordures et les marges externes (lesquelles propriétés constituent la [taille extrinsèque](https://developer.mozilla.org/fr/docs/Glossary/Intrinsic_Size)).

Le type d'affichage (`display`) influe également sur la place prise par l'élément dans le [flux normal d'affichage](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Normal_Flow).

#### Valeurs de taille

Voir le commentaire sur les valeurs de taille pécédent.

Dans le cas des dimensions d'affichage, il est possible de définir des tailles minimales et maximales, c'est-à-dire ne pouvant pas être dépassées, à la place de tailles fixes.

#### Dimensions des images

Définir systématiquement les dimensions des images est une bonne pratique (cela permet notamment de prévoir l'espace nécessaire à l'image avant même son chargement).

A noter que la balise HTML `img` dispose également d'attributs de hauteur (`height`) et de largeur (`width`). Ces attributs HTML représentent normalement les dimensions intrinsèques de l'image en pixels (l'unité ne devant normalement pas être mentionnée). Ces dimensions intrinsèques sont normalement écrasées par les dimensions d'affichage, telles que définies par le CSS.

A noter que la balise HTML `img`, bien qu'étant "inline" par défaut (`display: inline`), possède un comportement intermédiaire avec les "blocks" (équivalent à `display: inline-block`). Ceci est dû aux particularités des [éléments remplacés](https://developer.mozilla.org/fr/docs/Web/CSS/Replaced_element) qui accordent aux images un comportement spécifique ([MDN docs - img et CSS](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Img#mettre_en_forme_avec_css)).

A noter, pour aller plus loin (notions avancées), la propriété `object-fit` (non vu au cours) qui définit la façon dont une image (ou tout "élément remplacé") s'adapte au contenu parent ([MDN docs - object-fit](https://developer.mozilla.org/fr/docs/Web/CSS/object-fit))


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
 1. Séparer chaque article par une bordure.
 2. Afficher des bordures arrondies à un élément `nav`.

##### Table
 1. Afficher des bordures à un tableau.
 2. Afficher des bordures en pointillé aux cellules d'un tableau.
 3. Enlever l'espace entre les bordures des cellules d'un tableau.

#### Inline box

 1. Afficher une bordure verticale séparant chaque élément `a` dans un élément `nav`.
 2. Afficher une image dans un cadre circulaire.

[Corrections (v8)](./v8)

### Remarques théoriques

#### Plusieurs positions par déclaration

La propriété raccourcie `border` vaut pour les quatres positions de bordure:
 - `border-top`
 - `border-right`
 - `border-bottom`
 - `border-left`

#### Plusieurs propriétés par déclaration

La propriété raccourcie `border` (de même que les propriétés `border-top`, `border-right`, ...) peut accueillir les valeurs de plusieurs autres propriétés. Dans l'ordre et aucune n'étant obligatoire:
 1. Largeur ([MDN docs - border-width](https://developer.mozilla.org/fr/docs/Web/CSS/border-width))
 2. Style ([MDN docs - border-style](https://developer.mozilla.org/fr/docs/Web/CSS/border-style))
 3. Couleur ([MDN docs - border-color](https://developer.mozilla.org/fr/docs/Web/CSS/border-color))

#### Box model et dimensions d'affichage

Pour rappel, les bordures influent sur les dimensions d'affichage, selon le modèle de boîte CSS.

A noter que, à la différence des propriétés de dimensions et des marges internes et externes, la taille des bordures s'appliquent également aux éléments en ligne (`display: inline`).

#### Bordures vs. fond

Les bordures apparaîssent au-dessus du fond.

#### Contours

A noter, pour aller plus loin (notions avancées), qu'en plus des bordures, il existe des [contours](https://developer.mozilla.org/fr/docs/Web/CSS/outline) (non vu au cours), lesquels, à la différence des bordures, n'influent pas sur les dimensions de l'élement.


## Exercice 10: marges

 1. Utiliser les propriétés de marge sur un élément de type bloc ("block box") possédant une bordure:
    - Marges internes
    - Marges externes
 2. Utiliser les mêmes propriétés de marge sur un élément de type en ligne par défaut ("inline box") possédant une bordure.

### Exemples

#### Block box
 
 1. Centrer un `body` possédant une largeur maximum inférieure à la largeur de l'écran.
 2. Ajouter une marge externe uniquement entre chaque article.
 3. Ajouter une marge interne dans chaque article.

#### Inline box

 1. Ajouter une marge interne sur les liens du menu de navigation.

[Corrections (v9)](./v9)

### Remarques théoriques

#### Plusieurs positions par déclaration

Les propriétés raccourcies `margin` et `padding` peuvent accueillir plusieurs valeurs en fonction des positions.
   1. Si 1 seule valeur est présente, elle s'applique communément aux positions `top`, `right`, `bottom`, `left`.
   2. Si 2 valeurs sont présentes:
      1. La première s'applique aux positions `top` et `bottom`.
      2. La seconde s'applique aux positions `right` et `left`.
   3. Si 3 valeurs sont présentes:
      1. La première s'applique à la position `top`.
      2. La deuxième s'applique aux positions `right` et `left`.
      3. La troisième s'applique à la position `bottom`.
   4. Si 4 valeurs sont présentes:
      1. La première s'applique à la position `top`.
      2. La deuxième s'applique aux positions `right`.
      3. La troisième s'applique à la position `bottom`.
      4. La quatrième s'applique à la position `left`.

#### Box model et dimensions d'affichage

Pour rappel, les marges influent sur les dimensions d'affichage, selon le modèle de boîte CSS.

#### Fusion des marges

A noter que, dans le cadre du flux normal d'affichage, si deux éléments adjacents possèdent tous deux une marge externe (`margin`) se touchant l'une et l'autre, seule la marge la plus importante des deux sera prise en considération. Deux marges ne s'aditionnent donc pas. Attention toutefois que, techniquement, les deux marges sont toujours présentes: elles ne font que se chevaucher dans l'affichage final.


## Exercice 11: positionnement

1. Utiliser les propriétés de positionnement avec au moins les valeurs suivantes:
   - statique (valeur par défaut, comportement normal, aucun impact visuel)
   - relatif (nécessite un décalage de position pour connaître un impact visuel, voir point suivant)
   - absolu
   - fixe
2. Utiliser les propriétés de positionnement permettant le décalage de position d'un élément.

### Remarques théorique

#### Positionnement et flux (flow)

Les positionnements font potentiellement sortir l'élément du [flux normal](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Normal_Flow) de composition de la page, de sorte que l'élément affecté semble "flotter" sans plus exister pour les autres éléments qui le suivent. Ce comportement apparaît avec les valeurs suivantes:
 - absolu (`absolute`)
 - fixe (`fixed`)
 - sticky (`sitky`) (partiellement)

A noter que la position (et donc potentiellement tout décalage de position) d'un élément mis hors du flux dans le cadre d'un positionnement prend comme référence la boîte de ses marges externes (et non de sa boîte de contenu).

A noter, pour aller plus loin (notions avancées), que la position (et donc potentiellement tout décalage de position) d'un élément mis hors du flux dans le cadre d'un positionnement est calculée par rapport à un "contexte de positionnement", c'est-à-dire à la position du plus haut élément parent définissant un positionnement. Par défaut, ce contexte sera l'élément `html`, ce qui, dans les faits, correspond exactement à la zone d'affichage du navigateur (viewport). (Toutefois, tout élément redéfinissant le positionnement (par exemple, en définissant un positionnement `relative`) devient un nouveau contexte de positionnement pour tous ses enfants.) 

A noter, pour aller plus loin (notions avancées), que la propriété `z-index` permet de jouer sur la profondeur des éléments positionnés hors du flux ([MDN docs - z-index](https://developer.mozilla.org/fr/docs/Web/CSS/z-index)). Cette propriété permet, en quelque sorte, de définir la valeur de l'axe z des éléments: un élément possédant une valeur plus élévée se retrouvera au-dessus des autres éléments. 

Pour plus d'information, voir [MDN docs - positionnement](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Positioning).

#### Autres dispositions

Ceci n'est pas vu au cours.

Pour information, pour aller plus loin, il existe d'autres techniques de disposition (ou layout) ([MDN docs - layout](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Introduction)):

 - [MDN docs - flexbox](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox)
 - [MDN docs - grilles (ou trame)](https://developer.mozilla.org/fr/docs/Web/CSS/grid)
 - [MDN docs - flottement](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flow_Layout)
 - [MDN docs - colonnes](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Multiple-column_Layout)
