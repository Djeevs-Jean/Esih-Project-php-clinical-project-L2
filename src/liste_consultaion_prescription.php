<?php

include("../elements/header.php"); 

$lists_Id_Bypatient = lists_Id_Bypatient("rott");

// on affcihe la liste de ce qu'on recherche . seulement avec $_GET
if(isset($_GET)){
    $consultations = ConsultationBypatient("rott");
    $prescriptions = PrescriptionBypatient("rott");
}


// $consultation_medecin = Idmedecin("rott");
?>
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h2 class="display-5 fw-bolder text-white mb-2">Page Consultation & Prescription D'un Patient</h2>
                    <p class="lead fw-normal text-white-50 mb-4">Le médecin peut voir les différentes consultations patient ainsi prescription</p>

                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="../dist/img/svg.svg" alt="..." /></div>
        </div>
    </div>
</header>

    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Consultation & Prescription</h2>
                        <p class="lead fw-normal text-muted mb-5"> Le médecin peut voir les différentes consultations.</p>
                    </div>
                </div>
            </div>

            <div class="row gx-5 justify-content-center">
                <form action="" method="get" class="form-group">
                    <label for="no_dossier">No Dossier Patient</label>
                            <select name="q" id="name" class="form-control">
                                <?php foreach($lists_Id_Bypatient as $k): ?>
                                    <?php foreach($k as $v): ?>
                                        <option value="<?=$v ?>"><?= $v ?></option>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary form-control mt-4">Consultation</button>
                </form>

                <!-- hr -->
                <hr class="mt-5">
            <!-- consultation -->
                <!-- on affiche les consultations pour le 'id patient selectionnes -->
                <div class="col-md-4 mb-5">
                    <!-- on affiche les resultats rechercher -->
                    <?php if($consultations): ?>
                        <?php foreach($consultations as $consultation): ?>
                            <div class="card h-100 shadow border-0 ">
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Consulations Patient<?= $consultation['Idconsultation'] ?></div>
                                    <p class="card-text mb-0">L'id Medecin<?= $consultation['Idmedecin'] ?>.</p>
                                    <span class="card-text mb-0">Symptôme<?= $consultation['symptome'] ?>.</span>
                                    <p class="card-text mb-0">No dossier<?= $consultation['Idmedecin'] ?>.</p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>

<hr>
                    <!-- on affiche les resultats rechercher pour la prescription-->
                    <?php if($prescriptions): ?>
                        <?php foreach($prescriptions as $prescription): ?>
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">
                                    <div class="badge bg-success bg-gradient rounded-pill mb-2">Prescription</div>
                                    <h3 class="justify-content-center">IdConsultation   :#<?= $prescription['Idconsultation'] ?></h3>
                                    <p class="card-text mb-0">Ordonance : <?= $prescription['ordonnance'] ?>.</p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>

    

<?php include("../elements/footer.php"); 
?>