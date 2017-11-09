<?php

/* MsoftRCSystemBundle:TbPayment:index.html.twig */
class __TwigTemplate_3bf5eb44a1237ebeec7a5afbb201ae52c1cf074b33463ce10f2a44d8fa277331 extends Twig_Template
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
    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("tb_payment_print");
        echo "\" class=\"float-left\">Imprimir</a><br>
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
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                <tr class=\"table-hover\">
                    <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_payment_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idClient"), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMethod"), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "value"), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateIn"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>                
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 54
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
        // line 60
        echo "        </tbody>
    </table>
        <div class=\"filterContainer float-left\">
    <button class=\"btn btn-primary\" id=\"filter\">Filter</button>
    <div class=\" filter\"  role=\"menu\">
        ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idMethod"), 'row');
        echo "
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient"), 'row');
        echo "
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_from"), 'row');
        echo "
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date_to"), 'row');
        echo "
        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row', array("attr" => array("class" => "btn btn-default")));
        echo "
        ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:TbPayment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 71,  146 => 70,  142 => 69,  138 => 68,  134 => 67,  130 => 66,  126 => 65,  119 => 60,  107 => 54,  100 => 50,  96 => 49,  92 => 48,  88 => 47,  82 => 46,  79 => 45,  75 => 44,  59 => 31,  31 => 5,  28 => 4,);
    }
}
