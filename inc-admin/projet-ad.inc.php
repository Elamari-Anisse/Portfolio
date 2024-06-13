<section class="container mt-2">
    <div class="row">
        <div>
            <div class="border mb-5">
                <?php
                $page="admin";
                include("inc/projet.inc.php");
                ?>
            </div>
            <div class="border">
                <form method="post">
                    <div class="text-center m-4">
                        <h2>Project</h2>
                    </div>
                    <input type="text" class="form-control m-2" placeholder="Image" name="image">
                    <input type="text" class="form-control m-2" placeholder="Lien" name="lien">
                    <div class="d-flex justify-content-center mb-2">
                        <button class="m-1 btn btn-primary btn-sm" id="redProjet">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>