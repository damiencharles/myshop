<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://www.svgrepo.com/show/236316/slip.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

</head>
<body>
<header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a href="index.php" class="navbar-brand">
                    <img class="animate__animated animate__rotateIn"src="https://www.svgrepo.com/show/236316/slip.svg" width="30" height="30" title="" alt=""></a>
                    <span class="navbar-text text-uppercase animate__animated animate__bounce">La Maison du Slip</span>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarLinks">
                        <ul class="ml-auto navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link animate__backInRight text-center bg-light" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                        <a class="animate__backInRight nav-link text-center dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nos slips</a>
                        <div class="dropdown-menu text-center bg-light">
                            <a class="dropdown-item" href="categorie.php?categorie=Slip Classique">Classique</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="categorie.php?categorie=Slip de Bain">Bain </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="categorie.php?categorie=Slip Fantaisie">Fantaisie</a>
                        </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animate__backInRight text-center bg-light" href="equipe.php">Nos Experts</a>
                            </li>
                                <?php if ($_SESSION){?>
                                    <li class="nav-item mt-2 ml-2 text-center">
                                    <span class="text-danger mr-2 animate__backInRight"><?php echo $_SESSION['usr_email']?></span>
                                    <span class="animate__backInRight"><a href="session_destroy.php" class="blue ">Deconnexion</a></span>
                                    
                                <?php }
                                else {?>
                                <li class="nav-item">
                                    <a class="nav-link animate__backInRight text-center bg-light" href="connexion_user.php">Connexion</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link animate__backInRight text-center bg-light" href="inscription_user.php">Inscription</a>
                                    </li>
                                <?php } ?>
                                
                            
                        </ul>
                    </div>
                </nav>
            </header>

            