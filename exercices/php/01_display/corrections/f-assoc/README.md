# PHP - display - corrections

## Mini page de produits

Pour le code complet, voir le fichier [index.php](./index.php).

### Code principal

#### Structure des données

```php
<?php

$articles = [
    [
        '#' => 1,
        'isPremium' => true,
        'title' => 'Pantalon en soie mélangée',
        'price' => '119,00 €',
        'color' => ['title' => 'Noir', 'value' => '#272628'],
        'images' => [
            './data/images/0-0.jpg',
            './data/images/0-1.jpg'
        ],
    ],
    [
        '#' => 2,
        'isPremium' => true,
        'title' => 'Pantalon ample en lin',
        'price' => '69,99 €',
        'color' => ['title' => 'Noir', 'value' => '#272628'],
        'images' => [
            './data/images/1-0.jpg',
            './data/images/1-1.jpg'
        ],
    ],
    ...
];

```

#### Affichage des données

(Afin de simplifier l'affichage, les classes CSS ne sont pas reprises ici. Voir fichiers complets.)

```php
<section>

<?php foreach ($articles as $article) { ?>
    
    <article>
        <div>
            <?php foreach ($article['images'] as $url) { ?>
                <img src="<?php echo $url; ?>" alt="<?php echo $article['title']; ?>">
            <?php } ?>
        </div>
        <div>
            <p>
                <?php if ($article['isPremium']) { ?>
                    Premium Selection
                <?php } ?>
            </p>
            <h3><?php echo $article['title']; ?></h3>
            <div><?php echo $article['price']; ?></div>
            <div style="background-color: <?php echo $article['color']['value']; ?>">
                <?php echo $article['color']['title']; ?>
            </div>
        </div>
    </article>

<?php } ?>

</section>
```

## Explications

Ce code permet de générer un document HTML contenant une liste de produits.

1. La variable `$articles` est initialisée avec une liste de produits. Chaque produit est lui-même un tableau associatif.

2. Dans une balise "section" du document, une première boucle "foreach" permet d'itérer sur chaque produit.

3. Lors de chaque itération, on construit le HTML du produit en fonction des informations présentes dans le le tableau associatif du produit.

    Attention: on remarque que chaque entrée dans le tableau associatif fait l'objet d'un traitement particulier. Par exemple, on boucle sur les images, étant donné que la clé "images" contient une liste des url des images.


