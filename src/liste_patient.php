<?php
require_once("../main.php");
include("../elements/header.php"); 

// sql function de recherche patient
search_patient("rott");

$patient = lists_patients("rott");
$list_search_patient = list_search_patient("rott");

// si c'est on fais une recherche on affiche ce qui correspon avec
if(!($_GET)){
    $patients = lists_patients("rott");
// sinon: comme l'utilisateur ne fais pas de cherche on affiche toute la liste
} else {
    // Tte la liste a affiche si il y a pas de recherche
    $patients = list_search_patient("rott");
}
// la liste des patient
?>

<!-- PATIENT REPRESENT THERE -->

<header class="py-5 bg-light border-bottom mb-4">
    <!-- <img src="../dist/img/svg.svg" alt=""> -->
<img src="../dist/img/sva.svg" height="230px" class="card-img-top" alt="...">

    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Page Patient!</h1>
            <p>Liste des patients</p>
        </div>
    </div>
</header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                
                <!-- Liste Patients-->
                <div class="row">
                    <?php foreach($patients as $value): ?>
                        <div class="col-lg-6">
                            <!-- Partie pour in patient de la liste-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="../dist/img/sv1.svg" height="220px" alt="..." /></a>
                                <div class="card-body">
                                    <!-- <div class="small text-muted">January 1, 2021</div> -->
                                    <h2 class="card-title h4"><?= $value['nom'] ?> <?= $value['prenom'] ?></h2>
                                    <p class="card-text"><?= $value['sexe'] ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-outline-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            <!-- fin de liste-->
                        </div>
                    <?php endforeach?>
                </div>

            </div>


            <!-- partie qui fais rechercher-->
            <div class="col-lg-4">
                <!-- Zone de Recherche-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="search..." name="q" />
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
        
                <!-- Sujet : Gestion-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">Sujet : Gestion des Patients dans une polyclinique!</div>
                </div>
            </div>
        </div>
    </div>

<!-- END PATIENT REPRESENT THERE -->
<?php include("../elements/footer.php"); 
?>