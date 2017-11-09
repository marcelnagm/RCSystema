<?php

/* MsoftRCSystemBundle:PDV:review.html.twig */
class __TwigTemplate_f26f451f5a13b7dbbfe9feb4203ac8d067b1ccd587a28f6db04bb1e4dc048a64 extends Twig_Template
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
    <h1>Shop</h1>
    <table class=\"table-condensed table-bordered\">
        <tbody>
            <tr >
                <td>
                    Client : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "idClient"), "html", null, true);
        echo "
                </td>

            </tr>
            <tr class=\"table-hover\">
                <td>
                    Total : R\$";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "total"), "html", null, true);
        echo "
                </td>

            </tr>
        </tbody>
    </table>
    <h5>Payments</h5>
    <table class=\"table-condensed table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Method</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                <tr class=\"table-hover\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMethod"), "html", null, true);
            echo "</td>               
                    <td>R\$";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "value"), "html", null, true);
            echo "</td>
                    <td>
                        <ul>                            
                            <li>
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pdv_pay_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">delete</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            <tr>
                <td colspan=\"5\" class=\"table-hover text-center text-info\">
                    <h4>Total</h4>
                </td>
            </tr>
                
            <tr>
                <td colspan=\"3\" class=\"table-hover\">
                    Total Pago: R\$";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["totalPayd"]) ? $context["totalPayd"] : $this->getContext($context, "totalPayd")), "html", null, true);
        echo "
                </td>
                <td colspan=\"2\" class=\"table-hover\">
                    Total Pendente:R\$ ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["totalRemain"]) ? $context["totalRemain"] : $this->getContext($context, "totalRemain")), "html", null, true);
        echo "
                </td>
            </tr>
        </tbody>
    </table>
 ";
        // line 63
        if (((isset($context["totalRemain"]) ? $context["totalRemain"] : $this->getContext($context, "totalRemain")) > 0)) {
            // line 64
            echo "    <a class=\"btn btn-success\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pdv_select_pay");
            echo "\">
        Add a payment
    </a>
   ";
        }
        // line 68
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_cart", array("id" => $this->getAttribute((isset($context["shop"]) ? $context["shop"] : $this->getContext($context, "shop")), "id"))), "html", null, true);
        echo "\">
        Change Product List
    </a>
    ";
        // line 71
        if (((isset($context["totalRemain"]) ? $context["totalRemain"] : $this->getContext($context, "totalRemain")) <= 0)) {
            // line 72
            echo "    <a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pdv_confirm");
            echo "\">
        Confirm Shop
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:PDV:review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  143 => 71,  136 => 68,  128 => 64,  126 => 63,  118 => 58,  112 => 55,  102 => 47,  90 => 41,  83 => 37,  79 => 36,  75 => 35,  72 => 34,  68 => 33,  48 => 16,  39 => 10,  31 => 4,  28 => 3,);
    }
}
