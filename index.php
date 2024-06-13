<?php
include("inc/config.inc.php");
include("inc/function.inc.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include("inc/header.inc.php"); ?>
</head>

<body>
    <?php
    if($page !== "admin"){
    include("inc/nav.inc.php");}?>
    <main>
        <div class="flex main-1">
            <?php 
                include("inc/presentation.inc.php");
            ?>
        </div>
        <div class="flex main-2">
            <?php
            include("inc/projet.inc.php");
            include("inc/competence.inc.php"); ?> 
        </div>
    </main>
    <?php include("inc/footer.inc.php"); ?>
</body>

</html>