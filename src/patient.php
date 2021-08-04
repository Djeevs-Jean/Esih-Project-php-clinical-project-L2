<?php
require_once("../main.php");
include("../elements/header.php"); 
// $date = Annee_egal_Age();
$date = (int)$_POST['date_naissance'];
var_dump($date);
exit();
$date = new Datetime();
// $date->now();

$nomjeunefillemere = NomjeuneFilleUnique("rott");
$success = array();
$errors = array();
if(($_POST)){
    if(empty($_POST['nom']))
    {
        $errors["nom"] = "votre nom n'est pas valide";
    }
    if(empty($_POST['prenom']))
    {
        $errors["prenom"] = "votre prenom n'est pas valide";
    }
    if(empty($_POST['sexe']))
    {
        $errors["sexe"] = "votre sexe n'est pas valide";
    }
    if(empty($_POST['date_naissance']))
    {
        $errors["date_naissance"] = "votre date_naissance n'est pas valide";
    }
    if(empty($_POST['telephone']))
    {
        $errors["telephone"] = "votre telephone n'est pas valide";
    }
    if(empty($_POST['adresse']))
    {
        $errors["adresse"] = "votre adresse n'est pas valide";
    }
    if(empty($_POST['age']))
    {
        $errors["age"] = "votre age n'est pas valide";
    }
    if(empty($_POST['nomjeunefillemere']))
    {
        $errors["nomjeunefillemere"] = "votre nomjeunefillemere n'est pas valide";
    }
    if($nomjeunefillemere) {
        $errors["nomjeunefillemere"] = "nomjeunefillemere deja pris";
    }
    if (isset($_POST['date_naissance'])) {
        // affcihe la date 
        echo $_POST['date_naissance'] .  "\t\t";
        echo "date : " .  $date;
    }

    
    

    // si il y a pas d'erreur enregsitre les data
    if(empty($errors))
    {
        create_patient("rott");
    }

}
// $Error_fields = Error_Not_Valid($errors);

?>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Create a Patient</h2>
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
                    <input type="text" name="nom" class="form-control" placeholder="nom">
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="prenom" class="form-control" placeholder="prenom">
                </div>

                <div class="form-group col-md-12 mb-4">
                <label for="sexe">Sexe</label>
                    <select name="sexe" id="" class="form-control">Sexe
                        <option value="Masculin">Masulin</option>
                        <option value="Feminin">Feminin</option>
                    </select> 
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="date" name="date_naissance" class="form-control" placeholder="date_naissance">
                </div>

                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="telephone" class="form-control" placeholder="telephone">
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="adresse" class="form-control" placeholder="adresse">
                </div>

                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="age" class="form-control" placeholder="age">
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="nomjeunefillemere" class="form-control" placeholder="nomjeunefillemere">
                </div>                

                <button type="submit" class="btn btn-primary form-control mt-4">Create Patient</button>

            </form>
        </div>
        
    </div>
</section>
<?php include("../elements/footer.php"); ?>
