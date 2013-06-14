<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_623944003d7beadc4671c7a3a5a4abda extends Twig_Template
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
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" >
            ";
            // line 19
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
                // line 20
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "sonata_admin"), "inline") == "table")) {
                    // line 21
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "form"), "children")) > 0)) {
                        // line 22
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 25
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), 0, array(), "array"), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 26
                            echo "                                        ";
                            if (($this->getContext($context, "field_name") == "_delete")) {
                                // line 27
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 29
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "sonata_admin", array(), "array"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "label")), "method"), "html", null, true);
                                echo "</th>
                                        ";
                            }
                            // line 31
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 35
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 36
                            echo "                                    <tr>
                                        ";
                            // line 37
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "nested_group_field"), "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 38
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getContext($context, "field_name"), "html", null, true);
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "errors")) > 0)) {
                                    echo " error";
                                }
                                echo "\">
                                                ";
                                // line 39
                                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                                    // line 40
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'widget');
                                    echo "

                                                    ";
                                    // line 42
                                    $context["dummy"] = $this->getAttribute($this->getContext($context, "nested_group_field"), "setrendered");
                                    // line 43
                                    echo "                                                ";
                                } else {
                                    // line 44
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'widget');
                                    echo "
                                                ";
                                }
                                // line 46
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "errors")) > 0)) {
                                    // line 47
                                    echo "                                                    <div class=\"sonata-ba-field-error-messages\">
                                                        ";
                                    // line 48
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 51
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 53
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 58
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "form"), "children")) > 0)) {
                    // line 59
                    echo "                    <div>
                        ";
                    // line 60
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 61
                        echo "                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "nested_group_field"), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 62
                            echo "                                ";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                                // line 63
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'widget', array("inline" => "natural", "edit" => "inline"));
                                // line 66
                                echo "
                                    ";
                                // line 67
                                $context["dummy"] = $this->getAttribute($this->getContext($context, "nested_group_field"), "setrendered");
                                // line 68
                                echo "                                ";
                            } else {
                                // line 69
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "nested_field"), 'widget');
                                echo "
                                ";
                            }
                            // line 71
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "                    </div>
                ";
                }
                // line 75
                echo "            ";
            } else {
                // line 76
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            ";
            }
            // line 78
            echo "
        </span>

        ";
            // line 81
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
                // line 82
                echo "
            ";
                // line 83
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                    // line 84
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 96
                echo "
            ";
                // line 98
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 99
                    echo "                <script type=\"text/javascript\">
                    jQuery('div#field_container_";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: 'tr',
                        stop: apply_position_value_";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "
                    });

                    function apply_position_value_";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "sortable"), "html", null, true);
                    echo "').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "sortable"), "html", null, true);
                    echo " input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "();
                        jQuery('div#field_container_";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "();

                </script>
            ";
                }
                // line 131
                echo "
            ";
                // line 133
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 134
                echo "
        ";
            } else {
                // line 136
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 137
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                    // line 138
                    echo "                    <a
                        href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 145
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 148
                echo "            </span>

            <div style=\"display: none\" id=\"field_dialog_";
                // line 150
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\">

            </div>

            ";
                // line 154
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 155
                echo "        ";
            }
            // line 156
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 155,  346 => 136,  319 => 123,  288 => 109,  270 => 100,  267 => 99,  261 => 96,  239 => 86,  231 => 83,  215 => 76,  212 => 75,  202 => 72,  148 => 63,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 189,  576 => 185,  570 => 183,  559 => 179,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 160,  531 => 129,  525 => 128,  516 => 125,  485 => 110,  460 => 103,  448 => 99,  445 => 98,  428 => 94,  401 => 49,  397 => 48,  388 => 154,  383 => 43,  367 => 39,  351 => 137,  342 => 134,  339 => 133,  336 => 131,  327 => 205,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  253 => 148,  205 => 136,  198 => 133,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 164,  517 => 163,  512 => 162,  509 => 161,  506 => 123,  503 => 122,  500 => 158,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 105,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 148,  375 => 41,  371 => 145,  366 => 107,  359 => 106,  356 => 139,  340 => 97,  321 => 91,  318 => 90,  302 => 116,  282 => 79,  274 => 77,  254 => 92,  238 => 64,  233 => 84,  228 => 82,  110 => 64,  335 => 94,  331 => 94,  326 => 90,  276 => 152,  271 => 79,  255 => 69,  250 => 67,  218 => 57,  206 => 51,  190 => 69,  181 => 47,  175 => 43,  167 => 60,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 98,  545 => 97,  538 => 165,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 124,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 111,  482 => 109,  472 => 145,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 86,  400 => 119,  394 => 139,  391 => 118,  389 => 137,  370 => 40,  361 => 36,  357 => 35,  353 => 138,  347 => 31,  343 => 98,  332 => 117,  329 => 127,  324 => 92,  310 => 87,  301 => 111,  284 => 110,  279 => 153,  277 => 104,  273 => 151,  262 => 76,  259 => 150,  249 => 71,  223 => 58,  191 => 120,  185 => 67,  178 => 45,  174 => 51,  137 => 60,  323 => 124,  320 => 172,  315 => 122,  311 => 78,  306 => 87,  303 => 86,  296 => 161,  291 => 73,  289 => 157,  286 => 80,  280 => 69,  272 => 76,  263 => 71,  257 => 74,  251 => 59,  245 => 66,  242 => 143,  240 => 64,  237 => 54,  234 => 141,  226 => 81,  221 => 78,  146 => 34,  90 => 35,  12 => 33,  34 => 26,  20 => 1,  118 => 52,  100 => 22,  97 => 37,  65 => 30,  53 => 23,  161 => 58,  159 => 53,  150 => 66,  129 => 55,  58 => 23,  81 => 15,  76 => 20,  134 => 26,  127 => 66,  113 => 40,  102 => 41,  59 => 18,  269 => 75,  265 => 103,  260 => 62,  248 => 89,  243 => 87,  236 => 63,  232 => 140,  227 => 91,  216 => 86,  211 => 53,  200 => 134,  195 => 77,  188 => 73,  172 => 76,  152 => 67,  124 => 44,  104 => 23,  77 => 58,  63 => 50,  204 => 80,  201 => 71,  197 => 54,  194 => 14,  184 => 115,  179 => 63,  153 => 67,  23 => 18,  480 => 148,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 97,  437 => 96,  435 => 137,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 85,  402 => 126,  398 => 129,  393 => 156,  387 => 122,  384 => 134,  381 => 150,  379 => 42,  374 => 116,  368 => 112,  365 => 142,  362 => 110,  360 => 140,  355 => 106,  341 => 121,  337 => 96,  322 => 202,  314 => 99,  312 => 88,  309 => 97,  305 => 95,  298 => 84,  294 => 160,  285 => 155,  283 => 107,  278 => 68,  268 => 78,  264 => 98,  258 => 81,  252 => 72,  247 => 66,  241 => 67,  235 => 74,  229 => 139,  224 => 71,  220 => 63,  214 => 69,  208 => 73,  169 => 43,  143 => 72,  140 => 44,  132 => 51,  128 => 55,  119 => 42,  107 => 24,  38 => 6,  71 => 30,  177 => 78,  165 => 16,  160 => 70,  135 => 58,  126 => 51,  114 => 23,  84 => 62,  70 => 32,  67 => 27,  61 => 18,  28 => 14,  26 => 13,  94 => 36,  89 => 40,  85 => 32,  75 => 35,  68 => 22,  56 => 27,  196 => 71,  183 => 70,  171 => 61,  166 => 73,  163 => 49,  158 => 81,  156 => 55,  151 => 66,  142 => 51,  138 => 57,  136 => 48,  121 => 43,  117 => 47,  105 => 26,  91 => 25,  62 => 29,  49 => 20,  24 => 13,  87 => 17,  31 => 15,  25 => 3,  21 => 12,  19 => 11,  93 => 14,  88 => 31,  78 => 29,  46 => 35,  44 => 19,  27 => 4,  79 => 31,  72 => 20,  69 => 32,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 70,  157 => 83,  145 => 63,  139 => 60,  131 => 25,  123 => 54,  120 => 53,  115 => 27,  111 => 39,  108 => 47,  101 => 38,  98 => 21,  96 => 43,  83 => 59,  74 => 56,  66 => 25,  55 => 22,  52 => 21,  50 => 17,  43 => 18,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 82,  203 => 135,  199 => 67,  193 => 130,  189 => 20,  187 => 68,  182 => 66,  176 => 62,  173 => 76,  168 => 17,  164 => 59,  162 => 62,  154 => 53,  149 => 53,  147 => 64,  144 => 62,  141 => 61,  133 => 47,  130 => 46,  125 => 55,  122 => 22,  116 => 49,  112 => 49,  109 => 44,  106 => 46,  103 => 45,  99 => 44,  95 => 20,  92 => 67,  86 => 39,  82 => 27,  80 => 36,  73 => 29,  64 => 26,  60 => 25,  57 => 22,  54 => 16,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 15,);
    }
}
