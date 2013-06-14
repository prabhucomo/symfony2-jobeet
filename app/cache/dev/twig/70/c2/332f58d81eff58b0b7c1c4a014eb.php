<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_70c2332f58d81eff58b0b7c1c4a014eb extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "get", array(0 => $this->getAttribute($this->getContext($context, "field_description"), "name")), "method"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))), array());
                    // line 29
                    echo "                ";
                }
                // line 30
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 32
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 35
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            }
            // line 39
            echo "
        <span id=\"field_actions_";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 42
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
                // line 43
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 44
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-list\"></i>
                        ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 52
            echo "
                ";
            // line 53
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                // line 54
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 55
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 63
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 66
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
                // line 67
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 68
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-off\"></i>
                        ";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 76
            echo "            </span>
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 79
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 84
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 84,  177 => 79,  166 => 73,  155 => 68,  150 => 66,  145 => 63,  133 => 57,  106 => 46,  96 => 43,  94 => 42,  89 => 40,  65 => 30,  50 => 20,  45 => 19,  30 => 15,  24 => 13,  22 => 12,  19 => 11,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  636 => 191,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  560 => 168,  555 => 167,  538 => 165,  521 => 164,  517 => 163,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 147,  475 => 146,  472 => 145,  468 => 125,  462 => 123,  456 => 121,  453 => 120,  450 => 119,  443 => 140,  437 => 138,  435 => 137,  432 => 136,  426 => 133,  423 => 132,  421 => 131,  416 => 129,  405 => 127,  402 => 126,  400 => 119,  391 => 118,  386 => 115,  380 => 112,  377 => 111,  375 => 110,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  353 => 104,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  329 => 93,  324 => 92,  321 => 91,  318 => 90,  312 => 88,  310 => 87,  302 => 86,  298 => 84,  282 => 79,  274 => 77,  250 => 67,  243 => 65,  238 => 64,  236 => 63,  228 => 59,  223 => 58,  208 => 57,  197 => 54,  191 => 50,  184 => 47,  175 => 43,  157 => 41,  152 => 67,  139 => 60,  121 => 53,  118 => 52,  115 => 27,  107 => 24,  101 => 44,  95 => 20,  87 => 17,  81 => 15,  76 => 13,  57 => 22,  52 => 21,  47 => 75,  44 => 74,  42 => 62,  39 => 61,  34 => 53,  297 => 137,  294 => 136,  283 => 131,  277 => 78,  271 => 127,  265 => 125,  259 => 123,  256 => 122,  254 => 68,  247 => 66,  239 => 112,  233 => 62,  227 => 105,  215 => 99,  210 => 97,  207 => 96,  205 => 95,  200 => 55,  194 => 89,  188 => 86,  183 => 84,  178 => 45,  176 => 82,  173 => 42,  167 => 78,  161 => 75,  151 => 72,  141 => 67,  138 => 61,  136 => 60,  132 => 59,  128 => 55,  120 => 56,  112 => 49,  110 => 25,  98 => 21,  92 => 19,  86 => 39,  80 => 36,  78 => 40,  75 => 35,  72 => 191,  70 => 33,  62 => 29,  59 => 23,  54 => 144,  51 => 24,  38 => 17,  323 => 82,  320 => 81,  315 => 79,  311 => 78,  306 => 77,  303 => 139,  296 => 74,  291 => 135,  289 => 81,  286 => 80,  280 => 69,  278 => 68,  272 => 76,  269 => 75,  263 => 71,  260 => 62,  257 => 61,  251 => 120,  245 => 57,  242 => 56,  240 => 55,  237 => 54,  234 => 53,  229 => 48,  226 => 47,  221 => 102,  203 => 56,  196 => 21,  189 => 20,  172 => 76,  168 => 17,  165 => 16,  160 => 70,  156 => 73,  154 => 53,  149 => 36,  146 => 34,  144 => 33,  140 => 45,  123 => 54,  117 => 40,  111 => 38,  108 => 37,  104 => 23,  73 => 31,  67 => 175,  64 => 174,  58 => 12,  53 => 10,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  93 => 36,  90 => 18,  84 => 16,  79 => 14,  77 => 27,  74 => 26,  71 => 25,  69 => 32,  66 => 23,  63 => 22,  55 => 11,  49 => 103,  46 => 21,  43 => 20,  12 => 33,);
    }
}
