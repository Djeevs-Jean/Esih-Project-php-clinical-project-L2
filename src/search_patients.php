<?php

include("../elements/header.php"); 

// sql function de recherche 
search_patient("rott");

$list_search_patient = list_search_patient("rott");
?>
<h2>
    Rechercher Patient
</h2>
<form method="get" class="form-group col-md-8">
    <div class="row">
        <!-- recher a patient -->
        <div class="form-group col-md-12 mb-4">
            <input type="text" name="q" class="form-control" placeholder="Searh">
        </div>

      </div>
    <button type="submit" class="btn btn-primary form-control">Rechercher</button>
</form>
<?php if(!empty($_GET)): ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>@</th>
                <th>nom</th>
                <th>prenom</th>
                <th>sexe</th>
                <th>date_naissance</th>
                <th>telephone</th>
                <th>adresse</th>
                <th>age</th>
                <th>nomjeunefillemere</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($list_search_patient as $value): ?>
            <tr>
                <td><?= $value['Idpatient'] ?></td>
                <td><?= $value['nom'] ?></td>
                <td><?= $value['prenom'] ?></td>
                <td><?= $value['sexe'] ?></td>
                <td><?= $value['date_naissance'] ?></td>
                <td><?= $value['telephone'] ?></td>
                <td><?= $value['adresse'] ?></td>
                <td><?= $value['age'] ?></td>
                <td><?= $value['nomjeunefillemere'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif ?>
<?php include("../layouts/footer.php"); ?>
