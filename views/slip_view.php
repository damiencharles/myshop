<?php 
require ('./src/ProduitManager.php');
$id = $_GET['id'];
$slip = ProduitManager::getInfoSlip($id);

?>

<div class="container">
    <div class="row">
        <div class="jumbotron jumbotron-fluid bg-light my-4">
            <div class="col-12 text-center">
                <h1 class="display-4"><?php echo $slip['nom_produit'] ?></h1>
                <p class="lead"><i class="fas fa-arrow-circle-right mr-2 voir"></i><a href="categorie.php?categorie=<?php echo $slip['categorie_produit'] ?>" class="blue"><?php echo $slip['categorie_produit']?></a></p>
            </div>

            <div class="row mt-5 p-2">
                <div class="col-6 d-flex flex-column">
                    <p><?php echo $slip['description_produit'] ?></p>
                    <p class="lead mt-5">
                    <div class="text-right mt-auto">
                    <p class="font-weight-bold"><?php echo $slip['prix_produit']?>€</p>
                    
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop<?php echo $slip['id']?>">Acheter</button>
                    <button type="button" class="popover btn btn-lg btn-danger ml-auto mt-2" data-toggle="popover" title="<?php echo $slip['nom_produit']?>" data-placement="left" data-content="<?php echo $slip['stock_produit'] ?> pièces disponibles">Verifier le stock</button>
                    </div>
                </div>

                <div class="col-6">
                    <img class="img-fluid w-75 rounded animate__backInRight" src="<?php echo $slip['photo_produit']?>"> 
                </div>

                <div class="modal fade" id="staticBackdrop<?php echo $slip['id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $slip['nom_produit'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        Votre article a été ajouté au panier <br>
                        <img src="<?php echo $slip['photo_produit'] ?>" class="img-fluid w-25"><br>
                        1 x <?php echo $slip['nom_produit'] ?><br>
                        <?php echo $slip['prix_produit'] . " €" ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Continuer les achats</button>
                        <button type="button" class="btn btn-danger">Voir le panier</button>
                    </div>
                    
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>