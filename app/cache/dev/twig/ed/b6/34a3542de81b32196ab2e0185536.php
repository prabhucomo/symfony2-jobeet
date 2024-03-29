<?php

/* SonataMediaBundle:MediaAdmin:list_image.html.twig */
class __TwigTemplate_edb634a3542de81b32196ab2e0185536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "object")))), "method"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getContext($context, "object"), "admin", array("width" => 75, "height" => 60));
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 95,  170 => 22,  256 => 122,  210 => 97,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  613 => 372,  597 => 361,  593 => 360,  583 => 356,  577 => 353,  567 => 346,  542 => 330,  527 => 320,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  420 => 260,  406 => 252,  354 => 219,  297 => 137,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  390 => 240,  346 => 136,  319 => 123,  288 => 109,  270 => 100,  267 => 99,  261 => 96,  239 => 112,  231 => 83,  215 => 99,  212 => 88,  202 => 72,  148 => 63,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 357,  576 => 185,  570 => 183,  559 => 341,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 326,  531 => 324,  525 => 128,  516 => 125,  485 => 292,  460 => 103,  448 => 99,  445 => 98,  428 => 265,  401 => 49,  397 => 48,  388 => 154,  383 => 43,  367 => 39,  351 => 137,  342 => 210,  339 => 133,  336 => 131,  327 => 205,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  253 => 148,  205 => 84,  198 => 80,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 317,  517 => 163,  512 => 162,  509 => 161,  506 => 123,  503 => 122,  500 => 158,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 232,  375 => 231,  371 => 145,  366 => 107,  359 => 106,  356 => 139,  340 => 97,  321 => 91,  318 => 90,  302 => 116,  282 => 79,  274 => 77,  254 => 121,  238 => 64,  233 => 98,  228 => 82,  110 => 46,  335 => 94,  331 => 94,  326 => 90,  276 => 165,  271 => 127,  255 => 69,  250 => 67,  218 => 91,  206 => 51,  190 => 69,  181 => 115,  175 => 43,  167 => 78,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 370,  604 => 368,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 301,  493 => 76,  489 => 111,  482 => 109,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 137,  370 => 229,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 98,  332 => 117,  329 => 200,  324 => 92,  310 => 184,  301 => 111,  284 => 110,  279 => 153,  277 => 129,  273 => 151,  262 => 157,  259 => 123,  249 => 71,  223 => 58,  191 => 119,  185 => 67,  178 => 83,  174 => 23,  137 => 48,  323 => 124,  320 => 172,  315 => 122,  311 => 78,  306 => 87,  303 => 139,  296 => 161,  291 => 135,  289 => 157,  286 => 80,  280 => 69,  272 => 76,  263 => 71,  257 => 74,  251 => 105,  245 => 66,  242 => 143,  240 => 64,  237 => 54,  234 => 141,  226 => 81,  221 => 102,  146 => 34,  90 => 38,  12 => 33,  34 => 16,  20 => 11,  118 => 103,  100 => 42,  97 => 37,  65 => 28,  53 => 22,  161 => 75,  159 => 53,  150 => 93,  129 => 46,  58 => 25,  81 => 15,  76 => 20,  134 => 55,  127 => 66,  113 => 40,  102 => 41,  59 => 26,  269 => 75,  265 => 125,  260 => 62,  248 => 153,  243 => 87,  236 => 63,  232 => 140,  227 => 105,  216 => 86,  211 => 53,  200 => 92,  195 => 77,  188 => 86,  172 => 76,  152 => 67,  124 => 51,  104 => 43,  77 => 33,  63 => 27,  204 => 80,  201 => 71,  197 => 54,  194 => 79,  184 => 74,  179 => 63,  153 => 63,  23 => 18,  480 => 290,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 272,  437 => 96,  435 => 270,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 85,  402 => 126,  398 => 243,  393 => 156,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 116,  368 => 112,  365 => 142,  362 => 110,  360 => 222,  355 => 106,  341 => 121,  337 => 96,  322 => 202,  314 => 99,  312 => 88,  309 => 97,  305 => 182,  298 => 84,  294 => 136,  285 => 168,  283 => 131,  278 => 68,  268 => 78,  264 => 98,  258 => 81,  252 => 72,  247 => 117,  241 => 101,  235 => 74,  229 => 96,  224 => 71,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 72,  140 => 58,  132 => 108,  128 => 107,  119 => 43,  107 => 40,  38 => 17,  71 => 29,  177 => 72,  165 => 16,  160 => 18,  135 => 58,  126 => 45,  114 => 47,  84 => 35,  70 => 33,  67 => 32,  61 => 26,  28 => 14,  26 => 20,  94 => 39,  89 => 40,  85 => 32,  75 => 39,  68 => 25,  56 => 21,  196 => 71,  183 => 84,  171 => 61,  166 => 73,  163 => 66,  158 => 64,  156 => 73,  151 => 51,  142 => 51,  138 => 61,  136 => 109,  121 => 43,  117 => 47,  105 => 26,  91 => 32,  62 => 24,  49 => 22,  24 => 13,  87 => 59,  31 => 15,  25 => 3,  21 => 12,  19 => 11,  93 => 35,  88 => 33,  78 => 40,  46 => 19,  44 => 18,  27 => 16,  79 => 31,  72 => 37,  69 => 30,  47 => 19,  40 => 17,  37 => 17,  22 => 12,  246 => 70,  157 => 17,  145 => 60,  139 => 60,  131 => 25,  123 => 57,  120 => 50,  115 => 75,  111 => 41,  108 => 99,  101 => 38,  98 => 47,  96 => 43,  83 => 30,  74 => 27,  66 => 25,  55 => 24,  52 => 23,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 16,  29 => 14,  209 => 82,  203 => 128,  199 => 67,  193 => 130,  189 => 20,  187 => 118,  182 => 66,  176 => 82,  173 => 71,  168 => 69,  164 => 19,  162 => 62,  154 => 52,  149 => 71,  147 => 61,  144 => 68,  141 => 67,  133 => 47,  130 => 54,  125 => 55,  122 => 44,  116 => 49,  112 => 42,  109 => 44,  106 => 46,  103 => 39,  99 => 38,  95 => 36,  92 => 45,  86 => 43,  82 => 57,  80 => 34,  73 => 29,  64 => 26,  60 => 26,  57 => 24,  54 => 23,  51 => 21,  48 => 21,  45 => 20,  42 => 19,  39 => 19,  36 => 17,  33 => 15,  30 => 16,);
    }
}
