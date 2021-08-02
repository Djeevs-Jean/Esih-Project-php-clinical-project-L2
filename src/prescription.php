<?php
require_once("../main.php");
include("../elements/header.php"); 

$errors = array();
if(($_POST)){
    if(empty($_POST['ordonnance']))
    {
        $errors["errors"] = "votre ordonnance n'est pas valide";
    } else{

        $create_prescription = create_prescription("rott");

    }
    $Idconsultation = Idconsultation("rott");
}



?>



<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Create a Prescription</h2>
                    <p class="lead fw-normal text-muted mb-5">Liste des consultations faits par un médecin.</p>
                </div>
            </div>
        </div>

        <!-- Error Champ   -->
        <?php if($errors): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif ?>

        <div class="row gx-5 justify-content-center">
            <form action="" method="post" class="form-group">

                    <div class="form-group col-md-12 mb-4">
                        <label for="Idconsultation ">Idconsultation </label>
                        <select name="Idconsultation" id="name" class="form-control">
                            <?php foreach($Idconsultation as $k): ?>
                                <?php foreach($k as $v): ?>
                                    <option value="<?=$v ?>"><?= $v ?></option>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
        
                    <div class="form-group col-md-12 mb-4">
                        <input type="text" name="ordonnance" class="form-control" placeholder="ordonnance">
                    </div>                            

                <button type="submit" class="btn btn-primary form-control mt-4">Create Prescription</button>

            </form>
        </div>
        
    </div>
</section>

<?php include("../elements/footer.php"); ?>
