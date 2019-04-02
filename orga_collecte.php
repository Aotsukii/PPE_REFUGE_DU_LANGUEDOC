<?php
session_start();
if((isset($_SESSION['ID_GERANT'])))
{
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Organiser une collecte</title>
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
        $("#header").load("./includes/header_gerant.html");
    });
</script>
<div id="header"></div>
<body>
<div class="container h-100">
    <div class="row h-100">
        <div class="col-md my-auto">
            <section class="mb-4 contactSection">
                <!--Section heading-->
                <h3 class="h1-responsive font-weight-bold text-center my-4">ORGANISER UNE COLLECTE</h3>
                <!--Section description-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 mb-md-5 mb-5">
                        <form id="contact-form" name="contact-form" action="traitment_orga_collecte.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-5">
                                        <input type="text" id="lieuC" name="lieuC" class="form-control">
                                        <label for="lieuC" class="">Lieu</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-5">
                                        <input type="date" id="dateC" name="dateC" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center ">
                                <button class="btn btn-lg btn-default btn-rounded" type="submit" id="submit" name="submit">Créer une collecte</button>
                            </div>
                        </form>
                        <div class="status"></div>
                    </div>
                </div>
            </section>
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
    <?php
} else { header('location:index.php?error=Vous n\'avez pas accès à cette page');}
?>