<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_a18db4aaf2378f75ea574ab8c3a53c20 extends Twig_Template
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
        // line 1
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\" />
        Search
    </h3>
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search"), "html", null, true);
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "ip"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((($this->getContext($context, "m") == $this->getContext($context, "method"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "m"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "start"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "end"), "html", null, true);
        echo "\" />
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((($this->getContext($context, "l") == $this->getContext($context, "limit"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "l"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 119,  300 => 105,  385 => 160,  382 => 159,  363 => 126,  330 => 141,  317 => 135,  292 => 121,  180 => 63,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  550 => 399,  532 => 396,  515 => 395,  510 => 393,  244 => 97,  396 => 179,  378 => 170,  376 => 158,  369 => 165,  348 => 153,  219 => 84,  372 => 153,  352 => 141,  349 => 149,  338 => 136,  334 => 145,  308 => 130,  293 => 118,  275 => 106,  230 => 90,  192 => 77,  225 => 87,  170 => 84,  256 => 100,  210 => 84,  643 => 389,  634 => 383,  630 => 445,  628 => 377,  618 => 374,  613 => 372,  597 => 361,  593 => 360,  583 => 356,  577 => 353,  567 => 346,  542 => 330,  527 => 320,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  420 => 260,  406 => 252,  354 => 151,  297 => 104,  281 => 167,  222 => 138,  217 => 136,  207 => 96,  390 => 240,  346 => 139,  319 => 123,  288 => 101,  270 => 110,  267 => 99,  261 => 105,  239 => 112,  231 => 83,  215 => 99,  212 => 78,  202 => 77,  148 => 46,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 434,  576 => 185,  570 => 183,  559 => 341,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 326,  531 => 324,  525 => 128,  516 => 125,  485 => 292,  460 => 103,  448 => 99,  445 => 98,  428 => 265,  401 => 49,  397 => 48,  388 => 177,  383 => 43,  367 => 156,  351 => 120,  342 => 210,  339 => 146,  336 => 145,  327 => 114,  316 => 124,  313 => 170,  307 => 167,  304 => 166,  253 => 99,  205 => 82,  198 => 80,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 452,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 317,  517 => 163,  512 => 394,  509 => 161,  506 => 123,  503 => 122,  500 => 389,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 176,  380 => 112,  377 => 232,  375 => 231,  371 => 145,  366 => 107,  359 => 153,  356 => 139,  340 => 97,  321 => 112,  318 => 111,  302 => 116,  282 => 110,  274 => 97,  254 => 121,  238 => 95,  233 => 98,  228 => 88,  110 => 22,  335 => 94,  331 => 94,  326 => 90,  276 => 113,  271 => 111,  255 => 93,  250 => 67,  218 => 83,  206 => 77,  190 => 76,  181 => 74,  175 => 65,  167 => 78,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 370,  604 => 368,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 102,  505 => 391,  501 => 88,  499 => 78,  496 => 301,  493 => 76,  489 => 111,  482 => 109,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 253,  400 => 180,  394 => 242,  391 => 118,  389 => 137,  370 => 229,  361 => 36,  357 => 123,  353 => 121,  347 => 31,  343 => 138,  332 => 116,  329 => 200,  324 => 113,  310 => 184,  301 => 117,  284 => 118,  279 => 115,  277 => 114,  273 => 112,  262 => 104,  259 => 103,  249 => 100,  223 => 86,  191 => 67,  185 => 74,  178 => 66,  174 => 65,  137 => 62,  323 => 124,  320 => 172,  315 => 110,  311 => 131,  306 => 107,  303 => 106,  296 => 161,  291 => 102,  289 => 120,  286 => 119,  280 => 109,  272 => 111,  263 => 95,  257 => 74,  251 => 101,  245 => 96,  242 => 96,  240 => 92,  237 => 93,  234 => 141,  226 => 81,  221 => 85,  146 => 64,  90 => 37,  12 => 33,  34 => 5,  20 => 1,  118 => 49,  100 => 36,  97 => 23,  65 => 22,  53 => 15,  161 => 63,  159 => 53,  150 => 55,  129 => 43,  58 => 18,  81 => 23,  76 => 27,  134 => 54,  127 => 60,  113 => 40,  102 => 40,  59 => 22,  269 => 75,  265 => 96,  260 => 62,  248 => 96,  243 => 92,  236 => 94,  232 => 140,  227 => 105,  216 => 86,  211 => 53,  200 => 80,  195 => 71,  188 => 90,  172 => 64,  152 => 67,  124 => 51,  104 => 37,  77 => 25,  63 => 18,  204 => 76,  201 => 71,  197 => 79,  194 => 78,  184 => 74,  179 => 73,  153 => 77,  23 => 12,  480 => 290,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 272,  437 => 96,  435 => 270,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 183,  407 => 85,  402 => 126,  398 => 243,  393 => 178,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 157,  368 => 112,  365 => 148,  362 => 161,  360 => 222,  355 => 157,  341 => 118,  337 => 96,  322 => 138,  314 => 123,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 136,  285 => 115,  283 => 100,  278 => 98,  268 => 104,  264 => 98,  258 => 94,  252 => 72,  247 => 117,  241 => 101,  235 => 85,  229 => 87,  224 => 81,  220 => 63,  214 => 85,  208 => 73,  169 => 43,  143 => 51,  140 => 58,  132 => 59,  128 => 57,  119 => 40,  107 => 27,  38 => 12,  71 => 28,  177 => 64,  165 => 83,  160 => 23,  135 => 62,  126 => 56,  114 => 47,  84 => 40,  70 => 24,  67 => 24,  61 => 23,  28 => 6,  26 => 6,  94 => 34,  89 => 40,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  196 => 92,  183 => 84,  171 => 58,  166 => 56,  163 => 82,  158 => 62,  156 => 62,  151 => 59,  142 => 63,  138 => 61,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 21,  49 => 14,  24 => 3,  87 => 32,  31 => 8,  25 => 35,  21 => 11,  19 => 1,  93 => 38,  88 => 25,  78 => 26,  46 => 12,  44 => 9,  27 => 3,  79 => 21,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 5,  22 => 2,  246 => 70,  157 => 21,  145 => 52,  139 => 49,  131 => 45,  123 => 35,  120 => 20,  115 => 52,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 31,  74 => 27,  66 => 32,  55 => 16,  52 => 12,  50 => 16,  43 => 12,  41 => 8,  35 => 6,  32 => 7,  29 => 3,  209 => 78,  203 => 128,  199 => 73,  193 => 69,  189 => 76,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 19,  162 => 54,  154 => 60,  149 => 71,  147 => 75,  144 => 68,  141 => 73,  133 => 47,  130 => 39,  125 => 51,  122 => 41,  116 => 31,  112 => 36,  109 => 35,  106 => 51,  103 => 25,  99 => 31,  95 => 39,  92 => 27,  86 => 40,  82 => 19,  80 => 29,  73 => 23,  64 => 21,  60 => 20,  57 => 19,  54 => 34,  51 => 13,  48 => 9,  45 => 14,  42 => 13,  39 => 6,  36 => 8,  33 => 4,  30 => 7,);
    }
}