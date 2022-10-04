# Projet Portfolio

## Objectif du projet
-----
Les épreuves du BTS intègrent un oral nécessitant d'intégrer un dossier numérique. Ce dossier comprend un certain nombre d'éléments dont un Portfolio à réaliser sous forme de site web.  
Ce Portfolio présente votre parcours et vos acquis professionnels tout au long de la formation, vous permettant ainsi de démontrer au jury votre niveau et votre capacité à intégrer le monde professionnel à l'issue de la formation.

L'objectif de ce projet est de développer un site web répondant aux exigeances détaillées ci-dessous.

<br>

## Fonctionnalités attendues
-----
Votre Portfolio devra obligatoirement intégrer les éléments suivants (vous êtes cependant libres de les intégrer à votre façon) :

<br>

Une section CV, intégrant :  
- Une présentation personnelle (texte de présentation + photo)  
- Une présentation de votre parcours (scolaire & études, avec les dates et lieux correspondants)  
- Une liste des diplômes & certifications obtenus (avec la date et le lieu)  
- Vos expériences professionnelles (stages/alternances : description des missions + retour d'expérience sur les compétences aquises et votre appréciation)  
- Une liste de vos compétences acquises durant la formation ou ailleurs, avec une indication de votre niveau dans la compétence  
- Des liens vers vos réseaux sociaux professionnels (**LinkedIn obligatoire** + Github ou autre)  
- Des compléments au choix (loisirs, activités annexes, passions, sujet qui vous tient à coeur, etc... Par exemple : vous faites de la photographie ? présentez votre passion, pourquoi vous aimez ça et mettez un lien vers votre instagram. Vous êtes militant dans une association ? Présentez-là et mettez un lien vers le site de l'association.)  
- Le téléchargement de votre CV en PDF pour les visiteurs

<br>

Une section Contact, intégrant :  
- Un formulaire de contact (qui vous envoie les informations remplies par email et/ou les enregistre en base de données pour être consultées depuis le backoffice du site)

<br>

Une section Veille, intégrant :  
- Une présentation de votre méthodologie de veille informatique  
- Le téléchargement d'un PDf sur la présentation d'un sujet spécifique  

<br>

Une section Projets, intégrant une présentation des différents projets sur lesquels vous avez travaillés (projets du BTS, projets professionnels, projets personnels). Chaque projet devra comprendre :  
- Un texte de présentation du projet et de ses objectifs  
- Une présentation du travail personnellement réalisé  
- Une présentation du résultat final (les objectifs sont-ils atteints ? Y a-t-il une suite au projet ?)  
- D'éventuels liens vers des ressources associées (documents, site externe, etc.)  
- Une présentation des compétences qui ont été nécessaires pour réaliser ce projet (langage de programmation, compétences professionnelles, personnelles, techniques, organisationnelles, etc.)  
- Présentation du retour d'expérience, c'est à dire ce que ce projet vous a apporté, les difficultés rencontrées, etc.

<br>

Des documents nécessaires aux épreuves E4 et E5 du BTS devant être mis à disposition (tableau de synthèse E4, PPT E4 en PDF, Fiches missions E5, Documentation missions E4 et E5), vous pouvez également ajouter une section téléchargement ou bien mettre à disposition ces fichiers à différents endroits du site (par exemple avoir différentes sections donnant chacune accès aux documents correspondants).  

<br>

Créer un backoffice avec **système d'authentification**, il devra intégrer :  
- Un log des accès au backoffice (date, utilisateur)  
- Un éditeur permettant de modifier les informations du site (CV, diplômes, projets, pages, etc.)  

<br>

Vous pouvez également ajouter d'autres fonctionnalités pour enrichir votre site, comme par exemple :  
- Un système d'articles (type blog) avec éditeur WYSIWYG côté backoffice
- La possibilité pour les visiteurs de laisser des commentaires sur les articles
- Un log des visites du site consultable depuis le backoffice (type Google Analytics ou équivalent)  
- Toute autre idée pouvant démontrer un niveau de compétence (n'hésitez pas à demander confirmation auprès de l'intervenant)

Les articles pourront par exemple être utilisés pour présenter les sujets techniques de veille.

<br>

## Contraintes 
-----
Le site web devra répondre aux contraintes suivantes :  
- Toutes les informations (projets, diplômes, expériences, etc.) devront être structurées dans une base de données de manière à pouvoir être modifiées depuis le backoffice
- Le code doit être versionné avec **Git**, détaillez dans la documentation de votre site comment est utilisé Git pour le développement du site (comment sont organisées les branches et les modifications apportées au fur et à mesure)
- Le site doit être réalisé de manière à accepter une amélioration continue, c'est à dire d'organiser la mise en ligne de modifications (écrire une procédure à suivre pour mettre en ligne une nouvelle version)
- Vous devez mettre en place une méthode d'organisation et de suivi pour votre projet (tableau de bord Excel ou autre)
- La base de données du site devra pouvoir être sauvegardée et restaurée en cas de problème (ou de migration vers un autre serveur par exemple), écrivez dans votre documentation les procédures de sauvegarde et restauration de la BDD. 

<br>

## Etapes de réalisation
-----
Pour construire votre Portfolio, voici les étapes à suivre :  
- A partir des éléments ci-dessus, définir par écrit les fonctionnalités que vous allez implémenter sur le site (type analyse fonctionnelle).  
- Une fois les fonctionnalités identifiées, réaliser un tableau de bord pour lister les tâches et ainsi suivre leur avancement (tableau Excel ou autre).  
- Réaliser un planning vous permettant de savoir à quel moment réaliser quelle tâche (vous pouvez par exemple intégrer la notion de dates à votre tableau de bord pour y noter les deadlines et le temps nécessaire à chaque tâche).  
- Réaliser une maquette du projet (sur papier ou logiciel d'UX genre Balsamiq Mockup, Adobe XD, etc... au choix), cette maquette vous aidera à identifier les différentes pages du site à créer et la manière dont elles vont être liées.  
- Réaliser un modèle de la BDD du site (quelles tables créer ? De quelle manière seront-elles liées ? Pour cette étape, il est nécessaire de bien avoir identifié le travail à réaliser).  

**Il est conseillé de passer un maximum de temps sur la préparation avant de se lancer dans le développement, cela permettra d'anticiper les problématiques (et éviter de réécrire inutilement du code au fur et à mesure...)**

**Il est primordial d'écrire et conserver la documentation écrite concernant la préparation et l'avancement de son projet Portfolio pour le présenter lors de l'épreuve.**