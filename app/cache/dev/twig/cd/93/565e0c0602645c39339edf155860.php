<?php

/* SonataPageBundle:Block:block_base.html.twig */
class __TwigTemplate_cd93565e0c0602645c39339edf155860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"cms-block-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
        echo "\"
     class=\"cms-block";
        // line 13
        if ($this->getAttribute($this->getContext($context, "block"), "hasParent", array(), "method")) {
            echo " cms-block-element";
        }
        $this->displayBlock('block_class', $context, $blocks);
        echo "\"
    ";
        // line 14
        if (($this->getAttribute($this->getContext($context, "sonata_page"), "isEditor") && $this->getAttribute($this->getContext($context, "block", true), "page", array(), "any", true, true))) {
            // line 15
            echo "        data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
            echo "\"
        data-name=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "name"), "html", null, true);
            echo "\"
        data-role=\"";
            // line 17
            $this->displayBlock('block_role', $context, $blocks);
            echo "\"
        data-page-id=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "block"), "page"), "id"), "html", null, true);
            echo "\"
    ";
        }
        // line 20
        echo "    >
    ";
        // line 21
        $this->displayBlock('block', $context, $blocks);
        // line 22
        echo "</div>
";
    }

    // line 13
    public function block_block_class($context, array $blocks = array())
    {
    }

    // line 17
    public function block_block_role($context, array $blocks = array())
    {
        echo "block";
    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  71 => 17,  66 => 13,  61 => 22,  51 => 18,  47 => 17,  43 => 16,  38 => 15,  22 => 11,  29 => 13,  26 => 14,  32 => 12,  27 => 13,  25 => 12,  20 => 11,  145 => 62,  139 => 61,  133 => 57,  129 => 55,  127 => 54,  121 => 52,  118 => 51,  115 => 50,  111 => 48,  100 => 45,  97 => 44,  93 => 43,  86 => 39,  78 => 35,  70 => 32,  67 => 31,  56 => 20,  49 => 24,  41 => 19,  36 => 14,  31 => 15,  88 => 40,  82 => 37,  76 => 34,  73 => 27,  69 => 26,  65 => 30,  59 => 21,  53 => 25,  50 => 20,  46 => 19,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
