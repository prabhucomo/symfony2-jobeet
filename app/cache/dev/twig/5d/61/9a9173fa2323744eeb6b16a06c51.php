<?php

/* SonataFormatterBundle:Block:block_formatter.html.twig */
class __TwigTemplate_5d619a9173fa2323744eeb6b16a06c51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->getAttribute($this->getContext($context, "settings"), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Block:block_formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 153,  352 => 141,  349 => 140,  338 => 136,  334 => 134,  308 => 121,  293 => 114,  275 => 106,  230 => 90,  192 => 77,  225 => 87,  170 => 22,  256 => 100,  210 => 84,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  613 => 372,  597 => 361,  593 => 360,  583 => 356,  577 => 353,  567 => 346,  542 => 330,  527 => 320,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  420 => 260,  406 => 252,  354 => 219,  297 => 116,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  390 => 240,  346 => 139,  319 => 123,  288 => 112,  270 => 100,  267 => 99,  261 => 96,  239 => 112,  231 => 83,  215 => 99,  212 => 88,  202 => 81,  148 => 51,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 357,  576 => 185,  570 => 183,  559 => 341,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 326,  531 => 324,  525 => 128,  516 => 125,  485 => 292,  460 => 103,  448 => 99,  445 => 98,  428 => 265,  401 => 49,  397 => 48,  388 => 154,  383 => 43,  367 => 152,  351 => 137,  342 => 210,  339 => 133,  336 => 131,  327 => 205,  316 => 124,  313 => 170,  307 => 167,  304 => 166,  253 => 99,  205 => 82,  198 => 80,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 317,  517 => 163,  512 => 162,  509 => 161,  506 => 123,  503 => 122,  500 => 158,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 232,  375 => 231,  371 => 145,  366 => 107,  359 => 145,  356 => 139,  340 => 97,  321 => 91,  318 => 90,  302 => 116,  282 => 110,  274 => 77,  254 => 121,  238 => 95,  233 => 98,  228 => 82,  110 => 50,  335 => 94,  331 => 94,  326 => 90,  276 => 165,  271 => 127,  255 => 69,  250 => 67,  218 => 91,  206 => 51,  190 => 69,  181 => 74,  175 => 43,  167 => 78,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 370,  604 => 368,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 301,  493 => 76,  489 => 111,  482 => 109,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 137,  370 => 229,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 138,  332 => 117,  329 => 200,  324 => 126,  310 => 184,  301 => 117,  284 => 110,  279 => 153,  277 => 129,  273 => 151,  262 => 157,  259 => 123,  249 => 71,  223 => 58,  191 => 119,  185 => 67,  178 => 83,  174 => 23,  137 => 62,  323 => 124,  320 => 172,  315 => 122,  311 => 122,  306 => 87,  303 => 139,  296 => 161,  291 => 113,  289 => 157,  286 => 80,  280 => 109,  272 => 76,  263 => 102,  257 => 74,  251 => 105,  245 => 96,  242 => 143,  240 => 64,  237 => 54,  234 => 141,  226 => 81,  221 => 102,  146 => 64,  90 => 30,  12 => 33,  34 => 4,  20 => 1,  118 => 103,  100 => 42,  97 => 26,  65 => 17,  53 => 5,  161 => 75,  159 => 53,  150 => 54,  129 => 43,  58 => 25,  81 => 20,  76 => 30,  134 => 55,  127 => 66,  113 => 40,  102 => 47,  59 => 25,  269 => 75,  265 => 103,  260 => 62,  248 => 153,  243 => 87,  236 => 94,  232 => 140,  227 => 105,  216 => 86,  211 => 53,  200 => 80,  195 => 77,  188 => 86,  172 => 76,  152 => 67,  124 => 51,  104 => 43,  77 => 17,  63 => 20,  204 => 80,  201 => 71,  197 => 79,  194 => 78,  184 => 74,  179 => 73,  153 => 63,  23 => 12,  480 => 290,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 272,  437 => 96,  435 => 270,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 85,  402 => 126,  398 => 243,  393 => 156,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 116,  368 => 112,  365 => 148,  362 => 110,  360 => 222,  355 => 106,  341 => 121,  337 => 96,  322 => 202,  314 => 123,  312 => 88,  309 => 97,  305 => 182,  298 => 84,  294 => 136,  285 => 168,  283 => 131,  278 => 68,  268 => 104,  264 => 98,  258 => 81,  252 => 72,  247 => 117,  241 => 101,  235 => 74,  229 => 96,  224 => 71,  220 => 63,  214 => 85,  208 => 73,  169 => 43,  143 => 72,  140 => 47,  132 => 59,  128 => 57,  119 => 43,  107 => 40,  38 => 25,  71 => 28,  177 => 72,  165 => 16,  160 => 23,  135 => 45,  126 => 56,  114 => 47,  84 => 35,  70 => 29,  67 => 18,  61 => 16,  28 => 14,  26 => 14,  94 => 39,  89 => 40,  85 => 41,  75 => 39,  68 => 135,  56 => 28,  196 => 71,  183 => 84,  171 => 67,  166 => 73,  163 => 66,  158 => 60,  156 => 73,  151 => 51,  142 => 63,  138 => 61,  136 => 60,  121 => 43,  117 => 47,  105 => 26,  91 => 43,  62 => 31,  49 => 12,  24 => 14,  87 => 29,  31 => 15,  25 => 14,  21 => 11,  19 => 11,  93 => 35,  88 => 24,  78 => 19,  46 => 28,  44 => 24,  27 => 12,  79 => 39,  72 => 35,  69 => 11,  47 => 25,  40 => 26,  37 => 7,  22 => 12,  246 => 70,  157 => 21,  145 => 60,  139 => 60,  131 => 25,  123 => 57,  120 => 32,  115 => 52,  111 => 41,  108 => 29,  101 => 24,  98 => 23,  96 => 44,  83 => 34,  74 => 29,  66 => 32,  55 => 13,  52 => 27,  50 => 30,  43 => 8,  41 => 17,  35 => 5,  32 => 5,  29 => 15,  209 => 82,  203 => 128,  199 => 67,  193 => 130,  189 => 76,  187 => 118,  182 => 66,  176 => 82,  173 => 71,  168 => 69,  164 => 19,  162 => 61,  154 => 20,  149 => 71,  147 => 61,  144 => 68,  141 => 67,  133 => 47,  130 => 54,  125 => 55,  122 => 55,  116 => 52,  112 => 51,  109 => 44,  106 => 48,  103 => 47,  99 => 38,  95 => 36,  92 => 43,  86 => 40,  82 => 39,  80 => 18,  73 => 137,  64 => 17,  60 => 38,  57 => 34,  54 => 34,  51 => 12,  48 => 24,  45 => 9,  42 => 20,  39 => 6,  36 => 5,  33 => 15,  30 => 17,);
    }
}
