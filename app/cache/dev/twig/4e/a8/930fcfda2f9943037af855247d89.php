<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_4ea8930fcfda2f9943037af855247d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ($this->getContext($context, "enable")) {
            // line 5
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = '";
            // line 6
            echo twig_escape_filter($this->env, $this->getContext($context, "base_path"), "html", null, true);
            echo "';
        </script>

        <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "js_path"), "html", null, true);
            echo "\"></script>

        <script type=\"text/javascript\">
            if (CKEDITOR.instances['";
            // line 12
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "']) {
                delete CKEDITOR.instances['";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "'];
            }

            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "plugins"));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 17
                echo "                CKEDITOR.plugins.addExternal('";
                echo twig_escape_filter($this->env, $this->getContext($context, "plugin_name"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "path"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "filename"), "html", null, true);
                echo "');
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
            CKEDITOR.replace('";
            // line 20
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "', ";
            echo $this->getContext($context, "config");
            echo ");
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  55 => 13,  51 => 12,  335 => 94,  331 => 92,  326 => 90,  312 => 89,  306 => 87,  303 => 86,  286 => 85,  283 => 84,  271 => 79,  255 => 69,  250 => 67,  245 => 66,  243 => 65,  240 => 64,  218 => 57,  211 => 53,  206 => 51,  190 => 50,  187 => 49,  181 => 47,  175 => 45,  172 => 44,  167 => 42,  152 => 35,  147 => 33,  144 => 32,  120 => 21,  115 => 20,  112 => 19,  109 => 18,  101 => 15,  93 => 14,  77 => 8,  73 => 7,  68 => 6,  65 => 17,  53 => 77,  50 => 75,  42 => 61,  40 => 41,  32 => 32,  27 => 3,  24 => 2,  28 => 3,  64 => 31,  62 => 30,  59 => 29,  36 => 5,  52 => 25,  23 => 12,  20 => 1,  34 => 4,  26 => 2,  22 => 12,  19 => 11,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  590 => 190,  587 => 189,  581 => 187,  576 => 185,  570 => 183,  559 => 179,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 160,  531 => 129,  525 => 128,  516 => 125,  506 => 123,  503 => 122,  498 => 121,  495 => 120,  485 => 110,  468 => 105,  460 => 103,  457 => 102,  453 => 101,  448 => 99,  445 => 98,  440 => 97,  437 => 96,  428 => 94,  421 => 88,  407 => 85,  401 => 49,  397 => 48,  393 => 47,  388 => 45,  383 => 43,  375 => 41,  367 => 39,  351 => 32,  342 => 29,  339 => 28,  336 => 27,  327 => 205,  322 => 202,  320 => 172,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  302 => 165,  296 => 161,  294 => 160,  289 => 157,  285 => 155,  276 => 81,  253 => 148,  248 => 145,  242 => 143,  234 => 141,  232 => 140,  229 => 139,  208 => 137,  205 => 136,  198 => 133,  193 => 130,  184 => 48,  179 => 112,  176 => 111,  173 => 95,  171 => 94,  166 => 91,  164 => 41,  157 => 83,  155 => 82,  133 => 68,  130 => 67,  127 => 66,  110 => 64,  106 => 62,  103 => 16,  83 => 59,  80 => 9,  72 => 55,  67 => 33,  61 => 16,  58 => 38,  56 => 78,  47 => 23,  45 => 9,  39 => 6,  37 => 40,  33 => 17,  31 => 4,  29 => 31,  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 124,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 111,  482 => 109,  474 => 106,  472 => 163,  469 => 162,  461 => 160,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 95,  431 => 152,  426 => 151,  423 => 149,  415 => 87,  413 => 146,  410 => 86,  402 => 143,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  384 => 134,  379 => 42,  370 => 40,  361 => 36,  357 => 35,  353 => 125,  347 => 31,  343 => 122,  341 => 121,  332 => 117,  329 => 91,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 82,  277 => 108,  273 => 80,  268 => 78,  265 => 103,  262 => 76,  259 => 70,  257 => 74,  252 => 72,  249 => 71,  246 => 70,  241 => 67,  226 => 138,  223 => 64,  220 => 63,  203 => 135,  200 => 134,  197 => 60,  191 => 120,  185 => 55,  182 => 54,  178 => 46,  174 => 51,  169 => 43,  163 => 49,  151 => 48,  149 => 34,  146 => 46,  143 => 72,  140 => 44,  137 => 70,  134 => 26,  131 => 25,  128 => 24,  125 => 39,  122 => 22,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 12,  86 => 60,  81 => 20,  79 => 70,  76 => 69,  74 => 56,  71 => 59,  69 => 34,  63 => 4,  60 => 3,  57 => 23,  54 => 26,  48 => 64,  43 => 5,  41 => 20,  38 => 15,  35 => 20,);
    }
}
