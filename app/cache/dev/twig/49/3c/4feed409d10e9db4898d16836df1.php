<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_493c4feed409d10e9db4898d16836df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        if ((($this->getAttribute($this->getContext($context, "field_description"), "hasassociationadmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "element")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description")), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description")), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  613 => 372,  597 => 361,  593 => 360,  583 => 356,  577 => 353,  567 => 346,  542 => 330,  527 => 320,  504 => 306,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  420 => 260,  406 => 252,  354 => 219,  297 => 177,  281 => 167,  222 => 138,  217 => 136,  207 => 129,  390 => 240,  346 => 136,  319 => 123,  288 => 109,  270 => 100,  267 => 99,  261 => 96,  239 => 86,  231 => 83,  215 => 76,  212 => 75,  202 => 72,  148 => 63,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 357,  576 => 185,  570 => 183,  559 => 341,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 326,  531 => 324,  525 => 128,  516 => 125,  485 => 292,  460 => 103,  448 => 99,  445 => 98,  428 => 265,  401 => 49,  397 => 48,  388 => 154,  383 => 43,  367 => 39,  351 => 137,  342 => 210,  339 => 133,  336 => 131,  327 => 205,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  253 => 148,  205 => 136,  198 => 133,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 317,  517 => 163,  512 => 162,  509 => 161,  506 => 123,  503 => 122,  500 => 158,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 286,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 232,  375 => 231,  371 => 145,  366 => 107,  359 => 106,  356 => 139,  340 => 97,  321 => 91,  318 => 90,  302 => 116,  282 => 79,  274 => 77,  254 => 154,  238 => 64,  233 => 146,  228 => 82,  110 => 64,  335 => 94,  331 => 94,  326 => 90,  276 => 165,  271 => 163,  255 => 69,  250 => 67,  218 => 57,  206 => 51,  190 => 69,  181 => 115,  175 => 43,  167 => 60,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 370,  604 => 368,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 334,  545 => 97,  538 => 165,  534 => 92,  529 => 321,  526 => 90,  514 => 79,  511 => 310,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 301,  493 => 76,  489 => 111,  482 => 109,  472 => 287,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 253,  400 => 248,  394 => 242,  391 => 118,  389 => 137,  370 => 229,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 98,  332 => 117,  329 => 200,  324 => 92,  310 => 184,  301 => 111,  284 => 110,  279 => 153,  277 => 104,  273 => 151,  262 => 157,  259 => 150,  249 => 71,  223 => 58,  191 => 119,  185 => 67,  178 => 45,  174 => 51,  137 => 88,  323 => 124,  320 => 172,  315 => 122,  311 => 78,  306 => 87,  303 => 86,  296 => 161,  291 => 73,  289 => 157,  286 => 80,  280 => 69,  272 => 76,  263 => 71,  257 => 74,  251 => 59,  245 => 66,  242 => 143,  240 => 64,  237 => 54,  234 => 141,  226 => 81,  221 => 78,  146 => 34,  90 => 35,  12 => 33,  34 => 16,  20 => 1,  118 => 52,  100 => 66,  97 => 37,  65 => 30,  53 => 23,  161 => 58,  159 => 53,  150 => 93,  129 => 55,  58 => 23,  81 => 15,  76 => 20,  134 => 26,  127 => 66,  113 => 40,  102 => 41,  59 => 18,  269 => 75,  265 => 103,  260 => 62,  248 => 153,  243 => 87,  236 => 63,  232 => 140,  227 => 91,  216 => 86,  211 => 53,  200 => 134,  195 => 77,  188 => 73,  172 => 76,  152 => 67,  124 => 44,  104 => 23,  77 => 58,  63 => 50,  204 => 80,  201 => 71,  197 => 54,  194 => 14,  184 => 115,  179 => 63,  153 => 67,  23 => 18,  480 => 290,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 272,  437 => 96,  435 => 270,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 85,  402 => 126,  398 => 243,  393 => 156,  387 => 122,  384 => 237,  381 => 150,  379 => 236,  374 => 116,  368 => 112,  365 => 142,  362 => 110,  360 => 222,  355 => 106,  341 => 121,  337 => 96,  322 => 202,  314 => 99,  312 => 88,  309 => 97,  305 => 182,  298 => 84,  294 => 160,  285 => 168,  283 => 107,  278 => 68,  268 => 78,  264 => 98,  258 => 81,  252 => 72,  247 => 66,  241 => 149,  235 => 74,  229 => 139,  224 => 71,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 72,  140 => 44,  132 => 86,  128 => 55,  119 => 42,  107 => 24,  38 => 32,  71 => 30,  177 => 78,  165 => 16,  160 => 70,  135 => 58,  126 => 83,  114 => 23,  84 => 62,  70 => 32,  67 => 27,  61 => 18,  28 => 14,  26 => 20,  94 => 36,  89 => 40,  85 => 32,  75 => 35,  68 => 49,  56 => 40,  196 => 71,  183 => 70,  171 => 61,  166 => 73,  163 => 49,  158 => 81,  156 => 55,  151 => 66,  142 => 51,  138 => 57,  136 => 48,  121 => 43,  117 => 47,  105 => 26,  91 => 25,  62 => 29,  49 => 20,  24 => 13,  87 => 59,  31 => 15,  25 => 3,  21 => 12,  19 => 11,  93 => 14,  88 => 31,  78 => 56,  46 => 35,  44 => 19,  27 => 4,  79 => 31,  72 => 25,  69 => 24,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 70,  157 => 83,  145 => 63,  139 => 60,  131 => 25,  123 => 54,  120 => 53,  115 => 75,  111 => 39,  108 => 71,  101 => 38,  98 => 21,  96 => 43,  83 => 59,  74 => 56,  66 => 25,  55 => 21,  52 => 20,  50 => 17,  43 => 33,  41 => 18,  35 => 16,  32 => 16,  29 => 21,  209 => 82,  203 => 128,  199 => 67,  193 => 130,  189 => 20,  187 => 118,  182 => 66,  176 => 62,  173 => 110,  168 => 17,  164 => 104,  162 => 62,  154 => 53,  149 => 53,  147 => 64,  144 => 92,  141 => 61,  133 => 47,  130 => 46,  125 => 55,  122 => 22,  116 => 49,  112 => 49,  109 => 44,  106 => 46,  103 => 45,  99 => 44,  95 => 64,  92 => 67,  86 => 39,  82 => 57,  80 => 36,  73 => 29,  64 => 26,  60 => 22,  57 => 22,  54 => 16,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 15,  30 => 15,);
    }
}
