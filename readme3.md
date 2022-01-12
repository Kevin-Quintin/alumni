# PHP - PDO, ce n'est pas uniquement pour créer des patients et des rendez-vous ;)

**Pour le TP qui va suivre** :   
- Bien respecter *les normes W3C*.
- Le back ne fait pas tout : Penser à l'*UI/UX*.
- Mettre en place un MVC light.
- Bien penser en amont à la base de données.

## ALUMNI "La Manu"
> *L'Académie française recommande l'usage d'« anciens élèves » plutôt que le pluriel anglo-latin *alumni*, mais nous ... on ... aime bien faire **classe***. 

Vous allez être relativement libre mais il va falloir respecter les figures imposées !!!

Cette exercice aura une structure simple de type :

- public
    - css
    - js
    - img
- models
- views
- controllers
- *index.php*

## LE BESOIN 
> *Les fonctionnalités, nos attentes, etc ...*

Nous souhaitons rassembler les étudiants de La Manu sur un site.  
Le but ? Partager son profil avec un lien github, une anecdote rigolote, et bien plus ... au final c'est cool un(e) apprenti(e) développeur(euse) :p.

Au préalable, avant d'être une RockStar, il faudra s'enregistrer sur le site et obtenir la validation d'un modérateur : Il faut bien vérifier qu'il s'agisse bien d'une personne ayant vécue des jours heureux à la Manu ! ;).

Une fois l'inscription validée, le profil sera enfin visible et nous allons pouvoir cliquer dessus pour avoir plus de détails : **Yeah** !!!!.

## L'INSCRIPTION SUR LE SITE
> *Quelles sont les informations que nous souhaitons partager et conserver ?*

Le classique, vous allez créer un formulaire demandant les infos suivantes :

- Nom*
- Prénom*
- *Pseudo*
- Adresse mail*
- Mot de passe*
- Campus*
- La promo*
- La période d'étude à la Manu*
- *Lien GitHub*
- *Photo de profil*
- *Anecdote à la Manu*

**Obligatoire lors de l'inscription*

## LES PROFILS DE NOS ETUDIANT(E)S A LA MANU
> *Qui es-tu ?*

Vous avez le choix d'affichage : Liste, galerie, cards ... 

Une fois validé, le profil sera visible et nous devrons pouvoir lire/voir rapidement :

- Le Nom / prénom
- le campus
- la période d'étude à la Manu
- la promo correspondante
- la photo de profil

Bien sûre, en cliquant dessus, le profil va s'ouvrir et nous pourrons accéder à + d'infos.

- Nom, prénom, pseudo
- La photo de profil
- Campus, période d'étude à la Manu
- Lien github
- L'anecdote à la Manu

***!!! NE PAS RENDRE PUBLIC LE MAIL !!!***

## LES ETUDIANT(E)S
> *Heureux de vous voir de retour*

A l'aide du combo "login et mdp", les étudiant(e)s pourront modifier leurs profils, sous validation des modos pour certaines informations : Campus, période d'étude, photo, lien, etc ...

## LE ROLE DES MODERATEURS
> *Personne, chose qui tend à modérer ce qui est excessif, à concilier les partis opposés.*

Bien penser à vos modérateurs ! 

1 - Tous les profils doivent être validés par les modérateurs, il faut donc penser à leurs créer un **dashboard** permettant de gérer tout ça ;).

2 - De plus toutes modifications du profil : Photo, Anecdote et autres doivent être, de nouveau, validées, avant publication. (Pas de photos provocantes, d'anecdotes pouvant blesser/porter préjudices, etc ...).

## A VOUS DE JOUER
> *On va peut être conserver vos idées ;)*

Bien évidemment pour les plus rapides : **Les bonus**

- filtrer par campus, par promos, par année.
- pagination.
- ne pas rendre public certaines infos.
- etc ...

*Ps : Ne pas prendre en compte les fautes d'orthographe des consignes :p*