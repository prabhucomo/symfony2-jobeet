<?php

/* SonataMediaBundle:Media:view.html.twig */
class __TwigTemplate_41f1d41419c4ba2de26d66836191fa66 extends Twig_Template
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
        // line 11
        echo "
<h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "name"), "html", null, true);
        echo "</h1>

<div>
    ";
        // line 15
        echo $this->env->getExtension('sonata_media')->media($this->getContext($context, "media"), $this->getContext($context, "format"), array());
        // line 16
        echo "</div>

<h2>Information</h2>
<ul>
    <li>Size : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "size"), "html", null, true);
        echo "</li>
    <li>Width : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "width"), "html", null, true);
        echo "</li>
    <li>Height : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "height"), "html", null, true);
        echo "</li>
    <li>Content Type : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "contenttype"), "html", null, true);
        echo "</li>
    <li>Copyright : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "copyright"), "html", null, true);
        echo "</li>
    <li>Author name : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "authorname"), "html", null, true);
        echo "</li>
    <li>CDN : ";
        // line 26
        if ($this->getAttribute($this->getContext($context, "media"), "cdnisflushable")) {
            echo "to be flushed";
        } else {
            echo " last flush at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "cdnflushat")), "html", null, true);
            echo " ";
        }
        echo "</li>
</ul>

<h2>Formats</h2>
<ul>
    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_view", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")), "format" => "reference")), "html", null, true);
        echo "\">reference</a></li>

    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "formats"));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 34
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_view", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")), "format" => $this->getContext($context, "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Media:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 122,  210 => 97,  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  613 => 372,  597 => 361,  593 => 360,  583 => 356,  577 => 353,  567 => 346,  542 => 330,  527 => 320,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  420 => 260,  406 => 252,  354 => 219,  297 => 137,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  390 => 240,  346 => 136,  319 => 123,  288 => 109,  270 => 100,  267 => 99,  261 => 96,  239 => 112,  231 => 83,  215 => 99,  212 => 75,  202 => 72,  148 => 63,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 357,  576 => 185,  570 => 183,  559 => 341,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 326,  531 => 324,  525 => 128,  516 => 125,  485 => 292,  460 => 103,  448 => 99,  445 => 98,  428 => 265,  401 => 49,  397 => 48,  388 => 154,  383 => 43,  367 => 39,  351 => 137,  342 => 210,  339 => 133,  336 => 131,  327 => 205,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  253 => 148,  205 => 95,  198 => 133,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 317,  517 => 163,  512 => 162,  509 => 161,  506 => 123,  503 => 122,  500 => 158,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 232,  375 => 231,  371 => 145,  366 => 107,  359 => 106,  356 => 139,  340 => 97,  321 => 91,  318 => 90,  302 => 116,  282 => 79,  274 => 77,  254 => 121,  238 => 64,  233 => 109,  228 => 82,  110 => 51,  335 => 94,  331 => 94,  326 => 90,  276 => 165,  271 => 127,  255 => 69,  250 => 67,  218 => 57,  206 => 51,  190 => 69,  181 => 115,  175 => 43,  167 => 78,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 370,  604 => 368,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 301,  493 => 76,  489 => 111,  482 => 109,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 137,  370 => 229,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 98,  332 => 117,  329 => 200,  324 => 92,  310 => 184,  301 => 111,  284 => 110,  279 => 153,  277 => 129,  273 => 151,  262 => 157,  259 => 123,  249 => 71,  223 => 58,  191 => 119,  185 => 67,  178 => 83,  174 => 51,  137 => 88,  323 => 124,  320 => 172,  315 => 122,  311 => 78,  306 => 87,  303 => 139,  296 => 161,  291 => 135,  289 => 157,  286 => 80,  280 => 69,  272 => 76,  263 => 71,  257 => 74,  251 => 120,  245 => 66,  242 => 143,  240 => 64,  237 => 54,  234 => 141,  226 => 81,  221 => 102,  146 => 34,  90 => 35,  12 => 33,  34 => 16,  20 => 1,  118 => 52,  100 => 66,  97 => 37,  65 => 30,  53 => 23,  161 => 75,  159 => 53,  150 => 93,  129 => 55,  58 => 23,  81 => 15,  76 => 20,  134 => 26,  127 => 66,  113 => 40,  102 => 41,  59 => 28,  269 => 75,  265 => 125,  260 => 62,  248 => 153,  243 => 87,  236 => 63,  232 => 140,  227 => 105,  216 => 86,  211 => 53,  200 => 92,  195 => 77,  188 => 86,  172 => 76,  152 => 67,  124 => 44,  104 => 49,  77 => 58,  63 => 50,  204 => 80,  201 => 71,  197 => 54,  194 => 89,  184 => 115,  179 => 63,  153 => 67,  23 => 18,  480 => 290,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 272,  437 => 96,  435 => 270,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 85,  402 => 126,  398 => 243,  393 => 156,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 116,  368 => 112,  365 => 142,  362 => 110,  360 => 222,  355 => 106,  341 => 121,  337 => 96,  322 => 202,  314 => 99,  312 => 88,  309 => 97,  305 => 182,  298 => 84,  294 => 136,  285 => 168,  283 => 131,  278 => 68,  268 => 78,  264 => 98,  258 => 81,  252 => 72,  247 => 117,  241 => 149,  235 => 74,  229 => 139,  224 => 71,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 72,  140 => 44,  132 => 59,  128 => 58,  119 => 42,  107 => 24,  38 => 17,  71 => 30,  177 => 78,  165 => 16,  160 => 70,  135 => 58,  126 => 83,  114 => 23,  84 => 62,  70 => 33,  67 => 32,  61 => 18,  28 => 15,  26 => 20,  94 => 36,  89 => 40,  85 => 32,  75 => 39,  68 => 49,  56 => 25,  196 => 71,  183 => 84,  171 => 61,  166 => 73,  163 => 49,  158 => 81,  156 => 73,  151 => 72,  142 => 51,  138 => 61,  136 => 60,  121 => 43,  117 => 47,  105 => 26,  91 => 25,  62 => 29,  49 => 20,  24 => 13,  87 => 59,  31 => 15,  25 => 3,  21 => 12,  19 => 11,  93 => 14,  88 => 31,  78 => 40,  46 => 21,  44 => 22,  27 => 4,  79 => 33,  72 => 37,  69 => 24,  47 => 19,  40 => 21,  37 => 17,  22 => 12,  246 => 70,  157 => 83,  145 => 63,  139 => 60,  131 => 25,  123 => 57,  120 => 56,  115 => 75,  111 => 39,  108 => 71,  101 => 38,  98 => 47,  96 => 43,  83 => 34,  74 => 31,  66 => 25,  55 => 21,  52 => 24,  50 => 17,  43 => 20,  41 => 18,  35 => 16,  32 => 16,  29 => 21,  209 => 82,  203 => 128,  199 => 67,  193 => 130,  189 => 20,  187 => 118,  182 => 66,  176 => 82,  173 => 81,  168 => 17,  164 => 104,  162 => 62,  154 => 53,  149 => 71,  147 => 64,  144 => 68,  141 => 67,  133 => 47,  130 => 46,  125 => 55,  122 => 22,  116 => 49,  112 => 52,  109 => 44,  106 => 46,  103 => 45,  99 => 44,  95 => 64,  92 => 45,  86 => 43,  82 => 57,  80 => 41,  73 => 29,  64 => 26,  60 => 26,  57 => 22,  54 => 25,  51 => 24,  48 => 23,  45 => 19,  42 => 18,  39 => 17,  36 => 20,  33 => 15,  30 => 16,);
    }
}
