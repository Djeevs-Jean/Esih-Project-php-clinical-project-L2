<?php
include("../elements/header.php"); 



$Iddossier = Iddossier("rott");
            
$Idmedecin = Idmedecin("rott");

$errors = array();
$success = array();
if(($_POST)){
    if(empty($_POST['no_dossier']))
    {
        $errors["no_dossier"] = "votre No_dossier n'est pas valide";
    }
    if(empty($_POST['Idmedecin']))
    {
        $errors["Idmedecin"] = "votre Idmedecin n'est pas valide";
    }
    if(empty($_POST['symptome']))
    {
        $errors["symptome"] = "Symptome n'est pas valide";
    }
    if(empty($_POST['date_consultation']))
    {
        $errors["date_consultation"] = "Date de consultation n'est pas valide";
    }
    // si il y a pas d'erreur on enregistre les donnees
    elseif(empty($errors))
    {
        $create_consultation = create_consultation("rott");

        // message de success
        $success["success"] = "message de success enregistrement consultation effectuer";
    }

}

?>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Create a Consultation</h2>
                    <p class="lead fw-normal text-muted mb-5">Liste des consultations faits par un médecin.</p>
                </div>
            </div>
        </div>

        <!-- formulaire n'as pa enregistrer, Affichage message erreurs  -->
        <?php if($errors): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif ?>

        <!-- validation enregsitrement est faite avec success -->
        <?php if($success): ?>
            <div class="alert alert-success text-center">
                <!-- affichage du message success -->
                <?php foreach($success as $success): ?>
                    <?= $success ?>
                <?php endforeach; ?>
            </div>
        <?php endif ?>

        <!-- partie formulaire -->

        <div class="row justify-content-center">
            <form action="" method="post" class="form-group">

            <div class="row">
                <div class="form-group col-md-6 mb-2">

                    <label for="Iddossier">Iddossier</label>
                        <select name="no_dossier" id="name" class="form-control">
                            <?php foreach($Iddossier as $k): ?>
                                <?php foreach($k as $v): ?>
                                    <option value="<?=$v ?>"><?= $v ?></option>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group col-md-6 mb-4">

                        <label for="Idmedecin">Idmedecin</label>
                            <select name="Idmedecin" id="name" class="form-control">
                                <?php foreach($Idmedecin as $k): ?>
                                    <?php foreach($k as $v): ?>
                                        <option value="<?=$v ?>"><?= $v ?></option>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </select>
                    </div>
                </div>
                    
                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="symptome" class="form-control" placeholder="symptome">
                </div>

                <div class="form-group col-md-12 mb-4">
                    <input type="date" name="date_consultation" class="form-control" placeholder="date_consultation">
                </div>                              

                <button type="submit" class="btn btn-secondary form-control mt-4">Create Consultation</button>

            </form>
        </div>
        
    </div>
</section>
<?php include("../elements/footer.php"); ?>
