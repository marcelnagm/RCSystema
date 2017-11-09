<?php
require_once "bootstrap.php";
       
$session = new Session();

if ($session->getSession("user") != "" || $session->getSession("user") != null) {
    unset($_SESSION['id_seller']);
} else {
    header("Location:index.php");
}



if ($_POST['func'] == 'add') {

    $params["name"] = $_POST["name"];
    SellersModel::add($entityManager, $params);

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
    
    $params['name'] = $_POST['name'];
    $params['id'] = $_POST['id'];
    SellersModel::edit($entityManager, $params);
    header("Location:sellers.php");
}

if ($_POST['func'] == 'getAll') {

     unset($params);
    $params = array();
    $sellers = SellersModel::getAll($entityManager, $params);
    $var = ' <table class="table  table-bordered table-responsive sellerstable">
                    <thead>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </thead>
                    <tbody class="table-condensed">';
    $seller = new Seller();
    foreach ($sellers as $seller) {
        $var.='<tr>
                            <td>' . $seller->getId() . '</td>
                            <td>' . $seller->getName() . '</td>
                               <td><ul>
                                            <li onclick="removeSeller('.$seller->getId().');">
                                                <p >Deletar<img src="images/delete.png" style="width: 12px; height: 12px;"></img> </p>
                                            </li>
                                            <li>
                                                <a id="openBoxEdit" href="sellers_new.php?id='.$seller->getId().'" > Editar<img src="images/reTweetIcon.png"></img></a>
                                            </li>
                                        </ul>
                                    </td>
                        </tr>';
    }

    $var.='</tbody>
                </table>';


    echo $var;
}
?>