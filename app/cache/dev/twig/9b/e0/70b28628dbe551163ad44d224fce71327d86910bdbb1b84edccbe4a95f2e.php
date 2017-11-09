<?php

/* MsoftRCSystemBundle:PDV:index.html.twig */
class __TwigTemplate_9be070b28628dbe551163ad44d224fce71327d86910bdbb1b84edccbe4a95f2e extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
    <h1>PDV2</h1>
    
   ";
        // line 7
        if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "actual_IdShop"), "method")))) {
            echo "   
     Compra ja iniciada.
     <a class=\"btn btn-default\" href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("pdv_summary");
            echo "\">Voltar a compra</a>
";
        }
        // line 10
        echo "    
 
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tb_client_new_pdv");
        echo "\">New Client</a>   
 ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient"), 'row');
        echo "
 
 ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row', array("attr" => array("class" => "btn btn-default")));
        echo "
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
 
    
";
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:PDV:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  63 => 16,  58 => 14,  54 => 13,  50 => 12,  46 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,);
    }
}
