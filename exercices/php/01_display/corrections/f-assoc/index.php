<?php

$articles = include 'articles.php';

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <base>https://cdn.jsdelivr.net/gh/Raphhh/ephec-lpow-tp@masterexercices/php/01_display/corrections/f-assoc/</base>
        <title>H&M edition</title>
        <link href="./resources/styles/main.css" rel="stylesheet"></link>
        <link rel="icon" type="image/vnd.microsoft.icon" href="https://www2.hm.com/etc.clientlibs/settings/wcm/designs/hm/clientlibs/shared/resources/favicon/favicon.ico">
    </head>
    <body class="sitcky">
        <header>
            <img class="logo" src="./resources/images/logo.png">
        </header>

        <h1>H&M edition</h1>
        <p>Vous allez adorer nos nouveautés. Robes, hauts, pantalons, vêtements d’extérieur... Voici les articles incontournables.</p>
            
        <section class="articles">

            <?php foreach ($articles as $article) { ?>
            
            <article>
                <div class="gallery">
                    <?php foreach ($article['images'] as $url) { ?>
                        <img src="<?php echo $url; ?>" alt="<?php echo $article['title']; ?>">
                    <?php } ?>
                </div>
                <div class="details">
                    <p class="marketing-marker">
                        <?php if ($article['isPremium']) { ?>
                            Premium Selection
                        <?php } ?>
                    </p>
                    <h3><?php echo $article['title']; ?></h3>
                    <div class="item-price"><?php echo $article['price']; ?></div>
                    <div class="item-color" style="background-color: <?php echo $article['color']['value']; ?>"><?php echo $article['color']['title']; ?></div>
                </div>
            </article>

            <?php } ?>
        
        </section>
    </body>
    <script src="./resources/scripts/main.js"></script>
</html>