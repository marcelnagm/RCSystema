<?php

/* ::fields.html.twig */
class __TwigTemplate_4dbc0596259810438df036d4316ebdfd5399b8e842cf2774c467631590058c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 18
        echo " 
    
";
        // line 20
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        echo "    
    
    ";
        // line 3
        ob_start();
        echo "       
       <div class=\"form-group\">
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => "col-sm-3 control-label")) + (twig_test_empty($_label_ = (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) ? array() : array("label" => $_label_)));
        echo "            
            ";
        // line 6
        $context["class"] = "";
        // line 7
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "                ";
            $context["class"] = "error";
            // line 9
            echo "            ";
        }
        echo "                   
           
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "col-sm-3 form-control")));
        echo "
                          
               
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 18
        echo "    ";
    }

    // line 20
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 21
        echo "
    <script type=\"text/javascript\">
        \$field = \$('#";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

        var \$configs = ";
        // line 25
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";

        // custom configs
        \$configs = \$.extend(\$configs, {
            query: function (query) {
                var data = {results: []}, i, j, s;
                for (i = 1; i < 5; i++) {
                    s = \"\";
                    for (j = 0; j < i; j++) {s = s + query.term;}
                    data.results.push({id: query.term + i, text: s});
                }
                query.callback(data);
            }
        });
        // end of custom configs

        \$field.select2(\$configs);
    </script>

";
    }

    public function getTemplateName()
    {
        return "::fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  84 => 23,  80 => 21,  77 => 20,  73 => 18,  54 => 9,  48 => 7,  46 => 6,  42 => 5,  37 => 3,  27 => 20,  21 => 1,  292 => 127,  289 => 126,  282 => 22,  276 => 18,  272 => 17,  268 => 16,  264 => 15,  259 => 14,  253 => 12,  249 => 11,  245 => 10,  241 => 9,  238 => 8,  235 => 7,  229 => 5,  222 => 134,  219 => 128,  217 => 126,  213 => 124,  206 => 121,  202 => 120,  197 => 117,  195 => 116,  192 => 115,  185 => 112,  181 => 111,  177 => 109,  175 => 108,  170 => 107,  167 => 106,  165 => 105,  155 => 97,  148 => 94,  145 => 93,  143 => 92,  131 => 83,  127 => 82,  113 => 71,  109 => 70,  95 => 59,  91 => 58,  87 => 57,  75 => 48,  70 => 46,  66 => 14,  52 => 34,  36 => 14,  34 => 7,  29 => 5,  23 => 18,  64 => 14,  60 => 11,  55 => 11,  51 => 8,  47 => 9,  43 => 28,  39 => 26,  35 => 6,  31 => 1,  28 => 3,);
    }
}
