<?php
require_once("../main.php");
include("../elements/header.php"); 


// recuperation liste des medecins
$medecins = lists_medecins("rott");

$ids = Idmedecin("rott");

?>

<!-- Listes des Medecins -->

<!-- photo page -->
<img src="svga.svg" class="card-img-top" alt="...">


<!-- Call to Action-->
    <div class="container">
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body"><p class="text-white m-0">Les medecins de Hospital Djeevs avec leurs spécialités!</p></div>
        </div>

        <div class="row">
        
            <?php foreach($medecins as $value): ?>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="../dist/img/img-doc.jpg" alt="medecin " />
                        <div class="card-body">
                            <h3 class="card-title display-5 fw-italic">DR. <?= $value["nom"]?> <?= $value["prenom"] ?></h3>
                            <h6 class="card-text">Le medecin a comme specialites de <?= $value['specialisation'] ?>.</h6>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-md btn-block" href="../src/medecin.php?page=<?= $value["Idmedecin"] ?>">Voir plus</a></div>
                    </div>
                </div>
            <?php endforeach?>

        </div>
    </div>


<?php include("../elements/footer.php"); ?>
