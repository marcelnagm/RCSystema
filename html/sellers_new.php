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
        <script type="text/javascript" src="js/sellers.js"></script>        
        
    </head>    
    <body class="nobg">        
        <div class="main_content">                       
            <div class="midwht">
                
                <form role="form" action="sellers_ajax.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></input>
                    <input type="hidden" name="func" value="<?php echo $action;?>"></input>
                <div class="form-group">                                       
                    <label for="exampleInputEmail1">Digite o nome do vendedor</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome do vendedor" name="name"></input>                    
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