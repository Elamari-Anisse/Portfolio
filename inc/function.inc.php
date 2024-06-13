<?php

if (isset($_POST["titre"]) && isset($_POST["valeur"]) && isset($_POST["categorie"])) {

    $titre = trim($_POST["titre"]);
    $valeur = trim($_POST["valeur"]);
    $categorie = trim($_POST["categorie"]);
    $erreur="non";

    if (empty($titre) || empty($valeur) || empty($categorie)) {
        $erreur = "oui";
        $messageErreur .= "<div class='alert alert-danger' role='alert'>Attention, veuillez bien saisir les champs de compétences !</div>";
    }
    if ($erreur == "non") {
    
        $requete = "INSERT INTO competence (titre, categorie, valeur) VALUES ('$titre', '$categorie', '$valeur')";
        $pdoStmt = $pdo->prepare("INSERT INTO competence (titre, categorie, valeur) VALUES (:titre, :categorie, :valeur)");
        $pdoStmt->bindParam(':titre', $titre, PDO::PARAM_STR);
        $pdoStmt->bindParam(':categorie', $categorie, PDO::PARAM_STR);
        $pdoStmt->bindParam(':valeur', $valeur, PDO::PARAM_STR);
        $pdoStmt->execute();
        header("Location: pageAdmin.php?page=competences");
    }
    
}

if (isset($_GET["action"]) && $_GET["action"] == "deletecompetence" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $pdoStmt = $pdo->prepare("DELETE FROM competence WHERE id_competence = :id");
    $pdoStmt->bindParam(':id', $id, PDO::PARAM_STR);
    $pdoStmt->execute();
    header("Location: pageAdmin.php?page=competences");
    exit();
}

if (isset($_POST["contenu"])) {
    $contenu = trim($_POST["contenu"]);

    if( ! empty($_FILES['img_profil']['name']) ) {
        $tab_extensions = array('.png', '.jpg', '.jpeg', '.gif', '.webp');

        $extension = strrchr($_FILES['img_profil']['name'], '.');
        $extension = strtolower($extension);

        if(in_array($extension, $tab_extensions)) {
            $nom_fichier = uniqid() . $extension;
            copy($_FILES['image']['tmp_name'], __DIR__ . 'asset/img/' . $nom_fichier);
        }else {
            echo '<div class="alert alert-danger">Format non valide, formats acceptés : jpg, jpeg, png, gif et webp</div>';
        }
    }

    $requete = "UPDATE presentation SET contenu = :contenu WHERE id_presentation = :id";
    $pdoStmt = $pdo->prepare($requete);
    $pdoStmt->bindParam(':contenu', $contenu, PDO::PARAM_STR);
    $id = 1;
    $pdoStmt->bindParam(':id', $id, PDO::PARAM_INT);
    $pdoStmt->execute();
    header("Location: pageAdmin.php?page=presentation");

}



if (isset($_POST["icon"]) && isset($_POST["lien"]) && isset($_POST["titre"])) {
    $titre = trim($_POST["titre"]);
    $icon = trim($_POST["icon"]);
    $lien = trim($_POST["lien"]);
    $erreur="non";

    if (empty($titre) || empty($icon) || empty($lien)) {
        $erreur = "oui";
        $messageErreur .= "<div class='alert alert-danger' role='alert'>Attention, veuillez bien saisir les champs de compétences !</div>";
    }
    if ($erreur == "non") {
        $requete = "INSERT INTO reseaux (titre, icon, lien) VALUES ('$titre', '$icon', '$lien')";
        $pdoStmt = $pdo->prepare("INSERT INTO reseaux (titre, icon, lien) VALUES (:titre, :icon, :lien)");
        $pdoStmt->bindParam(':titre', $titre, PDO::PARAM_STR);
        $pdoStmt->bindParam(':icon', $icon, PDO::PARAM_STR);
        $pdoStmt->bindParam(':lien', $lien, PDO::PARAM_STR);
        $pdoStmt->execute();
        header("Location: pageAdmin.php?page=reseaux");
    }
}

if (isset($_GET["action"]) && $_GET["action"] == "deletereseaux" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $pdoStmt = $pdo->prepare("DELETE FROM reseaux WHERE id_reseaux = :id");
    $pdoStmt->bindParam(':id', $id, PDO::PARAM_STR);
    $pdoStmt->execute();
    header("Location: pageAdmin.php?page=reseaux");
}


if (isset($_POST["nom"]) && isset($_POST["mail"]) && isset($_POST["objet"]) && isset($_POST["message"])) {
    $nom = trim($_POST["nom"]);
    $mail = trim($_POST["mail"]);
    $objet = trim($_POST["objet"]);
    $message = trim($_POST["message"]);

    if (empty($nom) || empty($mail) || empty($objet) || empty($message)) {
        echo "<div class='alert alert-danger' role='alert'>Attention, veuillez bien saisir les champs !</div>";
    }else{
        date_default_timezone_set('Europe/Paris');
        $now = new DateTime();
        $currentDate = $now->format('H:i:s d-m-Y');

        $requete = "INSERT INTO message (nom, mail, objet, message, date) VALUES ('$nom', '$mail', '$objet', '$message', '$currentDate')";
        $pdoStmt = $pdo->prepare("INSERT INTO message (nom, mail, objet, message, date) VALUES (:nom, :mail, :objet, :message, :date)");
        $pdoStmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $pdoStmt->bindParam(':mail', $mail, PDO::PARAM_STR);
        $pdoStmt->bindParam(':objet', $objet, PDO::PARAM_STR);
        $pdoStmt->bindParam(':message', $message, PDO::PARAM_STR);
        $pdoStmt->bindParam(':date', $currentDate, PDO::PARAM_STR);
        $pdoStmt->execute();
    }
}

if (isset($_POST["image"]) && isset($_POST["lien"])) {
    $image = trim($_POST["image"]);
    $lien = trim($_POST["lien"]);

    if (empty($image) || empty($lien)) {
        $messageErreur .= "<div class='alert alert-danger' role='alert'>Attention, veuillez bien saisir les champs de compétences !</div>";
    }else{
        $requete = "INSERT INTO projet (image, lien) VALUES ('$image', '$lien')";
        $pdoStmt = $pdo->prepare("INSERT INTO projet (image, lien) VALUES (:image, :lien)");
        $pdoStmt->bindParam(':image', $image, PDO::PARAM_STR);
        $pdoStmt->bindParam(':lien', $lien, PDO::PARAM_STR);
        $pdoStmt->execute();
        header("Location: pageAdmin.php?page=projet");
    }
}

if (isset($_GET["action"]) && $_GET["action"] == "deleteprojet" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $pdoStmt = $pdo->prepare("DELETE FROM projet WHERE id_projet = :id");
    $pdoStmt->bindParam(':id', $id, PDO::PARAM_STR);
    $pdoStmt->execute();
    header("Location: pageAdmin.php?page=projet");
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $username;
        echo "Connexion réussie !";
    }else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    } 
}

if (isset($_GET["action"]) && $_GET["action"] == "deletemessage" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $pdoStmt = $pdo->prepare("DELETE FROM message WHERE id_message= :id");
    $pdoStmt->bindParam(':id', $id, PDO::PARAM_STR);
    $pdoStmt->execute();
    header("Location: pageAdmin.php?page=messages");
}