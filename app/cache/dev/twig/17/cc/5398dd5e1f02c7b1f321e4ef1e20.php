<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_17cc5398dd5e1f02c7b1f321e4ef1e20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "filter_form"), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "filter", true), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "filter"), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br />
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 78,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 171,  482 => 166,  472 => 163,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 153,  431 => 152,  426 => 151,  415 => 147,  410 => 145,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  370 => 128,  361 => 127,  357 => 126,  353 => 125,  347 => 124,  343 => 122,  332 => 117,  329 => 116,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 109,  277 => 108,  273 => 106,  262 => 76,  259 => 75,  249 => 71,  223 => 64,  191 => 56,  185 => 55,  178 => 52,  174 => 51,  137 => 43,  323 => 82,  320 => 81,  315 => 79,  311 => 78,  306 => 77,  303 => 76,  296 => 74,  291 => 73,  289 => 72,  286 => 71,  280 => 69,  272 => 66,  263 => 63,  257 => 74,  251 => 59,  245 => 57,  242 => 56,  240 => 55,  237 => 54,  234 => 53,  226 => 65,  221 => 27,  146 => 46,  90 => 39,  12 => 33,  34 => 18,  20 => 11,  118 => 51,  100 => 42,  97 => 43,  65 => 30,  53 => 24,  161 => 54,  159 => 53,  150 => 49,  129 => 55,  58 => 12,  81 => 37,  76 => 69,  134 => 42,  127 => 54,  113 => 34,  102 => 28,  59 => 26,  269 => 65,  265 => 103,  260 => 62,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 61,  195 => 77,  188 => 73,  172 => 19,  152 => 58,  124 => 45,  104 => 30,  77 => 27,  63 => 20,  204 => 80,  201 => 71,  197 => 60,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 12,  480 => 162,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 149,  413 => 146,  409 => 132,  407 => 131,  402 => 143,  398 => 129,  393 => 126,  387 => 122,  384 => 134,  381 => 120,  379 => 131,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 121,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 68,  268 => 104,  264 => 84,  258 => 81,  252 => 72,  247 => 78,  241 => 67,  235 => 74,  229 => 48,  224 => 71,  220 => 63,  214 => 69,  208 => 68,  169 => 50,  143 => 45,  140 => 44,  132 => 51,  128 => 40,  119 => 49,  107 => 43,  38 => 18,  71 => 30,  177 => 65,  165 => 16,  160 => 86,  135 => 47,  126 => 39,  114 => 46,  84 => 36,  70 => 32,  67 => 33,  61 => 27,  28 => 22,  26 => 14,  94 => 40,  89 => 38,  85 => 37,  75 => 21,  68 => 24,  56 => 25,  196 => 21,  183 => 70,  171 => 61,  166 => 71,  163 => 49,  158 => 81,  156 => 84,  151 => 48,  142 => 59,  138 => 57,  136 => 51,  121 => 52,  117 => 36,  105 => 26,  91 => 25,  62 => 28,  49 => 23,  24 => 13,  87 => 39,  31 => 23,  25 => 13,  21 => 11,  19 => 11,  93 => 36,  88 => 40,  78 => 21,  46 => 22,  44 => 21,  27 => 14,  79 => 36,  72 => 31,  69 => 19,  47 => 25,  40 => 24,  37 => 24,  22 => 11,  246 => 70,  157 => 56,  145 => 62,  139 => 61,  131 => 41,  123 => 41,  120 => 38,  115 => 50,  111 => 32,  108 => 31,  101 => 44,  98 => 27,  96 => 42,  83 => 15,  74 => 34,  66 => 28,  55 => 24,  52 => 23,  50 => 23,  43 => 26,  41 => 25,  35 => 20,  32 => 14,  29 => 15,  209 => 82,  203 => 62,  199 => 67,  193 => 73,  189 => 20,  187 => 12,  182 => 54,  176 => 6,  173 => 74,  168 => 17,  164 => 59,  162 => 62,  154 => 53,  149 => 47,  147 => 56,  144 => 47,  141 => 51,  133 => 57,  130 => 65,  125 => 51,  122 => 50,  116 => 49,  112 => 36,  109 => 47,  106 => 34,  103 => 45,  99 => 23,  95 => 19,  92 => 41,  86 => 38,  82 => 37,  80 => 25,  73 => 31,  64 => 30,  60 => 16,  57 => 18,  54 => 26,  51 => 16,  48 => 15,  45 => 14,  42 => 20,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}