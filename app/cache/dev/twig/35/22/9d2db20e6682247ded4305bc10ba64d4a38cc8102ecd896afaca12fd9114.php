<?php

/* ::print.html.twig */
class __TwigTemplate_35229d2db20e6682247ded4305bc10ba64d4a38cc8102ecd896afaca12fd9114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "    


        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />       
    </head>
    <body>    
            ";
        // line 21
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "error"), "method")))) {
            // line 22
            echo "                <div class='alert alert-error alert-danger'>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "error"), "method"), "html", null, true);
            echo "    
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "set", array(0 => "error", 1 => ""), "method"), "html", null, true);
            echo "

                </div>
            ";
        }
        // line 28
        echo "     
            ";
        // line 29
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "message"), "method")))) {
            // line 30
            echo "
                <div class='alert alert-dismissable alert-success' >                     
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "message"), "method"), "html", null, true);
            echo "    
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "set", array(0 => "message", 1 => ""), "method"), "html", null, true);
            echo "   

                </div>
            ";
        }
        // line 37
        echo "     
            <a onclick=\"window.print()\" class=\"btn btn-default\">Imprimir</a>
            ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "           
        </div>
        ";
        // line 48
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

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 40,  135 => 39,  129 => 13,  125 => 12,  121 => 11,  113 => 9,  110 => 8,  107 => 7,  101 => 5,  88 => 39,  84 => 37,  68 => 30,  66 => 29,  63 => 28,  56 => 25,  52 => 24,  48 => 22,  46 => 21,  40 => 18,  35 => 15,  33 => 7,  22 => 1,  117 => 10,  105 => 55,  98 => 51,  94 => 48,  90 => 41,  86 => 48,  80 => 47,  77 => 34,  73 => 33,  31 => 5,  28 => 5,);
    }
}
