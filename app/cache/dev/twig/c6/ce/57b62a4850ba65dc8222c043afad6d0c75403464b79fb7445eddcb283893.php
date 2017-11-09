<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_c6ce57b62a4850ba65dc8222c043afad6d0c75403464b79fb7445eddcb283893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  749 => 479,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  367 => 339,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  307 => 128,  302 => 125,  288 => 118,  265 => 105,  184 => 63,  417 => 143,  405 => 137,  395 => 135,  382 => 131,  377 => 129,  371 => 156,  356 => 122,  353 => 328,  347 => 119,  333 => 115,  328 => 139,  281 => 114,  237 => 91,  232 => 88,  186 => 72,  180 => 70,  161 => 58,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  955 => 600,  947 => 597,  941 => 595,  935 => 592,  926 => 589,  919 => 587,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  884 => 568,  874 => 562,  870 => 560,  862 => 557,  854 => 552,  848 => 548,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  788 => 486,  780 => 513,  774 => 509,  762 => 504,  754 => 499,  745 => 493,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  546 => 423,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  293 => 120,  251 => 182,  174 => 74,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  422 => 184,  408 => 176,  401 => 172,  380 => 158,  361 => 152,  348 => 140,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  300 => 121,  275 => 105,  270 => 102,  262 => 93,  256 => 96,  248 => 97,  216 => 79,  207 => 76,  200 => 72,  191 => 67,  172 => 57,  110 => 38,  118 => 49,  146 => 10,  126 => 63,  292 => 127,  282 => 22,  276 => 111,  272 => 17,  259 => 103,  249 => 92,  222 => 83,  213 => 78,  206 => 121,  197 => 69,  195 => 116,  192 => 115,  181 => 65,  175 => 58,  167 => 71,  148 => 69,  113 => 40,  34 => 4,  23 => 1,  100 => 36,  81 => 24,  20 => 1,  284 => 128,  267 => 101,  253 => 100,  239 => 104,  223 => 94,  210 => 77,  202 => 94,  194 => 68,  165 => 83,  155 => 47,  153 => 77,  150 => 55,  76 => 28,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 630,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 602,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 593,  930 => 590,  923 => 588,  921 => 399,  916 => 397,  911 => 581,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 571,  888 => 570,  886 => 384,  883 => 383,  880 => 566,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 558,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 546,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 519,  783 => 342,  777 => 338,  775 => 485,  770 => 507,  764 => 505,  756 => 327,  753 => 326,  751 => 325,  746 => 478,  742 => 492,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 471,  693 => 290,  687 => 288,  681 => 287,  678 => 468,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 462,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 250,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 432,  575 => 233,  569 => 231,  567 => 414,  558 => 224,  554 => 223,  551 => 424,  548 => 221,  545 => 220,  542 => 421,  539 => 218,  536 => 419,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  445 => 163,  443 => 162,  438 => 160,  429 => 188,  425 => 152,  420 => 150,  411 => 140,  394 => 168,  390 => 134,  388 => 134,  359 => 123,  357 => 113,  350 => 327,  342 => 137,  338 => 116,  335 => 134,  330 => 104,  327 => 103,  324 => 112,  321 => 135,  319 => 98,  316 => 97,  313 => 110,  304 => 96,  296 => 121,  291 => 91,  289 => 196,  286 => 112,  279 => 84,  274 => 110,  260 => 116,  255 => 101,  244 => 60,  233 => 87,  178 => 59,  137 => 65,  134 => 39,  129 => 64,  124 => 62,  114 => 36,  104 => 31,  97 => 41,  84 => 25,  77 => 25,  522 => 406,  519 => 168,  510 => 164,  505 => 163,  502 => 162,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  464 => 142,  452 => 139,  448 => 138,  433 => 135,  424 => 132,  421 => 131,  418 => 130,  415 => 180,  412 => 128,  406 => 126,  403 => 125,  400 => 124,  385 => 132,  375 => 115,  373 => 156,  370 => 113,  364 => 115,  351 => 141,  346 => 110,  344 => 104,  332 => 105,  326 => 138,  318 => 94,  311 => 93,  308 => 287,  306 => 286,  303 => 122,  295 => 85,  290 => 119,  280 => 194,  271 => 190,  263 => 72,  261 => 71,  250 => 65,  245 => 10,  242 => 60,  234 => 90,  231 => 55,  228 => 54,  226 => 84,  218 => 50,  215 => 49,  198 => 42,  188 => 90,  185 => 75,  170 => 84,  152 => 46,  127 => 35,  90 => 27,  70 => 19,  65 => 17,  58 => 15,  53 => 11,  480 => 162,  474 => 161,  469 => 144,  461 => 175,  457 => 153,  453 => 199,  444 => 137,  440 => 148,  437 => 147,  435 => 146,  430 => 134,  427 => 133,  423 => 151,  413 => 134,  409 => 127,  407 => 138,  402 => 138,  398 => 136,  393 => 121,  387 => 164,  384 => 132,  381 => 117,  379 => 124,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 329,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 16,  264 => 15,  258 => 187,  252 => 80,  247 => 64,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 27,  140 => 66,  132 => 65,  128 => 42,  107 => 37,  61 => 23,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 8,  235 => 89,  230 => 53,  227 => 86,  224 => 71,  221 => 80,  219 => 128,  217 => 126,  208 => 76,  204 => 75,  179 => 84,  159 => 57,  143 => 71,  135 => 46,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 21,  59 => 13,  38 => 5,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 70,  142 => 60,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 18,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 23,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 39,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 71,  149 => 11,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 58,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 47,  99 => 23,  95 => 39,  92 => 31,  86 => 23,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}