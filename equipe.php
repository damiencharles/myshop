<?php require('header.php'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 order-sm-2 order-md-1 mt-5 ">
            <h2 class="mt-5">L'équipe de "La Maison du slip"</h2>
            <p class="mt-3">La maison du slip, c'est une équipe de 3 personnes, qui travaillent ensemble pour vous proposer des outils de création de site web.</p>
            <a href="index.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Découvrir le site</a>
        </div>
        <div class="col-sm-12 col-md-6 order-sm-1 order-md-2 mt-5">
          <img src="./assets/img/support.png" width="100%" class="img-fluid">
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h2 class="mt-4">Les membres de l'équipe</h2>
            <div class="mt-4 dropdown-divider"></div>
        </div>
    </div>   
        <div class="row text-center mt-5">
        <?php 
        require ('./src/DevManager.php');
        $devs = DevManager::getDev();
        foreach ($devs as $dev){?>
            <div class="col-sm-12 col-md-4">
                <img src="<?php echo $dev->photo_dev?>" width="50%" class="img-fluid">
                <h3 class="mt-5"><?php echo $dev->nom_dev?></h3>
                <h4 class="mt-4"><?php echo $dev->poste_dev?></h4>
                <p class="mt-3"> <?php echo $dev->bio_dev?>.</p>
            </div>
<?php } ?>
        </div>
</div>

<?php include ('footer.php')?>