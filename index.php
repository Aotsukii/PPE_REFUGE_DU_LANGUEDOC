<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Refuge du Languedoc</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
</head>
<body>
    <div class="row h-100">
        <div class="col-md my-auto">
            <h1 class="text-center font-weight-bold">Refuge du Languedoc</h1>
            <div class="text-center">
                <a href="" class="btn btn-lg btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginForm">Connexion</a>
            </div>
            <div class="text-center">
                <a href="" class="btn btn-lg btn-default btn-rounded" data-toggle="modal" data-target="#modalRegisterForm">S'enregistrer</a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Connexion</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form ">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="defaultForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Votre mail</label>
                    </div>
                    <div class="md-form ">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Votre mot de passe</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default">Connexion</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">S'enregistrer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form ">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="orangeForm-name" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Nom</label>
                    </div>
                    <div class="md-form">
                        <i class="fas prefix grey-text"></i>

                        <input type="text" id="orangeForm-surname" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-surname">Prénom</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-address-card prefix grey-text"></i>
                        <input type="text" id="orangeForm-address" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-address">Adresse</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-map-marker-alt prefix grey-text"></i>
                        <input type="text" id="orangeForm-zip" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-zip">Code postal</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="orangeForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-phone prefix grey-text"></i>
                        <input type="tel" id="orangeForm-phone" class="form-control validate" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
                        <label data-error="wrong" data-success="right" for="orangeForm-phone">Numéro de téléphone</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="orangeForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Mot de passe</label>
                    </div>
                    <select class="browser-default custom-select">
                        <option disabled selected>Type de compte</option>
                        <option value="FA">Famille d'accueil</option>
                        <option value="MEM">Membre bénévole</option>
                    </select>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange">S'enregistrer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
</body>
</html>