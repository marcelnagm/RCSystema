<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>.:| RCSystem :.</title>
        <link rel="stylesheet" href="css/reset-min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/marcel.css" type="text/css" />        
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />        
        <link rel="stylesheet" href="js/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">       
            <script src="js/jquery-1.10.2.js"></script>        
            <script src="js/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
            <script>
                $(function() {
                    $("#datepicker").datepicker({
                            showOn: "button",
                            buttonImage: "js/jquery-ui/css/ui-lightness/images/calendar.gif",
                            buttonImageOnly: true,
                            "dateFormat" : "dd-mm-yy"
                        });
                });
            </script>
    </head>    
    <body class="nobg">        
        <div class="main_content">                       
            <div class="midwht">

                <form role="form" action="orders_ajax.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></input>
                    <input type="hidden" name="func" value="<?php echo $action; ?>"></input>                   
                    <div class="form-group">                                       
                        <label for="exampleInputEmail1">Digite o numero da ordem</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ordem num" name="id_order"  
                            <?php if($action =='edit'){?>
                               value="<? echo $order->getIdOrder();?>"
                               
                            <?php }?>>
                        </input>                    
                    </div>
                    <?php ?>
                    <div class="form-group">                                       
                        <label for="exampleInputEmail1">Selecione o nome do vendedor</label>
                        <select class="form-control" name="id_seller">
                            <?php foreach (SellersModel::getAll($entityManager, null) as $seller) { ?>
                                <option value="<?php echo $seller->getId(); ?>"
                                          <?php if($order->getIdSeller() == $seller->getId() && $action =='edit'){?>
                                        selected="selected"
                               
                            <?php }?>     
                                        
                                        ><?php echo $seller; ?></option>
                            <? } ?>
                        </select>
                    </div>                
                    <div class="form-group">                                       
                        <label for="exampleInputEmail1">Digite a data esperada</label>
                        <input id="datepicker" type="text" class="form-control" id="exampleInputEmail1" placeholder="Data Esperada para Chegada" name="expected_date" readonly="readonly" onclick="$('.ui-datepicker-trigger').trigger('click');"
                               <?php if($action =='edit'){?>
                               value="<? echo $order->getExpectedDate()?>"
                               
                            <?php }?>
                               
                               ></input>                    
                    </div>
                     <div class="form-group">                                       
                        <label for="exampleInputEmail1">Digite a informações dos Cliente</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cliente Info" name="client" autocomplete="off" <?php if($action =='edit'){?>
                               value="<? echo $order->getClient();?>"
                               
                            <?php }?>
                            ></input>                    
                    </div>
                    
                     <div class="form-group">                                       
                        <label for="exampleInputEmail1">Digite a informações das Lentes</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lentes" name="lens" 
                              <?php if($action =='edit'){?>
                               value="<? echo $order->getLens();?>"
                               
                            <?php }?> 
                               ></input>                    
                    </div>
                     
                     <div class="form-group">                                       
                        <label for="exampleInputEmail1">Digite a informações da Armação</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Armação" name="frame" <?php if($action =='edit'){?>
                               value="<? echo $order->getFrame();?>"
                               
                            <?php }?>
                               ></input>                    
                    </div>
                    <input type="submit" value="Salvar" class="btn btn-success"></input>    
                </form>
            </div>
            <div class="friendright">

            </div>          
            <?php require 'footer.php'; ?>
        </div>
    </body>
</html>