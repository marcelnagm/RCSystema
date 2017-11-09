<?php

/* MsoftRCSystemBundle:TbProduct:index.html.twig */
class __TwigTemplate_fc0d57d2ea60a96d52cf684904033a083d0c92e3871ae57335932673de93fbe9 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["actionTitle"]) ? $context["actionTitle"] : $this->getContext($context, "actionTitle")), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tb_product_print");
        echo "\">Print</a>
     <table class=\"table table-bordered  table-extra-bordered\">
        <thead>
            <tr>
                <th class=\"table-extra-bordered\">";
        // line 11
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "entity.id");
        echo "</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
";
            // line 33
            echo "                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_product_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_product_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

        <div class=\"float-left\">
            <a class=\"btn btn-default\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("tb_product_new");
        echo "\">
                Create a new entry
            </a>
            ";
        // line 52
        if ((!array_key_exists("index", $context))) {
            // line 53
            echo "            <a class=\"btn btn-danger\" href=\"";
            echo $this->env->getExtension('routing')->getPath("tb_product_nostock");
            echo "\">
                Produtos sem estoque
            </a>
                ";
        } else {
            // line 57
            echo "            <a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("tb_product");
            echo "\">
                Voltar a lista
            </a>        
             ";
        }
        // line 61
        echo "        </div>
            ";
        // line 63
        echo "
            
";
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:TbProduct:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 63,  153 => 61,  145 => 57,  137 => 53,  135 => 52,  129 => 49,  123 => 45,  111 => 39,  105 => 36,  100 => 33,  94 => 30,  88 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  64 => 24,  61 => 23,  57 => 22,  43 => 11,  36 => 7,  31 => 6,  28 => 5,);
    }
}
