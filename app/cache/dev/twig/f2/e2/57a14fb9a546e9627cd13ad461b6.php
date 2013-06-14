<?php

/* EnsJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_f2e257a14fb9a546e9627cd13ad461b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "edit_form"), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "  ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 8
            echo "    <ul>
      ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "  <h1>Job edit</h1>
  <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_update", array("token" => $this->getAttribute($this->getContext($context, "entity"), "token"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">
    <table id=\"job_form\">
      <tfoot>
        <tr>
          <td colspan=\"2\">
            <input type=\"submit\" value=\"Preview your job\" />
          </td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'label');
        echo "</th>
          <td>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "type"), 'label');
        echo "</th>
          <td>
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "type"), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "type"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "company"), 'label');
        echo "</th>
          <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "company"), 'errors');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "company"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'label');
        echo "</th>
          <td>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "url"), 'label');
        echo "</th>
          <td>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "url"), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "url"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "position"), 'label');
        echo "</th>
          <td>
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "position"), 'errors');
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "position"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "location"), 'label');
        echo "</th>
          <td>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "location"), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "location"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'label');
        echo "</th>
          <td>
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'errors');
        echo "
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "description"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"), 'label');
        echo "</th>
          <td>
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"), 'errors');
        echo "
            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "how_to_apply"), 'widget');
        echo "
          </td>
        </tr>
        <tr>
          <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "is_public"), 'label');
        echo "</th>
          <td>
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "is_public"), 'errors');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "is_public"), 'widget');
        echo "
            <br /> Whether the job can also be published on affiliate websites or not.
          </td>
        </tr>
        <tr>
          <th>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'label');
        echo "</th>
          <td>
            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'errors');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'widget');
        echo "
          </td>
        </tr>
      </tbody>
    </table>
 
    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'rest');
        echo "
  </form>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 109,  265 => 108,  260 => 106,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  172 => 66,  152 => 58,  124 => 45,  104 => 37,  77 => 22,  63 => 17,  204 => 80,  201 => 71,  197 => 15,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 87,  214 => 69,  208 => 68,  169 => 60,  143 => 71,  140 => 52,  132 => 51,  128 => 64,  119 => 60,  107 => 36,  38 => 6,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 58,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  28 => 3,  26 => 6,  94 => 22,  89 => 50,  85 => 25,  75 => 23,  68 => 14,  56 => 12,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 63,  158 => 81,  156 => 59,  151 => 57,  142 => 59,  138 => 57,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 2,  87 => 20,  31 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 51,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 3,  79 => 18,  72 => 16,  69 => 25,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 73,  139 => 69,  131 => 49,  123 => 47,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 32,  98 => 31,  96 => 52,  83 => 24,  74 => 14,  66 => 18,  55 => 15,  52 => 22,  50 => 10,  43 => 9,  41 => 5,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 12,  182 => 66,  176 => 6,  173 => 74,  168 => 65,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 56,  144 => 53,  141 => 51,  133 => 66,  130 => 65,  125 => 63,  122 => 43,  116 => 59,  112 => 42,  109 => 55,  106 => 36,  103 => 37,  99 => 35,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 16,  39 => 14,  36 => 5,  33 => 9,  30 => 5,);
    }
}
