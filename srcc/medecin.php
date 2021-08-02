<?php
require_once("../main.php");
include("../elements/header.php"); 


create_medecin("rott");
?>
<h2>
    Medecin
</h2>
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
            <input type="text" name="adresse" class="form-control" placeholder="adresse">
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
      </div>
    <button type="submit" class="btn btn-primary form-control">Create Medecin</button>
</form>
<?php include("../elements/footer.php"); ?>
