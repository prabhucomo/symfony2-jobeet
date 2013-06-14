<?php

/* SonataPageBundle::base_layout.html.twig */
class __TwigTemplate_73befc753f010decd87ebb5fe9fe5a45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_stylesheets' => array($this, 'block_page_stylesheets'),
            'page_javascripts' => array($this, 'block_page_javascripts'),
            'page_top_bar' => array($this, 'block_page_top_bar'),
            'page_container' => array($this, 'block_page_container'),
            'page_asset_footer' => array($this, 'block_page_asset_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<!DOCTYPE html>
<html ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_seo')->renderHtmlAttributes(), "html", null, true);
        echo ">
    <head>

        ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_seo')->renderTitle(), "html", null, true);
        echo "
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_seo')->renderMetadatas(), "html", null, true);
        echo "
        
        ";
        // line 18
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        if (($this->getAttribute($this->getContext($context, "sonata_page"), "isEditor") || ($this->getAttribute($this->getContext($context, "app"), "security") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "isGranted", array(0 => "ROLE_PREVIOUS_ADMIN"), "method")))) {
            // line 36
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        // line 38
        echo "    </head>

    <body class=\"sonata-bc\">

        ";
        // line 42
        $this->displayBlock('page_top_bar', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        $this->displayBlock('page_container', $context, $blocks);
        // line 137
        echo "
        ";
        // line 138
        $this->displayBlock('page_asset_footer', $context, $blocks);
        // line 155
        echo "    </body>
</html>
";
    }

    // line 18
    public function block_page_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatapage/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 23
    public function block_page_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "            <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->

            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_seo')->renderGacode(), "html", null, true);
        echo "
        ";
    }

    // line 42
    public function block_page_top_bar($context, array $blocks = array())
    {
        // line 43
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "sonata_page"), "isEditor") || ($this->getAttribute($this->getContext($context, "app"), "security") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "isGranted", array(0 => "ROLE_PREVIOUS_ADMIN"), "method")))) {
            // line 44
            echo "
                <link rel=\"stylesheet\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatapage/page.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">

                ";
            // line 47
            if ($this->getAttribute($this->getContext($context, "sonata_page"), "isEditor")) {
                // line 48
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatapage/page.js"), "html", null, true);
                echo "\" type=\"text/javascript\"></script>

                    ";
                // line 51
                echo "                    ";
                // line 54
                echo "
                    <!-- CMS specific variables -->
                    <script>
                        jQuery(document).ready(function() {
                            Sonata.Page.init({
                                url: {
                                    block_save_position: '";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_block_savePosition"), "html", null, true);
                echo "',
                                    block_edit:          '";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_block_edit", array("id" => "BLOCK_ID")), "html", null, true);
                echo "'
                                }
                            });
                        });
                    </script>
                ";
            }
            // line 67
            echo "
                <div class=\"sonata-bc sonata-page-top-bar\">
                    <div class=\"navbar navbar-fixed-top\">
                        <div class=\"navbar-inner\">
                            <div class=\"container\">
                                <ul class=\"nav\">
                                    ";
            // line 73
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "isGranted", array(0 => "ROLE_SONATA_ADMIN"), "method"))) {
                // line 74
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_admin_dashboard"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.sonata_admin_dashboard", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 76
            echo "
                                    ";
            // line 77
            if ($this->getAttribute($this->getContext($context, "sonata_page"), "isEditor")) {
                // line 78
                echo "                                        ";
                $context["sites"] = $this->getAttribute($this->getContext($context, "sonata_page"), "siteavailables");
                // line 79
                echo "
                                        ";
                // line 80
                if (((twig_length_filter($this->env, $this->getContext($context, "sites")) > 1) && array_key_exists("site", $context))) {
                    // line 81
                    echo "                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "site"), "name"), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                    // line 84
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sites"));
                    foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                        // line 85
                        echo "                                                        <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "site"), "url"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "site"), "name"), "html", null, true);
                        echo "</a></li>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                                                </ul>
                                            </li>
                                        ";
                }
                // line 90
                echo "
                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Page <span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                // line 94
                if (array_key_exists("page", $context)) {
                    // line 95
                    echo "                                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_edit", array("id" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.edit_page", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                                    <li><a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_snapshot_create", array("id" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.create_snapshot", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                                    <li class=\"divider\"></li>
                                                ";
                }
                // line 99
                echo "
                                                <li><a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_list"), "html", null, true);
                echo "\" target=\"_new\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.view_all_pages", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>

                                                ";
                // line 102
                if ((array_key_exists("error_codes", $context) && twig_length_filter($this->env, $this->getContext($context, "error_codes")))) {
                    // line 103
                    echo "                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_page_exceptions_list"), "html", null, true);
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.view_all_exceptions", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                                ";
                }
                // line 106
                echo "                                            </ul>
                                        </li>

                                        ";
                // line 109
                if ((array_key_exists("page", $context) && (!$this->getAttribute($this->getContext($context, "page"), "enabled")))) {
                    // line 110
                    echo "                                            <li><span style=\"padding-left: 20px; background: red;\"><strong><em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.page_is_disabled", array(), "SonataPageBundle"), "html", null, true);
                    echo "</em></strong></span></li>
                                        ";
                }
                // line 112
                echo "
                                        ";
                // line 113
                if (array_key_exists("page", $context)) {
                    // line 114
                    echo "                                            <li style=\"padding: 8px 0px 0px 0px;\" >
                                                <form class=\"form-inline\" style=\"margin: 0px\">
                                                    <label for=\"page-action-enabled-edit\"><input type=\"checkbox\" id=\"page-action-enabled-edit\" />";
                    // line 116
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.show_zone", array(), "SonataPageBundle"), "html", null, true);
                    echo "</label>
                                                    <input type=\"submit\" class=\"btn\" value=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_save_position", array(), "SonataPageBundle"), "html", null, true);
                    echo "\" id=\"page-action-save-position\" />
                                                </form>
                                            </li>
                                        ";
                }
                // line 121
                echo "                                    ";
            }
            // line 122
            echo "
                                    ";
            // line 123
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "isGranted", array(0 => "ROLE_PREVIOUS_ADMIN"), "method"))) {
                // line 124
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("homepage", array("_switch_user" => "_exit")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.switch_user_exit", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 126
            echo "
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            ";
        }
        // line 134
        echo "        ";
    }

    // line 136
    public function block_page_container($context, array $blocks = array())
    {
    }

    // line 138
    public function block_page_asset_footer($context, array $blocks = array())
    {
        // line 139
        echo "            ";
        if (array_key_exists("page", $context)) {
            // line 140
            echo "                <script>
                    ";
            // line 141
            echo $this->getAttribute($this->getContext($context, "page"), "javascript");
            echo "
                </script>

                <style>
                    ";
            // line 145
            echo $this->getAttribute($this->getContext($context, "page"), "stylesheet");
            echo "
                </style>
            ";
        }
        // line 148
        echo "            ";
        // line 152
        echo "            ";
        echo $this->env->getExtension('sonata_block')->includeStylesheets("screen");
        echo "
            ";
        // line 153
        echo $this->env->getExtension('sonata_block')->includeJavascripts("screen");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle::base_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 153,  367 => 152,  365 => 148,  359 => 145,  352 => 141,  349 => 140,  346 => 139,  343 => 138,  338 => 136,  334 => 134,  324 => 126,  316 => 124,  314 => 123,  311 => 122,  308 => 121,  301 => 117,  297 => 116,  293 => 114,  291 => 113,  288 => 112,  282 => 110,  280 => 109,  275 => 106,  268 => 104,  265 => 103,  263 => 102,  256 => 100,  253 => 99,  245 => 96,  238 => 95,  236 => 94,  230 => 90,  225 => 87,  214 => 85,  210 => 84,  205 => 82,  202 => 81,  200 => 80,  197 => 79,  194 => 78,  192 => 77,  189 => 76,  181 => 74,  179 => 73,  171 => 67,  162 => 61,  158 => 60,  150 => 54,  148 => 51,  142 => 48,  140 => 47,  135 => 45,  129 => 43,  126 => 42,  116 => 31,  108 => 29,  101 => 24,  98 => 23,  92 => 20,  87 => 19,  84 => 18,  78 => 155,  76 => 138,  71 => 136,  68 => 135,  54 => 36,  52 => 35,  49 => 34,  47 => 23,  42 => 18,  33 => 15,  27 => 12,  24 => 11,  137 => 62,  132 => 44,  128 => 57,  122 => 55,  120 => 32,  115 => 52,  112 => 30,  110 => 50,  106 => 48,  103 => 47,  97 => 45,  91 => 43,  88 => 42,  85 => 41,  79 => 39,  77 => 38,  73 => 137,  66 => 42,  60 => 38,  58 => 30,  55 => 29,  53 => 28,  44 => 22,  37 => 16,  31 => 14,  28 => 13,);
    }
}
