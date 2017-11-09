<?php

/* MsoftRCSystemBundle:TbShop:indexClient.html.twig */
class __TwigTemplate_dd7e246f1aa4799c0ef5643adf7addc59d0ad7dca459a86b8eb324c3eb1cc849 extends Twig_Template
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
        // line 5
        if (array_key_exists("form", $context)) {
            // line 6
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
    ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient"), 'row');
            echo "
    ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row', array("attr" => array("class" => "btn btn-default")));
            echo "
    ";
            // line 9
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
";
        } else {
            // line 11
            echo "    <h1>TbShop list</h1>
    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Datein</th>
                <th>Id Client</th>
                <th>Total</th>
                <th>Pending</th>                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 25
                echo "                <tr class=\"table-hover\"> 
                    <td><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_shop_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 27
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateIn")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateIn"), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idClient"), "html", null, true);
                echo "</td>
                    <td>R\$";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "total"), "html", null, true);
                echo "</td>
                    <td>R\$";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pending"), "html", null, true);
                echo "</td>                                
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_shop_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">show</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </tbody>
    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:TbShop:indexClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  100 => 34,  93 => 30,  89 => 29,  85 => 28,  79 => 27,  73 => 26,  70 => 25,  66 => 24,  51 => 11,  46 => 9,  42 => 8,  38 => 7,  33 => 6,  31 => 5,  28 => 3,);
    }
}
