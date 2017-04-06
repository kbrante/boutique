<?php $title = "Ma boutique | Produit"; ?>
<?php include 'header.php'; ?>

        <!-- /.Row monHeader -->
        <div class="row monMain">
            <article class="monProduit">


                <?php
                    $index = $_GET["index"];

                    define('MYSQL_SERVEUR', 'localhost');
                    define('MYSQL_UTILISATEUR', 'keiko');
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
                            <img id="imageP" src="http://lorempixel.com/200/200/" alt="img">
                        </div>
                        <div class="col-md-8">
                            <span name ="prix" class="lePrix"'.$row['price'].' €>'.$row['price'].' €</span>
                        </div>
                        <form action="index_panier.php" method="post">
                            <div class="col-md-8">
                                <input type="number" name="quantity" value ="1" min="1" max="10" class="maQuantite">
                            </div>
                            <div class="col-md-8">
                                    <input type="submit" name="button" value="Ajouter au panier"></button>
                            </div>
                        </form>
                        <div class="col-md-12 text-justify">
                            <h3 name="designation" id="titreArt">'.$row['name'].'</h3>
                            <p name="description" id="desc">'.$row['description'].'</p>
                        </div>';
                 ?>


                </div>
            </article>
        </div>
        <!-- /.Row monMain -->
<?php require 'footer.php';
$scripts = '<script src="static/external/bootstrap-validator/dist/validator.min.js" charset="utf-8"></script>
<script src="static/js/get_param.js" charset="utf-8"></script>'?>
