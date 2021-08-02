<?php
require("../elements/header.php"); 

require_once("../main.php");

create_consultation("rott");

$Iddossier = Iddossier("rott");

$Idmedecin = Idmedecin("rott");
?>
<h2>
    Consultation
</h2>
<form method="post" class="form-group col-md-8">
    <div class="row">
        <div class="form-group col-md-12 mb-4">

        <label for="Iddossier">Iddossier</label>
            <select name="no_dossier" id="name">
                <?php foreach($Iddossier as $k): ?>
                    <?php foreach($k as $v): ?>
                        <option value="<?=$v ?>"><?= $v ?></option>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-md-12 mb-4">
        
        <label for="Idmedecin">Idmedecin</label>
            <select name="Idmedecin" id="name">
                <?php foreach($Idmedecin as $k): ?>
                    <?php foreach($k as $v): ?>
                        <option value="<?=$v ?>"><?= $v ?></option>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group col-md-12 mb-4">
            <input type="text" name="symptome" class="form-control" placeholder="symptome">
        </div>

        <div class="form-group col-md-12 mb-4">
            <input type="text" name="date_consultation" class="form-control" placeholder="date_consultation">
        </div>

      </div>
    <button type="submit" class="btn btn-primary form-control">Create Consultation</button>
</form>
<?php include("../elements/footer.php"); ?>
