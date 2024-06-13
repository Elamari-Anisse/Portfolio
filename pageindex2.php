<!DOCTYPE html>
<html lang="fr">

<body>
    <?php
    if($page !== "admin"){
    include("inc/nav.inc.php"); }?>
    <main>
        <?php
        include("inc/presentation.inc.php");
        include("inc/projet.inc.php");
        include("inc/competence.inc.php"); ?>

    </main>

    <?php include("inc/footer.inc.php"); ?>
</body>

</html>