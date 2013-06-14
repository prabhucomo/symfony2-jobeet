<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_8132edf6ce55d2fb25457583861e5fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('knp_menu')->render("EnsJobeetBundle:Builder:mainMenu");
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
          <h1><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_homepage"), "html", null, true);
        echo "\">
  <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
</a></h1>
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_new"), "html", null, true);
        echo "\">Post a Job</a>
              </div>
            </div>
 
            <div class=\"search\">
              <h2>Ask for a job</h2>
              <form action=\"\" method=\"get\">
                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                <input type=\"submit\" value=\"search\" />
                <div class=\"help\">
                  Enter some keywords (city, country, position, ...)
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id=\"job_history\">
        Recent viewed jobs:
        <ul>
            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 51
            echo "                <li>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($this->getContext($context, "job"), "id"), "company" => $this->getAttribute($this->getContext($context, "job"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "job"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "job"), "positionslug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "job"), "position"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "job"), "company"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </ul>
    </div>
      <div id=\"content\">
        ";
        // line 58
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 59
            echo "          <div class=\"flash_notice\">
            ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 63
        echo " 
        ";
        // line 64
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 65
            echo "          <div class=\"flash_error\">
            ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 69
        echo " 
        <div class=\"content\">
            ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li class=\"feed\"><a href=\"\">Full feed</a></li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\"><a href=\"\">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "        Jobeet - Your best job board
      ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    ";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
        echo "            ";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 72,  201 => 71,  197 => 15,  194 => 14,  184 => 11,  179 => 7,  153 => 79,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 71,  140 => 55,  132 => 51,  128 => 64,  119 => 60,  107 => 36,  38 => 6,  71 => 17,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 58,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  28 => 3,  26 => 6,  94 => 22,  89 => 50,  85 => 25,  75 => 23,  68 => 14,  56 => 23,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 81,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 2,  87 => 20,  31 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 51,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 11,  22 => 2,  246 => 32,  157 => 56,  145 => 73,  139 => 69,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 52,  83 => 25,  74 => 14,  66 => 30,  55 => 15,  52 => 22,  50 => 10,  43 => 6,  41 => 5,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 12,  182 => 66,  176 => 6,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 66,  130 => 65,  125 => 63,  122 => 43,  116 => 59,  112 => 42,  109 => 55,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 16,  39 => 14,  36 => 5,  33 => 9,  30 => 5,);
    }
}
