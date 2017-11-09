<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_c35342955fcc9f62d694206f7745ae0b838cff88b99056159e204f39dcc0f6a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  118 => 45,  146 => 10,  126 => 63,  292 => 127,  282 => 22,  276 => 18,  272 => 17,  259 => 14,  249 => 11,  222 => 134,  213 => 124,  206 => 121,  197 => 117,  195 => 116,  192 => 115,  181 => 81,  175 => 108,  167 => 76,  148 => 69,  113 => 54,  34 => 26,  23 => 1,  100 => 41,  81 => 30,  20 => 1,  284 => 128,  267 => 120,  253 => 12,  239 => 104,  223 => 94,  210 => 84,  202 => 120,  194 => 74,  165 => 75,  155 => 75,  153 => 50,  150 => 49,  76 => 17,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 250,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  569 => 231,  567 => 230,  558 => 224,  554 => 223,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  445 => 163,  443 => 162,  438 => 160,  429 => 154,  425 => 152,  420 => 150,  411 => 144,  394 => 136,  390 => 134,  388 => 133,  359 => 114,  357 => 113,  350 => 111,  342 => 109,  338 => 107,  335 => 106,  330 => 104,  327 => 103,  324 => 102,  321 => 99,  319 => 98,  316 => 97,  313 => 96,  304 => 96,  296 => 94,  291 => 91,  289 => 126,  286 => 89,  279 => 84,  274 => 124,  260 => 116,  255 => 68,  244 => 60,  233 => 54,  178 => 80,  137 => 65,  134 => 39,  129 => 64,  124 => 62,  114 => 56,  104 => 42,  97 => 37,  84 => 29,  77 => 28,  522 => 169,  519 => 168,  510 => 164,  505 => 163,  502 => 162,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  464 => 142,  452 => 139,  448 => 138,  433 => 135,  424 => 132,  421 => 131,  418 => 130,  415 => 129,  412 => 128,  406 => 126,  403 => 125,  400 => 124,  385 => 132,  375 => 115,  373 => 114,  370 => 113,  364 => 115,  351 => 106,  346 => 110,  344 => 104,  332 => 105,  326 => 95,  318 => 94,  311 => 93,  308 => 92,  306 => 127,  303 => 90,  295 => 85,  290 => 83,  280 => 127,  271 => 75,  263 => 72,  261 => 71,  250 => 65,  245 => 10,  242 => 60,  234 => 56,  231 => 55,  228 => 54,  226 => 53,  218 => 50,  215 => 49,  198 => 42,  188 => 88,  185 => 112,  170 => 77,  152 => 74,  127 => 28,  90 => 32,  70 => 29,  65 => 23,  58 => 19,  53 => 10,  480 => 162,  474 => 161,  469 => 144,  461 => 175,  457 => 153,  453 => 151,  444 => 137,  440 => 148,  437 => 147,  435 => 146,  430 => 134,  427 => 133,  423 => 151,  413 => 134,  409 => 127,  407 => 131,  402 => 138,  398 => 137,  393 => 121,  387 => 119,  384 => 121,  381 => 117,  379 => 124,  374 => 116,  368 => 116,  365 => 111,  362 => 110,  360 => 109,  355 => 107,  341 => 103,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 82,  283 => 81,  278 => 86,  268 => 16,  264 => 15,  258 => 70,  252 => 80,  247 => 64,  241 => 9,  229 => 5,  220 => 51,  214 => 69,  177 => 109,  169 => 27,  140 => 66,  132 => 65,  128 => 63,  107 => 63,  61 => 12,  273 => 96,  269 => 74,  254 => 92,  243 => 88,  240 => 86,  238 => 8,  235 => 7,  230 => 53,  227 => 95,  224 => 71,  221 => 77,  219 => 128,  217 => 126,  208 => 45,  204 => 72,  179 => 84,  159 => 14,  143 => 71,  135 => 53,  119 => 39,  102 => 17,  71 => 30,  67 => 24,  63 => 23,  59 => 14,  38 => 6,  94 => 34,  89 => 39,  85 => 38,  75 => 27,  68 => 27,  56 => 11,  87 => 33,  21 => 2,  26 => 12,  93 => 36,  88 => 31,  78 => 26,  46 => 14,  27 => 5,  44 => 10,  31 => 4,  28 => 3,  201 => 35,  196 => 33,  183 => 82,  171 => 81,  166 => 62,  163 => 61,  158 => 52,  156 => 13,  151 => 70,  142 => 60,  138 => 5,  136 => 57,  121 => 59,  117 => 19,  105 => 18,  91 => 50,  62 => 20,  49 => 17,  24 => 18,  25 => 3,  19 => 1,  79 => 28,  72 => 24,  69 => 24,  47 => 8,  40 => 11,  37 => 6,  22 => 17,  246 => 108,  157 => 23,  145 => 93,  139 => 41,  131 => 61,  123 => 58,  120 => 20,  115 => 47,  111 => 43,  108 => 19,  101 => 29,  98 => 57,  96 => 38,  83 => 29,  74 => 24,  66 => 15,  55 => 13,  52 => 10,  50 => 18,  43 => 7,  41 => 5,  35 => 5,  32 => 7,  29 => 3,  209 => 39,  203 => 44,  199 => 34,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 61,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 11,  147 => 58,  144 => 4,  141 => 6,  133 => 56,  130 => 9,  125 => 50,  122 => 58,  116 => 26,  112 => 55,  109 => 70,  106 => 43,  103 => 47,  99 => 52,  95 => 33,  92 => 42,  86 => 23,  82 => 28,  80 => 43,  73 => 16,  64 => 13,  60 => 21,  57 => 12,  54 => 19,  51 => 12,  48 => 9,  45 => 16,  42 => 10,  39 => 10,  36 => 4,  33 => 3,  30 => 3,);
    }
}
