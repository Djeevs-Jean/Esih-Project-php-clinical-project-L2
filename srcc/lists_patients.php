<?php
require_once("../main.php");
include("../elements/header.php"); 


$patient = lists_patients("rott");
?>
<h2>
    Patient
</h2>
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
        <?php foreach($patient as $value): ?>
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
<?php include("../elements/footer.php"); ?>