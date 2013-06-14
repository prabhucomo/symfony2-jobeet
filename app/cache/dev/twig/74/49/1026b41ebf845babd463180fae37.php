<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_74491026b41ebf845babd463180fae37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getContext($context, "url")), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form class=\"form-horizontal\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => $this->getContext($context, "url"), 1 => array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo " method=\"POST\">
            ";
            // line 10
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 11
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 12
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                </div>
            ";
            }
            // line 15
            echo "
            ";
            // line 16
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
                <div class=\"tab-content\">
                    ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 32
                echo "                        <div class=\"tab-pane ";
                if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->slugify($this->getContext($context, "name")), "html", null, true);
                echo "\">
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    
                                    ";
                // line 36
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 37
                    echo "                                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 38
                        echo "                                            ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"), 'row');
                        echo "
                                        ";
                    }
                    // line 40
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                                </div>
                            </fieldset>
                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </div>

            ";
            // line 47
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 50
            echo "
            ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

            ";
            // line 53
            $this->displayBlock('formactions', $context, $blocks);
            // line 84
            echo "        </form>
    ";
        }
        // line 86
        echo "
";
    }

    // line 16
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 17
        echo "                <div class=\"tabbable\">
                    <ul class=\"nav nav-tabs\">
                        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
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
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 20
            echo "                            <li class=\"";
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                echo "active";
            }
            echo "\">
                                <a href=\"#";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->slugify($this->getContext($context, "name")), "html", null, true);
            echo "\" data-toggle=\"tab\">
                                    <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name")), "method"), "html", null, true);
            echo "
                                </a>
                            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </ul>
            ";
    }

    // line 47
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 48
        echo "                </div>
            ";
    }

    // line 53
    public function block_formactions($context, array $blocks = array())
    {
        // line 54
        echo "                <div class=\"well form-actions\">
                    ";
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
            // line 56
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 57
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            } else {
                // line 59
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 61
            echo "                    ";
        } else {
            // line 62
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "supportsPreviewMode")) {
                // line 63
                echo "                            <input class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 65
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 66
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>

                            ";
                // line 68
                if ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method")) {
                    // line 69
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 71
                echo "
                            ";
                // line 72
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "delete"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "DELETE", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 73
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 76
                echo "                        ";
            } else {
                // line 77
                echo "                            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 81
            echo "                    ";
        }
        // line 82
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 82,  320 => 81,  315 => 79,  311 => 78,  306 => 77,  303 => 76,  296 => 74,  291 => 73,  289 => 72,  286 => 71,  280 => 69,  278 => 68,  272 => 66,  269 => 65,  263 => 63,  260 => 62,  257 => 61,  251 => 59,  245 => 57,  242 => 56,  240 => 55,  237 => 54,  234 => 53,  229 => 48,  226 => 47,  221 => 27,  203 => 23,  196 => 21,  189 => 20,  172 => 19,  168 => 17,  165 => 16,  160 => 86,  156 => 84,  154 => 53,  149 => 51,  146 => 50,  144 => 47,  140 => 45,  123 => 41,  117 => 40,  111 => 38,  108 => 37,  104 => 36,  73 => 31,  67 => 16,  64 => 15,  58 => 12,  53 => 10,  40 => 6,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  23 => 1,  93 => 36,  90 => 32,  84 => 31,  79 => 28,  77 => 27,  74 => 26,  71 => 25,  69 => 29,  66 => 23,  63 => 22,  55 => 11,  49 => 16,  46 => 9,  43 => 14,  12 => 33,);
    }
}
