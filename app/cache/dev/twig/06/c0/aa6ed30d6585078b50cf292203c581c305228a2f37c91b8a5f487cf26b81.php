<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig */
class __TwigTemplate_06c0aa6ed30d6585078b50cf292203c581c305228a2f37c91b8a5f487cf26b81 extends Twig_Template
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
        // line 16
        echo "
";
        // line 17
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 18
            echo "    <ul class=\"pagination\">

    ";
            // line 20
            if (array_key_exists("previous", $context)) {
                // line 21
                echo "        <li>
            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 25
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 31
                echo "        <li>
            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 34
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 35
                    echo "            <li>
                <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 39
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 47
                    echo "            <li>
                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 51
                    echo "            <li class=\"active\">
                <span>";
                    // line 52
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 55
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
    ";
            // line 58
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 59
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 60
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 61
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 65
                        echo "                <li>
                    <a href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "        <li>
            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 74
            echo "
    ";
            // line 75
            if (array_key_exists("next", $context)) {
                // line 76
                echo "        <li>
            <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 80
                echo "        <li class=\"disabled\">
            <span>";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 84
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 63,  292 => 127,  282 => 22,  276 => 18,  272 => 17,  259 => 14,  249 => 11,  222 => 134,  213 => 124,  206 => 121,  197 => 117,  195 => 116,  192 => 115,  181 => 81,  175 => 108,  167 => 76,  148 => 69,  113 => 55,  34 => 26,  23 => 1,  100 => 33,  81 => 47,  20 => 1,  284 => 128,  267 => 120,  253 => 12,  239 => 104,  223 => 94,  210 => 84,  202 => 120,  194 => 74,  165 => 75,  155 => 75,  153 => 50,  150 => 49,  76 => 9,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 250,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  569 => 231,  567 => 230,  558 => 224,  554 => 223,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  445 => 163,  443 => 162,  438 => 160,  429 => 154,  425 => 152,  420 => 150,  411 => 144,  394 => 136,  390 => 134,  388 => 133,  359 => 114,  357 => 113,  350 => 111,  342 => 109,  338 => 107,  335 => 106,  330 => 104,  327 => 103,  324 => 102,  321 => 99,  319 => 98,  316 => 97,  313 => 96,  304 => 96,  296 => 94,  291 => 91,  289 => 126,  286 => 89,  279 => 84,  274 => 124,  260 => 116,  255 => 68,  244 => 60,  233 => 54,  178 => 80,  137 => 65,  134 => 39,  129 => 64,  124 => 62,  114 => 59,  104 => 51,  97 => 52,  84 => 48,  77 => 132,  522 => 169,  519 => 168,  510 => 164,  505 => 163,  502 => 162,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  464 => 142,  452 => 139,  448 => 138,  433 => 135,  424 => 132,  421 => 131,  418 => 130,  415 => 129,  412 => 128,  406 => 126,  403 => 125,  400 => 124,  385 => 132,  375 => 115,  373 => 114,  370 => 113,  364 => 115,  351 => 106,  346 => 110,  344 => 104,  332 => 105,  326 => 95,  318 => 94,  311 => 93,  308 => 92,  306 => 127,  303 => 90,  295 => 85,  290 => 83,  280 => 127,  271 => 75,  263 => 72,  261 => 71,  250 => 65,  245 => 10,  242 => 60,  234 => 56,  231 => 55,  228 => 54,  226 => 53,  218 => 50,  215 => 49,  198 => 42,  188 => 88,  185 => 112,  170 => 77,  152 => 74,  127 => 82,  90 => 46,  70 => 46,  65 => 35,  58 => 32,  53 => 30,  480 => 162,  474 => 161,  469 => 144,  461 => 175,  457 => 153,  453 => 151,  444 => 137,  440 => 148,  437 => 147,  435 => 146,  430 => 134,  427 => 133,  423 => 151,  413 => 134,  409 => 127,  407 => 131,  402 => 138,  398 => 137,  393 => 121,  387 => 119,  384 => 121,  381 => 117,  379 => 124,  374 => 116,  368 => 116,  365 => 111,  362 => 110,  360 => 109,  355 => 107,  341 => 103,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 82,  283 => 81,  278 => 86,  268 => 16,  264 => 15,  258 => 70,  252 => 80,  247 => 64,  241 => 9,  229 => 5,  220 => 51,  214 => 69,  177 => 109,  169 => 27,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 13,  273 => 96,  269 => 74,  254 => 92,  243 => 88,  240 => 86,  238 => 8,  235 => 7,  230 => 53,  227 => 95,  224 => 71,  221 => 77,  219 => 128,  217 => 126,  208 => 45,  204 => 72,  179 => 84,  159 => 61,  143 => 92,  135 => 53,  119 => 487,  102 => 18,  71 => 19,  67 => 20,  63 => 34,  59 => 36,  38 => 10,  94 => 51,  89 => 28,  85 => 150,  75 => 43,  68 => 36,  56 => 35,  87 => 49,  21 => 2,  26 => 12,  93 => 47,  88 => 13,  78 => 103,  46 => 13,  27 => 5,  44 => 26,  31 => 25,  28 => 20,  201 => 35,  196 => 33,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 52,  156 => 9,  151 => 70,  142 => 59,  138 => 69,  136 => 40,  121 => 61,  117 => 410,  105 => 55,  91 => 50,  62 => 19,  49 => 11,  24 => 18,  25 => 3,  19 => 16,  79 => 25,  72 => 21,  69 => 40,  47 => 48,  40 => 8,  37 => 12,  22 => 17,  246 => 108,  157 => 23,  145 => 93,  139 => 41,  131 => 61,  123 => 58,  120 => 57,  115 => 43,  111 => 37,  108 => 56,  101 => 32,  98 => 17,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 8,  32 => 7,  29 => 24,  209 => 39,  203 => 44,  199 => 34,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 61,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 4,  141 => 70,  133 => 55,  130 => 9,  125 => 59,  122 => 488,  116 => 26,  112 => 25,  109 => 70,  106 => 36,  103 => 34,  99 => 317,  95 => 59,  92 => 198,  86 => 45,  82 => 11,  80 => 43,  73 => 23,  64 => 38,  60 => 69,  57 => 2,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 26,  36 => 14,  33 => 22,  30 => 21,);
    }
}
