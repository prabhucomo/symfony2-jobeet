<?php

/* SonataPageBundle::layout.html.twig */
class __TwigTemplate_7fcdffa6a17c8ee2060738a5296dad33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataPageBundle::base_layout.html.twig");

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::base_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_page_container($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"container\">
        <div class=\"content\">
            <div class=\"page-header\">
                <div class=\"pull-left\">
                    ";
        // line 18
        echo $this->env->getExtension('sonata_page')->renderContainer("title", "global");
        echo "
                </div>

                <div class=\"pull-right navigation\">
                    ";
        // line 22
        echo $this->env->getExtension('sonata_page')->renderContainer("header", "global");
        echo "
                </div>

                <div style=\"clear: both\"></div>
            </div>

            ";
        // line 28
        if (array_key_exists("page", $context)) {
            // line 29
            echo "                <div class=\"row\">
                    ";
            // line 30
            if (($this->getAttribute($this->getContext($context, "page"), "name") != "global")) {
                // line 31
                echo "                        ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content_top", "global");
                echo "
                    ";
            }
            // line 33
            echo "                    ";
            echo $this->env->getExtension('sonata_page')->renderContainer("content_top", $this->getContext($context, "page"));
            echo "
                </div>
            ";
        }
        // line 36
        echo "
            <div class=\"row\">
                ";
        // line 38
        if (array_key_exists("content", $context)) {
            // line 39
            echo "                    ";
            echo $this->getContext($context, "content");
            echo "
                ";
        } else {
            // line 41
            echo "                    ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 42
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getContext($context, "content")) > 0)) {
                // line 43
                echo "                        ";
                echo $this->getContext($context, "content");
                echo "
                    ";
            } elseif (array_key_exists("page", $context)) {
                // line 45
                echo "                        ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", $this->getContext($context, "page"));
                echo "
                    ";
            }
            // line 47
            echo "                ";
        }
        // line 48
        echo "            </div>

            ";
        // line 50
        if (array_key_exists("page", $context)) {
            // line 51
            echo "                <div>
                    ";
            // line 52
            echo $this->env->getExtension('sonata_page')->renderContainer("content_bottom", $this->getContext($context, "page"));
            echo "

                    ";
            // line 54
            if (($this->getAttribute($this->getContext($context, "page"), "name") != "global")) {
                // line 55
                echo "                        ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content_bottom", "global");
                echo "
                    ";
            }
            // line 57
            echo "                </div>
            ";
        }
        // line 59
        echo "        </div>

        <footer>
            ";
        // line 62
        echo $this->env->getExtension('sonata_page')->renderContainer("footer", "global");
        echo "
        </footer>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 62,  132 => 59,  128 => 57,  122 => 55,  120 => 54,  115 => 52,  112 => 51,  110 => 50,  106 => 48,  103 => 47,  97 => 45,  91 => 43,  88 => 42,  85 => 41,  79 => 39,  77 => 38,  73 => 36,  66 => 33,  60 => 31,  58 => 30,  55 => 29,  53 => 28,  44 => 22,  37 => 18,  31 => 14,  28 => 13,);
    }
}
