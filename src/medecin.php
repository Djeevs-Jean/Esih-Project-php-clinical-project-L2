<?php

include("../elements/header.php"); 

$errors = array();
$success = array();
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
    if(empty($_POST['adresse']))
    {
        $errors["adresse"] = "votre adresse n'est pas valide";
    }
    if(empty($_POST['telephone']))
    {
        $errors["telephone"] = "votre telephone n'est pas valide";
    }
    if(empty($_POST['email']))
    {
        $errors["email"] = "votre email n'est pas valide";
    }
    if(empty($_POST['specialisation']))
    {
        $errors["specialisation"] = "votre specialisation n'est pas valide";
    }
    else{
        // pour crer médecin
        create_medecin("rott");
        
        // message de success
        $success["success"] = "message de success enregistrement médecin effectuer";
    }

}
?>

<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Create a Medecin</h2>
                    <p class="lead fw-normal text-muted mb-5">Remplir le form pour enregistrer un médecin.</p>
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
        <!-- pour message error -->
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
        <!-- pour message success -->

        <!-- fin du message success & error -->

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
                        <label for="sexe">Adresse</label>
                        <input type="text" name="adresse" class="form-control" placeholder="adresse">
                    </div>
                </div>

                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="telephone" class="form-control" placeholder="telephone">
                </div>

                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group col-md-12 mb-4">
                    <input type="text" name="specialisation" class="form-control" placeholder="specialisation">
                </div>

                    <button type="submit" class="btn btn-primary form-control mt-4">Create  Medecin</button>
            </form>
        </div>
        
    </div>
</section>


<?php include("../elements/footer.php"); ?>
