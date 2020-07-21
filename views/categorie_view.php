<?php
require('./src/ProduitManager.php');
$categorie = $_GET['categorie'];
$produits = ProduitManager::getCategorie($categorie);
?>

<div class="container">
<h1 class="text-center my-4"><?php echo $categorie?></h1>
    <div class="row d-flex justify-content-center">
        <?php foreach ($produits as $produit){?>
            <div class="col-sm-12 col-md-4 col-lg-3 card m-3 p-2" style="width: 18rem;">
  <img src="<?php echo $produit['photo_produit']?>" class="card-img-top" alt="">
  <div class="card-body bg-light d-flex flex-column">
      <h5 class="card-title"><?php echo $produit['nom_produit']?></h5>
      <p class="card-text"><?php echo $produit['description_produit']?></p>
      <div class="text-center mt-auto">
      <p class="card-text font-weight-bold text-right "><?php echo $produit['prix_produit']." €"?></p>
      <a href="slip.php?id=<?php echo $produit['id']?>" class="btn btn-danger voir">Voir le produit</a>
      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#staticBackdrop<?php echo $produit['id']?>">Acheter</button>
      </div>
  </div>
          </div>
          <div class="modal fade" id="staticBackdrop<?php echo $produit['id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><?php echo $produit['nom_produit'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    Votre article a été ajouté au panier <br>
                    <img src="<?php echo $produit['photo_produit'] ?>" class="img-fluid w-25"><br>
                    1 x <?php echo $produit['nom_produit'] ?><br>
                    <?php echo $produit['prix_produit'] . " €" ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Continuer les achats</button>
                    <button type="button" class="btn btn-danger">Voir le panier</button>
                  </div>
                </div>
              </div>
            </div>
<?php } ?>
    </div>
</div>