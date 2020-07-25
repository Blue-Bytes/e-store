<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "import_files.php"; ?>
    <title>Paiment</title>
</head>

<body>
    <main class="container">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4">Formulaire du Paiment</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                    <li class="nav-item"> <span class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Carte de Crédit </span> </li>
                                </ul>
                            </div>
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <div id="credit-card" class="tab-pane fade show active pt-3">
                                    <form method="post" action="../controllers/paymentController.php">
                                        <div class="form-group"> <label for="username">
                                                <h6>Propriétaire de la carte</h6>
                                            </label> <input type="text" name="username" placeholder="Nom du Propriétaire de la carte" required class="form-control "> </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Numéro de la Carte</h6>
                                            </label>
                                            <div class="input-group"> <input type="text" name="cardNumber" placeholder="Numéro de la Carte validé" class="form-control " required>
                                                <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group"> <label><span class="hidden-xs">
                                                            <h6>Date d'expiration</h6>
                                                        </span></label>
                                                    <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-4"> <label data-toggle="tooltip" title="un code de 3 chifres sur le dos votre carte">
                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> <input type="text" required class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" name="submited" class="subscribe btn btn-primary btn-block shadow-sm"> Confirmer le Paiment </button>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                                <p class="text-muted">NB: après avoir cliqué sur le bouton, vous serez dirigé vers une passerelle sécurisée pour le paiement. Une fois le processus de paiement terminé, vous serez redirigé vers le site Web pour afficher les détails de votre commande.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>