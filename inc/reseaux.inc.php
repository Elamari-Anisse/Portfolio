<section class="reseaux text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0" id="reseaux">
                <h4 class="text-uppercase mb-4">Localisation</h4>
                <p class="lead mb-0">
                    Paris
                    <br>
                    Ile-de-france
                </p>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Retrouver moi sur : </h4>
                <?php
                foreach($reseauxs as $reseaux){
                    if (isset($reseaux['titre'], $reseaux['icon'], $reseaux['lien'])) {
                        echo '<a class="btn btn-outline-light btn-social mx-1" href="https://'.$reseaux['lien'] .' " alt="'.$reseaux['titre'] .'">
                        <i class="fa-brands '.$reseaux['icon'] .' fa-xl m-2"></i>
                        </a>';
                        if($page ==="admin"){
                            echo '<a href="?action=deletereseaux&id='. $reseaux["id_reseaux"] . '" style="color: white;">X</a>';
                        }
                    }
                }
                ?>
            </div>
            
                <?php
                if($page ==="admin"){
                        echo '<div class="col-lg-6 mb-5 mb-lg-0"></div><div class="col-lg-6 mt-3">';
                        echo '<a class="m-1 btn btn-primary btn-sm" href="https://fontawesome.com/icons"><i class="fa-solid fa-link fa-2xl"></i><h3>lien fontawesome</h3></a></div>';
                    }
                ?>  
        </div>
    </div>
 </section>