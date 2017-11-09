<?php

/* MsoftRCSystemBundle:TbProduct:print.html.twig */
class __TwigTemplate_4f2c9e4e7920cc765ae1743b6206860ca72f96eb1a83879f511555ec60da0996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::print.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::print.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["actionTitle"]) ? $context["actionTitle"] : $this->getContext($context, "actionTitle")), "html", null, true);
        echo "</h1>

     <table class=\"table table-bordered  table-extra-bordered\">
        <thead>
            <tr>
                <th class=\"table-extra-bordered\">Id</th>
                <th class=\"table-extra-bordered\">Barcode</Fth>
                <th class=\"table-extra-bordered\">Info</th>
                <th class=\"table-extra-bordered\">Quantity</th>
                <th class=\"table-extra-bordered\">Category \\ SubCategory</th>
                <th class=\"table-extra-bordered\">Price Cost \\ Price Sell</th>
                <th class=\"table-extra-bordered\">Profit \\ %</th>
                <th class=\"table-extra-bordered\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                  <tr class=\"table-hover table-extra-bordered\">
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_product_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "barcode"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "info"), "html", null, true);
            echo "</td>                    
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantity"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getIdCategory"), "html", null, true);
            echo " \\ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getIdSubCategory"), "html", null, true);
            echo "</td>
                    <td>R\$";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricecost"), "html", null, true);
            echo " \\ R\$";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pricesell"), "html", null, true);
            echo "</td>
                    <td>R\$";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getProfit"), "html", null, true);
            echo " \\  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getProfitPercentage"), "html", null, true);
            echo "%</td>
                    <td>                        
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

        
            ";
        // line 40
        echo "
            
";
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:TbProduct:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  101 => 35,  88 => 30,  82 => 29,  76 => 28,  72 => 27,  68 => 26,  62 => 25,  58 => 24,  55 => 23,  51 => 22,  31 => 6,  28 => 5,);
    }
}
