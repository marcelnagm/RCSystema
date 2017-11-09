<?php

/* MsoftRCSystemBundle:TbEntry:show.html.twig */
class __TwigTemplate_8244ca4f978ef7a9eb616afb247eb74dd9a9d78208b254f908204a4393f72260 extends Twig_Template
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
        echo "    <h1>TbEntry</h1>
     <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tb_entry");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tb_entry_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
</ul>
     <table class=\" table-bordered  table-condensed\">
       <tr class=\"table-hover table-extra-bordered\">
            <tr class=\"table-hover table-extra-bordered\">
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-hover table-extra-bordered\">
                <th>Description</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-hover table-extra-bordered\">
                <th>Datein</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateIn"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"table-hover table-extra-bordered\">
                <th>Userin</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userIn"), "html", null, true);
        echo "</td>
            </tr>           
            </tr>
        </tbody>
    </table>

   
          <h4>Lista de Produtos em entrada</h4>
    <table class=\"table-condensed table-bordered\">
        <thead>
            <tr>
                 <th class=\"table-extra-bordered\">Id</th>
                 <th class=\"table-extra-bordered\">Quantity</th>
                 <th class=\"table-extra-bordered\">Product</th>
                 <th class=\"table-extra-bordered\">Price Sell</th>
                 <th class=\"table-extra-bordered\">Price Cost</th>                 
            </tr>
        </thead>
          <tbody class=\"table-extra-bordered\">
        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stockEntities"]) ? $context["stockEntities"] : $this->getContext($context, "stockEntities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entityStock"]) {
            // line 53
            echo "            <tr class=\"table-hover table-extra-bordered\">
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityStock"]) ? $context["entityStock"] : $this->getContext($context, "entityStock")), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityStock"]) ? $context["entityStock"] : $this->getContext($context, "entityStock")), "quantity"), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityStock"]) ? $context["entityStock"] : $this->getContext($context, "entityStock")), "getIdProduct"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityStock"]) ? $context["entityStock"] : $this->getContext($context, "entityStock")), "priceCost"), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityStock"]) ? $context["entityStock"] : $this->getContext($context, "entityStock")), "priceSell"), "html", null, true);
            echo "</td>                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityStock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>
        
        
";
    }

    public function getTemplateName()
    {
        return "MsoftRCSystemBundle:TbEntry:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 55,  118 => 57,  146 => 10,  126 => 63,  292 => 127,  282 => 22,  276 => 18,  272 => 17,  259 => 14,  249 => 11,  222 => 134,  213 => 124,  206 => 121,  197 => 117,  195 => 116,  192 => 115,  181 => 81,  175 => 108,  167 => 76,  148 => 69,  113 => 36,  34 => 26,  23 => 1,  100 => 33,  81 => 28,  20 => 1,  284 => 128,  267 => 120,  253 => 12,  239 => 104,  223 => 94,  210 => 84,  202 => 120,  194 => 74,  165 => 75,  155 => 75,  153 => 50,  150 => 49,  76 => 28,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 250,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  569 => 231,  567 => 230,  558 => 224,  554 => 223,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  445 => 163,  443 => 162,  438 => 160,  429 => 154,  425 => 152,  420 => 150,  411 => 144,  394 => 136,  390 => 134,  388 => 133,  359 => 114,  357 => 113,  350 => 111,  342 => 109,  338 => 107,  335 => 106,  330 => 104,  327 => 103,  324 => 102,  321 => 99,  319 => 98,  316 => 97,  313 => 96,  304 => 96,  296 => 94,  291 => 91,  289 => 126,  286 => 89,  279 => 84,  274 => 124,  260 => 116,  255 => 68,  244 => 60,  233 => 54,  178 => 80,  137 => 65,  134 => 39,  129 => 64,  124 => 62,  114 => 56,  104 => 42,  97 => 37,  84 => 30,  77 => 33,  522 => 169,  519 => 168,  510 => 164,  505 => 163,  502 => 162,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  464 => 142,  452 => 139,  448 => 138,  433 => 135,  424 => 132,  421 => 131,  418 => 130,  415 => 129,  412 => 128,  406 => 126,  403 => 125,  400 => 124,  385 => 132,  375 => 115,  373 => 114,  370 => 113,  364 => 115,  351 => 106,  346 => 110,  344 => 104,  332 => 105,  326 => 95,  318 => 94,  311 => 93,  308 => 92,  306 => 127,  303 => 90,  295 => 85,  290 => 83,  280 => 127,  271 => 75,  263 => 72,  261 => 71,  250 => 65,  245 => 10,  242 => 60,  234 => 56,  231 => 55,  228 => 54,  226 => 53,  218 => 50,  215 => 49,  198 => 42,  188 => 88,  185 => 112,  170 => 77,  152 => 74,  127 => 82,  90 => 33,  70 => 29,  65 => 23,  58 => 32,  53 => 18,  480 => 162,  474 => 161,  469 => 144,  461 => 175,  457 => 153,  453 => 151,  444 => 137,  440 => 148,  437 => 147,  435 => 146,  430 => 134,  427 => 133,  423 => 151,  413 => 134,  409 => 127,  407 => 131,  402 => 138,  398 => 137,  393 => 121,  387 => 119,  384 => 121,  381 => 117,  379 => 124,  374 => 116,  368 => 116,  365 => 111,  362 => 110,  360 => 109,  355 => 107,  341 => 103,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 82,  283 => 81,  278 => 86,  268 => 16,  264 => 15,  258 => 70,  252 => 80,  247 => 64,  241 => 9,  229 => 5,  220 => 51,  214 => 69,  177 => 109,  169 => 27,  140 => 66,  132 => 65,  128 => 64,  107 => 63,  61 => 22,  273 => 96,  269 => 74,  254 => 92,  243 => 88,  240 => 86,  238 => 8,  235 => 7,  230 => 53,  227 => 95,  224 => 71,  221 => 77,  219 => 128,  217 => 126,  208 => 45,  204 => 72,  179 => 84,  159 => 14,  143 => 71,  135 => 53,  119 => 39,  102 => 47,  71 => 30,  67 => 26,  63 => 25,  59 => 13,  38 => 9,  94 => 37,  89 => 51,  85 => 38,  75 => 35,  68 => 23,  56 => 21,  87 => 31,  21 => 2,  26 => 12,  93 => 34,  88 => 34,  78 => 29,  46 => 14,  27 => 5,  44 => 12,  31 => 4,  28 => 3,  201 => 35,  196 => 33,  183 => 82,  171 => 81,  166 => 62,  163 => 61,  158 => 52,  156 => 13,  151 => 70,  142 => 59,  138 => 5,  136 => 68,  121 => 61,  117 => 410,  105 => 31,  91 => 50,  62 => 14,  49 => 14,  24 => 18,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 24,  47 => 18,  40 => 15,  37 => 6,  22 => 17,  246 => 108,  157 => 23,  145 => 93,  139 => 41,  131 => 61,  123 => 58,  120 => 71,  115 => 47,  111 => 43,  108 => 42,  101 => 29,  98 => 57,  96 => 36,  83 => 37,  74 => 24,  66 => 15,  55 => 21,  52 => 20,  50 => 18,  43 => 8,  41 => 25,  35 => 6,  32 => 7,  29 => 5,  209 => 39,  203 => 44,  199 => 34,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 61,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 11,  147 => 58,  144 => 4,  141 => 6,  133 => 55,  130 => 9,  125 => 59,  122 => 58,  116 => 26,  112 => 55,  109 => 70,  106 => 54,  103 => 53,  99 => 52,  95 => 39,  92 => 42,  86 => 23,  82 => 11,  80 => 43,  73 => 25,  64 => 22,  60 => 21,  57 => 18,  54 => 20,  51 => 19,  48 => 19,  45 => 8,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
