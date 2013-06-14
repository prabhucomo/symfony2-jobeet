<?php

/* EnsJobeetBundle:Category:show.html.twig */
class __TwigTemplate_36ae9e2d65b1bae00851f4e4e4c1a99f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo " category
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"category\">
    <div class=\"feed\">
      <a href=\"\">Feed</a>
    </div>
    <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo "</h1>
  </div>
 
  ";
        // line 20
        $this->env->loadTemplate("EnsJobeetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => $this->getAttribute($this->getContext($context, "category"), "activejobs"))));
        // line 21
        echo " 
  ";
        // line 22
        if (($this->getContext($context, "last_page") > 1)) {
            // line 23
            echo "    <div class=\"pagination\">
      <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => 1)), "html", null, true);
            echo "\">
        <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
      </a>
 
      <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
      </a>
 
      ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "        ";
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    // line 34
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 36
                    echo "          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 38
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo " 
      <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
      </a>
 
      <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
      </a>
    </div>
  ";
        }
        // line 49
        echo " 
  <div class=\"pagination_desc\">
    <strong>";
        // line 51
        echo twig_escape_filter($this->env, $this->getContext($context, "total_jobs"), "html", null, true);
        echo "</strong> jobs in this category
 
    ";
        // line 53
        if (($this->getContext($context, "last_page") > 1)) {
            // line 54
            echo "      - page <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "current_page"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "last_page"), "html", null, true);
            echo "</strong>
    ";
        }
        // line 56
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  159 => 53,  150 => 49,  129 => 40,  58 => 19,  81 => 19,  76 => 23,  134 => 46,  127 => 42,  113 => 34,  102 => 28,  59 => 13,  269 => 109,  265 => 108,  260 => 106,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  172 => 66,  152 => 58,  124 => 45,  104 => 37,  77 => 22,  63 => 17,  204 => 80,  201 => 71,  197 => 15,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 87,  214 => 69,  208 => 68,  169 => 56,  143 => 45,  140 => 52,  132 => 51,  128 => 64,  119 => 60,  107 => 36,  38 => 6,  71 => 21,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 39,  114 => 58,  84 => 28,  70 => 17,  67 => 21,  61 => 14,  28 => 3,  26 => 5,  94 => 26,  89 => 28,  85 => 25,  75 => 23,  68 => 14,  56 => 12,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 63,  158 => 81,  156 => 59,  151 => 57,  142 => 59,  138 => 57,  136 => 51,  121 => 39,  117 => 44,  105 => 40,  91 => 25,  62 => 10,  49 => 19,  24 => 4,  87 => 20,  31 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 29,  88 => 30,  78 => 18,  46 => 7,  44 => 13,  27 => 3,  79 => 24,  72 => 16,  69 => 20,  47 => 14,  40 => 7,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 73,  139 => 44,  131 => 49,  123 => 47,  120 => 38,  115 => 42,  111 => 37,  108 => 38,  101 => 36,  98 => 27,  96 => 52,  83 => 25,  74 => 22,  66 => 18,  55 => 15,  52 => 22,  50 => 9,  43 => 8,  41 => 5,  35 => 6,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 12,  182 => 66,  176 => 6,  173 => 74,  168 => 65,  164 => 59,  162 => 62,  154 => 51,  149 => 51,  147 => 56,  144 => 53,  141 => 51,  133 => 41,  130 => 65,  125 => 63,  122 => 43,  116 => 59,  112 => 36,  109 => 32,  106 => 34,  103 => 33,  99 => 32,  95 => 33,  92 => 32,  86 => 28,  82 => 27,  80 => 23,  73 => 24,  64 => 15,  60 => 20,  57 => 13,  54 => 12,  51 => 15,  48 => 9,  45 => 9,  42 => 8,  39 => 7,  36 => 8,  33 => 4,  30 => 3,);
    }
}
