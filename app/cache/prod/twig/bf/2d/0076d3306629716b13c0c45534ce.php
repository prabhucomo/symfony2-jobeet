<?php

/* EnsJobeetBundle:Job:index.html.twig */
class __TwigTemplate_bf2d0076d3306629716b13c0c45534ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "     <div id=\"jobs\">
    ";
        // line 9
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "      <div>
        <div class=\"category\">
          <div class=\"feed\">
            <a href=\"\">Feed</a>
          </div>
          <h1><a href=\"";
            // line 15
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"))), "html", null, true);
            echo "\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "</a></h1>
        </div>
        ";
            // line 17
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            $this->env->loadTemplate("EnsJobeetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => $this->getAttribute($_category_, "activejobs"))));
            // line 18
            echo "        ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if ($this->getAttribute($_category_, "morejobs")) {
                // line 19
                echo "            <div class=\"more_jobs\">
              and <a href=\"";
                // line 20
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute($_category_, "slug"))), "html", null, true);
                echo "\">";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "morejobs"), "html", null, true);
                echo "</a>
              more...
            </div>
          ";
            }
            // line 24
            echo "      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  100 => 24,  89 => 20,  86 => 19,  82 => 18,  79 => 17,  70 => 15,  63 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
