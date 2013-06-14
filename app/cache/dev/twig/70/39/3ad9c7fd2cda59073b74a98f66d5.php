<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_70393ad9c7fd2cda59073b74a98f66d5 extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
        return array (  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  766 => 179,  758 => 175,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  672 => 139,  670 => 138,  668 => 136,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  635 => 122,  622 => 119,  616 => 117,  611 => 115,  569 => 103,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  502 => 89,  497 => 87,  488 => 82,  476 => 78,  466 => 75,  438 => 69,  429 => 64,  412 => 60,  364 => 41,  350 => 35,  345 => 33,  295 => 16,  290 => 14,  287 => 13,  213 => 274,  299 => 278,  344 => 119,  300 => 105,  385 => 160,  382 => 48,  363 => 126,  330 => 141,  317 => 135,  292 => 15,  180 => 63,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 180,  756 => 174,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 146,  679 => 453,  671 => 451,  667 => 135,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  550 => 399,  532 => 396,  515 => 395,  510 => 393,  244 => 322,  396 => 179,  378 => 170,  376 => 158,  369 => 43,  348 => 322,  219 => 84,  372 => 153,  352 => 141,  349 => 149,  338 => 136,  334 => 27,  308 => 130,  293 => 118,  275 => 106,  230 => 90,  192 => 251,  225 => 87,  170 => 84,  256 => 328,  210 => 273,  643 => 389,  634 => 383,  630 => 445,  628 => 377,  618 => 374,  613 => 116,  597 => 361,  593 => 360,  583 => 356,  577 => 353,  567 => 346,  542 => 330,  527 => 320,  504 => 306,  492 => 299,  463 => 74,  458 => 282,  446 => 275,  420 => 260,  406 => 252,  354 => 151,  297 => 277,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  390 => 240,  346 => 321,  319 => 123,  288 => 101,  270 => 110,  267 => 4,  261 => 105,  239 => 112,  231 => 306,  215 => 285,  212 => 78,  202 => 265,  148 => 46,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 110,  587 => 108,  576 => 185,  570 => 183,  559 => 341,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 326,  531 => 324,  525 => 128,  516 => 125,  485 => 81,  460 => 103,  448 => 71,  445 => 98,  428 => 265,  401 => 49,  397 => 48,  388 => 177,  383 => 43,  367 => 42,  351 => 120,  342 => 32,  339 => 146,  336 => 145,  327 => 114,  316 => 22,  313 => 170,  307 => 167,  304 => 166,  253 => 99,  205 => 267,  198 => 80,  155 => 68,  686 => 206,  680 => 145,  677 => 202,  675 => 452,  669 => 137,  659 => 197,  654 => 195,  642 => 193,  639 => 123,  627 => 120,  624 => 184,  607 => 182,  590 => 109,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 102,  562 => 169,  555 => 167,  521 => 317,  517 => 163,  512 => 394,  509 => 161,  506 => 123,  503 => 122,  500 => 88,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 62,  416 => 61,  405 => 58,  386 => 176,  380 => 112,  377 => 232,  375 => 231,  371 => 145,  366 => 107,  359 => 153,  356 => 37,  340 => 97,  321 => 23,  318 => 111,  302 => 116,  282 => 110,  274 => 97,  254 => 327,  238 => 319,  233 => 312,  228 => 305,  110 => 38,  335 => 94,  331 => 94,  326 => 90,  276 => 113,  271 => 111,  255 => 93,  250 => 325,  218 => 286,  206 => 77,  190 => 242,  181 => 74,  175 => 65,  167 => 78,  636 => 191,  631 => 121,  625 => 201,  623 => 200,  617 => 206,  608 => 114,  604 => 368,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 104,  568 => 182,  565 => 181,  560 => 168,  549 => 98,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 102,  505 => 391,  501 => 88,  499 => 78,  496 => 301,  493 => 76,  489 => 111,  482 => 80,  472 => 287,  459 => 159,  456 => 121,  450 => 72,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 253,  400 => 180,  394 => 242,  391 => 118,  389 => 137,  370 => 229,  361 => 36,  357 => 123,  353 => 36,  347 => 34,  343 => 320,  332 => 116,  329 => 26,  324 => 113,  310 => 184,  301 => 117,  284 => 118,  279 => 115,  277 => 114,  273 => 112,  262 => 104,  259 => 103,  249 => 100,  223 => 297,  191 => 67,  185 => 74,  178 => 66,  174 => 214,  137 => 62,  323 => 24,  320 => 172,  315 => 110,  311 => 20,  306 => 107,  303 => 106,  296 => 161,  291 => 102,  289 => 120,  286 => 119,  280 => 109,  272 => 6,  263 => 95,  257 => 74,  251 => 101,  245 => 96,  242 => 96,  240 => 92,  237 => 93,  234 => 141,  226 => 298,  221 => 85,  146 => 178,  90 => 27,  12 => 33,  34 => 5,  20 => 1,  118 => 49,  100 => 36,  97 => 23,  65 => 17,  53 => 11,  161 => 199,  159 => 193,  150 => 55,  129 => 145,  58 => 14,  81 => 40,  76 => 31,  134 => 158,  127 => 60,  113 => 40,  102 => 30,  59 => 17,  269 => 5,  265 => 96,  260 => 330,  248 => 324,  243 => 92,  236 => 313,  232 => 140,  227 => 105,  216 => 86,  211 => 53,  200 => 262,  195 => 252,  188 => 90,  172 => 64,  152 => 67,  124 => 129,  104 => 87,  77 => 25,  63 => 21,  204 => 76,  201 => 71,  197 => 261,  194 => 78,  184 => 239,  179 => 222,  153 => 77,  23 => 12,  480 => 290,  474 => 77,  469 => 76,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 70,  437 => 96,  435 => 68,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 183,  407 => 59,  402 => 57,  398 => 243,  393 => 52,  387 => 50,  384 => 49,  381 => 150,  379 => 47,  374 => 157,  368 => 112,  365 => 148,  362 => 161,  360 => 332,  355 => 157,  341 => 118,  337 => 96,  322 => 138,  314 => 21,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 136,  285 => 115,  283 => 100,  278 => 8,  268 => 104,  264 => 3,  258 => 329,  252 => 326,  247 => 117,  241 => 321,  235 => 85,  229 => 87,  224 => 81,  220 => 295,  214 => 85,  208 => 268,  169 => 207,  143 => 51,  140 => 58,  132 => 59,  128 => 57,  119 => 114,  107 => 37,  38 => 6,  71 => 19,  177 => 64,  165 => 83,  160 => 23,  135 => 62,  126 => 144,  114 => 108,  84 => 41,  70 => 19,  67 => 18,  61 => 2,  28 => 3,  26 => 3,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  196 => 92,  183 => 84,  171 => 213,  166 => 206,  163 => 82,  158 => 62,  156 => 192,  151 => 185,  142 => 63,  138 => 61,  136 => 165,  121 => 128,  117 => 39,  105 => 34,  91 => 56,  62 => 16,  49 => 12,  24 => 2,  87 => 26,  31 => 4,  25 => 35,  21 => 2,  19 => 1,  93 => 28,  88 => 28,  78 => 24,  46 => 13,  44 => 8,  27 => 7,  79 => 32,  72 => 21,  69 => 13,  47 => 10,  40 => 8,  37 => 6,  22 => 2,  246 => 323,  157 => 21,  145 => 52,  139 => 166,  131 => 157,  123 => 35,  120 => 20,  115 => 40,  111 => 107,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 30,  74 => 22,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 78,  203 => 128,  199 => 73,  193 => 69,  189 => 76,  187 => 241,  182 => 223,  176 => 220,  173 => 85,  168 => 57,  164 => 200,  162 => 54,  154 => 186,  149 => 179,  147 => 75,  144 => 173,  141 => 172,  133 => 47,  130 => 39,  125 => 51,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 25,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 39,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
