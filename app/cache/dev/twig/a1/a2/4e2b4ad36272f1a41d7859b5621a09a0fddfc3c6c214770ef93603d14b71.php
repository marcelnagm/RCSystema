<?php

/* MsoftRCSystemBundle:TbPayment:print.html.twig */
class __TwigTemplate_a1a24e2b4ad36272f1a41d7859b5621a09a0fddfc3c6c214770ef93603d14b71 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<script>
        \$(function() {
            \$(\"#msoft_rcsystembundle_tbpaymentfilter_date_to,#msoft_rcsystembundle_tbpaymentfilter_date_from\").datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                dateFormat: \"yy-mm-dd\",
                changeMonth: true,
                changeYear: true,
                showAnim: \"clip\"
            });
            \$(\"select\").select2({minimumInputLength: 2});

            var clicked = false;
            \$(\"#filter\").click(function() {
                if (clicked) {
                    \$(\".filter\").fadeOut('20');
                    clicked = false;
                } else {
                    \$(\".filter\").fadeIn('20');
                    clicked = true;
                }
            });
        });
    </script>

    <h1>TbPayment list</h1>
    
   
    <table class=\"table table-bordered float-left table-with-filter\" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Id Client</th>
                <th>Id Method</th>
                <th>Value</th>
                <th>Datein</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 46
            echo "                <tr class=\"table-hover\">
                    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_payment_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idClient"), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMethod"), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "value"), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateIn"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>                
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_payment_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 61
        echo "        </tbody>
    </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:TbPayment:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 61,  105 => 55,  98 => 51,  94 => 50,  90 => 49,  86 => 48,  80 => 47,  77 => 46,  73 => 45,  31 => 5,  28 => 4,);
    }
}
