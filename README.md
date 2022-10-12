# EPHEC - LPOW - TP

Est présenté ici le code développé durant mes TP du cours de LPOW de l'EPHEC.

Les TP sont organisés en 3 temps, selon les langages abordés durant les cours de théorie, et répartis ici en 3 dossiers contenant les exercices et leurs corrections:
 1. [HTML](./html)
 2. CSS (à venir)
 3. Javascript (à venir)


## Bonnes pratiques

### Création du dossier de projet

Au préalable de tout code, il est nécessaire de créer un [dossier](https://fr.wikipedia.org/wiki/R%C3%A9pertoire_(informatique)) spécifique visant à contenir (uniquement) le projet.
(Par exemple: `Documents\MesSites\lpow`.) Dans le cadre d'un site, c'est ce dossier qui sera déployé (via [FTP](https://fr.wikipedia.org/wiki/File_Transfer_Protocol), par exemple) sur le serveur d'hébergement.

### Extensions de fichier cachées

Attention que, généralement, les [gestionnaires de fichiers](https://fr.wikipedia.org/wiki/Gestionnaire_de_fichiers) ("Eplorateur de fichier" sous Windows, "Finder" sous MacOS, ...) cachent par défaut les [extensions de nom de fichier](https://fr.wikipedia.org/wiki/Extension_de_nom_de_fichier) (`.html`, `.php`, `.jpg`, ...),
ce qui peut poser problème lors du nommage des fichiers ou de la lecture de leurs noms.
Dès lors qu'est utilisé un gestionnaire de fichier dans le cadre des TP, il est conseillé d'activer l'affichage des extensions de nom de fichiers ([support pour Windows](https://support.microsoft.com/fr-fr/windows/extensions-de-nom-de-fichier-courantes-dans-windows-da4a4430-8e76-89c5-59f7-1cdbbc75cb01)).

### Nommage des fichiers

Le nommage des fichiers posant souvent problème, il est recommandé de suivre les règles de bonne pratique suivantes:
 - Tout en minuscule.
 - Remplacer les espaces ` ` par des tirets `-`.
 - Utiliser uniquement des caractères alphanumériques sans accent.

### Fichiers de code

Par convention, les fichiers `index.*` sont utilisés par les serveurs web (par exemple: [Apache](https://fr.wikipedia.org/wiki/Apache_HTTP_Server)) lorsque aucun fichier n'est précisé dans le chemin de l'[URL](https://fr.wikipedia.org/wiki/Uniform_Resource_Locator).

Dans le cours, les noms des fichiers contenant du HTML peuvent se terminer par l'extension `.html` ou `.php` (pour faire la jonction avec le cours de PP). 
Attention toutefois que, même dans le cas d'utilisation d'extentions `.html`, il est fortement recommandé de passer par un serveur web.

### Organisation du code

Le code pouvant contenir un grand nombre de fichiers, il est recommandé de ranger les ressources (images, styles, scripts, fonts, ...) dans des dossiers spécifiques.

### Validité du code

Lors de l'écriture du code, il est important de conserver un code valide à tout moment. Pour déterminer si un code HTML est valide, il faut le soumettre au [W3C validator](https://validator.w3.org/).

Procédure pour écrire du HTML valide (principe général du "quand on l'ouvre, on la ferme"):
 1. Ecrire la balise ouvrante dans son entièreté. (Une balise ouvrante valide se rapporte à la syntaxe suivante: `<` + mot-clé + `>`.) Ex: `<a>`
 2. S'il s'agit d'un élément avec contenu: écrire tout de suite la balise fermante (avant même d'écrire le contenu). (Une balise fermante valide se rapporte à la syntaxe suivante: `</` + mot-clé + `>`.). Ex: `<a></a>`
 3. S'il faut préciser un attribut: revenir dans la balise ouvrante et écrire le nom de l'attribut. (Un nom valide d'attribut est précédé d'un espace de séparation.) Ex: `<a href></a>`
 4. Si l'attribut possède une valeur: faire suivre le nom de l'attribut par `=""`, en veillant à bien écrire 2 fois les doubles-guillemets. Ex: `<a href=""></a>`
 5. S'il faut préciser une valeur non nulle à l'attribut: revenir entre les guillemets et préciser la valeur. Ex: `<a href="uri"></a>`
 6. Si l'élément doit contenir un contenu: se positionner entre la balise ouvrante et fermante et indiquer le contenu. Ex: `<a href="uri">Cliquez ici</a>`


## Exercices

**Attention:** les exercices présentés ici visent à mettre en pratique un maximum de matière théorique. Ils représentent des exemples d'utilisation, mais ne couvrent pas forcément l'entièreté de la matière abordée, ni évidemment l'entièreté des cas possibles.

 - [HTML](./html/README.md)


## Documentation

 1. [MDN - Documentation HTML](https://developer.mozilla.org/fr/docs/Web/HTML)
 2. [MDN - Documentation CSS](https://developer.mozilla.org/fr/docs/Web/CSS)
 3. [MDN - Documentation JavaScript](https://developer.mozilla.org/fr/docs/Web/JavaScript)


## Ressources externes

 1. [openclassrooms - cours HTML5 et CSS3](https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3)
 2. [alsacréation](https://www.alsacreations.com/)
 3. [grafikart](https://grafikart.fr/)
 
 
## Prérequis

Les lectures suivantes ne sont pas obligatoires dans le cadre du cours, mais représentent un support d'étude complémentaire.

### Web

 1. [MDN - Le fonctionnement du Web](https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/How_the_Web_works)
 2. [MDN - Page web, site web, serveur web](https://developer.mozilla.org/fr/docs/Learn/Common_questions/Pages_sites_servers_and_search_engines)
 3. [MDN - Comprendre les URL et leur structure](https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_is_a_URL)
 4. [MDN - Le fonctionnement des liens sur le Web](https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_are_hyperlinks)
 5. [MDN - Qu'est-ce qu'un serveur web ?](https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_is_a_web_server)
 6. [MDN - https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_is_a_domain_name](https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_is_a_domain_name​)

### Réseaux

 1. [MDN - Le fonctionnement de l'Internet](https://developer.mozilla.org/fr/docs/Learn/Common_questions/How_does_the_Internet_work)

### Système de fichiers

 1. [alsacréations - Chemins relatifs et absolus](https://www.alsacreations.com/astuce/lire/78-Quelle-est-la-difference-entre-les-chemins-relatifs-et-absolus-.html)

### HTML

 1. [MDN - Introduction au HTML](https://developer.mozilla.org/fr/docs/Learn/HTML/Introduction_to_HTML)
 2. [MDN - Apprendre le HTML : guides et didacticiels](https://developer.mozilla.org/fr/docs/Learn/HTML)
 3. [alsacréations - Structure de document HTML 5](https://www.alsacreations.com/article/lire/1374-html5-structure-globale-document.html)

### CSS

 1. [MDN - Premiers pas avec CSS](https://developer.mozilla.org/fr/docs/Learn/CSS/First_steps)
 2. [MDN - Composer le HTML avec les CSS](https://developer.mozilla.org/fr/docs/Learn/CSS)

### JS

 1. [MDN - Premiers pas en JavaScript](https://developer.mozilla.org/fr/docs/Learn/JavaScript/First_steps)
 2. [MDN - JavaScript](https://developer.mozilla.org/fr/docs/Learn/JavaScript)



