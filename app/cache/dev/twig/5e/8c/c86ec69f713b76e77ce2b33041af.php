<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_5e8cc86ec69f713b76e77ce2b33041af extends Twig_Template
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
        if ((($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  118 => 51,  100 => 45,  97 => 44,  65 => 30,  53 => 25,  161 => 54,  159 => 53,  150 => 49,  129 => 55,  58 => 19,  81 => 19,  76 => 34,  134 => 46,  127 => 54,  113 => 34,  102 => 28,  59 => 27,  269 => 109,  265 => 108,  260 => 106,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  172 => 66,  152 => 58,  124 => 45,  104 => 37,  77 => 22,  63 => 17,  204 => 80,  201 => 71,  197 => 15,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 87,  214 => 69,  208 => 68,  169 => 56,  143 => 45,  140 => 52,  132 => 51,  128 => 64,  119 => 60,  107 => 36,  38 => 6,  71 => 21,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 39,  114 => 58,  84 => 28,  70 => 32,  67 => 31,  61 => 14,  28 => 14,  26 => 5,  94 => 26,  89 => 28,  85 => 25,  75 => 23,  68 => 14,  56 => 26,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 63,  158 => 81,  156 => 59,  151 => 57,  142 => 59,  138 => 57,  136 => 51,  121 => 52,  117 => 44,  105 => 40,  91 => 25,  62 => 10,  49 => 24,  24 => 13,  87 => 20,  31 => 15,  25 => 12,  21 => 2,  19 => 11,  93 => 43,  88 => 40,  78 => 35,  46 => 7,  44 => 13,  27 => 13,  79 => 24,  72 => 16,  69 => 20,  47 => 14,  40 => 7,  37 => 7,  22 => 12,  246 => 32,  157 => 56,  145 => 62,  139 => 61,  131 => 49,  123 => 47,  120 => 38,  115 => 50,  111 => 48,  108 => 38,  101 => 36,  98 => 27,  96 => 52,  83 => 25,  74 => 22,  66 => 18,  55 => 15,  52 => 22,  50 => 9,  43 => 8,  41 => 19,  35 => 6,  32 => 12,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 12,  182 => 66,  176 => 6,  173 => 74,  168 => 65,  164 => 59,  162 => 62,  154 => 51,  149 => 51,  147 => 56,  144 => 53,  141 => 51,  133 => 57,  130 => 65,  125 => 63,  122 => 43,  116 => 59,  112 => 36,  109 => 32,  106 => 34,  103 => 33,  99 => 32,  95 => 33,  92 => 32,  86 => 39,  82 => 37,  80 => 23,  73 => 24,  64 => 15,  60 => 20,  57 => 13,  54 => 12,  51 => 15,  48 => 9,  45 => 9,  42 => 8,  39 => 7,  36 => 16,  33 => 4,  30 => 15,);
    }
}
