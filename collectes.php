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
if((isset($_SESSION['ID_MEMBRE'])))
{
    ?>
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
    <section style="height:100vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center font-weight-bold page-title">COLLECTES A VENIR</h2>
                    <table id="example" class="table table-striped table-bordered centered" >
                        <thead>
                        <tr>
                            <th class="sorting">#</th>
                            <th>DATE</th>
                            <th>LIEU</th>
                            <th>NOMBRE DE PARTICIPANTS</th>
                            <th>JE PARTICIPE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stmt=$connect->prepare("SELECT * FROM collecte");
                        if ($stmt->execute()){
                            $result=$stmt->fetchAll();
                            foreach($result AS $coll){
                                $part=$connect->prepare("SELECT COUNT(id_user) as nbPart FROM participer WHERE ".$coll['id_collecte']."=participer.id_collecte");
                                $partResult=$part->execute()? $part->fetch()['nbPart'] : 0;
                                echo("<tr><td>".$coll['id_collecte']."</td>");
                                echo("<td>".$coll['date_collecte']."</td>");
                                echo("<td>".$coll['lieu_collecte']."</td>");
                                echo("<td>".$partResult."</td>");
                                echo("<td><a href=\"participer_collecte.php?id_collecte=".$coll['id_collecte']."\"class=\"btn btn-default btn-rounded\" type='submit' id='submit' name='submit'>Je participe</a></td></tr>");
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