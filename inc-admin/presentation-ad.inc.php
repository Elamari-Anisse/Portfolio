<section class="container mt-2">
    <div class="row">
        <div>
            <div class="border mb-5">
                <?php
                include("inc/presentation.inc.php");
                ?>
            </div>
            <div class="border">
                <form method="post">
                    <div class="d-flex m-3 border">
                        <textarea class="m-2" type="contenu" placeholder="Phrase de présentation" style="width: 100%;" name="contenu"><?= $presentation['contenu']?></textarea>
                    </div>
                    <div class="mb-3 ms-2">
                        <label for="img_profil" class="form-label">Image de profil :</label>
                        <input type="file" class="form-control" id="img_profil" name="img_profil">
                    </div>                  
                    
                    <div class="text-center mb-3">
                        <button class="m-1 btn btn-primary btn-sm" id="redPresentation">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>