# cf2m-RecettesDuMonde-exe_blog_PDO_team_git
exercice de groupe : réaliser un site en pdo avec une db à faire nous-même et en utilisant git. 

+++ ROUTEUR public +++
=> HAYAT

+++ ROUTEUR admin +++
=> dalyome

+++ AFFICHAGE public +++

[accueil] => miloon
carte cliquable en map + listes des 5 dernières recettes en aléatoire
// pour l'affichage, on va mettre que le header, pas de menu de navigation (la carte suffira)

[détail continent] => HAYAT
- Titre continent 
- Liste des pays du continent : titre pays + ladesc pays (1 à 200 caractères) + nombre total de recettes relatives au pays.
// pour l'affichage, on va faire ça sous forme de vignettes avec l'image du pays, le nom du pays, la desc courtes et les titres des 3 derniers articles.

[détail pays] => dalyome

- IMG du pays
- Titre pays
- Ladesc pays => en toggle
- Recettes du pays classées par date DESC

[détail recettes] => miloon
- Titre
- Ladesc (nl2br)
- la date
- en bas de la page, on fait un module pour afficher l'auteur, sa bio et ses derniers articles.

[détail utilisateur / profil] => miloon
- Pseudo
- ladesc
- liste des articles écrits par l'utilisateur

[MENU PUBLIC HORIZONTAL] => HAYAT
- accueil
- continents => pays => recettes
- connexion

[MENU ADMIN VERTICAL] => dalyome en toggle
- accueil
- continents => pays => recettes
- déconnexion

[FOOTER] => dalyome
- crédit (une page qui parle de nous qu'on a fait le site) => miloon
- contact (pour nous contacter en cas de bugs) => miloon


+++ PAGE CONNEXION +++ => dalyome

[Admin Ajout d'article] => HAYAT

[Admin modif/sup] => miloon


+++ Vérification par Michaël 2016-04-22 10h00

+++ MESSAGES D'ERREUR
Warning: mail(): Failed to connect to mailserver at "127.0.0.1" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in modele\contact.php on line 21
