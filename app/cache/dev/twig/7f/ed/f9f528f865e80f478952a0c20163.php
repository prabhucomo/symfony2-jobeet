<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_7fedf9f528f865e80f478952a0c20163 extends Twig_Template
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
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  32 => 6,  30 => 5,  26 => 3,  19 => 1,  372 => 153,  367 => 152,  365 => 148,  359 => 145,  352 => 141,  349 => 140,  346 => 139,  343 => 138,  338 => 136,  334 => 134,  324 => 126,  316 => 124,  314 => 123,  311 => 122,  308 => 121,  301 => 117,  297 => 116,  293 => 114,  291 => 113,  288 => 112,  282 => 110,  280 => 109,  275 => 106,  268 => 104,  265 => 103,  263 => 102,  256 => 100,  253 => 99,  245 => 96,  238 => 95,  236 => 94,  230 => 90,  225 => 87,  214 => 85,  210 => 84,  205 => 82,  202 => 81,  200 => 80,  197 => 79,  194 => 78,  192 => 77,  189 => 76,  181 => 74,  179 => 73,  171 => 67,  162 => 61,  158 => 60,  150 => 54,  148 => 51,  142 => 48,  140 => 47,  135 => 45,  129 => 43,  126 => 42,  116 => 31,  108 => 29,  101 => 24,  98 => 23,  92 => 20,  87 => 19,  84 => 18,  78 => 155,  76 => 138,  71 => 136,  68 => 135,  54 => 36,  52 => 35,  49 => 34,  47 => 23,  42 => 12,  33 => 15,  27 => 12,  24 => 2,  137 => 62,  132 => 44,  128 => 57,  122 => 55,  120 => 32,  115 => 52,  112 => 30,  110 => 50,  106 => 48,  103 => 47,  97 => 45,  91 => 35,  88 => 42,  85 => 41,  79 => 29,  77 => 38,  73 => 137,  66 => 25,  60 => 38,  58 => 30,  55 => 29,  53 => 28,  44 => 22,  37 => 16,  31 => 14,  28 => 13,);
    }
}
