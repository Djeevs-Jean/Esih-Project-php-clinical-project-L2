<?php

include("../elements/header.php"); 


// recuperation liste des medecins
$medecins = lists_medecins("rott");

$ids = Idmedecin("rott");

?>

<!-- Listes des Medecins -->

<!-- Call to Action-->
    <div class="container">

        <h2>Les Medecins</h2>
       
        <div class="row">
        
            <?php foreach($medecins as $value): ?>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="../dist/img/img-doc.jpg" alt="medecin " />
                        <div class="card-body">
                            <h3 class="card-title display-5 fw-italic">DR. <?= $value["nom"]?> <?= $value["prenom"] ?></h3>
                            <h6 class="card-text">Le medecin a comme specialites de <?= $value['specialisation'] ?>.</h6>
                        </div>
                        <div class="card-footer"><a class="btn btn-outline-primary btn-md btn-block" href="../pages/medecin_pages.php?page=<?= $value['Idmedecin'] ?>"><?= $value['specialisation'] ?></a></div>
                    </div>
                </div>
            <?php endforeach?>

        </div>
    </div>


<?php include("../elements/footer.php"); ?>
