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
                        <form id="contact-form" name="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Nom</label>
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
                                        <select class="browser-default custom-select">
                                            <option disabled selected>Sexe</option>
                                            <option value="male">Male</option>
                                            <option value="female">Femelle</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select">
                                            <option disabled selected>Race</option>
                                            <option value="male">Male</option>
                                            <option value="female">Femelle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <input type="text" id="pelageA" name="pelageA" class="form-control">
                                        <label for="pelageA" class="">Pelage</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <select class="browser-default custom-select">
                                        <option disabled selected>Chien/chat</option>
                                        <option value="chien">Chien</option>
                                        <option value="chat">Chat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
                            <a class="btn btn-lg btn-default btn-rounded">Enregistrer</a>
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