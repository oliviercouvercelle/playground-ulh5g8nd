# Balises sans attribut

**Remarque** : Les balises utilisées ci-après sont utilisées pour les exercices sans attribut mais elles peuvent en prendre.

## Ressources
|Balise|Lien|
|------|----|
|`p`|[paragraphes](https://www.w3schools.com/tags/tag_p.asp)|
|`h#`|[titres](https://www.w3schools.com/tags/tag_hn.asp)|
|`ul`|[listes non-ordonnées](https://www.w3schools.com/tags/tag_ul.asp)|
|`ol`|[listes ordonnées](https://www.w3schools.com/tags/tag_ol.asp)|
|`li`|[éléments de listes](https://www.w3schools.com/tags/tag_li.asp)|
|`pre`|[Texte préformaté](https://www.w3schools.com/tags/tag_pre.asp)|

**Balises supplémentaires :**
[`sub`](https://www.w3schools.com/tags/tag_sub.asp) [`sup`](https://www.w3schools.com/tags/tag_sup.asp) [`q`](https://www.w3schools.com/tags/tag_q.asp) [`code`](https://www.w3schools.com/tags/tag_code.asp) [`var`](https://www.w3schools.com/tags/tag_var.asp) [`em`](https://www.w3schools.com/tags/tag_em.asp) [`strong`](https://www.w3schools.com/tags/tag_strong.asp) [`mark`](https://www.w3schools.com/tags/tag_mark.asp)

## Exercice 1

Encoder dans votre page 2 paragraphes.

@[Les titres]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{.*p--.*p--.*}"})

## Exercice 2 

Encoder dans l'ordre des titres de niveau 1 à 6.

@[Les titres]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{.*h1--.*h2--.*h3--.*h4--.*h5--.*h6--.*}"})


## Exercice 3

Encoder une liste ordonnées d'au moins 3 éléments.

@[Listes]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{.*ol--[(li--){3,}].*}"})

## Exercice 4

Encoder dans l'ordre un titre de niveau 1, un paragraphe contenant une partie de texte mis en évidence `em`, un paragraphe contenant une partie de texte importante `strong` et un paragraphe contenant une partie de texte surligné `mark`.

@[Listes]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{.*p--[em--].*p--[strong--].*p--[mark--].*}"})

## Exercice 5

J'ai réalisé les portraits des Simpsons en Ascii Art pour l'afficher sur ma page web. J'aimerais que celui-ci s'affiche correctement une fois le HTML interprété. Ajouté la balise adéquate pour que l'oeuvre apparraise non déformée dans le navigateur.

@[Ascii Art]({"stubs": ["simpson.html"], "command": "/bin/bash run.sh simpson pre--"})
