<div class="container-fluid bg-dark">
    <div class="row">
        <div class="main col-sm-3 bg-dark" style="height: 100vh;">
            <div class="dashboard border-top" data-bs-theme="dark">
                <a class="dashboard-brand" href="pageAdmin.php?page">
                    <h4>Dashboard</h4>
                </a>
                <ul class="mt-3">
                    <li class="li-dashboard my-2"><a href="pageAdmin.php?page=presentation">Présentation</a></li>
                    <li class="li-dashboard my-2"><a href="pageAdmin.php?page=projet">Project</a></li>
                    <li class="li-dashboard my-2"><a href="pageAdmin.php?page=competences">Compétences</a></li>
                    <li class="li-dashboard my-2"><a href="pageAdmin.php?page=reseaux">Réseaux</a></li>
                    <li class="li-dashboard my-2"><a href="pageAdmin.php?page=messages">Les messages</a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-9 bg-white">
            <?php
            if (isset($_GET['page'])) {
                if ($_GET['page'] == 'presentation') {
                    include("inc-admin/presentation-ad.inc.php");
                } elseif ($_GET['page'] == 'projet') {
                    include("inc-admin/projet-ad.inc.php");
                } elseif ($_GET['page'] == 'competences') {
                    include("inc-admin/competence-ad.inc.php");
                } elseif ($_GET['page'] == 'reseaux') {
                    include("inc-admin/reseaux-ad.inc.php");
                } elseif ($_GET['page'] == 'messages') {
                    include("inc-admin/message-ad.inc.php");
                } else {
                    
                    $page = "admin";
                    // include ("pageindex2.php");
                    echo '<iframe src="pageindex.php" style="display:block; width:100%; margin-top:10px" height="1000px">';
                   
                }
            }
            ?>
        </div>
    </div>
</div>