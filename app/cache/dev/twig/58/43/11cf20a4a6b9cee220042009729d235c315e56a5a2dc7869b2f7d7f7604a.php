<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_584311cf20a4a6b9cee220042009729d235c315e56a5a2dc7869b2f7d7f7604a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
          <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
          </a></h1>
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">Post a Job</a>
              </div>
            </div>
 
            <div class=\"search\">
              <h2>Ask for a job</h2>
              <form action=\"\" method=\"get\">
                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                <input type=\"submit\" value=\"search\" />
                <div class=\"help\">
                  Enter some keywords (city, country, position, ...)
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
 
      <div id=\"content\">
";
        // line 49
        echo "          <div class=\"flash_notice\">
";
        // line 51
        echo "          </div>
";
        // line 53
        echo " 
";
        // line 55
        echo "          <div class=\"flash_error\">
";
        // line 57
        echo "          </div>
";
        // line 59
        echo " 
        <div class=\"content\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li class=\"feed\"><a href=\"\">Full feed</a></li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\"><a href=\"\">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        Jobeet - Your best job board
      ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "            ";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 10,  126 => 63,  292 => 127,  282 => 22,  276 => 18,  272 => 17,  259 => 14,  249 => 11,  222 => 134,  213 => 124,  206 => 121,  197 => 117,  195 => 116,  192 => 115,  181 => 81,  175 => 108,  167 => 76,  148 => 69,  113 => 55,  34 => 26,  23 => 1,  100 => 33,  81 => 47,  20 => 1,  284 => 128,  267 => 120,  253 => 12,  239 => 104,  223 => 94,  210 => 84,  202 => 120,  194 => 74,  165 => 75,  155 => 75,  153 => 50,  150 => 49,  76 => 9,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  687 => 288,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  659 => 278,  657 => 277,  649 => 271,  644 => 268,  632 => 258,  630 => 257,  621 => 251,  617 => 250,  613 => 248,  611 => 247,  608 => 246,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  569 => 231,  567 => 230,  558 => 224,  554 => 223,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  539 => 218,  536 => 217,  533 => 216,  531 => 215,  525 => 211,  520 => 208,  518 => 207,  511 => 203,  507 => 202,  503 => 200,  501 => 199,  498 => 198,  487 => 192,  483 => 190,  481 => 189,  478 => 188,  471 => 183,  445 => 163,  443 => 162,  438 => 160,  429 => 154,  425 => 152,  420 => 150,  411 => 144,  394 => 136,  390 => 134,  388 => 133,  359 => 114,  357 => 113,  350 => 111,  342 => 109,  338 => 107,  335 => 106,  330 => 104,  327 => 103,  324 => 102,  321 => 99,  319 => 98,  316 => 97,  313 => 96,  304 => 96,  296 => 94,  291 => 91,  289 => 126,  286 => 89,  279 => 84,  274 => 124,  260 => 116,  255 => 68,  244 => 60,  233 => 54,  178 => 80,  137 => 65,  134 => 39,  129 => 64,  124 => 62,  114 => 59,  104 => 51,  97 => 52,  84 => 48,  77 => 132,  522 => 169,  519 => 168,  510 => 164,  505 => 163,  502 => 162,  495 => 158,  493 => 157,  491 => 156,  489 => 155,  484 => 153,  482 => 152,  479 => 151,  464 => 142,  452 => 139,  448 => 138,  433 => 135,  424 => 132,  421 => 131,  418 => 130,  415 => 129,  412 => 128,  406 => 126,  403 => 125,  400 => 124,  385 => 132,  375 => 115,  373 => 114,  370 => 113,  364 => 115,  351 => 106,  346 => 110,  344 => 104,  332 => 105,  326 => 95,  318 => 94,  311 => 93,  308 => 92,  306 => 127,  303 => 90,  295 => 85,  290 => 83,  280 => 127,  271 => 75,  263 => 72,  261 => 71,  250 => 65,  245 => 10,  242 => 60,  234 => 56,  231 => 55,  228 => 54,  226 => 53,  218 => 50,  215 => 49,  198 => 42,  188 => 88,  185 => 112,  170 => 77,  152 => 74,  127 => 82,  90 => 46,  70 => 46,  65 => 35,  58 => 32,  53 => 30,  480 => 162,  474 => 161,  469 => 144,  461 => 175,  457 => 153,  453 => 151,  444 => 137,  440 => 148,  437 => 147,  435 => 146,  430 => 134,  427 => 133,  423 => 151,  413 => 134,  409 => 127,  407 => 131,  402 => 138,  398 => 137,  393 => 121,  387 => 119,  384 => 121,  381 => 117,  379 => 124,  374 => 116,  368 => 116,  365 => 111,  362 => 110,  360 => 109,  355 => 107,  341 => 103,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 82,  283 => 81,  278 => 86,  268 => 16,  264 => 15,  258 => 70,  252 => 80,  247 => 64,  241 => 9,  229 => 5,  220 => 51,  214 => 69,  177 => 109,  169 => 27,  140 => 66,  132 => 65,  128 => 60,  107 => 63,  61 => 13,  273 => 96,  269 => 74,  254 => 92,  243 => 88,  240 => 86,  238 => 8,  235 => 7,  230 => 53,  227 => 95,  224 => 71,  221 => 77,  219 => 128,  217 => 126,  208 => 45,  204 => 72,  179 => 84,  159 => 14,  143 => 92,  135 => 53,  119 => 487,  102 => 18,  71 => 19,  67 => 20,  63 => 34,  59 => 36,  38 => 10,  94 => 51,  89 => 51,  85 => 150,  75 => 43,  68 => 36,  56 => 35,  87 => 49,  21 => 2,  26 => 12,  93 => 47,  88 => 13,  78 => 103,  46 => 13,  27 => 5,  44 => 26,  31 => 8,  28 => 3,  201 => 35,  196 => 33,  183 => 82,  171 => 81,  166 => 62,  163 => 61,  158 => 52,  156 => 13,  151 => 70,  142 => 59,  138 => 5,  136 => 40,  121 => 61,  117 => 410,  105 => 61,  91 => 50,  62 => 10,  49 => 14,  24 => 18,  25 => 3,  19 => 1,  79 => 25,  72 => 14,  69 => 40,  47 => 48,  40 => 15,  37 => 13,  22 => 17,  246 => 108,  157 => 23,  145 => 93,  139 => 41,  131 => 61,  123 => 58,  120 => 71,  115 => 69,  111 => 37,  108 => 56,  101 => 59,  98 => 57,  96 => 48,  83 => 44,  74 => 39,  66 => 11,  55 => 31,  52 => 7,  50 => 21,  43 => 12,  41 => 25,  35 => 10,  32 => 7,  29 => 5,  209 => 39,  203 => 44,  199 => 34,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 61,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 11,  147 => 58,  144 => 4,  141 => 6,  133 => 55,  130 => 9,  125 => 59,  122 => 488,  116 => 26,  112 => 25,  109 => 70,  106 => 36,  103 => 34,  99 => 317,  95 => 55,  92 => 53,  86 => 49,  82 => 11,  80 => 43,  73 => 23,  64 => 29,  60 => 69,  57 => 8,  54 => 22,  51 => 33,  48 => 7,  45 => 30,  42 => 10,  39 => 26,  36 => 14,  33 => 22,  30 => 21,);
    }
}