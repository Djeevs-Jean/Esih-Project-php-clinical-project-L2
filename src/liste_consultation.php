<?php

include("../elements/header.php"); 

$Id_consultationsBypatient = Id_consultationsBypatient("rott");

if(isset($_GET)){
    $lists_des_consultations = lists_des_consultations("rott");
}
// $consultation_medecin = Idmedecin("rott");
?>
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-md-8">
                <div class="my-5 text-center ">
                    <h1 class="text-white mb-2">LA LISTE DES CONSULTATIONS PAR MEDECIN </h1>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">From Consultation</h2>
                    <p class="lead fw-normal text-muted mb-5">Liste des consultations faits par un médecin.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5 justify-content-center">
            <form action="" method="get" class="form-group">
            <label for="Idmedecin">Idmedecin</label>
                    <select name="q" id="name" class="form-control">
                        <?php foreach($Id_consultationsBypatient as $k): ?>
                            <?php foreach($k as $v): ?>
                                <option value="<?=$v ?>"><?= $v ?></option>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary form-control mt-4">Consultation</button>
            </form>
        </div>
        
    </div>
</section>

<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <?php if($lists_des_consultations): ?>
            <?php foreach($lists_des_consultations as $v): ?>
                <div class="col-md-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                            <h2 class="fs-4 fw-bold"><?= $v["no_dossier"] ?></h2>
                            <p class="mb-0">With Bootstrap 5, we've created a fresh new layout for this template!</p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <?php endif ?>
        </div>
    </div>
</section>
<?php include("../elements/footer.php"); ?>