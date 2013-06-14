<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_38f2a89b62f6d5005cf6a8dfdc0a38f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name")))), 1 => $this->getContext($context, "object")), "method")) && $this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name"), 1 => $this->getContext($context, "object"), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  23 => 12,  20 => 11,  34 => 16,  26 => 14,  22 => 12,  19 => 11,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  590 => 190,  587 => 189,  581 => 187,  576 => 185,  570 => 183,  559 => 179,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 160,  531 => 129,  525 => 128,  516 => 125,  506 => 123,  503 => 122,  498 => 121,  495 => 120,  485 => 110,  468 => 105,  460 => 103,  457 => 102,  453 => 101,  448 => 99,  445 => 98,  440 => 97,  437 => 96,  428 => 94,  421 => 88,  407 => 85,  401 => 49,  397 => 48,  393 => 47,  388 => 45,  383 => 43,  375 => 41,  367 => 39,  351 => 32,  342 => 29,  339 => 28,  336 => 27,  327 => 205,  322 => 202,  320 => 172,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  302 => 165,  296 => 161,  294 => 160,  289 => 157,  285 => 155,  276 => 152,  253 => 148,  248 => 145,  242 => 143,  234 => 141,  232 => 140,  229 => 139,  208 => 137,  205 => 136,  198 => 133,  193 => 130,  184 => 115,  179 => 112,  176 => 111,  173 => 95,  171 => 94,  166 => 91,  164 => 85,  157 => 83,  155 => 82,  133 => 68,  130 => 67,  127 => 66,  110 => 64,  106 => 62,  103 => 61,  83 => 59,  80 => 58,  72 => 55,  67 => 53,  61 => 39,  58 => 38,  56 => 27,  47 => 25,  45 => 19,  39 => 16,  37 => 21,  33 => 13,  31 => 19,  29 => 13,  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 124,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 111,  482 => 109,  474 => 106,  472 => 163,  469 => 162,  461 => 160,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 95,  431 => 152,  426 => 151,  423 => 149,  415 => 87,  413 => 146,  410 => 86,  402 => 143,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  384 => 134,  379 => 42,  370 => 40,  361 => 36,  357 => 35,  353 => 125,  347 => 31,  343 => 122,  341 => 121,  332 => 117,  329 => 212,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 153,  277 => 108,  273 => 151,  268 => 104,  265 => 103,  262 => 76,  259 => 150,  257 => 74,  252 => 72,  249 => 71,  246 => 70,  241 => 67,  226 => 138,  223 => 64,  220 => 63,  203 => 135,  200 => 134,  197 => 60,  191 => 120,  185 => 55,  182 => 54,  178 => 52,  174 => 51,  169 => 50,  163 => 49,  151 => 48,  149 => 47,  146 => 46,  143 => 72,  140 => 44,  137 => 70,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  122 => 38,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 176,  86 => 60,  81 => 172,  79 => 70,  76 => 69,  74 => 56,  71 => 59,  69 => 27,  63 => 51,  60 => 24,  57 => 23,  54 => 22,  48 => 20,  43 => 18,  41 => 23,  38 => 15,  35 => 20,);
    }
}
