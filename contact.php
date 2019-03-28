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
        $("#header").load("./includes/header_membre.html");
    });
</script>
<div id="header"></div>
<body>
<div class="container h-100">
    <div class="row h-100">
        <div class="col-md my-auto">
            <!--Section: Contact v.2-->
            <section class="mb-4 contactSection">
                <!--Section heading-->
                <h3 class="h1-responsive font-weight-bold text-center my-4">Nous contacter</h3>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Si vous avez la moindre question, par rapport aux collectes, animaux, etc, n'hésitez pas !</p>
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-9 mb-md-5 mb-5">
                        <form id="contact-form" name="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-5">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">Sujet</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-md-left">
                            <a class="btn btn-lg btn-default btn-rounded" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                        </div>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>123 rue de l'adresse générique, 34000 Montpellier</p>
                            </li>
                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+33 12 34 56 78</p>
                            </li>
                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>contact@rdl.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
            </section>
            <!--Section: Contact v.2-->
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