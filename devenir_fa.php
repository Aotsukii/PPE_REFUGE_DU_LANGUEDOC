<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil membre</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark brown fixed-top">
        <a class="navbar-brand" href="#">Refuge Du Languedoc</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index_membre.php">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./adopter.php">Adopter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./collectes.php">Prochaines collectes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./don.php">Faire un Don</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./devenir_fa.php">Devenir FA</a>

                </li>
            </ul>
        </div>
    </nav>
</header>
<body>
<div class="container h-100">
    <div class="row h-100">
        <div class="col-md my-auto">
            <div class="devenirDiv">
                <div class="text-center">
                    <h2>Vous voulez devenir Famille d'Accueil ?</h2>
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-lg btn-default btn-rounded" data-toggle="modal" data-target="#modalFAForm">Remplir mes informations</a>
                </div>
            </div>
            <div class="modal fade" id="modalFAForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Informations FA</h4>
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
                            <div class="md-form ">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom</label>
                            </div>
                            <div class="md-form ">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom</label>
                            </div>
                            <div class="md-form ">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom</label>
                            </div>
                            <div class="md-form ">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom</label>
                            </div>
                            <div class="md-form ">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom</label>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-lg btn-default btn-rounded">Devenir FA</button>
                        </div>
                    </div>
                </div>
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