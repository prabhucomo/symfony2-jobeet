<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_1539900898cab05a319ce92a8c90b70e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((($this->getAttribute($this->getContext($context, "field_description"), "hasassociationadmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "element")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description")), "html", null, true);
                echo "</a>";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 18
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 21
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description")), "html", null, true);
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 22
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 63,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 189,  576 => 185,  570 => 183,  559 => 179,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 160,  531 => 129,  525 => 128,  516 => 125,  485 => 110,  460 => 103,  448 => 99,  445 => 98,  428 => 94,  401 => 49,  397 => 48,  388 => 45,  383 => 43,  367 => 39,  351 => 32,  342 => 29,  339 => 28,  336 => 27,  327 => 205,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  253 => 148,  205 => 136,  198 => 133,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 164,  517 => 163,  512 => 162,  509 => 161,  506 => 123,  503 => 122,  500 => 158,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 105,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 111,  375 => 41,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  340 => 97,  321 => 91,  318 => 90,  302 => 165,  282 => 79,  274 => 77,  254 => 68,  238 => 64,  233 => 62,  228 => 59,  110 => 64,  335 => 94,  331 => 94,  326 => 90,  276 => 152,  271 => 79,  255 => 69,  250 => 67,  218 => 57,  206 => 51,  190 => 50,  181 => 47,  175 => 43,  167 => 42,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 98,  545 => 97,  538 => 165,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 124,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 111,  482 => 109,  472 => 145,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 86,  400 => 119,  394 => 139,  391 => 118,  389 => 137,  370 => 40,  361 => 36,  357 => 35,  353 => 104,  347 => 31,  343 => 98,  332 => 117,  329 => 212,  324 => 92,  310 => 87,  301 => 111,  284 => 110,  279 => 153,  277 => 78,  273 => 151,  262 => 76,  259 => 150,  249 => 71,  223 => 58,  191 => 120,  185 => 84,  178 => 45,  174 => 51,  137 => 60,  323 => 82,  320 => 172,  315 => 79,  311 => 78,  306 => 87,  303 => 86,  296 => 161,  291 => 73,  289 => 157,  286 => 80,  280 => 69,  272 => 76,  263 => 71,  257 => 74,  251 => 59,  245 => 66,  242 => 143,  240 => 64,  237 => 54,  234 => 141,  226 => 138,  221 => 27,  146 => 34,  90 => 18,  12 => 33,  34 => 16,  20 => 1,  118 => 52,  100 => 22,  97 => 39,  65 => 30,  53 => 23,  161 => 54,  159 => 53,  150 => 66,  129 => 55,  58 => 23,  81 => 15,  76 => 20,  134 => 26,  127 => 66,  113 => 34,  102 => 41,  59 => 18,  269 => 75,  265 => 103,  260 => 62,  248 => 145,  243 => 65,  236 => 63,  232 => 140,  227 => 91,  216 => 86,  211 => 53,  200 => 134,  195 => 77,  188 => 73,  172 => 76,  152 => 67,  124 => 45,  104 => 23,  77 => 28,  63 => 27,  204 => 80,  201 => 71,  197 => 54,  194 => 14,  184 => 115,  179 => 112,  153 => 79,  23 => 3,  480 => 148,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 97,  437 => 96,  435 => 137,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 85,  402 => 126,  398 => 129,  393 => 47,  387 => 122,  384 => 134,  381 => 120,  379 => 42,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 121,  337 => 96,  322 => 202,  314 => 99,  312 => 88,  309 => 97,  305 => 95,  298 => 84,  294 => 160,  285 => 155,  283 => 84,  278 => 68,  268 => 78,  264 => 84,  258 => 81,  252 => 72,  247 => 66,  241 => 67,  235 => 74,  229 => 139,  224 => 71,  220 => 63,  214 => 69,  208 => 137,  169 => 43,  143 => 72,  140 => 44,  132 => 51,  128 => 55,  119 => 49,  107 => 24,  38 => 6,  71 => 30,  177 => 79,  165 => 16,  160 => 70,  135 => 47,  126 => 51,  114 => 23,  84 => 16,  70 => 32,  67 => 18,  61 => 18,  28 => 14,  26 => 14,  94 => 21,  89 => 40,  85 => 37,  75 => 35,  68 => 22,  56 => 27,  196 => 21,  183 => 70,  171 => 94,  166 => 73,  163 => 49,  158 => 81,  156 => 65,  151 => 48,  142 => 59,  138 => 57,  136 => 51,  121 => 53,  117 => 47,  105 => 26,  91 => 25,  62 => 29,  49 => 21,  24 => 13,  87 => 17,  31 => 15,  25 => 3,  21 => 11,  19 => 11,  93 => 14,  88 => 31,  78 => 29,  46 => 9,  44 => 19,  27 => 4,  79 => 14,  72 => 20,  69 => 30,  47 => 20,  40 => 18,  37 => 17,  22 => 12,  246 => 70,  157 => 83,  145 => 63,  139 => 60,  131 => 25,  123 => 54,  120 => 21,  115 => 27,  111 => 45,  108 => 31,  101 => 44,  98 => 21,  96 => 43,  83 => 59,  74 => 56,  66 => 25,  55 => 22,  52 => 22,  50 => 17,  43 => 19,  41 => 18,  35 => 17,  32 => 16,  29 => 15,  209 => 82,  203 => 135,  199 => 67,  193 => 130,  189 => 20,  187 => 49,  182 => 54,  176 => 111,  173 => 70,  168 => 17,  164 => 67,  162 => 62,  154 => 53,  149 => 36,  147 => 33,  144 => 62,  141 => 61,  133 => 57,  130 => 67,  125 => 51,  122 => 22,  116 => 49,  112 => 49,  109 => 44,  106 => 46,  103 => 61,  99 => 23,  95 => 20,  92 => 26,  86 => 39,  82 => 27,  80 => 36,  73 => 19,  64 => 174,  60 => 14,  57 => 24,  54 => 16,  51 => 21,  48 => 21,  45 => 20,  42 => 18,  39 => 18,  36 => 17,  33 => 15,  30 => 15,);
    }
}
