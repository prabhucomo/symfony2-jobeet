<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_7dd2ed4762bd9e1662f8223ada2f37c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'notice' => array($this, 'block_notice'),
            'actions' => array($this, 'block_actions'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
        <title>
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 55
        if ((!twig_test_empty($this->getContext($context, "_title")))) {
            // line 56
            echo "                ";
            echo $this->getContext($context, "_title");
            echo "
            ";
        } else {
            // line 58
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 59
                echo "                    -
                    ";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 61
                    echo "                        ";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        // line 62
                        echo "                            &gt;
                        ";
                    }
                    // line 64
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                ";
            }
            // line 67
            echo "            ";
        }
        // line 68
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 70
        if (twig_test_empty($this->getContext($context, "_side_menu"))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 72
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 82
        if (array_key_exists("admin_pool", $context)) {
            // line 83
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 85
            $this->displayBlock('logo', $context, $blocks);
            // line 91
            echo "
                        <div class=\"nav-collapse\">
                            <ul class=\"nav\">
                                ";
            // line 94
            $this->displayBlock('top_bar_before_nav', $context, $blocks);
            // line 95
            echo "                                ";
            $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
            // line 111
            echo "                                ";
            $this->displayBlock('top_bar_after_nav', $context, $blocks);
            // line 112
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 115
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 120
        $this->displayBlock('notice', $context, $blocks);
        // line 130
        echo "
            <div class=\"row-fluid\">
                <div class=\"span6\">
                    ";
        // line 133
        if (((!twig_test_empty($this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 134
            echo "                        <ul class=\"breadcrumb\">
                            ";
            // line 135
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 136
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 137
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 138
                        echo "                                        ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 139
                            echo "                                            <li>
                                                ";
                            // line 140
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "menu"), "uri")))) {
                                // line 141
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                                echo "</a>
                                                ";
                            } else {
                                // line 143
                                echo "                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                                echo "
                                                ";
                            }
                            // line 145
                            echo "                                                <span class=\"divider\">/</span>
                                            </li>
                                        ";
                        } else {
                            // line 148
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 150
                        echo "                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                                ";
                }
                // line 152
                echo "                            ";
            } else {
                // line 153
                echo "                                ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                            ";
            }
            // line 155
            echo "                        </ul>
                    ";
        }
        // line 157
        echo "                </div>

                <div class=\"span4 offset2\">
                    ";
        // line 160
        $this->displayBlock('actions', $context, $blocks);
        // line 161
        echo "                </div>
            </div>

            <div class=\"row-fluid\">
                ";
        // line 165
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 166
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 167
            echo $this->getContext($context, "_side_menu");
            echo "</div>
                    </div>
                ";
        }
        // line 170
        echo "
                <div class=\"content ";
        // line 171
        echo (((!twig_test_empty($this->getContext($context, "_side_menu")))) ? (" span10") : ("span12"));
        echo "\">
                    ";
        // line 172
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 202
        echo "                </div>
            </div>

            ";
        // line 205
        $this->displayBlock('footer', $context, $blocks);
        // line 212
        echo "        </div>
    </body>
</html>
";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/sonata_group_checkbox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/qtip/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 85
    public function block_logo($context, array $blocks = array())
    {
        // line 86
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard"), "html", null, true);
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "admin_pool"), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 94
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 95
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 96
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 97
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 98
                echo "                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                echo " <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                // line 101
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 102
                    echo "                                                        ";
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                        // line 103
                        echo "                                                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                        echo "</a></li>
                                                        ";
                    }
                    // line 105
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                                                </ul>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                                    ";
        }
        // line 110
        echo "                                ";
    }

    // line 111
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 120
    public function block_notice($context, array $blocks = array())
    {
        // line 121
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 122
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . $this->getContext($context, "notice_level"));
            // line 123
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => $this->getContext($context, "session_var")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 124
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . $this->getContext($context, "notice_level")), "html", null, true);
                echo "\">
                            ";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "flash"), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "            ";
    }

    // line 160
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 172
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 173
        echo "
                        ";
        // line 174
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 175
            echo "                            <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, "_preview");
            echo "</div>
                        ";
        }
        // line 177
        echo "
                        ";
        // line 178
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 179
            echo "                            <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                        ";
        }
        // line 181
        echo "
                        ";
        // line 182
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 183
            echo "                            <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                        ";
        }
        // line 185
        echo "
                        ";
        // line 186
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 187
            echo "                            <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                        ";
        }
        // line 189
        echo "
                        ";
        // line 190
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 191
            echo "                            <div class=\"row-fluid\">
                                <div class=\"sonata-ba-list span10\">
                                    ";
            // line 193
            echo $this->getContext($context, "_list_table");
            echo "
                                </div>
                                <div class=\"sonata-ba-filter span2\">
                                    ";
            // line 196
            echo $this->getContext($context, "_list_filters");
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 200
        echo "
                    ";
    }

    // line 205
    public function block_footer($context, array $blocks = array())
    {
        // line 206
        echo "                <div class=\"row-fluid\">
                    <div class=\"span2 offset10 pull-right\">
                        <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  590 => 190,  587 => 189,  581 => 187,  576 => 185,  570 => 183,  559 => 179,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 160,  531 => 129,  525 => 128,  516 => 125,  506 => 123,  503 => 122,  498 => 121,  495 => 120,  485 => 110,  468 => 105,  460 => 103,  457 => 102,  453 => 101,  448 => 99,  445 => 98,  440 => 97,  437 => 96,  428 => 94,  421 => 88,  407 => 85,  401 => 49,  397 => 48,  393 => 47,  388 => 45,  383 => 43,  375 => 41,  367 => 39,  351 => 32,  342 => 29,  339 => 28,  336 => 27,  327 => 205,  322 => 202,  320 => 172,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  302 => 165,  296 => 161,  294 => 160,  289 => 157,  285 => 155,  276 => 152,  253 => 148,  248 => 145,  242 => 143,  234 => 141,  232 => 140,  229 => 139,  208 => 137,  205 => 136,  198 => 133,  193 => 130,  184 => 115,  179 => 112,  176 => 111,  173 => 95,  171 => 94,  166 => 91,  164 => 85,  157 => 83,  155 => 82,  133 => 68,  130 => 67,  127 => 66,  110 => 64,  106 => 62,  103 => 61,  83 => 59,  80 => 58,  72 => 55,  67 => 53,  61 => 39,  58 => 38,  56 => 27,  47 => 20,  45 => 19,  39 => 16,  37 => 15,  33 => 13,  31 => 12,  29 => 11,  636 => 205,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 100,  549 => 98,  545 => 97,  538 => 93,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 124,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 111,  482 => 109,  474 => 106,  472 => 163,  469 => 162,  461 => 160,  459 => 159,  456 => 158,  450 => 157,  442 => 155,  434 => 95,  431 => 152,  426 => 151,  423 => 149,  415 => 87,  413 => 146,  410 => 86,  402 => 143,  400 => 142,  394 => 139,  391 => 138,  389 => 137,  384 => 134,  379 => 42,  370 => 40,  361 => 36,  357 => 35,  353 => 125,  347 => 31,  343 => 122,  341 => 121,  332 => 117,  329 => 212,  324 => 113,  310 => 112,  301 => 111,  284 => 110,  279 => 153,  277 => 108,  273 => 151,  268 => 104,  265 => 103,  262 => 76,  259 => 150,  257 => 74,  252 => 72,  249 => 71,  246 => 70,  241 => 67,  226 => 138,  223 => 64,  220 => 63,  203 => 135,  200 => 134,  197 => 60,  191 => 120,  185 => 55,  182 => 54,  178 => 52,  174 => 51,  169 => 50,  163 => 49,  151 => 48,  149 => 47,  146 => 46,  143 => 72,  140 => 44,  137 => 70,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  122 => 38,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 176,  86 => 60,  81 => 172,  79 => 70,  76 => 69,  74 => 56,  71 => 59,  69 => 27,  63 => 51,  60 => 24,  57 => 23,  54 => 22,  48 => 20,  43 => 18,  41 => 17,  38 => 15,  35 => 14,);
    }
}
