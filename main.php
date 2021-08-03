<?php
/**
 * CONNECTION A LA BASE DE DONNES
 */
function db($dbname)
{
    $pdo = new PDO("mysql:dbname=$dbname;host=localhost", "root", "root", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
    try {
        $pdo;
    } catch (Exception $e) {
        $e->getMessage();
    } 
    return $pdo;
}

/**
 * CREATION D'UN MEDECIN
 */
function create_medecin($dbname = null)
{
    if(!empty($_POST))
    {
        $pdo = db($dbname);
        // insertion Medecin
        $sql = $pdo->prepare("INSERT INTO medecin SET nom = ?, prenom = ?, sexe = ?, adresse = ?, telephone = ?, email = ?, specialisation = ? ");
        $sql->execute(array($_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['adresse'],  $_POST['telephone'],$_POST['email'],$_POST['specialisation']));
    }
}

/**
 * CREATION D'UN CONSULTATION
 */
function create_consultation($dbname = null)
{
    if(!empty($_POST))
    {
        $pdo = db($dbname);
        // insertion Consultation
        $sql = $pdo->prepare("INSERT INTO consultation SET no_dossier = ?, Idmedecin = ?, symptome = ?, date_consultation = ? ");
        $sql->execute(array($_POST['no_dossier'], $_POST['Idmedecin'], $_POST['symptome'], $_POST['date_consultation']));
    }
}

/**
 * CREATION D'UN PRESCRIPTION
 */
function create_prescription($dbname = null)
{
    if(!empty($_POST))
    {
        $errors = array();
        if(empty($_POST['ordonnance']))
        {
            $errors["errors"] = "votre ordonnance n'est pas valide";
        }else {
            $pdo = db($dbname);
            // insertion prescription
            $sql = $pdo->prepare("INSERT INTO prescription SET Idconsultation = ?, ordonnance = ?");
            $sql->execute(array($_POST['Idconsultation'], $_POST['ordonnance']));
        }
    }
}

function array_prescription()
{
    if($_POST){
        $errors = array();
        if(empty($_POST['ordonnance']))
        {
            $errors["errors"] = "votre ordonnance n'est pas valide";
        } else{
    
            $create_prescription = create_prescription("rott");
    
            $Idconsultation = Idconsultation("rott");
        }
    }
}

/**
 * Verification que NomjeuneFilleUnique est unique
 */
function NomjeuneFilleUnique($dbname = null)
{
    if(!empty($_POST['nomjeunefillemere'])){
        $pdo = db($dbname);
        $nomjeunefillemere = $_POST["nomjeunefillemere"];
        $sql = $pdo->prepare("SELECT Idpatient FROM patient where nomjeunefillemere = ?");
        $sql->execute(array($nomjeunefillemere));
        return $sql->fetch();
    }
}

/**
 * CREATION D'UN PATIENT
 */
function create_patient($dbname = null)
{
    if (!empty($_POST)) {
        $pdo = db($dbname);
        // insertion Paitent
        $sql = $pdo->prepare("INSERT INTO patient SET nom = ?, prenom = ?, sexe = ?, date_naissance = ?, telephone = ?, adresse = ?, age = ?, nomjeunefillemere = ? ");
        $sql->execute(array($_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['date_naissance'], $_POST['telephone'], $_POST['adresse'], $_POST['age'], $_POST['nomjeunefillemere']));

        // get Id du Dossier
        $valueId = (int)($pdo->lastInsertId());

        // add id dossier ensemble avec la creation de Patient
        $AddIdDossier = $pdo->prepare("INSERT INTO dossier SET Idpatient = ? ");
        $AddIdDossier->execute(array($valueId));
    }
}

/**
 * CODE SQL POUR INSERER PATIENT A LA BASE DE DONNEES
 */
function sql_patients($pdo)
{
    // insertion Paitent
    $sql = $pdo->prepare("INSERT INTO patient SET nom = ?, prenom = ?, sexe = ?, date_naissance = ?, telephone = ?, adresse = ?, age = ?, nomjeunefillemere = ? ");
    $sql->execute(array($_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['date_naissance'], $_POST['telephone'], $_POST['adresse'], $_POST['age'], $_POST['nomjeunefillemere']));

    // get Id du Dossier
    $valueId = (int)($pdo->lastInsertId());

    // add id dossier ensemble avec la creation de Patient
    $AddIdDossier = $pdo->prepare("INSERT INTO dossier SET Idpatient = ? ");
    $AddIdDossier->execute(array($valueId));
}


function ExistError()
{
    $patient_champ = array("nom", "prenom", "sexe", "date_naissance", "telephone", "adresse", "age" , "nomjeunefillemere ");

    foreach($patient_champ as $p)
    {
        if(empty($_POST["$p"]))
        {
            $errors["$p"] = "votre {$p} n'est pas valide";
        }
    }
    // return $errors;
}

function lists_consultations($dbname = null)
{
    $pdo = db($dbname);
    // get all consultations order 
    $sql = $pdo->query("SELECT Idconsultation FROM consultation");
    return $sql->fetchAll();
}

function lists_consultation_patient($dbname = null)
{
    $pdo = db($dbname);
    // get all consultations order 
    $sql = $pdo->query("SELECT * FROM consultation ORDER BY Idmedecin");
    return $sql->fetchAll();
}

/**
 * RECHERCHER UN PATIENT 
 */
function search_patient($dbname = null)
{
    $pdo = db($dbname);
    // get name patient to seach 
    if (!empty($_GET)) {
        $sql = $pdo->prepare("SELECT * FROM patient WHERE nom = ?");
        return $sql->execute([$_GET['q']]);
    }
    
}
/**
 * recherche de medecin
 */
function search_consultations($dbname = null)
{
    $pdo = db($dbname);
    // get name patient to seach 
    if (!empty($_GET)) {
        $sql = $pdo->prepare("SELECT Idmedecin FROM consultation WHERE Idmecin = ?");
        return $sql->execute([$_GET['q']]);
    }
    
}

/**
 * AFFICHER SEULEMENT LES PATIENTS RECHERCHER
 */
function list_search_patient($dbname = null)
{
    $pdo = db($dbname);
    // get all order patients nomjeunefillemere
    if (!empty($_GET)) {
        # code...
        $nom = $_GET['q'];
        $sql = $pdo->query("SELECT * FROM patient patient WHERE nom = '$nom'");
        return $sql->fetchAll();
    }
}

/**
 * LISTER TOUS LES PATIENTS TO DATABASE
 */
function lists_patients($dbname = null)
{
    $pdo = db($dbname);
    // get all order patients nomjeunefillemere
    $sql = $pdo->query("SELECT * FROM patient ORDER BY nomjeunefillemere");
    return $sql->fetchAll();
}
/*
* LISTER TOUS LES Medecins TO DATABASE
 */
function lists_medecins($dbname = null)
{
    $pdo = db($dbname);
    // get all order patients nomjeunefillemere
    $sql = $pdo->query("SELECT * FROM medecin ORDER BY nom");
    return $sql->fetchAll();
}

/**
 * Listes des recheches consultations
 */
function lists_des_consultations($dbname = null)
{
    if(!empty($_GET)){
        $pdo = db($dbname);
        // get all consultation par Idmedecin
        $nom = $_GET['q'];
        $sql = $pdo->query("SELECT * FROM consultation WHERE Idmedecin = $nom");
        return $sql->fetchAll();
    }
}

function Idconsultation($dbname = null)
{
    $pdo = db($dbname);
    // get all id Prescription
    $sql = $pdo->query("SELECT Idconsultation FROM consultation");
    return $sql->fetchAll();
}

function Iddossier($dbname = null)
{
    $pdo = db($dbname);
    // get all id Prescription
    $sql = $pdo->query("SELECT no_dossier FROM dossier");
    return $sql->fetchAll();
}

/**
 * CODE SQL POUR INSERER PATIENT A LA BASE DE DONNEES
 */
function Idmedecin($dbname = null)
{
    $pdo = db($dbname);
    // get all id Prescription
    $sql = $pdo->query("SELECT Idmedecin FROM medecin");
    return $sql->fetchAll();
}

/**
 * Eviter les Erreurs
 */
function Error_Not_Valid($errors)
{
    if($errors){
        foreach($errors as $error){
            return $error;
        }
    }
}