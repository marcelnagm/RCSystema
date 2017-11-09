<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>.:| RCSystem :.</title>
        <link rel="stylesheet" href="css/reset-min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/marcel.css" type="text/css" />        
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />        
        <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>        

        <link rel="stylesheet" href="js/colorbox/colorbox.css" />        
        <script src="js/colorbox/jquery.colorbox.js"></script>
    </head>    
    <body class="nobg">


        <script type="text/javascript" src="js/seller_header.js"></script>

        <div class="main_content">           
            <?php include 'header_store.php'; ?>           
            <div class="midwht">

                <a href="sellers_new.php" id="openBox"><img src="images/pplusicon.png"></img> Adiconar Vendedor</a>
                <div id="resultSeller">
                    <table class="table  table-bordered table-responsive sellerstable">
                        <thead>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </thead>
                        <tbody class="table-condensed">
                            <?php
                            $params = array();
                            $sellers = SellersModel::getAll($entityManager, $params);
                            $seller = new Seller();
                            foreach ($sellers as $seller) {
                                ?>
                                <tr>
                                    <td><? echo $seller->getId(); ?></td>
                                    <td><? echo $seller->getName(); ?></td>
                                    <td><ul>
                                            <li onclick="removeSeller('<? echo $seller->getId(); ?>');">
                                                <p >Deletar<img src="images/delete.png" style="width: 12px; height: 12px;"></img> </p>
                                            </li>
                                            <li>
                                                <a id="openBoxEdit" href="sellers_new.php?id=<? echo $seller->getId(); ?>" > Editar<img src="images/reTweetIcon.png"></img></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <? } ?>

                        </tbody>
                    </table>
                </div>  

            </div>
            <div class="friendright">

            </div>          
            <?php require 'footer.php'; ?>
        </div>
        <script>$(document).ready(function() {
                $("#openBox").colorbox({rel: 'openBox', iframe: true, width: "100%", height: "85%", onClosed: function() {
//                        location.reload(true);
            refreshSellers();
                    }});
                $("#openBoxEdit").colorbox({rel: 'openBoxEdit', iframe: true, width: "100%", height: "85%", onClosed: function() {
//                        location.reload(true);
            refreshSellers();
                    }});
            });</script>
    </body>
</html>