# La sémantique
Le HTML5 améliore la sémantique dans l'utilisation du balisage HTML en renforçant la signification des informations contenues dans les pages web, c'est-à-dire leur sens, plutôt que de se borner à définir leur présentation (ou apparence).

## Ressources
|Balise|Lien|
|------|----|
|`section`|[section](https://www.w3schools.com/tags/tag_section.asp)|
|`article`|[article](https://www.w3schools.com/tags/tag_article.asp)|
|`header`|[En-tête](https://www.w3schools.com/tags/tag_header.asp)|
|`footer`|[Pied-de-page](https://www.w3schools.com/tags/tag_footer.asp)|
|`aside`|[Contenu tangentiel](https://www.w3schools.com/tags/tag_aside.asp)|
|`nav`|[Navigation](https://www.w3schools.com/tags/tag_nav.asp)|
|`main`|[Contenu principal](https://www.w3schools.com/tags/tag_main.asp)|

## Exercice 1
Il faut compléter le code ci-dessous en insérer les balises nécessaires à organiser et ajouter de la sémantique au texte.
La page doit se découper en 4 parties contenant chacune des sous-éléments :
- un en-tête de page :
	- d'un titre de niveau 1 "Villes de Belgique"
- un contenu tangentiel :
	- Contenant une image du répertoire `images` et dont le nom est `TE-Collage_Liege.png`
- un article principal composé de :
	- un en-tête lui-même composé :
		- D'un titre de niveau 2 avec le texte "Liège"
		- Le paragraphe suivant le titre Liège
	- deux sections elles-mêmes composées :
		- d'un titre de niveau 3 "Topographie" et "Hydrographie"
		- des différents paragraphe suivant chacun des titres
- un pied de page :
	- Contenant les 2 derniers paragraphes

Si les balises sont placées correctement, le résultat final est agrémenté de CSS pour un résultat graphique.

@[Texte]({"stubs": ["liege.html"], "command": "/bin/bash run.sh liege o{header--[h1--]aside--[img-alt;src-]article--[header--[h2--p--](section--[h3--(p--)+])+]footer--[(p--){2}]} style.css"})
