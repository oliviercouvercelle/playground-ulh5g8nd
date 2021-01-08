# Les formulaires

Un formulaire fournit un espace sur la page HTML où l'utilisateur peut entrer des données ; données qui pourront être envoyées au serveur pour être éventuellement traitées. Un formulaire est composé d'un ou plusieurs éléments d'entrée englobés par la balise `form`. La balise `form` devra avoir les attributs `method` et `action` permettant le traitement du formulaire.

## Ressources

|Balise|Lien|
|------|----|
|`form`|[Formulaire](https://www.w3schools.com/tags/tag_form.asp)|
|`input`|[Champ](https://www.w3schools.com/tags/tag_input.asp)|
|`select`|[Liste déroulante](https://www.w3schools.com/tags/tag_select.asp)|
|`option`|[Elément de liste](https://www.w3schools.com/tags/tag_option.asp)|
|`textarea`|[Zone de texte multiligne](https://www.w3schools.com/tags/tag_textarea.asp)|

## Exercice 1

Créer un formulaire contenant au minimum un champ de saisie de texte. Attention de ne pas oublier les attributs nécessaire au bon fonctionnement d'un formulaire `method`, `action` et `name`.

@[Formulaire base]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{form-action;method-[.*(input-name;type=text-)+.*]}"})

## Exercice 2

Créer un formulaire contenant dans l'ordre un champ de saisie et une liste déroulante d'au moins 3 entrées.

@[Formulaire]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{form-action;method-[.*(input-name;type-)+.*select-name-[(option-value-){3,}]].*}"})

## Exerice 3

Créer un formulaire contenant un zone de saisie de texte multiligne.

@[Formulaire]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{form-action;method-[.*textarea-name-.*]}"})

## Exercice 4

Créer un formulaire contenant des champs de type case à cocher.

@[Formulaire]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{form-action;method-[.*input-name;type=checkbox-.*]}"})

## Exercice 5

Créer un formulaire contenant au moins 3 champs de type radio button. Attention ils doivent tous avoir leur attribut name défini sur le nom "myradio".

@[Formulaire]({"stubs": ["vide.html"], "command": "/bin/bash run.sh vide o{form-action;method-[.*(input-name=myradio;type=radio-){3,}.*]}"})
