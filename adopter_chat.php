<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil membre</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datatable.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
</head>
<script>
    $(function(){
        $("#header").load("./includes/header_membre.html");
    });
</script>
<div id="header"></div>
<body>
<div class="row h-30"></div>
<div class="row h-70">
<!--
    <th class="th-sm" scope="col">#</th>
    <th class="th-sm" scope="col">NOM</th>
    <th class="th-sm" scope="col">AGE</th>
    <th class="th-sm" scope="col">SEXE</th>
    <th class="th-sm" scope="col">OK CHIENS</th>
    <th class="th-sm" scope="col">OK CHATS</th>
    <th class="th-sm" scope="col">OK ENFANTS</th>
    <th class="th-sm" scope="col">ADOPTABLE DEPUIS</th>
    <th class="th-sm" scope="col">PRIX ADOPTION</th>
    <th class="th-sm" scope="col">BESOIN TRAITEMENT</th>
    <th class="th-sm" scope="col">DESCRIPTION</th>
    <th class="th-sm" scope="col">ADOPTER</th>
    -->
    <div class="col-md-12">
        <h2 class="text-center font-weight-bold page-title">LISTE DES CHATS A L'ADOPTION</h2>
        <table id="example" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th class="sorting" scope="col">#</th>
                    <th>NOM</th>
                    <th>AGE</th>
                    <th>SEXE</th>
                    <th>OK CHIENS</th>
                    <th>OK CHATS</th>
                    <th>OK ENFANTS</th>
                    <th>ADOPTABLE DEPUIS</th>
                    <th>PRIX ADOPTION</th>
                    <th>BESOIN TRAITEMENT</th>
                    <th>DESCRIPTION</th>
                    <th>ADOPTER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                </tr>
                <tr>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                    <td>TEST</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- JQuery -->
<!-- Bootstrap tooltips -->

</body>
</html>