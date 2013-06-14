<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_f318556f66a84aa52759e9102f7a5360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (($this->getContext($context, "inline") == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 78,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 171,  482 => 166,  472 => 163,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 153,  431 => 152,  426 => 151,  415 => 147,  410 => 145,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  370 => 128,  361 => 127,  357 => 126,  353 => 125,  347 => 124,  343 => 122,  332 => 117,  329 => 116,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 109,  277 => 108,  273 => 106,  262 => 76,  259 => 75,  249 => 71,  223 => 64,  191 => 56,  185 => 55,  178 => 52,  174 => 51,  137 => 43,  323 => 82,  320 => 81,  315 => 79,  311 => 78,  306 => 77,  303 => 76,  296 => 74,  291 => 73,  289 => 72,  286 => 71,  280 => 69,  272 => 66,  263 => 63,  257 => 74,  251 => 59,  245 => 57,  242 => 56,  240 => 55,  237 => 54,  234 => 53,  226 => 65,  221 => 27,  146 => 46,  90 => 32,  12 => 33,  34 => 15,  20 => 11,  118 => 51,  100 => 42,  97 => 27,  65 => 30,  53 => 10,  161 => 54,  159 => 53,  150 => 49,  129 => 55,  58 => 12,  81 => 172,  76 => 69,  134 => 42,  127 => 54,  113 => 34,  102 => 28,  59 => 29,  269 => 65,  265 => 103,  260 => 62,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 61,  195 => 77,  188 => 73,  172 => 19,  152 => 58,  124 => 45,  104 => 30,  77 => 27,  63 => 16,  204 => 80,  201 => 71,  197 => 60,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 1,  480 => 162,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 149,  413 => 146,  409 => 132,  407 => 131,  402 => 143,  398 => 129,  393 => 126,  387 => 122,  384 => 134,  381 => 120,  379 => 131,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 121,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 68,  268 => 104,  264 => 84,  258 => 81,  252 => 72,  247 => 78,  241 => 67,  235 => 74,  229 => 48,  224 => 71,  220 => 63,  214 => 69,  208 => 68,  169 => 50,  143 => 45,  140 => 44,  132 => 51,  128 => 40,  119 => 37,  107 => 44,  38 => 14,  71 => 30,  177 => 65,  165 => 16,  160 => 86,  135 => 47,  126 => 39,  114 => 46,  84 => 31,  70 => 32,  67 => 33,  61 => 14,  28 => 14,  26 => 14,  94 => 40,  89 => 38,  85 => 37,  75 => 32,  68 => 30,  56 => 25,  196 => 21,  183 => 70,  171 => 61,  166 => 71,  163 => 49,  158 => 81,  156 => 84,  151 => 48,  142 => 59,  138 => 57,  136 => 51,  121 => 52,  117 => 36,  105 => 26,  91 => 25,  62 => 30,  49 => 28,  24 => 13,  87 => 20,  31 => 16,  25 => 12,  21 => 11,  19 => 11,  93 => 36,  88 => 40,  78 => 21,  46 => 19,  44 => 13,  27 => 14,  79 => 70,  72 => 19,  69 => 34,  47 => 23,  40 => 24,  37 => 16,  22 => 11,  246 => 70,  157 => 56,  145 => 62,  139 => 61,  131 => 41,  123 => 41,  120 => 38,  115 => 50,  111 => 32,  108 => 31,  101 => 36,  98 => 27,  96 => 52,  83 => 15,  74 => 60,  66 => 17,  55 => 11,  52 => 25,  50 => 23,  43 => 25,  41 => 20,  35 => 14,  32 => 16,  29 => 15,  209 => 82,  203 => 62,  199 => 67,  193 => 73,  189 => 20,  187 => 12,  182 => 54,  176 => 6,  173 => 74,  168 => 17,  164 => 59,  162 => 62,  154 => 53,  149 => 47,  147 => 56,  144 => 47,  141 => 51,  133 => 57,  130 => 65,  125 => 39,  122 => 38,  116 => 59,  112 => 36,  109 => 32,  106 => 34,  103 => 33,  99 => 23,  95 => 19,  92 => 28,  86 => 25,  82 => 23,  80 => 14,  73 => 31,  64 => 31,  60 => 15,  57 => 14,  54 => 26,  51 => 29,  48 => 20,  45 => 26,  42 => 19,  39 => 18,  36 => 18,  33 => 17,  30 => 15,);
    }
}
