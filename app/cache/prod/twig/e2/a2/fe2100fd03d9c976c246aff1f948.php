<?php

/* EnsJobeetBundle:Job:list.html.twig */
class __TwigTemplate_e2a2fe2100fd03d9c976c246aff1f948 extends Twig_Template
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
        echo "
<table class=\"jobs\">
  ";
        // line 3
        if (isset($context["jobs"])) { $_jobs_ = $context["jobs"]; } else { $_jobs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_jobs_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 4
            echo "    <tr class=\"";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($_loop_, "index")), "html", null, true);
            echo "\">
      <td class=\"location\">";
            // line 5
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "location"), "html", null, true);
            echo "</td>
      <td class=\"position\">
        <a href=\"";
            // line 7
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($_entity_, "id"), "company" => $this->getAttribute($_entity_, "companyslug"), "location" => $this->getAttribute($_entity_, "locationslug"), "position" => $this->getAttribute($_entity_, "positionslug"))), "html", null, true);
            echo "\">
          ";
            // line 8
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "position"), "html", null, true);
            echo "
        </a>
      </td>
      <td class=\"company\">";
            // line 11
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "company"), "html", null, true);
            echo "</td>
    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  58 => 8,  53 => 7,  41 => 4,  19 => 1,  315 => 4,  312 => 3,  307 => 2,  296 => 1,  282 => 83,  271 => 81,  257 => 79,  248 => 74,  244 => 73,  240 => 72,  237 => 71,  233 => 68,  229 => 66,  225 => 65,  220 => 64,  215 => 61,  204 => 57,  201 => 56,  196 => 54,  193 => 53,  188 => 51,  183 => 49,  180 => 48,  177 => 47,  174 => 45,  171 => 44,  163 => 40,  146 => 37,  128 => 36,  112 => 28,  104 => 23,  98 => 22,  91 => 20,  87 => 17,  84 => 16,  81 => 15,  74 => 11,  72 => 10,  69 => 9,  65 => 11,  62 => 82,  60 => 81,  57 => 80,  55 => 79,  50 => 44,  47 => 5,  40 => 20,  35 => 15,  30 => 9,  27 => 8,  212 => 60,  209 => 59,  205 => 15,  202 => 14,  195 => 12,  192 => 11,  187 => 7,  184 => 6,  166 => 41,  161 => 79,  153 => 73,  151 => 71,  147 => 69,  140 => 66,  137 => 65,  134 => 64,  131 => 63,  124 => 34,  121 => 33,  118 => 31,  113 => 55,  97 => 52,  94 => 21,  66 => 30,  56 => 23,  52 => 78,  37 => 19,  33 => 9,  31 => 6,  23 => 3,  115 => 30,  100 => 24,  89 => 50,  86 => 19,  82 => 18,  79 => 17,  70 => 15,  63 => 10,  45 => 28,  42 => 27,  39 => 14,  32 => 14,  29 => 3,);
    }
}
