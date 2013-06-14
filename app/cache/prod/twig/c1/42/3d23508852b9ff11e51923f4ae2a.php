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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "company"), "html", null, true);
        echo " is looking for a ";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "position"), "html", null, true);
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "token"), "method")) {
            // line 14
            echo "    ";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            $this->env->loadTemplate("EnsJobeetBundle:Job:admin.html.twig")->display(array_merge($context, array("job" => $_entity_)));
            // line 15
            echo "  ";
        }
        // line 16
        echo "    <div id=\"job\">
      <h1>";
        // line 17
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "company"), "html", null, true);
        echo "</h1>
      <h2>";
        // line 18
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "location"), "html", null, true);
        echo "</h2>
      <h3>
        ";
        // line 20
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "position"), "html", null, true);
        echo "
        <small> - ";
        // line 21
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "type"), "html", null, true);
        echo "</small>
      </h3>
 
      ";
        // line 24
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "logo")) {
            // line 25
            echo "        <div class=\"logo\">
          <a href=\"";
            // line 26
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "url"), "html", null, true);
            echo "\">
            <img src=\"/uploads/jobs/";
            // line 27
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "logo"), "html", null, true);
            echo "\"
              alt=\"";
            // line 28
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "company"), "html", null, true);
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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($_entity_, "description"), "html", null, true));
        echo "
      </div>
 
      <h4>How to apply?</h4>
 
      <p class=\"how_to_apply\">";
        // line 39
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "howtoapply"), "html", null, true);
        echo "</p>
 
      <div class=\"meta\">
        <small>posted on ";
        // line 42
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "createdat"), "m/d/Y"), "html", null, true);
        echo "</small>
      </div>
 
      <div style=\"padding: 20px 0\">
        <a href=\"";
        // line 46
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute($_entity_, "token"))), "html", null, true);
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
        return array (  149 => 46,  141 => 42,  134 => 39,  125 => 34,  121 => 32,  113 => 28,  108 => 27,  103 => 26,  100 => 25,  97 => 24,  90 => 21,  85 => 20,  79 => 18,  74 => 17,  71 => 16,  68 => 15,  64 => 14,  61 => 13,  58 => 12,  52 => 9,  47 => 8,  44 => 7,  33 => 4,  30 => 3,);
    }
}
