<?php

/* SonataMediaBundle:Block:block_gallery.html.twig */
class __TwigTemplate_b56063228875372e5f275328eb138e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "settings"), "title")) {
            // line 15
            echo "        <h3 class=\"sonata-media-block-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "title"), "html", null, true);
            echo "</h3>
    ";
        }
        // line 17
        echo "
    <div class=\"sonata-media-block-gallery-container\">
        <div id=\"sonata-media-block-gallery-";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
        echo "\" class=\"nivoGallery\">
            <ul>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "elements"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 22
            echo "                    <li data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "type"), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "title"), "html", null, true);
            echo "\" data-caption=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "caption"), "html", null, true);
            echo "\">
                        ";
            // line 23
            if (($this->getAttribute($this->getContext($context, "element"), "type") == "image")) {
                // line 24
                echo "                            ";
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getContext($context, "element"), "media"), $this->getAttribute($this->getContext($context, "settings"), "format"), array());
                // line 25
                echo "                        ";
            } elseif (($this->getAttribute($this->getContext($context, "element"), "type") == "video")) {
                // line 26
                echo "                            ";
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getContext($context, "element"), "media"), $this->getAttribute($this->getContext($context, "settings"), "format"), array());
                // line 27
                echo "                        ";
            }
            // line 28
            echo "                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "                    ";
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul>
        </div>
    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            jQuery('#sonata-media-block-gallery-";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
        echo "').nivoGallery({
                 pauseTime:     ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "pauseTime"), "html", null, true);
        echo ",
                 animSpeed:     ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "animSpeed"), "html", null, true);
        echo ",
                 effect:        'fade',
                 startPaused:   ";
        // line 42
        if (($this->getAttribute($this->getContext($context, "settings"), "startPaused") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                 directionNav:  ";
        // line 43
        if (($this->getAttribute($this->getContext($context, "settings"), "directionNav") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                 progressBar:   ";
        // line 44
        if (($this->getAttribute($this->getContext($context, "settings"), "progressBar") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 122,  210 => 97,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  613 => 372,  597 => 361,  593 => 360,  583 => 356,  577 => 353,  567 => 346,  542 => 330,  527 => 320,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  420 => 260,  406 => 252,  354 => 219,  297 => 137,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  390 => 240,  346 => 136,  319 => 123,  288 => 109,  270 => 100,  267 => 99,  261 => 96,  239 => 112,  231 => 83,  215 => 99,  212 => 75,  202 => 72,  148 => 63,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 357,  576 => 185,  570 => 183,  559 => 341,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 326,  531 => 324,  525 => 128,  516 => 125,  485 => 292,  460 => 103,  448 => 99,  445 => 98,  428 => 265,  401 => 49,  397 => 48,  388 => 154,  383 => 43,  367 => 39,  351 => 137,  342 => 210,  339 => 133,  336 => 131,  327 => 205,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  253 => 148,  205 => 95,  198 => 133,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 317,  517 => 163,  512 => 162,  509 => 161,  506 => 123,  503 => 122,  500 => 158,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 232,  375 => 231,  371 => 145,  366 => 107,  359 => 106,  356 => 139,  340 => 97,  321 => 91,  318 => 90,  302 => 116,  282 => 79,  274 => 77,  254 => 121,  238 => 64,  233 => 109,  228 => 82,  110 => 51,  335 => 94,  331 => 94,  326 => 90,  276 => 165,  271 => 127,  255 => 69,  250 => 67,  218 => 57,  206 => 51,  190 => 69,  181 => 115,  175 => 43,  167 => 78,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 370,  604 => 368,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 301,  493 => 76,  489 => 111,  482 => 109,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 137,  370 => 229,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 98,  332 => 117,  329 => 200,  324 => 92,  310 => 184,  301 => 111,  284 => 110,  279 => 153,  277 => 129,  273 => 151,  262 => 157,  259 => 123,  249 => 71,  223 => 58,  191 => 119,  185 => 67,  178 => 83,  174 => 51,  137 => 88,  323 => 124,  320 => 172,  315 => 122,  311 => 78,  306 => 87,  303 => 139,  296 => 161,  291 => 135,  289 => 157,  286 => 80,  280 => 69,  272 => 76,  263 => 71,  257 => 74,  251 => 120,  245 => 66,  242 => 143,  240 => 64,  237 => 54,  234 => 141,  226 => 81,  221 => 102,  146 => 34,  90 => 35,  12 => 33,  34 => 15,  20 => 1,  118 => 52,  100 => 66,  97 => 37,  65 => 24,  53 => 23,  161 => 75,  159 => 53,  150 => 93,  129 => 55,  58 => 23,  81 => 15,  76 => 20,  134 => 26,  127 => 66,  113 => 40,  102 => 41,  59 => 28,  269 => 75,  265 => 125,  260 => 62,  248 => 153,  243 => 87,  236 => 63,  232 => 140,  227 => 105,  216 => 86,  211 => 53,  200 => 92,  195 => 77,  188 => 86,  172 => 76,  152 => 67,  124 => 44,  104 => 49,  77 => 28,  63 => 23,  204 => 80,  201 => 71,  197 => 54,  194 => 89,  184 => 115,  179 => 63,  153 => 67,  23 => 18,  480 => 290,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 272,  437 => 96,  435 => 270,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 85,  402 => 126,  398 => 243,  393 => 156,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 116,  368 => 112,  365 => 142,  362 => 110,  360 => 222,  355 => 106,  341 => 121,  337 => 96,  322 => 202,  314 => 99,  312 => 88,  309 => 97,  305 => 182,  298 => 84,  294 => 136,  285 => 168,  283 => 131,  278 => 68,  268 => 78,  264 => 98,  258 => 81,  252 => 72,  247 => 117,  241 => 149,  235 => 74,  229 => 139,  224 => 71,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 72,  140 => 44,  132 => 59,  128 => 44,  119 => 42,  107 => 40,  38 => 17,  71 => 26,  177 => 78,  165 => 16,  160 => 70,  135 => 58,  126 => 83,  114 => 23,  84 => 62,  70 => 33,  67 => 32,  61 => 18,  28 => 13,  26 => 20,  94 => 36,  89 => 40,  85 => 31,  75 => 39,  68 => 25,  56 => 25,  196 => 71,  183 => 84,  171 => 61,  166 => 73,  163 => 49,  158 => 81,  156 => 73,  151 => 72,  142 => 51,  138 => 61,  136 => 60,  121 => 43,  117 => 47,  105 => 26,  91 => 32,  62 => 24,  49 => 21,  24 => 13,  87 => 59,  31 => 14,  25 => 3,  21 => 12,  19 => 11,  93 => 14,  88 => 31,  78 => 40,  46 => 20,  44 => 19,  27 => 4,  79 => 33,  72 => 37,  69 => 24,  47 => 19,  40 => 17,  37 => 17,  22 => 12,  246 => 70,  157 => 83,  145 => 63,  139 => 60,  131 => 25,  123 => 57,  120 => 43,  115 => 75,  111 => 39,  108 => 71,  101 => 38,  98 => 47,  96 => 43,  83 => 30,  74 => 27,  66 => 25,  55 => 21,  52 => 24,  50 => 17,  43 => 19,  41 => 18,  35 => 17,  32 => 16,  29 => 21,  209 => 82,  203 => 128,  199 => 67,  193 => 130,  189 => 20,  187 => 118,  182 => 66,  176 => 82,  173 => 81,  168 => 17,  164 => 104,  162 => 62,  154 => 53,  149 => 71,  147 => 64,  144 => 68,  141 => 67,  133 => 47,  130 => 46,  125 => 55,  122 => 22,  116 => 49,  112 => 42,  109 => 44,  106 => 46,  103 => 39,  99 => 38,  95 => 64,  92 => 45,  86 => 43,  82 => 57,  80 => 41,  73 => 29,  64 => 26,  60 => 26,  57 => 22,  54 => 22,  51 => 24,  48 => 23,  45 => 19,  42 => 18,  39 => 18,  36 => 20,  33 => 15,  30 => 16,);
    }
}