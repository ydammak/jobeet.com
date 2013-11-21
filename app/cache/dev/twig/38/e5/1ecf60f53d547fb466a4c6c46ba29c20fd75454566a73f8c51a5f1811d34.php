<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_38e51ecf60f53d547fb466a4c6c46ba29c20fd75454566a73f8c51a5f1811d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        // line 17
        echo "    </div>
";
    }

    // line 20
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["batchactions"] = $this->getAttribute($this->getContext($context, "admin"), "batchactions");
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results")) > 0)) {
            // line 25
            echo "        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "batch"), "method")) {
                // line 26
                echo "        <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute($this->getContext($context, "admin"), "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
                echo "\" />
        ";
            }
            // line 29
            echo "            <table class=\"table table-bordered table-striped\">
                ";
            // line 30
            $this->displayBlock('table_header', $context, $blocks);
            // line 64
            echo "
                ";
            // line 65
            $this->displayBlock('table_body', $context, $blocks);
            // line 74
            echo "
                ";
            // line 75
            $this->displayBlock('table_footer', $context, $blocks);
            // line 138
            echo "            </table>
        ";
            // line 139
            if ($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "batch"), "method")) {
                // line 140
                echo "        </form>
        ";
            }
            // line 142
            echo "    ";
        } else {
            // line 143
            echo "        <p class=\"notice\">
            ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 30
    public function block_table_header($context, array $blocks = array())
    {
        // line 31
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 34
            echo "                                ";
            if ((($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($this->getContext($context, "field_description"), "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
                // line 35
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } elseif (($this->getAttribute($this->getContext($context, "field_description"), "getOption", array(0 => "code"), "method") == "_select")) {
                // line 39
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute($this->getContext($context, "field_description"), "name") == "_action") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
                // line 41
                echo "                                        ";
                // line 42
                echo "                                ";
            } else {
                // line 43
                echo "                                    ";
                $context["sortable"] = false;
                // line 44
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "sortable"))) {
                    // line 45
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 46
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "sortparameters", array(0 => $this->getContext($context, "field_description"), 1 => $this->getAttribute($this->getContext($context, "admin"), "datagrid")), "method");
                    // line 47
                    echo "                                        ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_by") == $this->getContext($context, "field_description")) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute($this->getContext($context, "sort_parameters"), "filter"), "_sort_by")));
                    // line 48
                    echo "                                        ";
                    $context["sort_active_class"] = (($this->getContext($context, "current")) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 49
                    echo "                                        ";
                    $context["sort_by"] = (($this->getContext($context, "current")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "_sort_order")));
                    // line 50
                    echo "                                    ";
                }
                // line 51
                echo "
                                    ";
                // line 52
                ob_start();
                // line 53
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
                echo " ";
                if ($this->getContext($context, "sortable")) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getContext($context, "sort_by")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "sort_active_class"), "html", null, true);
                }
                echo "\">
                                            ";
                // line 54
                if ($this->getContext($context, "sortable")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getContext($context, "sort_parameters")), "method"), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "field_description"), "label")), "method"), "html", null, true);
                echo "
                                            ";
                // line 56
                if ($this->getContext($context, "sortable")) {
                    echo "</a>";
                }
                // line 57
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 59
                echo "                                ";
            }
            // line 60
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 65
    public function block_table_body($context, array $blocks = array())
    {
        // line 66
        echo "                    <tbody>
                        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 68
            echo "                            <tr>
                                ";
            // line 69
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 70
            echo "                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </tbody>
                ";
    }

    // line 75
    public function block_table_footer($context, array $blocks = array())
    {
        // line 76
        echo "                    <tr>
                        <th colspan=\"";
        // line 77
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")) - (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                            <div class=\"form-inline\">
                                ";
        // line 79
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
            // line 80
            echo "                                    ";
            if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
                // line 81
                echo "                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 108
                echo "
                                        <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                                    ";
            }
            // line 111
            echo "
                                    <div class=\"pull-right\">
                                        ";
            // line 113
            if ((($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "export"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "getExportFormats", array(), "method")))) {
                // line 114
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                            ";
                // line 115
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "getExportFormats", array(), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 116
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => 0), "method") + array("format" => $this->getContext($context, "format")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "format"), "html", null, true);
                    echo "</a>";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                        echo ",";
                    }
                    // line 117
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "
                                            &nbsp;-&nbsp;
                                        ";
            }
            // line 121
            echo "
                                        ";
            // line 122
            $this->displayBlock('pager_results', $context, $blocks);
            // line 125
            echo "                                    </div>
                                ";
        }
        // line 127
        echo "                            </div>
                        </th>
                    </tr>

                    ";
        // line 131
        $this->displayBlock('pager_links', $context, $blocks);
        // line 136
        echo "
                ";
    }

    // line 81
    public function block_batch($context, array $blocks = array())
    {
        // line 82
        echo "                                            <script type=\"text/javascript\">
                                                ";
        // line 83
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 93
        echo "                                            </script>

                                            ";
        // line 95
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 107
        echo "                                        ";
    }

    // line 83
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 84
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').click(function () {
                                                            \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                        \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function () {
                                                            \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                    });
                                                ";
    }

    // line 95
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 96
        echo "                                                <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
        echo "_all_elements\"/>
                                                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                </label>

                                                <select name=\"action\" style=\"width: auto; height: auto\">
                                                    ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "batchactions"));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 103
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "label"), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                                </select>
                                            ";
    }

    // line 122
    public function block_pager_results($context, array $blocks = array())
    {
        // line 123
        echo "                                            ";
        $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 124
        echo "                                        ";
    }

    // line 131
    public function block_pager_links($context, array $blocks = array())
    {
        // line 132
        echo "                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 133
            echo "                            ";
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 134
            echo "                        ";
        }
        // line 135
        echo "                    ";
    }

    // line 149
    public function block_list_filters($context, array $blocks = array())
    {
        // line 150
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters")) {
            // line 151
            echo "        <form class=\"sonata-filter-form ";
            echo ((($this->getAttribute($this->getContext($context, "admin"), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 153
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 155
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <div>
                        ";
            // line 157
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 158
                echo "                            <div class=\"clearfix\">
                                <label for=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "filter"), "label")), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 160
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => array("class" => "span8 sonata-filter-option")));
                echo "
                                ";
                // line 161
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget', array("attr" => array("class" => "span8")));
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                    </div>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 168
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 169
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                </div>

                ";
            // line 176
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 177
                echo "                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "paramKey"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "paramValue"), "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "            </fieldset>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  282 => 80,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  197 => 56,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  192 => 55,  180 => 104,  174 => 53,  137 => 47,  97 => 37,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 39,  90 => 29,  129 => 43,  100 => 36,  65 => 25,  70 => 21,  76 => 19,  84 => 26,  81 => 30,  185 => 20,  178 => 13,  175 => 12,  165 => 9,  160 => 48,  134 => 42,  126 => 62,  53 => 7,  34 => 18,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 70,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 72,  172 => 52,  152 => 58,  124 => 43,  104 => 34,  77 => 20,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 115,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 51,  128 => 44,  107 => 35,  61 => 21,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 80,  179 => 70,  159 => 61,  143 => 48,  135 => 53,  119 => 31,  102 => 142,  71 => 25,  67 => 18,  63 => 14,  59 => 23,  38 => 18,  93 => 138,  88 => 74,  78 => 29,  87 => 30,  44 => 12,  31 => 16,  21 => 11,  46 => 9,  26 => 14,  25 => 3,  28 => 14,  94 => 36,  89 => 48,  85 => 22,  75 => 23,  68 => 26,  56 => 22,  27 => 14,  24 => 12,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 67,  156 => 59,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 42,  117 => 44,  105 => 143,  91 => 75,  62 => 24,  49 => 10,  19 => 11,  79 => 33,  72 => 18,  69 => 24,  47 => 10,  40 => 15,  37 => 14,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 70,  131 => 45,  123 => 33,  120 => 44,  115 => 40,  111 => 33,  108 => 144,  101 => 52,  98 => 140,  96 => 139,  83 => 64,  74 => 19,  66 => 23,  55 => 18,  52 => 15,  50 => 20,  43 => 16,  41 => 9,  35 => 4,  32 => 3,  29 => 15,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 102,  173 => 65,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 35,  125 => 44,  122 => 43,  116 => 30,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 34,  92 => 29,  86 => 65,  82 => 28,  80 => 28,  73 => 27,  64 => 18,  60 => 13,  57 => 27,  54 => 26,  51 => 14,  48 => 9,  45 => 17,  42 => 7,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
