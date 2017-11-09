<?php

/* MsoftRCSystemBundle:Default:index.html.twig */
class __TwigTemplate_a818c267b231ad180bbe28703b593c0f746c400015966502d8c5a0d97a42aa26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
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
        return array (  19 => 1,);
    }
}
