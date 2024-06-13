<section class="container">
    <div id="projet">
        <div class="container">
            <h2 class="mb-5 mt-5 text-uppercase contact_titre text-center">Portfolio</h2>
            <div class="divider-custom pb-5">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon me-2">
                        <i class="fa-solid fa-star fa-2xl" style="color: #0d6efd;"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>

            <div class="row justify-content-center">
            <?php 
            foreach($projets AS $projet){
                if (isset($projet['image'], $projet['lien'])) {
                echo 
                '<div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content_center h-100 w-100">
                            <div class="portfolio-item-captation-content text-center text-white">
                            </div>
                            <img class="img-fluid rounded" src="asset/img/'.$projet['image'].'" alt="...">';
                            if($page === "admin"){
                                echo '<a href="?action=deleteprojet&id='.$projet["id_projet"].'"style="color: black;">X</a>';
                            }
                        echo '</div>
                    </div>
                </div>';
                }
            }
            ?>    
            </div>
        </div>
    </div>
</section>