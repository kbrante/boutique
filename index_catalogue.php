<?php $title = "Ma boutique";
    $current = 'Catalogue';
    $links ="<link rel='stylesheet' href='static/external/paginate/src/jquery.paginate.css'>";
    include 'header.php';
    ?>

        <div class="row monMain ">
            <div class="col-md-3 text-center monCat">
                <h3>Le Catalogue</h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Catégorie 1</a></h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">sous catégorie 1.1</a></li>
                                <li class="list-group-item"><a href="#">sous catégorie 1.2</a></li>
                                <li class="list-group-item"><a href="#">sous catégorie 1.3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Catégorie 2</a></h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">sous catégorie 2.1</a></li>
                                <li class="list-group-item"><a href="#">sous catégorie 2.2</a></li>
                                <li class="list-group-item"><a href="#">sous catégorie 2.3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Catégorie 3</a></h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">sous catégorie 3.1</a></li>
                                <li class="list-group-item"><a href="#">sous catégorie 3.2</a></li>
                                <li class="list-group-item"><a href="#">sous catégorie 3.3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5 col-md-offset-7 text-right">
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Ordre Croissant
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Ordre décroissant
                        </label>

                    </div>

                </div>
                <div class="row monCatalogue grid" id ="moncata" >
                    <!-- <div class="col-md-3 monBlockArticle">
                        <article class="monArticle">
                            <img class="img-responsive" src="http://placehold.it/100x100" alt="">
                            <a href="index_produit.html"><h4>Article 1</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmoda.</p>
                            <div class="lePrix text-right ">99.99€</div>
                            <a href="#">Ajoutter au panier<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                        </article>
                    </div> -->
                    <?php
                        define('MYSQL_SERVEUR', 'localhost');
                        define('MYSQL_UTILISATEUR', 'keiko');
                        define('MYSQL_MOTDEPASSE', 'plop');
                        define('MYSQL_BASE', 'shop');

                        $mysql = new mysqli(MYSQL_SERVEUR,
                                    MYSQL_UTILISATEUR,
                                    MYSQL_MOTDEPASSE,
                                    MYSQL_BASE);
                        $mysql->set_charset("utf8");
                        $sql = 'select * from Product';
                        $result = $mysql->query($sql);
                        $i=1;
                        while ($row = $result->fetch_assoc()) {

                            echo '<div class="col-md-3 monBlockArticle">
                                <article class="monArticle">
                                    <img class="img-responsive" src="http://lorempixel.com/100/100/" alt="">
                                    <a href="index_produit.php?index='.$i. '"><h4>'.$row['name'].'</h4></a>
                                    <p>'.$row['description'].'</p>
                                    <div class="lePrix text-right ">'.$row['price'].' €</div>
                                </article></div>';
                                $i+=1;
                            // echo $row['name']." ".$row['description']." ".$row['price']."<br />";
                        }
                        $result->free();
                        $mysql->close();
                     ?>

                    </div>
                    <div class="row text-center">
                        <ul id="pagination-demo" class="pagination-sm"></ul>
                    </div>
            </div>
        </div>
        <!-- /.Row monMain -->

        <?php $scripts = '<script src="static/external/paginate/src/jquery.paginate.js" charset="utf-8"></script>
        <script src="static/js/script_catalogue.js"></script>' ?>
        <?php include 'footer.php'; ?>
