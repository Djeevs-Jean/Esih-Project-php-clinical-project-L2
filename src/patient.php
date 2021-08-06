<?php

include("../layouts/header.php"); 

$nomjeunefillemere = NomjeuneFilleUnique("rott");
$success = array();
$errors = array();
if(($_POST)){
    $dateage = VerifierAge_Annne();
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
        $errors["nomjeunefillemere"] = "votre Nom Jeune Fille Mere n'est pas valide";
    }
    if($nomjeunefillemere) {
        $errors["nomjeunefillemere"] = "nomjeunefillemere deja pris";
    }
    
    // verifier votre l'age est bien une bonne age , si =! true, L\'age n'est pas correct
    if(($dateage)!=true)
    {
        $errors["age"] = "votre age n'est correct";
    }

    // si il y a pas d'erreur enregsitre les data
    if(empty($errors))
    {
        // pour crer patient
        create_patient("rott");

        // message de success
        $success["success"] = "message de success enregistrement patient effectuer";
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

        <div class="row gx-5 justify-content-center">
            <form action="" method="post" class="form-group">

                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="nom" class="form-control" placeholder="nom">
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="prenom" class="form-control" placeholder="prenom">
                </div>

                <div class="row">
                    <div class="form-group col-md-6 mb-4">
                    <label for="sexe">Sexe</label>
                        <select name="sexe" id="" class="form-control">Sexe
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Feminin</option>
                        </select> 
                    </div>
                    
                    <div class="form-group col-md-6 mb-4">
                        <label for="sexe">Telephone</label>
                        <input type="text" name="telephone" class="form-control" placeholder="telephone">
                    </div>
                </div>

                <div class="form-group col-md-12 mb-4">
                    <input type="date" name="date_naissance" class="form-control" placeholder="date_naissance">
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
<?php include("../layouts/footer.php"); ?>
