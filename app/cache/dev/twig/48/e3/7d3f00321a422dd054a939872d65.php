<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_48e37d3f00321a422dd054a939872d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 19
        echo "    </div>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"row\">
        <div class=\"span5\">
            <table class=\"table\" id=\"revisions\">
                <thead>
                    <tr>
                        <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 36
            echo "                        <tr>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "timestamp")), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "username"), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "history_view_revision", 1 => $this->getContext($context, "object"), 2 => array("revision" => $this->getAttribute($this->getContext($context, "revision"), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </tbody>
            </table>
        </div>
        <div id=\"revision-detail\" class=\"span7 revision-detail\">

        </div>
    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 196,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 185,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 78,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 171,  482 => 166,  472 => 163,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 153,  431 => 152,  426 => 151,  415 => 147,  410 => 145,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  370 => 128,  361 => 127,  357 => 126,  353 => 125,  347 => 124,  343 => 122,  332 => 117,  329 => 116,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 109,  277 => 108,  273 => 106,  262 => 76,  259 => 75,  249 => 71,  223 => 64,  191 => 56,  185 => 55,  178 => 52,  174 => 51,  137 => 43,  323 => 82,  320 => 81,  315 => 79,  311 => 78,  306 => 77,  303 => 76,  296 => 74,  291 => 73,  289 => 72,  286 => 71,  280 => 69,  272 => 66,  263 => 63,  257 => 74,  251 => 59,  245 => 57,  242 => 56,  240 => 55,  237 => 54,  234 => 53,  226 => 65,  221 => 27,  146 => 46,  90 => 39,  12 => 33,  34 => 17,  20 => 11,  118 => 51,  100 => 42,  97 => 27,  65 => 30,  53 => 10,  161 => 54,  159 => 53,  150 => 49,  129 => 55,  58 => 12,  81 => 172,  76 => 69,  134 => 42,  127 => 54,  113 => 34,  102 => 28,  59 => 26,  269 => 65,  265 => 103,  260 => 62,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 61,  195 => 77,  188 => 73,  172 => 19,  152 => 58,  124 => 45,  104 => 30,  77 => 27,  63 => 16,  204 => 80,  201 => 71,  197 => 60,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 12,  480 => 162,  474 => 164,  469 => 162,  461 => 160,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 149,  413 => 146,  409 => 132,  407 => 131,  402 => 143,  398 => 129,  393 => 126,  387 => 122,  384 => 134,  381 => 120,  379 => 131,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 121,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 68,  268 => 104,  264 => 84,  258 => 81,  252 => 72,  247 => 78,  241 => 67,  235 => 74,  229 => 48,  224 => 71,  220 => 63,  214 => 69,  208 => 68,  169 => 50,  143 => 45,  140 => 44,  132 => 51,  128 => 40,  119 => 49,  107 => 43,  38 => 18,  71 => 30,  177 => 65,  165 => 16,  160 => 86,  135 => 47,  126 => 39,  114 => 46,  84 => 31,  70 => 32,  67 => 33,  61 => 14,  28 => 14,  26 => 14,  94 => 40,  89 => 38,  85 => 37,  75 => 35,  68 => 31,  56 => 28,  196 => 21,  183 => 70,  171 => 61,  166 => 71,  163 => 49,  158 => 81,  156 => 84,  151 => 48,  142 => 59,  138 => 57,  136 => 51,  121 => 52,  117 => 36,  105 => 26,  91 => 25,  62 => 27,  49 => 23,  24 => 13,  87 => 20,  31 => 16,  25 => 13,  21 => 11,  19 => 11,  93 => 36,  88 => 40,  78 => 21,  46 => 22,  44 => 13,  27 => 14,  79 => 36,  72 => 19,  69 => 29,  47 => 22,  40 => 24,  37 => 18,  22 => 11,  246 => 70,  157 => 56,  145 => 62,  139 => 61,  131 => 41,  123 => 41,  120 => 38,  115 => 50,  111 => 32,  108 => 31,  101 => 36,  98 => 27,  96 => 52,  83 => 15,  74 => 60,  66 => 28,  55 => 11,  52 => 24,  50 => 22,  43 => 20,  41 => 19,  35 => 17,  32 => 14,  29 => 15,  209 => 82,  203 => 62,  199 => 67,  193 => 73,  189 => 20,  187 => 12,  182 => 54,  176 => 6,  173 => 74,  168 => 17,  164 => 59,  162 => 62,  154 => 53,  149 => 47,  147 => 56,  144 => 47,  141 => 51,  133 => 57,  130 => 65,  125 => 51,  122 => 50,  116 => 59,  112 => 36,  109 => 32,  106 => 34,  103 => 33,  99 => 23,  95 => 19,  92 => 39,  86 => 38,  82 => 37,  80 => 14,  73 => 31,  64 => 30,  60 => 29,  57 => 14,  54 => 26,  51 => 29,  48 => 20,  45 => 21,  42 => 20,  39 => 18,  36 => 18,  33 => 16,  30 => 15,);
    }
}
