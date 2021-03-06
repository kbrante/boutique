<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Boutique</title>
    <link rel="stylesheet" href="./static/external/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row monHeader">
            <div class="col-md-12 text-right monIdent">
                <a href="#">S'identifier <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                <a href="index_panier.html">Panier<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
            </div>
            <div class="col-md-12 text-center">
                <h1>Ma Boutique</h1>
            </div>

            <div class="col-md-12 nopadding maNav">
                <nav class="navbar navbar-default maNav">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                            <form class="inputRecherche">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </form>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index_home.html">Home<span class="sr-only">(current)</span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalogue <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index_catalogue.html">Général</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="index_catalogue.html">Catégorie 1</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Catégorie 2</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Catégorie 3</a></li>
                                        <li role="separator" class="divider"></li>
                                    </ul>
                                </li>
                                <li><a href="index_contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <!-- /.Row monHeader -->
        <div class="row monMain">
            <article class="monProduit">
                <?php
                $index = $_GET["index"];

                define('MYSQL_SERVEUR', 'localhost');
                define('MYSQL_UTILISATEUR', 'phpsyl');
                define('MYSQL_MOTDEPASSE', 'plop');
                define('MYSQL_BASE', 'shop');

                $mysql = new mysqli(MYSQL_SERVEUR,
                            MYSQL_UTILISATEUR,
                            MYSQL_MOTDEPASSE,
                            MYSQL_BASE);
                $mysql->set_charset("utf8");
                $sql = 'select * from Product WHERE id='.$index.';';
                $result = $mysql->query($sql);

                $row = $result->fetch_assoc();
                    echo '<div class="col-md-4">
                        <img id="imageP" src="http://lorempixel.com/100/100/" alt="img">
                    </div>
                    <div class="col-md-8">
                        <span class="'.$row['price'].'"></span>
                    </div>
                    <div class="col-md-8">
                        <input type="number" name="quantity" value ="1" min="1" max="10" class="maQuantite">
                    </div>
                    <div class="col-md-8">
                        <a href="#"class="monPanier">Ajouter au panier<span class=" glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    </div>
                    <div class="col-md-12 text-justify">
                        <h3 id="titreArt">'.$row['name'].'</h3>
                        <p id="desc">'.$row['description'].'</p>
                    </div>';

                 ?>


                <!-- <div class="col-md-4">
                    <img id="imageP"src="http://placehold.it/350x350" alt="img">
                </div>
                <div class="col-md-8">
                    <span class="lePrix"></span>
                </div>
                <div class="col-md-8">
                    <input type="number" name="quantity" value ="1" min="1" max="10" class="maQuantite">
                </div>
                <div class="col-md-8">
                    <a href="#"class="monPanier">Ajouter au panier<span class=" glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                </div>
                <div class="col-md-12 text-justify">
                    <h3 id="titreArt">Article 1</h3>
                    <p id="desc">Lorem ipsum </p>
                </div> -->
            </article>
        </div>
        <!-- /.Row monMain -->
        <div class="row monFooter">

            <div class="col-md-12 text-center">
                <p class="noMargin"> @ Copyright - Mentions Obligatoires</p>
            </div>

        </div>
        <!-- /.Row monFooter -->
    </div>
    <!-- /.container -->
    <script src="static/external/jquery/dist/jquery.js"></script>
    <script src="static/external/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="static/external/bootstrap-validator/dist/validator.min.js" charset="utf-8"></script>
    <script src="static/js/get_param.js" charset="utf-8"></script>
    <script src="static/js/catalog_x100.js" charset="utf-8"></script>
    <!-- <script src="static/js/script_produit.js"></script> -->

</body>


</html>
