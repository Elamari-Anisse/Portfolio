<section class="container mt-2">
    <div class="row">
        <div>
            <div class="border mb-5">
                <?php
                $page="admin";
                include("inc/competence.inc.php");
                ?>
                <hr>
            </div>
            
            <div class="border">
                <div class="m-3">
                    <form method="post">
                        <div class="text-center m-4">
                            <h2>Compétences</h2>
                        </div>

                        <select class="form-select" aria-label="Default select example" name="categorie">
                            <option>frontend</option>
                            <option>backend</option>
                        </select>

                        <input type="text" class="form-control m-2" placeholder="Titre/languages" name="titre">
                        <input type="text" class="form-control m-2" placeholder="Valeur/niveau jusqu'a 100" name="valeur">
                        <div class="d-flex justify-content-center">
                            <button class="m-1 btn btn-primary btn-sm" id="redComp">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>