<?php

/* SonataAdminBundle:CRUD:base_list_inner_row.html.twig */
class __TwigTemplate_4f3b4be675fb9907e0f0a6fd9a9040b9 extends Twig_Template
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
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            echo "    ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "name") == "_action") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
                // line 14
                echo "        ";
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        ";
                echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, "object"), $this->getContext($context, "field_description"));
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 16,  26 => 13,  22 => 12,  19 => 11,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  590 => 190,  587 => 189,  581 => 187,  576 => 185,  570 => 183,  559 => 179,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 160,  531 => 129,  525 => 128,  516 => 125,  506 => 123,  503 => 122,  498 => 121,  495 => 120,  485 => 110,  468 => 105,  460 => 103,  457 => 102,  453 => 101,  448 => 99,  445 => 98,  440 => 97,  437 => 96,  428 => 94,  421 => 88,  407 => 85,  401 => 49,  397 => 48,  393 => 47,  388 => 45,  383 => 43,  375 => 41,  367 => 39,  351 => 32,  342 => 29,  339 => 28,  336 => 27,  327 => 205,  322 => 202,  320 => 172,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  302 => 165,  296 => 161,  294 => 160,  289 => 157,  285 => 155,  276 => 152,  253 => 148,  248 => 145,  242 => 143,  234 => 141,  232 => 140,  229 => 139,  208 => 137,  205 => 136,  198 => 133,  193 => 130,  184 => 115,  179 => 112,  176 => 111,  173 => 95,  171 => 94,  166 => 91,  164 => 85,  157 => 83,  155 => 82,  133 => 68,  130 => 67,  127 => 66,  110 => 64,  106 => 62,  103 => 61,  83 => 59,  80 => 58,  72 => 55,  67 => 53,  61 => 39,  58 => 38,  56 => 27,  47 => 20,  45 => 19,  39 => 16,  37 => 15,  33 => 13,  31 => 15,  29 => 14,  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 124,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 111,  482 => 109,  474 => 106,  472 => 163,  469 => 162,  461 => 160,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 95,  431 => 152,  426 => 151,  423 => 149,  415 => 87,  413 => 146,  410 => 86,  402 => 143,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  384 => 134,  379 => 42,  370 => 40,  361 => 36,  357 => 35,  353 => 125,  347 => 31,  343 => 122,  341 => 121,  332 => 117,  329 => 212,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 153,  277 => 108,  273 => 151,  268 => 104,  265 => 103,  262 => 76,  259 => 150,  257 => 74,  252 => 72,  249 => 71,  246 => 70,  241 => 67,  226 => 138,  223 => 64,  220 => 63,  203 => 135,  200 => 134,  197 => 60,  191 => 120,  185 => 55,  182 => 54,  178 => 52,  174 => 51,  169 => 50,  163 => 49,  151 => 48,  149 => 47,  146 => 46,  143 => 72,  140 => 44,  137 => 70,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  122 => 38,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 176,  86 => 60,  81 => 172,  79 => 70,  76 => 69,  74 => 56,  71 => 59,  69 => 27,  63 => 51,  60 => 24,  57 => 23,  54 => 22,  48 => 20,  43 => 18,  41 => 17,  38 => 15,  35 => 14,);
    }
}
