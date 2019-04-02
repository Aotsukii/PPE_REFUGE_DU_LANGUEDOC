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
if((isset($_SESSION['ID_FA'])))
{
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste des chats à l'adoption</title>
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
            $("#header").load("./includes/header_fa.html");
        });
    </script>
    <div id="header"></div>
    <body>
    <section style="height:100vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center font-weight-bold page-title">LISTE DES CHATS A HEBERGER</h2>
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>NOM</th>
                            <th>AGE</th>
                            <th>SEXE</th>
                            <th>OK CHIENS</th>
                            <th>OK CHATS</th>
                            <th>OK ENFANTS</th>
                            <th>RACE</th>
                            <th>PELAGE</th>
                            <th>ADOPTABLE DEPUIS</th>
                            <th>PRIX ADOPTION</th>
                            <th>BESOIN TRAITEMENT</th>
                            <th>DESCRIPTION</th>
                            <th>HEBERGER</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stmt=$connect->prepare("SELECT * FROM animal INNER JOIN race ON animal.id_race = race.id_race WHERE est_chat=1 AND id_membre IS NULL AND id_fa IS NULL");
                        if ($stmt->execute()){
                            $result=$stmt->fetchAll();
                            foreach($result AS $chat){
                                echo("<tr><td>".$chat['id_animal']."</td>");
                                echo("<td>".$chat['nom_animal']."</td>");
                                echo("<td>".$chat['age_animal']."</td>");
                                echo("<td>".$chat['sexe_animal']."</td>");
                                echo("<td>".$chat['ok_chien']."</td>");
                                echo("<td>".$chat['ok_chat']."</td>");
                                echo("<td>".$chat['ok_kids']."</td>");
                                echo("<td>".$chat['lib_race']."</td>");
                                echo("<td>".$chat['pelage_animal']."</td>");
                                echo("<td>".$chat['date_creation']."</td>");
                                echo("<td>".$chat['prix_adoption']."</td>");
                                echo("<td>".$chat['besoinTraitement']."</td>");
                                echo("<td>".$chat['description_animal']."</td>");
                                echo("<td><a href=\"traitment_heberg_chat.php?id_animal=".$chat['id_animal']."\"class=\"btn btn-default btn-rounded\" type='submit' id='submit' name='submit'>Héberger</a></td></tr>");
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