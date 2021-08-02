<?php
require_once("../main.php");
include("../elements/header.php"); 

$create_prescription = create_prescription("rott");

$Idconsultation = Idconsultation("rott");

?>
<h2>
    Prescription
</h2>
<form method="post" class="form-group col-md-8">
    <div class="row">
        
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

      </div>
    <button type="submit" class="btn btn-primary form-control">Create Prescription</button>
</form>
<?php include("../elements/footer.php"); ?>
