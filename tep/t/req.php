<?php
// include
include("elements/header.php"); 

include("main.php");

$ids = Iddossier("rott");
$nom = $_POST['nom']; $prenom = $_POST['prenom']; $sexe = $_POST['sexe'];
$error = array($nom, $prenom, $sexe);
foreach($error as $k => $v)
{
    print_r("je suis $v");
}
var_dump($error);
// $errors = array();
// function testerNull()
// {
//     $pdo = db("rott");
//     if(empty($_POST['nom'])) {
//     $errors['nom'] = "votre nom n'est pas valide";
// } 
// }
?>
<pre>
</pre>

<form action="" method="post">
    <label for="sese">Id</label>
        <select name="name" id="name" class="form-control">
            <?php foreach($ids as $k): ?>
                <?php foreach($k as $v): ?>
                    <option value="<?=$v ?>"><?= $v ?></option>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </select>
    <select name="name" id="name" class="form-control">
        <?php foreach($ids as $id=>$k): ?>
        <option value="<?=$id ?>"><?= $id ?></option>
        <?php endforeach; ?>
    </select>

    <label for="sese">Sexe</label>
    <select name="sexe" id="" class="form-control">Sexe
        <option value="Masculin">Masulin</option>
        <option value="Feminin">Feminin</option>
    </select> 
</form>
<?php include("elements/footer.php"); ?>
