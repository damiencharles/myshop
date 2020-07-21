<?php
require('./src/ProduitManager.php');
$produits = ProduitManager::getProduits();
?>

<video width=100% src="./assets/img/video.mp4" class="img-fluid" loop="true" autoplay="true" preload="auto"></video>
    
<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <?php foreach ($produits as $produit) { ?>
      <div class="col-sm-12 col-md-4 col-lg-3 card m-3 p-2" style="width: 18rem;">
        <img src="<?php echo $produit['photo_produit'] ?>" class="card-img-top" alt="">
        <div class="card-body bg-light d-flex flex-column">
          <h5 class="card-title"><?php echo $produit['nom_produit'] ?></h5>
          <p class="card-text"><?php echo $produit['description_produit'] ?></p>

          <div class="text-center mt-auto">
            <p class="card-text font-weight-bold text-right "><?php echo $produit['prix_produit'] . " €" ?></p>
            <a href="slip.php?id=<?php echo $produit['id']?>" class="btn btn-danger voir">Voir le produit</a>
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#staticBackdrop<?php echo $produit['id']?>">Acheter</button>
            <div class="modal fade" id="staticBackdrop<?php echo $produit['id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><?php echo $produit['nom_produit'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
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
          </div>

        </div>
      </div>

    <?php } ?>
    
  <div role="alert" aria-live="assertive" aria-atomic="true" class="toast animate__animated animate__fadeInRight" data-autohide="false">
  <div class="toast-header">
    <img src="https://www.svgrepo.com/show/236316/slip.svg" class="rounded w-25 mr-2 img-fluid" alt="...">
    <strong class="mr-auto">La Maison du Slip</strong>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body text-center">
  <p> <svg class="mr-2"width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M14.139 2.63l3.068-1.441.786 3.297 3.39.032-.722 3.312 3.038 1.5-2.087 2.671 2.087 2.67-3.038 1.499.722 3.312-3.39.033-.786 3.296-3.068-1.441-2.139 2.63-2.138-2.63-3.068 1.441-.787-3.296-3.389-.033.722-3.312-3.039-1.499 2.088-2.67-2.088-2.671 3.039-1.5-.722-3.312 3.389-.032.787-3.297 3.068 1.441 2.138-2.63 2.139 2.63zm-3.742 2.342l-2.303-1.081-.59 2.474-2.542.024.542 2.483-2.279 1.125 1.566 2.004-1.566 2.002 2.279 1.124-.542 2.485 2.542.025.59 2.472 2.303-1.081 1.603 1.972 1.604-1.972 2.301 1.081.59-2.472 2.543-.025-.542-2.485 2.279-1.124-1.565-2.002 1.565-2.004-2.279-1.125.542-2.483-2.543-.024-.59-2.474-2.301 1.081-1.604-1.972-1.603 1.972zm1.603 9.528c.69 0 1.25.56 1.25 1.25s-.56 1.25-1.25 1.25-1.25-.56-1.25-1.25.56-1.25 1.25-1.25zm1-.947h-2v-6.553h2v6.553z"/></svg>Nouveau ! Le slip PHP !<br>
  <img src="./assets/img/slipPHP.png" class="img-fluid w-50"alt=""><br>
  Dessiné par notre expert<br>Grégory Fourmaux <i class="ml-2 fab fa-redhat"></i>
  </p>

  </div>
</div>
  </div>
</div>

