# Balises avec attribut

## Ressources
|Balise|Lien|
|------|----|
|`img`|[images](https://www.w3schools.com/tags/tag_img.asp)|
|`a`|[liens/ancres](https://www.w3schools.com/tags/tag_a.asp)|

## Exercice 1

Insérer une image avec ses attributs obligatoires dans la page. Les 5 images suivantes sont disponnibles dans le répertoire `images` : `concert.jpg`, `mer.jpg`, `paysage.jpg`, `route.jpg` et `urbain.jpg`.

@[Images]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide .*img-alt;src-.*"})

## Exercice 2

Insérer un lien vers *https://www.w3schools.com/*.
@[Liens]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide .*a-href=https://www.w3schools.com/-.*"})

## Exercice 3
Le document est au total constitué de 10 paragraphes. Avant le premier paragraphe insérer un lien vers une ancre placé avant le dernier paragraphe. 

@[Liens et ancres]({"stubs": ["lorem.html"], "command": "/bin/bash run.sh lorem o{.*a-href-(p--){9}p-id-.*}"})
