# Composition de balise

Les exercices ci-après nécessitent de combiner plusieurs balises.

## Ressources
|Balise|Lien|
|------|----|
|`table`|[tableau](https://www.w3schools.com/tags/tag_table.asp)|
|`tr`|[ligne](https://www.w3schools.com/tags/tag_tr.asp)|
|`td`|[colonne](https://www.w3schools.com/tags/tag_td.asp)|
|`section`|[section](https://www.w3schools.com/tags/tag_section.asp)|
|`article`|[article](https://www.w3schools.com/tags/tag_article.asp)|

## Exercice 1
Construire un tableau de 3 lignes et 4 colonnes avec une contenu quelconque.

@[Tableau]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{table--[(tr--[(td--){4}]){3}]}"})

## Exercice 2

Dans le texte ci-dessous :
- Informatique est un titre de niveau 1
- Définition et Histoire sont des titres de niveau 2
- Chaque autres portions de texte est un paragraphe
- Chaque titre et les paragraphes le suivant constitue une section
- L'ensemble du document constitue un article
 
@[Texte]({"stubs": ["informatique.html"], "command": "/bin/bash run.sh informatique o{article--[section--[h1--(p--){2}]section--[h2--(p--){3}]section--[h2--(p--){2}]]}"})