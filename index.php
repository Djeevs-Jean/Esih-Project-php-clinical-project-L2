<?php
require_once("main.php");

// $_POST DATA 
// $nom = $_POST['nom'];
// $prenom = $_POST['prenom'];
// $sexe = $_POST['sexe'];
// $date_naissance = $_POST['date_naissance'];
// $adresse = $_POST['adresse'];
// $age = $_POST['age'];
// $nomjeunefillemere = $_POST['nomjeunefillemere'];

create_patient("rott");

?>

<form method="post" class="form-group col-md-8">
    <div class="row">
        <div class="form-group col-md-12 mb-4">
            <input type="text" name="nom" class="form-control" placeholder="nom">
        </div>
        <div class="form-group col-md-12 mb-4">
            <input type="text" name="prenom" class="form-control" placeholder="prenom">
        </div>

        <div class="form-group col-md-12 mb-4">
           <label for="sese">Sexe</label>
            <select name="sexe" id="" class="form-control">Sexe
                <option value="Masculin">Masulin</option>
                <option value="Feminin">Feminin</option>
            </select> 
        </div>
        <div class="form-group col-md-12 mb-4">
            <input type="text" name="date_naissance" class="form-control" placeholder="date_naissance">
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
      </div>
    <button type="submit" class="btn btn-primary form-control">Create Patient</button>
</form>