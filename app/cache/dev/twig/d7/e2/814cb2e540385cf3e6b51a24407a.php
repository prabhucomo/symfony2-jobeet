<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_d7e2814cb2e540385cf3e6b51a24407a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"control-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "var"), "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute($this->getContext($context, "field_description"), "help")) {
            // line 26
            echo "            <span class=\"help-inline\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getContext($context, "field_description"), "help");
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 13,  20 => 11,  118 => 51,  100 => 45,  97 => 44,  65 => 30,  53 => 25,  161 => 54,  159 => 53,  150 => 49,  129 => 55,  58 => 19,  81 => 19,  76 => 34,  134 => 46,  127 => 54,  113 => 34,  102 => 28,  59 => 27,  269 => 109,  265 => 108,  260 => 106,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  172 => 66,  152 => 58,  124 => 45,  104 => 37,  77 => 13,  63 => 28,  204 => 80,  201 => 71,  197 => 15,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 87,  214 => 69,  208 => 68,  169 => 56,  143 => 45,  140 => 52,  132 => 51,  128 => 64,  119 => 60,  107 => 36,  38 => 18,  71 => 21,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 39,  114 => 58,  84 => 28,  70 => 32,  67 => 30,  61 => 14,  28 => 14,  26 => 12,  94 => 26,  89 => 17,  85 => 25,  75 => 23,  68 => 30,  56 => 26,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 63,  158 => 81,  156 => 59,  151 => 57,  142 => 59,  138 => 57,  136 => 51,  121 => 52,  117 => 44,  105 => 26,  91 => 25,  62 => 10,  49 => 24,  24 => 12,  87 => 20,  31 => 15,  25 => 12,  21 => 11,  19 => 11,  93 => 43,  88 => 40,  78 => 35,  46 => 7,  44 => 13,  27 => 14,  79 => 24,  72 => 16,  69 => 31,  47 => 14,  40 => 13,  37 => 7,  22 => 12,  246 => 32,  157 => 56,  145 => 62,  139 => 61,  131 => 49,  123 => 47,  120 => 38,  115 => 50,  111 => 30,  108 => 38,  101 => 36,  98 => 27,  96 => 52,  83 => 15,  74 => 22,  66 => 18,  55 => 25,  52 => 24,  50 => 23,  43 => 21,  41 => 19,  35 => 6,  32 => 12,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 12,  182 => 66,  176 => 6,  173 => 74,  168 => 65,  164 => 59,  162 => 62,  154 => 51,  149 => 51,  147 => 56,  144 => 53,  141 => 51,  133 => 57,  130 => 65,  125 => 63,  122 => 43,  116 => 59,  112 => 36,  109 => 32,  106 => 34,  103 => 33,  99 => 23,  95 => 19,  92 => 32,  86 => 39,  82 => 37,  80 => 14,  73 => 24,  64 => 15,  60 => 20,  57 => 26,  54 => 26,  51 => 15,  48 => 9,  45 => 9,  42 => 8,  39 => 21,  36 => 20,  33 => 16,  30 => 15,);
    }
}
