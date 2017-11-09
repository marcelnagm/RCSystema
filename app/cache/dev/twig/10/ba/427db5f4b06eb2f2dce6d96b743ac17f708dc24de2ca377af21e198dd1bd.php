<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_10ba427db5f4b06eb2f2dce6d96b743ac17f708dc24de2ca377af21e198dd1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1080 => 340,  1074 => 338,  1060 => 333,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  957 => 301,  954 => 300,  939 => 294,  928 => 286,  924 => 285,  908 => 278,  904 => 277,  902 => 276,  881 => 265,  879 => 264,  876 => 263,  867 => 258,  843 => 257,  840 => 255,  835 => 252,  833 => 251,  826 => 247,  822 => 245,  808 => 235,  801 => 232,  797 => 229,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  748 => 205,  739 => 200,  735 => 198,  728 => 192,  723 => 190,  719 => 187,  717 => 186,  704 => 182,  701 => 180,  699 => 179,  683 => 170,  663 => 160,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  645 => 150,  643 => 149,  633 => 144,  627 => 140,  624 => 139,  614 => 133,  609 => 129,  599 => 128,  594 => 127,  589 => 124,  584 => 122,  579 => 118,  577 => 116,  576 => 115,  570 => 112,  562 => 108,  556 => 104,  552 => 102,  550 => 101,  544 => 99,  541 => 97,  477 => 82,  472 => 79,  470 => 78,  465 => 77,  463 => 76,  410 => 59,  399 => 56,  397 => 55,  383 => 49,  349 => 34,  339 => 28,  317 => 17,  287 => 5,  257 => 291,  212 => 224,  792 => 488,  749 => 479,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 174,  679 => 466,  677 => 465,  660 => 464,  634 => 456,  629 => 141,  625 => 453,  620 => 136,  606 => 449,  601 => 446,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 51,  386 => 159,  378 => 157,  367 => 339,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 26,  331 => 140,  307 => 128,  302 => 125,  288 => 118,  265 => 299,  184 => 63,  417 => 143,  405 => 137,  395 => 135,  382 => 131,  377 => 47,  371 => 156,  356 => 122,  353 => 328,  347 => 119,  333 => 115,  328 => 22,  281 => 114,  237 => 262,  232 => 249,  186 => 190,  180 => 70,  161 => 162,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 334,  1055 => 648,  1051 => 332,  1048 => 331,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 305,  972 => 608,  970 => 607,  967 => 303,  963 => 302,  955 => 600,  947 => 597,  941 => 595,  935 => 592,  926 => 589,  919 => 587,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  884 => 267,  874 => 562,  870 => 560,  862 => 557,  854 => 552,  848 => 548,  838 => 544,  836 => 543,  830 => 250,  828 => 538,  824 => 246,  815 => 239,  812 => 238,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  788 => 486,  780 => 513,  774 => 212,  762 => 504,  754 => 208,  745 => 203,  740 => 491,  737 => 199,  732 => 197,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  696 => 178,  692 => 175,  686 => 468,  682 => 467,  676 => 467,  671 => 164,  668 => 163,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 148,  636 => 145,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 123,  574 => 113,  565 => 109,  563 => 429,  559 => 427,  553 => 425,  546 => 423,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  293 => 120,  251 => 182,  174 => 74,  462 => 202,  449 => 198,  446 => 75,  441 => 196,  439 => 71,  431 => 189,  422 => 184,  408 => 176,  401 => 172,  380 => 158,  361 => 152,  348 => 140,  329 => 131,  325 => 129,  323 => 19,  320 => 127,  315 => 131,  300 => 13,  275 => 330,  270 => 316,  262 => 93,  256 => 96,  248 => 97,  216 => 79,  207 => 216,  200 => 72,  191 => 196,  172 => 57,  110 => 38,  118 => 49,  146 => 147,  126 => 121,  292 => 127,  282 => 3,  276 => 111,  272 => 17,  259 => 103,  249 => 92,  222 => 238,  213 => 78,  206 => 121,  197 => 69,  195 => 116,  192 => 115,  181 => 185,  175 => 58,  167 => 71,  148 => 69,  113 => 40,  34 => 4,  23 => 1,  100 => 36,  81 => 32,  20 => 1,  284 => 128,  267 => 101,  253 => 100,  239 => 104,  223 => 94,  210 => 77,  202 => 94,  194 => 197,  165 => 83,  155 => 47,  153 => 77,  150 => 55,  76 => 25,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 336,  1066 => 335,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 630,  1016 => 319,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 304,  965 => 417,  962 => 416,  959 => 602,  952 => 483,  950 => 415,  946 => 296,  942 => 295,  940 => 411,  937 => 593,  930 => 287,  923 => 588,  921 => 284,  916 => 280,  911 => 581,  906 => 392,  903 => 391,  900 => 275,  897 => 274,  894 => 387,  891 => 271,  888 => 270,  886 => 384,  883 => 383,  880 => 566,  877 => 381,  875 => 380,  872 => 379,  869 => 259,  866 => 377,  864 => 558,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 546,  841 => 368,  839 => 367,  837 => 253,  834 => 365,  827 => 357,  823 => 356,  819 => 244,  816 => 354,  813 => 353,  806 => 234,  804 => 233,  799 => 351,  795 => 228,  793 => 227,  790 => 519,  783 => 342,  777 => 338,  775 => 485,  770 => 507,  764 => 505,  756 => 327,  753 => 326,  751 => 206,  746 => 478,  742 => 202,  738 => 320,  736 => 319,  733 => 318,  726 => 191,  716 => 305,  714 => 185,  711 => 303,  700 => 294,  698 => 471,  693 => 290,  687 => 173,  681 => 169,  678 => 168,  673 => 165,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 153,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 135,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 126,  586 => 236,  583 => 235,  578 => 432,  575 => 114,  569 => 231,  567 => 110,  558 => 224,  554 => 103,  551 => 424,  548 => 100,  545 => 220,  542 => 421,  539 => 96,  536 => 95,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  445 => 163,  443 => 74,  438 => 160,  429 => 66,  425 => 64,  420 => 150,  411 => 140,  394 => 54,  390 => 134,  388 => 134,  359 => 123,  357 => 37,  350 => 327,  342 => 30,  338 => 116,  335 => 134,  330 => 23,  327 => 103,  324 => 112,  321 => 18,  319 => 98,  316 => 97,  313 => 110,  304 => 96,  296 => 121,  291 => 91,  289 => 196,  286 => 112,  279 => 84,  274 => 110,  260 => 293,  255 => 284,  244 => 60,  233 => 87,  178 => 184,  137 => 65,  134 => 133,  129 => 122,  124 => 108,  114 => 91,  104 => 74,  97 => 41,  84 => 33,  77 => 25,  522 => 92,  519 => 91,  510 => 164,  505 => 88,  502 => 87,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  464 => 142,  452 => 139,  448 => 138,  433 => 135,  424 => 132,  421 => 62,  418 => 130,  415 => 180,  412 => 60,  406 => 126,  403 => 125,  400 => 124,  385 => 132,  375 => 115,  373 => 46,  370 => 45,  364 => 115,  351 => 141,  346 => 33,  344 => 104,  332 => 105,  326 => 21,  318 => 94,  311 => 93,  308 => 287,  306 => 286,  303 => 122,  295 => 11,  290 => 7,  280 => 194,  271 => 190,  263 => 294,  261 => 71,  250 => 274,  245 => 270,  242 => 269,  234 => 90,  231 => 55,  228 => 54,  226 => 84,  218 => 50,  215 => 49,  198 => 42,  188 => 194,  185 => 75,  170 => 84,  152 => 46,  127 => 35,  90 => 27,  70 => 19,  65 => 17,  58 => 15,  53 => 11,  480 => 162,  474 => 80,  469 => 144,  461 => 175,  457 => 153,  453 => 199,  444 => 137,  440 => 148,  437 => 70,  435 => 69,  430 => 134,  427 => 65,  423 => 63,  413 => 134,  409 => 127,  407 => 138,  402 => 58,  398 => 136,  393 => 121,  387 => 164,  384 => 132,  381 => 48,  379 => 124,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 329,  341 => 117,  337 => 27,  322 => 101,  314 => 16,  312 => 130,  309 => 129,  305 => 108,  298 => 12,  294 => 90,  285 => 4,  283 => 115,  278 => 331,  268 => 300,  264 => 15,  258 => 187,  252 => 283,  247 => 273,  241 => 93,  229 => 87,  220 => 81,  214 => 231,  177 => 69,  169 => 168,  140 => 66,  132 => 65,  128 => 42,  107 => 37,  61 => 2,  273 => 317,  269 => 107,  254 => 92,  243 => 88,  240 => 263,  238 => 8,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 80,  219 => 237,  217 => 232,  208 => 76,  204 => 215,  179 => 84,  159 => 158,  143 => 71,  135 => 46,  119 => 95,  102 => 30,  71 => 15,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 45,  89 => 37,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 82,  158 => 80,  156 => 157,  151 => 152,  142 => 60,  138 => 47,  136 => 138,  121 => 107,  117 => 37,  105 => 25,  91 => 44,  62 => 14,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 26,  72 => 21,  69 => 11,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 23,  145 => 74,  139 => 139,  131 => 132,  123 => 61,  120 => 31,  115 => 40,  111 => 90,  108 => 33,  101 => 73,  98 => 29,  96 => 53,  83 => 30,  74 => 16,  66 => 10,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 223,  203 => 73,  199 => 212,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 178,  173 => 177,  168 => 61,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 45,  130 => 46,  125 => 41,  122 => 58,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 47,  99 => 54,  95 => 39,  92 => 31,  86 => 36,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
