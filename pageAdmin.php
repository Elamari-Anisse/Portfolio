<?php
include("inc/config.inc.php");
include("inc/function.inc.php");
$page = "admin";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include("inc/header.inc.php"); ?>
</head>

<body>
    <main>
        <?php include("inc/navAdmin.inc.php"); ?>
        <?php include("inc/dashboardAdmin.inc.php"); ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>