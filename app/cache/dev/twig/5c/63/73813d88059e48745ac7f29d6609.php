<?php

/* SonataPageBundle:PageAdmin:field_hybrid.html.twig */
class __TwigTemplate_5c6373813d88059e48745ac7f29d6609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "object"), "isHybrid")) {
            // line 16
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/page_gear.png"), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 18
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/page_code.png"), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:field_hybrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  36 => 16,  33 => 15,  31 => 14,  28 => 13,);
    }
}
