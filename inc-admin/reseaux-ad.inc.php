<section class="container mt-2">
    <div class="row">
        <div>
        <div class="border mb-5">
            <?php
            $page="admin";
            include("inc/reseaux.inc.php");
            ?>
        </div>
        <div class="border">
            <div class="m-3">
                <form method="post">
                    <div class="text-center m-4">
                        <h2>Réseaux :</h2>
                    </div>
        
                    <input type="text" class="form-control m-2" placeholder="Titre" name="titre">
                    <input type="text" class="form-control m-2" placeholder="Icon" name="icon">
                    <input type="text" class="form-control m-2" placeholder="Lien" name="lien">
    
                    <div class="d-flex justify-content-center">
                        <button class="m-1 btn btn-primary btn-sm">Ajouter</button>
                    </div>

                </form>
            </div>
        </div>
        
    </div>      
</section>