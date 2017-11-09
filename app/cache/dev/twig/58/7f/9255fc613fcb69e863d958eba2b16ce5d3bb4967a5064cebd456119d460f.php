<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_587f9255fc613fcb69e863d958eba2b16ce5d3bb4967a5064cebd456119d460f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "<div class=\"form-group\">
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"form-group\">     
    <label for=\"username\"  class=\"col-sm-3 control-label\">Username</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  class=\"col-sm-3 form-control\"/>
    </div>
    <div class=\"form-group\">     
    <label for=\"password\" class=\"col-sm-3 control-label\">Password</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"col-sm-3 form-control\" />    
    <label for=\"remember_me\" class=\"col-sm-3 control-label\">Lembrar-me?</label>
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"col-sm-3 control-label\"/>    
</div>
    <div class=\"form-group\">     
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Login\" class=\"btn btn-default\" />
</form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  53 => 12,  49 => 11,  46 => 10,  40 => 8,  38 => 7,  32 => 6,  29 => 5,);
    }
}
