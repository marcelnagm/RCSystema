<?php
require_once "bootstrap.php";
           ini_set('display_errors', 1);
        ini_set('log_errors', 1);
        ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
        error_reporting(E_ALL);
$session = new Session();

if ($session->getSession("user") != "" || $session->getSession("user") != null) {
    unset($_SESSION['id_seller']);
} else {
    header("Location:index.php");
}



if ($_POST['func'] == 'Delivered') {
    $params['id'] = $_POST['id'];
    OrdersModel::setDelivered($entityManager, $params);
    
    $_POST['func'] = 'getAll';
}

if ($_POST['func'] == 'sendLaboratory') {
    $params['id'] = $_POST['id'];
    OrdersModel::setStoreOut($entityManager, $params);
    
    $_POST['func'] = 'getAll';
}

if ($_POST['func'] == 'add') {
    

    
    $params = $_POST;
    unset($params["func"]);
    unset($params["id"]);
    OrdersModel::add($entityManager, $params);

    ?>
 <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>        
<script>
$(document).ready(function() {
parent.$.fn.colorbox.close();
});
</script>     
        <?
    
}


if ($_POST['func'] == 'delete') {
    
        
    $params['id'] = $_POST['id'];
    SellersModel::remove($entityManager, $params);
    
    $_POST['func'] = 'getAll';
}

if ($_POST['func'] == 'edit') {

//    echo var_dump($_POST);
    unset($_POST['func']);
    $params = $_POST;
    OrdersModel::edit($entityManager, $params);
    header("Location:orders.php");
}

if ($_POST['func'] == 'getAll') {

     unset($params);
    $params = array();
    $sellers = SellersModel::getAll($entityManager, $params);
     $var = ' <table class="table  table-bordered table-responsive sellerstable">
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
                         ';
                           
                       $params = array();
                            $seller = new Order();
                            $sellers = OrdersModel::getAll($entityManager, $params);
                            foreach ($sellers as $seller) {
                                
                               $var .=' <tr>
                                    <td>'.$seller->getId().'</td>
                                    <td>'.$seller->getIdOrder().'</td>
                                    <td>'.$seller->getIdSeller().'</td>
                                    <td>'.$seller->getDate().'</td>
                                    <td>'.$seller->getExpectedDate().'</td>
                                    <td>'.$seller->getClient().'</td>
                                    <td>'.$seller->getLens().'</td>
                                    <td>'.$seller->getFrame().'</td>
                                    <td>'.$seller->getDelivered().'</td>
                                    <td><ul>';                                            
                                            if ($seller->getDateStoreOut() == '00-00-0000 00:00' && $seller->getDelivered() == '00-00-0000 00:00') {   
                                        $var .='<li onclick="sendAjax(\'Delivered\', \''.$seller->getId().'\');">
                                                    <a  > Entreguar ao Cliente<img src="images/reTweetIcon.png"></img></a>
                                                </li>';
                                            } 
                                             if ($seller->getDateStoreOut() == '00-00-0000 00:00' && $seller->getDelivered() == '00-00-0000 00:00') {       
                                                $var .='<li onclick="sendAjax(\'sendLaboratory\', \''.$seller->getId().'\');">
                                                    <a > Enviar ao Lab.<img src="images/reTweetIcon.png"></img></a>
                                                </li>
                                                <li>
                                                    <a href="orders_new.php?id='.$seller->getId().'" > Editar<img src="images/reTweetIcon.png"></img></a>
                                                </li>';
                                            }
                                     $var .='   </ul>
                                    </td>
                                </tr>';
                             }

                    $var .= '    </tbody>
                    </table>';

    echo $var;
}
?>