<?php

/* ::base.html.twig */
class __TwigTemplate_5ec4d791a7bb8d9ddda3245d66ab094d6b220e7c2cce62034c03ad6336d62c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />       
    </head>
    <body>       

        <div class=\"navbar  navbar-fixed-top navbar-inverse\">
            <div class=\"navbar-inner row\">
                <div class=\"brand col-md-2 float-left\"><img class=\"logo\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/images/logo.jpg"), "html", null, true);
        echo "\"/> &nbspRCSystem   </div>
                <div class=\"btn btn-navbar col-md-8 float-left\" >
                    <div class=\"menu-text float-left\">
                        Menu &rarrb;
                    </div>
                    <div class=\"dropdown margin-right float-left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" >                            
                            Entrada/Saida de Produtos
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">                                                        
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("tb_entry");
        echo "\">Entrada de Produtos</a></li>                            
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("tb_deliver");
        echo "\">Fornecedores</a></li>                            
                            <li role=\"presentation\" class=\"divider\"></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("pdv");
        echo "\">PDV</a></li>
                        </ul>
                    </div>
                    <div class=\"dropdown float-left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" >                            
                            Estoque
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("tb_product");
        echo "\">Produtos</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("tb_category");
        echo "\">Categoria de Produtos</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("tb_subcategory");
        echo "\">SubCategoria de Produtos</a></li>
                            <li role=\"presentation\" class=\"divider\"></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
                        </ul>
                    </div>
                    <div class=\"dropdown float-left margin-left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" >                            
                            Financeiro
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("tb_client");
        echo "\">Clientes</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("tb_method_payment");
        echo "\">Metodos de Pagamento</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("tb_shop");
        echo "\">Compras </a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("tb_payment");
        echo "\">Pagamentos </a></li>
                            <li role=\"presentation\" class=\"divider\"></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
                        </ul>
                    </div>
                    <div class=\"dropdown float-left margin-left\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" >                            
                            Usuarios
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("tb_client");
        echo "\">Clientes</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("tb_method_payment");
        echo "\">Metodos de Pagamento</a></li>
                            <li role=\"presentation\" class=\"divider\"></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
                        </ul>
                    </div>
                </div>


                <div class=\"col-md-2\">
                    ";
        // line 96
        if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method")))) {
            // line 97
            echo "                        <div class=\"text-info\">                    
                            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"), "html", null, true);
            echo "
                            <a class=\"btn btn-danger \" href=\"logout\" >Sair</a>                                                     
                        </div>
                    ";
        }
        // line 101
        echo "                                
                </div>

            </div>

        </div>        

        <div class=\"container navbar-space\">          
            ";
        // line 109
        if (array_key_exists("form", $context)) {
            // line 110
            echo "                ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "::fields.html.twig"));
            // line 111
            echo "            ";
        }
        echo "        
            ";
        // line 112
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "error"), "method")))) {
            // line 113
            echo "                <div class='alert alert-error alert-danger'>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "error"), "method"), "html", null, true);
            echo "    
                    ";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "set", array(0 => "error", 1 => ""), "method"), "html", null, true);
            echo "

                </div>
            ";
        }
        // line 119
        echo "     
            ";
        // line 120
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "message"), "method")))) {
            // line 121
            echo "
                <div class='alert alert-dismissable alert-success' >                     
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "message"), "method"), "html", null, true);
            echo "    
                    ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "set", array(0 => "message", 1 => ""), "method"), "html", null, true);
            echo "   

                </div>
            ";
        }
        // line 128
        echo "     

            ";
        // line 130
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "            ";
        if (array_key_exists("pagination", $context)) {
            // line 133
            echo "
                <div class=\"navigation float-left\">
                    ";
            // line 135
            echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                     <div class=\"count\">
                    | ";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount"), "html", null, true);
            echo " Registros
                    </div>
                </div>
               
            ";
        }
        // line 142
        echo "        </div>
        ";
        // line 148
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "RCSystem";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/css/bootstrap-theme.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/js/jselect/css/select2.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/css/jquery-ui.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        echo "                        
            <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/js/jquery.min.js"), "html", null, true);
        echo "\"></script>            
            <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/js/jselect/js/select2.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/msoftrcsystem/js/jselect/js/tbproduct_idSubcategory.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$(document).ready(function() {
                \$(\"select\").select2(minimumInputLength: 2 }
                );
                });
            </script>
        ";
    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
        // line 131
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 131,  324 => 130,  312 => 20,  308 => 19,  304 => 18,  300 => 17,  296 => 16,  291 => 15,  285 => 13,  281 => 12,  277 => 11,  273 => 10,  269 => 9,  266 => 8,  263 => 7,  257 => 5,  250 => 148,  247 => 142,  239 => 137,  234 => 135,  230 => 133,  227 => 132,  225 => 130,  221 => 128,  214 => 125,  210 => 124,  205 => 121,  203 => 120,  200 => 119,  193 => 116,  189 => 115,  185 => 113,  183 => 112,  178 => 111,  175 => 110,  173 => 109,  163 => 101,  156 => 98,  153 => 97,  151 => 96,  139 => 87,  135 => 86,  121 => 75,  117 => 74,  113 => 73,  109 => 72,  95 => 61,  91 => 60,  87 => 59,  75 => 50,  70 => 48,  66 => 47,  52 => 36,  43 => 30,  39 => 28,  36 => 15,  34 => 7,  29 => 5,  23 => 1,);
    }
}
