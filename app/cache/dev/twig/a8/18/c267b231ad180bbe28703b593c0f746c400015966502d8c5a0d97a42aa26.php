<?php

/* MsoftRCSystemBundle:Default:index.html.twig */
class __TwigTemplate_a818c267b231ad180bbe28703b593c0f746c400015966502d8c5a0d97a42aa26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        echo "      
    <div class=\"text-center\">
        Bem vindo ao RC System
        Caso necessite de alguma ajuda procure o suporte pelo email marcel.nagm@gmail.com
    </div>    
";
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,);
    }
}
