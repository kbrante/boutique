<?php $title = "Ma boutique";
    $current = 'Catalogue';
    $links ="<link rel='stylesheet' href='static/external/paginate/src/jquery.paginate.css'>";
    include 'header.php';
    ?>

        <div class="row monMain ">
            <table class="table table-hover monPanier">
                <caption> Mon Panier</caption>
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Prix Unitaire TTC</th>
                        <th>Quantité</th>
                        <th>Prix Total TTC</th>
                </thead>
                <tbody id="lePanier">

                    <?php
                        $quantity = $_POST['quantity'];
                        $index_prod = $_POST['index_produit'];
                        echo $quantity;
                        echo $index_prod;

                        define('MYSQL_SERVEUR', 'localhost');
                        define('MYSQL_UTILISATEUR', 'keiko');
                        define('MYSQL_MOTDEPASSE', 'plop');
                        define('MYSQL_BASE', 'shop');

                        $mysql = new mysqli(MYSQL_SERVEUR,
                                    MYSQL_UTILISATEUR,
                                    MYSQL_MOTDEPASSE,
                                    MYSQL_BASE);

                        $mysql->set_charset("utf8");
                        $sql = "insert into contains(id_cart,id_product,quantity)
                        values (1,$index_prod, $quantity)";
                        $result = $mysql->query($sql);



                    ?>


                </tbody>
            </table>
            <div class="col-md-6 col-md-offset-6">
                <table class="table table-hover monPanier">
                    <tbody>
                        <tr>
                            <th scope="row">Prix Total</th>
                            <td id="totalFinal">Houla !</td>
                        </tr>
                        <tr>
                            <th scope="row">Dont Taxes</th>
                            <td>et oui...</td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" name="button">Commander</button>
            </div>
        </div>
        <!-- /.Row monMain -->

<?php $scripts = '<script src="static/js/script_panier.js"></script>' ?>
<?php include 'footer.php'; ?>
