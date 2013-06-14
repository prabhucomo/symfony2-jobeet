<?php

/* EnsJobeetBundle:Job:show.html.twig */
class __TwigTemplate_c1423d23508852b9ff11e51923f4ae2a extends Twig_Template
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
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "token"), "method")) {
            // line 14
            echo "    ";
            $this->env->loadTemplate("EnsJobeetBundle:Job:admin.html.twig")->display(array_merge($context, array("job" => $this->getContext($context, "entity"))));
            // line 15
            echo "  ";
        }
        // line 16
        echo "    <div id=\"job\">
      <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
        echo "</h1>
      <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
        echo "</h2>
      <h3>
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
        echo "
        <small> - ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
        echo "</small>
      </h3>
 
      ";
        // line 24
        if ($this->getAttribute($this->getContext($context, "entity"), "logo")) {
            // line 25
            echo "        <div class=\"logo\">
          <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
            echo "\">
            <img src=\"/uploads/jobs/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "logo"), "html", null, true);
            echo "\"
              alt=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
            echo " logo\" />
          </a>
        </div>
      ";
        }
        // line 32
        echo " 
      <div class=\"description\">
        ";
        // line 34
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true));
        echo "
      </div>
 
      <h4>How to apply?</h4>
 
      <p class=\"how_to_apply\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "howtoapply"), "html", null, true);
        echo "</p>
 
      <div class=\"meta\">
        <small>posted on ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "m/d/Y"), "html", null, true);
        echo "</small>
      </div>
 
      <div style=\"padding: 20px 0\">
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute($this->getContext($context, "entity"), "token"))), "html", null, true);
        echo "\">
          Edit
        </a>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  127 => 42,  113 => 34,  102 => 28,  59 => 13,  269 => 109,  265 => 108,  260 => 106,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  172 => 66,  152 => 58,  124 => 45,  104 => 37,  77 => 14,  63 => 17,  204 => 80,  201 => 71,  197 => 15,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 87,  214 => 69,  208 => 68,  169 => 60,  143 => 71,  140 => 52,  132 => 51,  128 => 64,  119 => 60,  107 => 36,  38 => 6,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 58,  84 => 28,  70 => 17,  67 => 16,  61 => 14,  28 => 3,  26 => 6,  94 => 26,  89 => 24,  85 => 25,  75 => 23,  68 => 14,  56 => 12,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 63,  158 => 81,  156 => 59,  151 => 57,  142 => 59,  138 => 57,  136 => 51,  121 => 39,  117 => 44,  105 => 40,  91 => 25,  62 => 23,  49 => 19,  24 => 2,  87 => 20,  31 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 51,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 3,  79 => 20,  72 => 16,  69 => 25,  47 => 10,  40 => 4,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 73,  139 => 69,  131 => 49,  123 => 47,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 32,  98 => 27,  96 => 52,  83 => 21,  74 => 18,  66 => 18,  55 => 15,  52 => 22,  50 => 9,  43 => 9,  41 => 5,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 12,  182 => 66,  176 => 6,  173 => 74,  168 => 65,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 56,  144 => 53,  141 => 51,  133 => 66,  130 => 65,  125 => 63,  122 => 43,  116 => 59,  112 => 42,  109 => 32,  106 => 36,  103 => 37,  99 => 35,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 15,  60 => 11,  57 => 11,  54 => 8,  51 => 14,  48 => 8,  45 => 8,  42 => 7,  39 => 14,  36 => 5,  33 => 4,  30 => 3,);
    }
}
