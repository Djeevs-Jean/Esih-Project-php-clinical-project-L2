<?php 
require("../main.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Healthy Hospital</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap css-->

        <!-- link css -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <!-- <link href="../dist/css/bootstrap.min.css" rel="stylesheet" /> -->
                <!-- style css -->
        <!-- <link href="/dist/style.css" rel="stylesheet" /> -->
    </head>
    <body>
        <!--  navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                
                <a class="navbar-brand" href="../src/homepage.php">Healthy Hospital </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto  mb-lg-0">


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Patient</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="../src/patient.php">Create Patient</a></li>
                                <li><a class="dropdown-item" href="../src/liste_patient.php">Liste Patient</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Medecin</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="../src/medecin.php">Create Medecin</a></li>
                                <li><a class="dropdown-item" href="../src/liste_medecin.php">Liste Medecin</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consultation</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="../src/consultation.php">Create Consultation</a></li>
                                <li><a class="dropdown-item" href="../src/liste_consultation.php">Liste Consultation</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item"><a class="nav-link" href="../src/prescription.php">Prescription</a></li>


                        <li class="nav-item"><a class="nav-link" href="../src/liste_consultaion_prescription.php">Prescription & Consultation</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
            