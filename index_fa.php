<?php
session_start();
if((isset($_SESSION['ID_FA'])))
{
?>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<script>
    $(function(){
        $("#header").load("./includes/header_fa.html");
    });
</script>
<div id="header"></div>
<body>
    <section style="height:100vh;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center font-weight-bold page-title">Bievenue sur le site du Refuge du Languedoc !</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="card card-image mt-5 ml-5" >
                    <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-brown-strong py-5 px-4">
                        <div>
                            <h3 class="card-title pt-2"><strong>HEBERGER</strong></h3>
                            <p>Cliquez pour accéder à la liste des animaux à héberger au Refuge Du Languedoc.</p>
                            <a class="btn btn-lg btn-default btn-rounded" href="heberger.php"><i class="fas fa-clone left"></i> Voir les animaux à héberger</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </section>
<!-- JQuery -->
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
</body>
</html>
    <?php
} else { header('location:index.php?error=Vous n\'avez pas accès à cette page');}
?>