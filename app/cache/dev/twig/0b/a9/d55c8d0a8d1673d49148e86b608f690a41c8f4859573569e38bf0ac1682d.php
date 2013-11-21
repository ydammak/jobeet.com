<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_0ba9d55c8d0a8d1673d49148e86b608f690a41c8f4859573569e38bf0ac1682d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'sonata_top_bar_search' => array($this, 'block_sonata_top_bar_search'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'notice' => array($this, 'block_notice'),
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
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "
        <title>
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 82
        if ((!twig_test_empty($this->getContext($context, "_title")))) {
            // line 83
            echo "                ";
            echo $this->getContext($context, "_title");
            echo "
            ";
        } else {
            // line 85
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 86
                echo "                    -
                    ";
                // line 87
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
                    // line 88
                    echo "                        ";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        // line 89
                        echo "                            &gt;
                        ";
                    }
                    // line 91
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
                // line 93
                echo "                ";
            }
            // line 94
            echo "            ";
        }
        // line 95
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 97
        if (twig_test_empty($this->getContext($context, "_side_menu"))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 99
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
        // line 109
        if (array_key_exists("admin_pool", $context)) {
            // line 110
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 112
            $this->displayBlock('logo', $context, $blocks);
            // line 118
            echo "
                        ";
            // line 119
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 171
            echo "                    ";
        }
        // line 172
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 177
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 273
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            ";
        // line 35
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "use_select2"), "method"))) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
                <style>
                    div.select2-container {
                        margin-left: 0px !important;
                    }

                    div.select2-drop ul {
                        margin: 0px !important;
                    }
                </style>
            ";
        }
        // line 47
        echo "
            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "            <script type=\"text/javascript\">
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 57
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 58
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 59
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 61
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            ";
        // line 70
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "use_select2"), "method"))) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        // line 73
        echo "
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 75
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 76
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 112
    public function block_logo($context, array $blocks = array())
    {
        // line 113
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "admin_pool"), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 119
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 120
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 122
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 123
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 156
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 157
        echo "                                </ul>

                                ";
        // line 159
        $this->displayBlock('sonata_top_bar_search', $context, $blocks);
        // line 168
        echo "
                            </div>
                        ";
    }

    // line 122
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 123
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 124
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 125
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 126
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($this->getContext($context, "group"), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 127
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!$this->getContext($context, "display"))) {
                        // line 128
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($this->getContext($context, "role"));
                        // line 129
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "
                                                ";
                // line 132
                echo "                                                ";
                $context["item_count"] = 0;
                // line 133
                echo "                                                ";
                if ($this->getContext($context, "display")) {
                    // line 134
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (($this->getContext($context, "item_count") == 0)) {
                            // line 135
                            echo "                                                        ";
                            if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 136
                                echo "                                                            ";
                                $context["item_count"] = ($this->getContext($context, "item_count") + 1);
                                // line 137
                                echo "                                                        ";
                            }
                            // line 138
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "                                                ";
                }
                // line 140
                echo "
                                                ";
                // line 141
                if (($this->getContext($context, "display") && ($this->getContext($context, "item_count") > 0))) {
                    // line 142
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 143
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 145
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 146
                        echo "                                                            ";
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 147
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 149
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "                                                    </ul>
                                                </li>
                                                ";
                }
                // line 153
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                                        ";
        }
        // line 155
        echo "                                    ";
    }

    // line 156
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 159
    public function block_sonata_top_bar_search($context, array $blocks = array())
    {
        // line 160
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 161
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\"  class=\"navbar-search\">
                                            <div class=\"input-append\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"input-large search-query\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"/>
                                            </div>
                                        </form>
                                    ";
        }
        // line 167
        echo "                                ";
    }

    // line 177
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 178
        echo "                ";
        $this->displayBlock('notice', $context, $blocks);
        // line 188
        echo "
                <div class=\"row-fluid\">
                    ";
        // line 190
        if (((!twig_test_empty($this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 191
            echo "                        <div class=\"span6\">
                            <ul class=\"breadcrumb\">
                                ";
            // line 193
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 194
                echo "                                    ";
                if (array_key_exists("action", $context)) {
                    // line 195
                    echo "                                        ";
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
                        // line 196
                        echo "                                            ";
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 197
                            echo "                                                <li>
                                                    ";
                            // line 198
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "menu"), "uri")))) {
                                // line 199
                                echo "                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                                echo "</a>
                                                    ";
                            } else {
                                // line 201
                                echo "                                                        ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                                echo "
                                                    ";
                            }
                            // line 203
                            echo "                                                    <span class=\"divider\">/</span>
                                                </li>
                                            ";
                        } else {
                            // line 206
                            echo "                                                <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                            echo "</li>
                                            ";
                        }
                        // line 208
                        echo "                                        ";
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
                    // line 209
                    echo "                                    ";
                }
                // line 210
                echo "                                ";
            } else {
                // line 211
                echo "                                    ";
                echo $this->getContext($context, "_breadcrumb");
                echo "
                                ";
            }
            // line 213
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 216
        echo "
                    ";
        // line 217
        if ((!twig_test_empty($this->getContext($context, "_actions")))) {
            // line 218
            echo "                        <div class=\"span4 offset2\">
                            ";
            // line 219
            echo $this->getContext($context, "_actions");
            echo "
                        </div>
                    ";
        }
        // line 222
        echo "                </div>

                <div class=\"row-fluid\">
                    ";
        // line 225
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 226
            echo "                        <div class=\"sidebar span2\">
                            <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 227
            echo $this->getContext($context, "_side_menu");
            echo "</div>
                        </div>
                    ";
        }
        // line 230
        echo "
                    <div class=\"content ";
        // line 231
        echo (((!twig_test_empty($this->getContext($context, "_side_menu")))) ? (" span10") : ("span12"));
        echo "\">
                        ";
        // line 232
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 262
        echo "                    </div>
                </div>

                ";
        // line 265
        $this->displayBlock('footer', $context, $blocks);
        // line 272
        echo "            ";
    }

    // line 178
    public function block_notice($context, array $blocks = array())
    {
        // line 179
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 180
            echo "                        ";
            $context["session_var"] = ("sonata_flash_" . $this->getContext($context, "notice_level"));
            // line 181
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => $this->getContext($context, "session_var")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 182
                echo "                            <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . $this->getContext($context, "notice_level")), "html", null, true);
                echo "\">
                                ";
                // line 183
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "flash"), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                ";
    }

    // line 232
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 233
        echo "
                            ";
        // line 234
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 235
            echo "                                <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, "_preview");
            echo "</div>
                            ";
        }
        // line 237
        echo "
                            ";
        // line 238
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 239
            echo "                                <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                            ";
        }
        // line 241
        echo "
                            ";
        // line 242
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 243
            echo "                                <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                            ";
        }
        // line 245
        echo "
                            ";
        // line 246
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 247
            echo "                                <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                            ";
        }
        // line 249
        echo "
                            ";
        // line 250
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 251
            echo "                                <div class=\"row-fluid\">
                                    <div class=\"sonata-ba-list span10\">
                                        ";
            // line 253
            echo $this->getContext($context, "_list_table");
            echo "
                                    </div>
                                    <div class=\"sonata-ba-filter span2\">
                                        ";
            // line 256
            echo $this->getContext($context, "_list_filters");
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 260
        echo "
                        ";
    }

    // line 265
    public function block_footer($context, array $blocks = array())
    {
        // line 266
        echo "                    <div class=\"row-fluid\">
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
        return array (  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 178,  683 => 272,  676 => 262,  674 => 232,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 208,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 178,  521 => 163,  515 => 161,  509 => 159,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  366 => 156,  363 => 123,  354 => 119,  316 => 74,  281 => 61,  256 => 54,  245 => 49,  210 => 30,  207 => 29,  198 => 22,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 142,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 118,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  339 => 100,  336 => 113,  329 => 95,  326 => 76,  319 => 90,  311 => 89,  297 => 84,  289 => 81,  286 => 80,  274 => 77,  263 => 57,  250 => 67,  233 => 62,  228 => 59,  191 => 273,  146 => 34,  344 => 97,  338 => 94,  335 => 93,  321 => 91,  295 => 66,  292 => 87,  259 => 55,  215 => 32,  190 => 50,  181 => 47,  161 => 38,  153 => 48,  150 => 58,  118 => 91,  110 => 36,  20 => 1,  114 => 89,  58 => 22,  568 => 175,  557 => 177,  553 => 176,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  446 => 139,  441 => 138,  426 => 134,  419 => 98,  415 => 97,  410 => 129,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 157,  357 => 120,  347 => 115,  333 => 112,  324 => 92,  307 => 71,  300 => 68,  291 => 65,  288 => 85,  282 => 79,  275 => 77,  272 => 76,  226 => 36,  205 => 59,  197 => 54,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 122,  352 => 121,  346 => 92,  343 => 91,  340 => 95,  332 => 97,  330 => 87,  327 => 86,  320 => 75,  315 => 90,  313 => 73,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 82,  277 => 59,  271 => 58,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 58,  192 => 55,  180 => 104,  174 => 118,  137 => 27,  97 => 31,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 37,  90 => 18,  129 => 42,  100 => 42,  65 => 5,  70 => 25,  76 => 13,  84 => 16,  81 => 15,  185 => 20,  178 => 45,  175 => 43,  165 => 110,  160 => 59,  134 => 42,  126 => 55,  53 => 80,  34 => 12,  23 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 50,  244 => 99,  236 => 63,  232 => 93,  216 => 25,  211 => 84,  200 => 55,  195 => 77,  188 => 21,  184 => 47,  172 => 112,  152 => 38,  124 => 23,  104 => 23,  77 => 8,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 70,  298 => 91,  294 => 90,  285 => 84,  283 => 70,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 47,  229 => 73,  220 => 56,  214 => 61,  177 => 119,  169 => 51,  140 => 44,  132 => 43,  128 => 47,  107 => 24,  61 => 23,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 82,  227 => 60,  224 => 35,  221 => 77,  219 => 33,  217 => 75,  208 => 57,  204 => 28,  179 => 171,  159 => 49,  143 => 29,  135 => 93,  119 => 39,  102 => 17,  71 => 78,  67 => 24,  63 => 4,  59 => 165,  38 => 14,  93 => 39,  88 => 85,  78 => 26,  87 => 17,  44 => 17,  31 => 15,  21 => 11,  46 => 18,  26 => 13,  25 => 12,  28 => 14,  94 => 87,  89 => 34,  85 => 28,  75 => 80,  68 => 31,  56 => 81,  27 => 3,  24 => 3,  201 => 57,  196 => 52,  183 => 82,  171 => 61,  166 => 50,  163 => 109,  158 => 37,  156 => 36,  151 => 99,  142 => 42,  138 => 94,  136 => 58,  121 => 29,  117 => 49,  105 => 44,  91 => 86,  62 => 166,  49 => 112,  19 => 1,  79 => 35,  72 => 199,  69 => 54,  47 => 19,  40 => 15,  37 => 54,  22 => 2,  246 => 69,  157 => 41,  145 => 97,  139 => 59,  131 => 25,  123 => 48,  120 => 47,  115 => 45,  111 => 88,  108 => 42,  101 => 33,  98 => 39,  96 => 40,  83 => 36,  74 => 33,  66 => 53,  55 => 22,  52 => 21,  50 => 20,  43 => 21,  41 => 20,  35 => 20,  32 => 11,  29 => 11,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 177,  187 => 49,  182 => 172,  176 => 45,  173 => 42,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 95,  133 => 51,  130 => 57,  125 => 40,  122 => 45,  116 => 47,  112 => 26,  109 => 45,  106 => 35,  103 => 34,  99 => 42,  95 => 20,  92 => 19,  86 => 37,  82 => 83,  80 => 82,  73 => 7,  64 => 28,  60 => 3,  57 => 155,  54 => 154,  51 => 21,  48 => 19,  45 => 18,  42 => 16,  39 => 16,  36 => 13,  33 => 16,  30 => 15,);
    }
}
