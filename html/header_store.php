<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/marcel.css" type="text/css" />
<link type="text/css" href="js/scroll/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="css/marcel.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="js/scroll/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/scroll/mwheelIntent.js"></script>            
<script type="text/javascript" src="js/scroll/jquery.jscrollpane.min.js"></script>            
<!--added by marcel-->

<script type="text/javascript">

</script>
<script type="text/javascript" src="js/home_header.js"></script>
<?php
require_once 'classes/Session.class.php';
$session = new Session();
//print_r($_SESSION);
?>

<?php if ($session->getSession("user") == '') {
    ?>

    <div id="login_topblack">
        <div class="topinner">
            <div id="login_logo"><a href=""><img src="images/logo.png" alt="WHATSDADILLY" /></a></div>
            <div id="header_login">
                <form id="AuthForm_log" class="Form FancyForm AuthForm" action="userlogin.php" method="POST" accept-charset="utf-8">
                    <div class="header_loginleft">
                        <input type="text" name="login_username" id="login_username" value="" placeholder="Username">
                        <div><input type="checkbox" value=""><span>Keep me logged in</span></div>
                    </div>
                    <div class="header_loginright">
                        <input type="password" name="login_password" id="login_password" value="" placeholder="Password">
                        <span><a href="">Forgot your password?</a></span>
                    </div>
                    <div class="header_loginbtn">
                        <input type="submit" value="Login" id="login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } else {
    ?>
    <!--<script type="text/javascript" src="js/updater.js"></script>--> 
    <div id="topblack">
        <div class="topinner2">
            <div id="logo"><a href=""><img src="images/logo.png" alt="WHATSDADILLY" /></a></div>
            <div class="infomenu">
                <ul>

                    <li  class="first"><a href="#" >info</a> <span class="notify" id="notify"></span>                                                      
                        <div class="notification">
                            <h3 > Ordens de servico</h3>
                           
                           <?php if($session->getSession('user')['permission'] == 'seller'){?>
                           <h3 class="link" id="order_new">Incluir ordem</h3>
                           <h3 class="link" id="order_search">Buscar por numero</h3>
                           <h3 class="link" id="orders">Lista de ordens</h3>
                           <?php }?>
                           <?php if($session->getSession('user')['permission'] == 'laboratory'){?>
                           <h3 class="link" id="order_lens">Incluir pedido de Lentes em ordem</h3>
                           <h3 class="link" id="order_search">Buscar por numero</h3>
                           <h3 class="link" id="orders_laboratory">Lista de ordens</h3>
                           <?php }?>
                           
                           
                        </div>
                    </li>
                    <li class="second"><a href="#">msg</a><div class="message_num"> </div>
                        <div class="messages" >                                
                            hero@!
                        </div>   
                    </li>
                    <li class="third"><a href="#">friends</a><div class="friends_num"> </div>
                        <!--toggle -->
                        <div class="frienddropwrap nobg" id="friend_requ">
                            <h3 class="title">Ações</h3>
                            <h3 class="link" id="sellers">Lista Vendedores</h3>
                             
                        </div>
                        <!--toggle end-->
                    </li>
                </ul>
            </div>
            <div class="searchwrap">
                <input type="text" class="searchinput" id="searchinput" />
                <input type="image" src="images/search.png" />
                <div class="results">
                    <ul id="resultdiv">

                    </ul>                    

                </div>
            </div>
            <div class="homhicon"><a href="home.php"><img src="images/homicon.png" alt="" /></a></div>            
            <span class="jessic"><?php echo ucfirst($session->getSession("user")['name']); ?> <br></span>
            <div class="setting"><a href="#"><img src="images/setting.png" /></a>
                <ul class="settings">
                    <!--                    <a href="#"><li>Privacy</li></a>
                                        <a href="settings.php"><li>Setting</li></a>-->
                    <a href="logout.php" ><li class="">Logout</li></a>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>
       
