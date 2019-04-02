<?php
session_start();
try
{
    $connect = new PDO('mysql:host=localhost;dbname=refuge_languedoc;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
if((isset($_SESSION['ID_GERANT'])))
{
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un animal</title>
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
                <h3 class="h1-responsive font-weight-bold text-center my-4">AJOUTER UN ANIMAL</h3>
                <!--Section description-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 mb-md-5 mb-5">
                        <form id="contact-form" name="contact-form" action="traitment_add_animal.php" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <input type="text" id="nomA" name="nomA" class="form-control">
                                        <label for="nomA" class="">Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <input type="number" id="ageA" name="ageA" class="form-control">
                                        <label for="ageA" class="">Age</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <input type="text" id="pelageA" name="pelageA" class="form-control">
                                        <label for="pelageA" class="">Pelage</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select" id="raceA" name="raceA">
                                            <option disabled selected>Race</option>
                                            <?php
                                                $req_race = $connect->prepare("SELECT * FROM race");
                                                if ($req_race->execute()){
                                                    $result=$req_race->fetchAll();
                                                    foreach ($result as $item){
                                                        echo("<option value='".$item['id_race']."'>".$item['lib_race']."</option>");
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select" id="sexeA" name="sexeA">
                                            <option disabled selected>Sexe</option>
                                            <option value="male">Male</option>
                                            <option value="femelle">Femelle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <select class="browser-default custom-select" name="estChat" id="estChat">
                                        <option disabled selected>Chien/chat</option>
                                        <option value="0">Chien</option>
                                        <option value="1">Chat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="okChat" name="okChat">
                                        <label class="form-check-label" for="okChat" style="margin-right:10%;">OK Chats</label>

                                        <input type="checkbox" class="form-check-input" id="okChien" name="okChien">
                                        <label class="form-check-label" for="okChien" style="margin-right:10%;">OK Chiens</label>

                                        <input type="checkbox" class="form-check-input" id="okKid" name="okKid">
                                        <label class="form-check-label" for="okKid" style="margin-right:10%;">OK Enfants</label>
                                        <input type="checkbox" class="form-check-input" id="besoinTrait" name="besoinTrait">
                                        <label class="form-check-label" for="besoinTrait" style="margin-right:10%;">Besoin traitement</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mb-5">
                                        <input type="number" id="amount" name="amount" class="form-control">
                                        <label for="amount">Prix à l'adoption (en €)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="desc" name="desc" rows="3" class="form-control md-textarea"></textarea>
                                        <label for="message">Description de l'animal</label>
                                    </div>
                                </div>
                            </div>
                        <div class="text-center text-md-left">
                            <button class="btn btn-lg btn-default btn-rounded" type="submit" id="submit" name="submit">Enregistrer</button>
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