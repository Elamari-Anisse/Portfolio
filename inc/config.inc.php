<?php
// Créer une connexion à cette base avec PDO (création de l'objet PDO)
$host = "mysql:host=localhost;dbname=portfolio";
$login = "root";
$password = "";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

// Création de l'objet password: 
$pdo = new PDO($host, $login, $password, $options);

$mdp = password_hash("admin", PASSWORD_ARGON2I);
/* $pdo->query("INSERT INTO utilisateur(id_user, username, mdp) VALUE
(1, 'anisse', '$mdp');"); */

$presentation = $pdo->query("SELECT contenu, image_profil, banner FROM presentation")->fetch(PDO::FETCH_ASSOC);

/* $pdo->query("INSERT INTO presentation(id_presentation, contenu) VALUE
(1, '$presentation');"); */

$projet_image = ("img");
$projet_lien = ("lien");
$projets = $pdo->query("SELECT  id_projet, image, lien FROM projet")->fetchAll(PDO::FETCH_ASSOC);


/*$pdo->query("INSERT INTO (id_projet, image, lien) VALUE
(1, '$projet_image', '$projet_lien');");*/

$message_text = ("salut merci. ?");
$message_mail = ("salut@gmail.com");
$messages = $pdo->query("SELECT id_message, nom, mail, objet, message, date FROM message")->fetchAll(PDO::FETCH_ASSOC);

/*$pdo->query("INSERT INTO (id_message, mail, message) VALUE
(1, '$message_mail', '$message_text');");*/

$competences_section = ("front");
$competences_titre = ("html");
$competences_valeur = ("75");

$page="0";

$requete = $pdo->query("SELECT id_competence, categorie, titre, valeur FROM competence");
$competences = $requete->fetchAll(PDO::FETCH_ASSOC);

/*$pdo->query("INSERT INTO (id_competences, valeur, section, titre) VALUE
(1, '$competences_valeur', '$competences_section', '$competences_titre');");*/

$reseaux_titre = ("linkedin");
$reseaux_icon = ("L");
$reseaux_lien = ("http/linkedin");
$reseauxs = $pdo->query("SELECT id_reseaux, titre, icon, lien FROM reseaux")->fetchAll(PDO::FETCH_ASSOC);

/* $pdo->query("INSERT INTO (id_reseaux, titre, icon, lien) VALUE
(1, '$reseaux_titre', '$reseaux_icon', '$reseaux_lien');");*/