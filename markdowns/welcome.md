# Rappel HTML
Le HTML est un langage de balisage standard pour créer des pages Web.
- HTML signifie *Hyper Text Markup Language*
- Le HTML décrit la structure d'une page web en utilisant des balises
- Les éléments HTML sont les blocs de construction des pages HTML
- Les éléments HTML sont représentés par des balises
- Les balises HTML étiquettent des éléments de contenu tels que "titre", "paragraphe", "tableau", etc.
- Les navigateurs n'affichent pas les balises HTML, mais les utilisent pour afficher le contenu de la page.

# Contexte d'utilisation
Pour les premiers exercices que vous réaliserez sur cette interface il est uniquement demandé d'introduire le code contenu dans le `body`.
Vous serez donc dans le contexte présenté ci-après :
```html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Titre de page</title>
	</head>
	<body>
		//Votre code se trouvera ici.
	</body>
</html>
```
## Explication du contenu de base

- La déclaration `<! DOCTYPE html>` définit le document comme étant HTML5
- L'élément `<html>` est l'élément racine d'une page HTML
- L'élément `<head>` contient des méta-informations sur le document (non visible dans la page)
- L'élément `<title>` spécifie le titre du document
- L'élément `<meta charset="UTF-8">` spécifie le type d'encodage document (ici UTF-8)
- L'élément `<body>` contient le contenu visible de la page



# Exemple
Pour ce premier exemple, il faut écrire du code HTML incluant un saut de ligne.

@[Premier exemple]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide br--"})
