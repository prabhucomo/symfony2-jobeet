<?php

/* EnsJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_92ff7c016ae6a233c47075e882fe0055 extends Twig_Template
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
        echo "<div id=\"job_actions\">
  <h3>Admin</h3>
  <ul>
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "job"), "isActivated"))) {
            // line 5
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
            echo "\">Edit</a></li>
      <li>
        <form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
            echo "\" method=\"post\">
          ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "publish_form"), 'widget');
            echo "
          <button type=\"submit\">Publish</button>
        </form>
      </li>
    ";
        }
        // line 13
        echo "    <li>
      <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
        <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
      </form>
    </li>
    ";
        // line 19
        if ($this->getAttribute($this->getContext($context, "job"), "isActivated")) {
            // line 20
            echo "      <li ";
            if ($this->getAttribute($this->getContext($context, "job"), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
        ";
            // line 21
            if ($this->getAttribute($this->getContext($context, "job"), "isExpired")) {
                // line 22
                echo "          Expired
        ";
            } else {
                // line 24
                echo "          Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "job"), "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
        ";
            }
            // line 26
            echo " 
        ";
            // line 27
            if ($this->getAttribute($this->getContext($context, "job"), "expiresSoon")) {
                // line 28
                echo "          - <a href=\"\">Extend</a> for another 30 days
        ";
            }
            // line 30
            echo "      </li>
    ";
        } else {
            // line 32
            echo "      <li>
        [Bookmark this <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_preview", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"), "company" => $this->getAttribute($this->getContext($context, "job"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "job"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "job"), "positionslug"))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
      </li>
    ";
        }
        // line 36
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  81 => 19,  76 => 17,  134 => 46,  127 => 42,  113 => 34,  102 => 28,  59 => 13,  269 => 109,  265 => 108,  260 => 106,  248 => 100,  243 => 98,  236 => 94,  232 => 93,  227 => 91,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  172 => 66,  152 => 58,  124 => 45,  104 => 37,  77 => 22,  63 => 17,  204 => 80,  201 => 71,  197 => 15,  194 => 14,  184 => 72,  179 => 70,  153 => 79,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 87,  214 => 69,  208 => 68,  169 => 60,  143 => 71,  140 => 52,  132 => 51,  128 => 64,  119 => 60,  107 => 36,  38 => 6,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 58,  84 => 28,  70 => 17,  67 => 21,  61 => 14,  28 => 3,  26 => 5,  94 => 26,  89 => 24,  85 => 25,  75 => 23,  68 => 14,  56 => 12,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 63,  158 => 81,  156 => 59,  151 => 57,  142 => 59,  138 => 57,  136 => 51,  121 => 39,  117 => 44,  105 => 40,  91 => 25,  62 => 10,  49 => 19,  24 => 4,  87 => 20,  31 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 24,  88 => 30,  78 => 18,  46 => 7,  44 => 13,  27 => 3,  79 => 26,  72 => 16,  69 => 22,  47 => 14,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 73,  139 => 69,  131 => 49,  123 => 47,  120 => 44,  115 => 42,  111 => 37,  108 => 38,  101 => 36,  98 => 27,  96 => 52,  83 => 24,  74 => 18,  66 => 18,  55 => 15,  52 => 22,  50 => 9,  43 => 9,  41 => 5,  35 => 6,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 12,  182 => 66,  176 => 6,  173 => 74,  168 => 65,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 56,  144 => 53,  141 => 51,  133 => 66,  130 => 65,  125 => 63,  122 => 43,  116 => 59,  112 => 42,  109 => 32,  106 => 36,  103 => 37,  99 => 35,  95 => 33,  92 => 32,  86 => 28,  82 => 27,  80 => 23,  73 => 24,  64 => 15,  60 => 20,  57 => 11,  54 => 8,  51 => 15,  48 => 8,  45 => 9,  42 => 8,  39 => 7,  36 => 8,  33 => 4,  30 => 3,);
    }
}
