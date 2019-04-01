<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion membres</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datatable.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
</head>
<script>
    $(function () {
        $("#header").load("./includes/header_gerant.html");
    });
</script>
<div id="header"></div>
<body>
    <section style="height:100vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center font-weight-bold page-title">GESTION DES MEMBRES</h2>
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="sorting" scope="col">#</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>VILLE</th>
                            <th>TEL</th>
                            <th>SUPPRESSION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td><a href="#">delete</a></td>

                        </tr>
                        <tr>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td>TEST</td>
                            <td><a href="#">delete</a></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>