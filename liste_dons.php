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
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center font-weight-bold page-title">Historique des dons</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ID donneur</th>
                            <th>DATE</th>
                            <th>MONTANT</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stmt=$connect->prepare("SELECT * FROM don ORDER BY date_don DESC");
                        if ($stmt->execute()){
                            $result=$stmt->fetchAll();
                            foreach($result AS $don){
                                echo("<tr><td>".$don['id_don']."</td>");
                                echo("<td>".$don['id_user']."</td>");
                                echo("<td>".$don['date_don']."</td>");
                                echo("<td>".$don['montant_don']."</td></tr>");

                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    </body>
    </html>
    <?php
} else { header('location:index.php?error=Vous n\'avez pas accès à cette page');}
?>