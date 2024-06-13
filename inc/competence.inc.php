<section class="container ">
    <div id="competences">

        <?php
        echo "<hr><br>";

        echo "<div class='mb-4 m-3'><h5>Frontend</h5>";
        foreach ($competences as $competence) {
            if ($competence['categorie'] === "frontend") {
                if (isset($competence['categorie'], $competence['titre'], $competence['valeur'], $competence['id_competence'])) {
                    echo "<br> $competence[titre] $competence[valeur]";
                    if($page ==="admin"){
                        echo'   --------<a href="?action=deletecompetence&id=' . $competence["id_competence"] . '">Suppr</a>';
                    }
                    echo "<div class='progress' role='progressbar' aria-valuenow='$competence[valeur]' aria-valuemin='0' aria-valuemax='100'>
                    <div class='progress-bar' style='width:$competence[valeur]%'></div>
                    </div>";
                }
            }
        }
        echo "</div>";

        echo "<div class='m-3'><h5 class=''>Backend</h5>";
        foreach ($competences as $competence) {
            if ($competence['categorie'] === "backend" && isset($competence['titre'], $competence['valeur'], $competence['id_competence'])) {

                    echo "<br> $competence[titre] $competence[valeur]";
                    if($page === "admin"){
                        echo'   --------<a href="?action=deletecompetence&id=' . $competence["id_competence"] . '">Suppr</a>';
                    }
                    echo "<div class='progress' role='progressbar' aria-valuenow='$competence[valeur]' aria-valuemin='0' aria-valuemax='100'>
                    <div class='progress-bar' style='width:$competence[valeur]%'></div>
                    </div>";
                }
        }
        echo "</div>";
        ?>
    </div>
</section>