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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "session"), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 51
            echo "                <li>
                    <a href=\"";
            // line 52
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($_job_, "id"), "company" => $this->getAttribute($_job_, "companyslug"), "location" => $this->getAttribute($_job_, "locationslug"), "position" => $this->getAttribute($_job_, "positionslug"))), "html", null, true);
            echo "\">";
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_job_, "position"), "html", null, true);
            echo " - ";
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_job_, "company"), "html", null, true);
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 59
            echo "          <div class=\"flash_notice\">
            ";
            // line 60
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 63
        echo " 
        ";
        // line 64
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 65
            echo "          <div class=\"flash_error\">
            ";
            // line 66
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "error"), "method"), "html", null, true);
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
        return array (  212 => 72,  209 => 71,  205 => 15,  202 => 14,  195 => 12,  192 => 11,  187 => 7,  184 => 6,  166 => 81,  161 => 79,  153 => 73,  151 => 71,  147 => 69,  140 => 66,  137 => 65,  134 => 64,  131 => 63,  124 => 60,  121 => 59,  118 => 58,  113 => 55,  97 => 52,  94 => 51,  66 => 30,  56 => 23,  52 => 22,  37 => 11,  33 => 9,  31 => 6,  23 => 1,  115 => 26,  100 => 24,  89 => 50,  86 => 19,  82 => 18,  79 => 17,  70 => 15,  63 => 10,  45 => 9,  42 => 16,  39 => 14,  32 => 4,  29 => 3,);
    }
}
