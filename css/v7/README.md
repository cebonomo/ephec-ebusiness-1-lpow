# Changements

 1. Ajout, dans `styles/main.css`, des proptiétés de dimension:
    - `height` ([MDN docs - hauteur](https://developer.mozilla.org/fr/docs/Web/CSS/height))))
    - `width` ([MDN docs - largeur](https://developer.mozilla.org/fr/docs/Web/CSS/width))))

 ```css
 .restricted-size {
    width: 250px;
    height: 75px;
}
``` 

 2. Ajout, dans `styles/main.css`, des proptiétés de dimension maximale:
    - `max-width` ([MDN docs - largeur](https://developer.mozilla.org/fr/docs/Web/CSS/max-width))))
    - ...

```css
body {
    max-width: 1024px;
}
```

 2. Ajout, dans `styles/main.css`, des proptiétés de dépassement de contenu (optionel):
    - `overflow` ([MDN docs - overflow](https://developer.mozilla.org/fr/docs/Web/CSS/overflow))

 ```css
 .restricted-size {
    width: 250px;
    height: 75px;
    overflow-y: scroll;
}
``` 