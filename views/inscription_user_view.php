<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1>Nouveau client : inscrivez vous !</h1>
            <form action="inscription_user.php" method="post" class="mt-5 p-5 bg-light">
                <div class="form-group col-6 offset-3 mt-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control text-center" name="email" placeholder="Votre adresse email">
                </div>
                <div class="form-group col-6 offset-3 mt-4">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control text-center" name="adresse" placeholder="Votre adresse">
                </div>
                <div class="form-group col-6 offset-3 mt-4">
                    <label for="password">Mot de Passe</label>
                    <input type="password" class="form-control text-center" name="password" placeholder="Votre mot de passe">
                </div>
                <div class="mt-4">
                <button type="submit" class="btn btn-danger mb-5">Envoyer</button>
                </div>
            </form>
