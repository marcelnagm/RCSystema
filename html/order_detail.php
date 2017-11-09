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

                <h3>Historico da Ordem</h3>
                    <?php
                            $params = array('id_order' => $_GET['id']);
                            $seller = new Order();
                            $seller = OrdersModel::getOne($entityManager, $params);
                            ?>
                <h4>Número da Ordem: <? echo $_GET['id']; ?></h4>
                
                
                <? if (isset($seller)) { ?>
                <? if ($seller->getPriority() == 1) { ?>
                <div style="font-size: 20px; background-color: red; color: wheat;">Prioridade </div>
                <? } ?>
                <? if ($seller->getDelivered() != '00-00-0000 00:00') { ?>
                <div style="font-size: 20px; background-color: green; color: whitesmoke;">Entregue! </div>
                <? } ?>

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
                        </thead>
                        <tbody class="table-condensed">
                           
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
                            </tr>                  
                        </tbody>
                    </table>
                </div>  
                <div id="resultSteps">
                    <table class="table  table-bordered table-responsive sellerstable">
                        <thead>
                            <th>Etapa</th>
                            <th>Info</th>
                        <tbody class="table-condensed">                            
                            <tr>
                                <td>Data Saida da loja</td>                                
                                <td><? echo $seller->getDateStoreOut() ?></td>                                
                            </tr>                  
                            <tr>
                                <td>Data entrada no laboratório</td>                                
                                <td><? echo $seller->getDateLaboratoryIn(); ?></td>                                
                            </tr>                  
                            <tr>
                                <td>Obs</td>                                
                                <td><? if ($seller->getOrderOut() == 1) { ?>
                                        Pedido fora: Sim<br></br>
                                        Data do Pedido: <?php echo $seller->getDateOrderOut(); ?><br></br>
                                        Data do Pedido: <?php echo $seller->getDateExpectedLens(); ?><br></br>
                                    <? } ?>
                                    Fabricação: <?php echo $seller->getLensMade(); ?>        
                                    OBs: <?php echo $seller->getObs(); ?>        
                                </td>                                
                            </tr>                  
                            <tr>
                                <td>Data saida do laboratório</td>                                
                                <td><? echo $seller->getDateLaboratoryOut(); ?></td>                                
                            </tr>  
                            <tr>
                                <td>Data de entrada na montagem</td>                                
                                <td><? echo $seller->getDateMountIn(); ?></td>                                
                            </tr>
                            <tr>
                                <td>Pronto?</td>                                
                                <td><? if ($seller->getDone() == 1) { ?>
                                        Pronto!<br></br>
                                        Obs: <?php echo $seller->getObs(); ?>                                            
                                    <? } ?>
                                </td>                                
                            </tr>
                            <tr>
                                <td>Data de saida da montagem</td>                                
                                <td><? echo $seller->getDateMountIn(); ?></td>                                
                            </tr>
                            <tr>
                                <td>Data de entrada na distruicao</td>                                
                                <td><? echo $seller->getDateDistribuitionIn(); ?></td>                                
                            </tr>                            
                            <tr>
                                <td>Prioridade</td>                                
                                <td><? if ($seller->getPriority() == 1) { ?>
                                        Prioridade<br></br>                                        
                                    <? } ?></td>                                
                            </tr>
                            <tr>
                                <td>Data de saida na distruicao</td>                                
                                <td><?echo  $seller->getDateDistribuitionIn(); ?></td>                                
                            </tr>
                        </tbody>
                    </table>
                    <? }else{
                        ?>
                            Ordem nao encontrada.
                            <?        } ?>

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
            });</script>
    </body>
</html>