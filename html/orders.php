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
        <script type="text/javascript" src="js/order_header.js"></script>                

        <div class="main_content">           
            <?php include 'header_store.php'; ?>           
            <div class="midwht">
                <ul>
                    <li>   <a href="orders.php?filter=lib"> Ordens para liberação</a></li>
                    <li><a href="orders.php?filter=ent"> Ordens para entrega</a></li>
                    <li><a href="orders.php"> Listar Ordens </a></li>
                </ul>
                <a href="orders_new.php" id="openBox"><img src="images/add.png"></img> Adiconar Ordem</a>
                <h3>Listagem de ordens Pendentes</h3>
                <div style="font-size: 20px; background-color: red; color: wheat;margin-bottom: 4px"><? 
                    echo $session->getSession('error_order_insert');
                    $session->setSession('error_order_insert','');
                    ?>
                </div>
                <div id="resultSeller">
                    <table class="table  table-bordered table-responsive sellerstable">
                        <thead>
                            <th>Id</th>
                            <th>Numero da Ordem</th>
                            <th>Vendedor</th>
                            <th>Data da Venda</th>
                            <th>Data Esperada Pronto</th>
                            <th>Cliente</th>
                            <th>Lentes</th>
                            <th>Armação</th>
                            <th>Entregue</th>
                            <th>Ações</th>
                        </thead>
                        <tbody class="table-condensed">
                            <?php
                            $params = array();
                            $seller = new Order();
                            $sellers = OrdersModel::getAll($entityManager, $params);
                            foreach ($sellers as $seller) {
                                ?>
                                <tr>
                                    <td><? echo $seller->getId(); ?></td>
                                    <td><? echo $seller->getIdOrder(); ?></td>
                                    <td><? echo SellersModel::getOne($entityManager, $seller->getIdSeller()); ?></td>
                                    <td><? echo $seller->getDate(); ?></td>
                                    <td><? echo $seller->getExpectedDate(); ?></td>
                                    <td><? echo $seller->getClient(); ?></td>
                                    <td><? echo $seller->getLens(); ?></td>
                                    <td><? echo $seller->getFrame(); ?></td>
                                    <td><? echo $seller->getDelivered(); ?></td>
                                    <td><ul>                                            
                                            <?php if ($seller->getDateStoreOut() != '00-00-0000 00:00' && $seller->getDelivered() == '00-00-0000 00:00' && $seller->getDateDistribuitionOut() != '00-00-0000 00:00' ) { ?>      
                                                <li onclick="sendAjax('Delivered', '<? echo $seller->getId(); ?>');">
                                                    <a  > Entreguar ao Cliente<img src="images/reTweetIcon.png"></img></a>
                                                </li>
                                            <?php }     
                                       if ($seller->getDateStoreOut() == '00-00-0000 00:00' && $seller->getDelivered() == '00-00-0000 00:00') { ?>      
                                                <li onclick="sendAjax('sendLaboratory', '<? echo $seller->getId(); ?>');">
                                                    <a > Enviar ao Lab.<img src="images/reTweetIcon.png"></img></a>
                                                </li>
                                                <li>
                                                    <a href="orders_new.php?id=<? echo $seller->getId(); ?>" > Editar<img src="images/reTweetIcon.png"></img></a>
                                                </li>
                                            <?php } ?>      
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
                        location.reload(true);
//                        refreshSellers();
                    }});
            });</script>
    </body>
</html>