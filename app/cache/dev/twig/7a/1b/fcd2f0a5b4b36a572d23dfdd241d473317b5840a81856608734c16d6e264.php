<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_7a1bfcd2f0a5b4b36a572d23dfdd241d473317b5840a81856608734c16d6e264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('form_row', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ((!($this->getContext($context, "label") === false))) {
            // line 16
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => ((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " control-label")));
            // line 17
            echo "
        ";
            // line 18
            if ((!$this->getContext($context, "compound"))) {
                // line 19
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if ($this->getContext($context, "required")) {
                // line 22
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (twig_test_empty($this->getContext($context, "label"))) {
                // line 26
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getContext($context, "name")));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 31
                echo $this->getContext($context, "widget");
                echo "
                <span>
                    ";
                // line 33
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 42
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "trans", array(0 => $this->getContext($context, "label"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "                ";
                echo (($this->getContext($context, "required")) ? ("*") : (""));
                echo "
            </label>
        ";
            }
            // line 50
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 54
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            if (($this->getContext($context, "attrname") == "class")) {
                echo "unstyled ";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        if (!twig_in_filter("class", $this->getContext($context, "attr"))) {
            echo "class=\"unstyled\"";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "            <li>
                ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
            echo "
                ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        echo "    ";
        if ($this->getContext($context, "compound")) {
            // line 78
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "            <li>
                ";
                // line 81
                ob_start();
                // line 82
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 84
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label', array("in_list_checkbox" => true, "widget" => $this->getContext($context, "form_widget_content")) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </ul>
    ";
        } else {
            // line 89
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 90
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 91
                echo "            <option value=\"\">
                ";
                // line 92
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 97
                echo "            </option>
        ";
            }
            // line 99
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 100
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 101
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 102
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 103
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 105
                echo "        ";
            }
            // line 106
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 107
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_form_row($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 115
            echo "        <div class=\"control-group ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\">
            ";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls ";
            // line 117
            if ((!($this->getContext($context, "label") === false))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "
                ";
            // line 119
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 120
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 121
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                    </div>
                ";
            }
            // line 124
            echo "            </div>
        </div>
    ";
        } else {
            // line 127
            echo "        <div class=\"control-group";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 128
            $this->displayBlock('label', $context, $blocks);
            // line 135
            echo "
            ";
            // line 136
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!($this->getContext($context, "label") === false)));
            // line 137
            echo "            <div class=\"controls sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ((!$this->getContext($context, "has_label"))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 139
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "

                ";
            // line 141
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 142
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 143
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                    </div>
                ";
            }
            // line 146
            echo "
                ";
            // line 147
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 148
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 150
            echo "            </div>
        </div>
    ";
        }
    }

    // line 128
    public function block_label($context, array $blocks = array())
    {
        // line 129
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 130
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 132
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 134
        echo "            ";
    }

    // line 155
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 156
        ob_start();
        // line 157
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 158
        if ($this->getContext($context, "allow_delete")) {
            // line 159
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"icon-remove\"></i></a>
        ";
        }
        // line 161
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 167
        ob_start();
        // line 168
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 169
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 170
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute($this->getContext($context, "prototype"), "vars"), "name"), "class" => (($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : (""))));
            // line 171
            echo "    ";
        }
        // line 172
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        ";
        // line 174
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        ";
        // line 178
        if ($this->getContext($context, "allow_add")) {
            // line 179
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"icon-plus\"></i></a></div>
        ";
        }
        // line 181
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 186
        echo "    ";
        ob_start();
        // line 187
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

            ";
        // line 190
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 191
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "
            ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 199
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 200
        echo "    ";
        ob_start();
        // line 201
        echo "        <div class=\"control-group";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
        echo "\">

            ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
        echo "

            <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
        echo "
            </div>

            ";
        // line 209
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 210
            echo "                <div class=\"help-inline sonata-ba-field-error-messages\">
                    ";
            // line 211
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'errors');
            echo "
                </div>
            ";
        }
        // line 214
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 143,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 118,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  319 => 90,  311 => 89,  297 => 84,  289 => 81,  286 => 80,  274 => 77,  263 => 71,  250 => 67,  233 => 62,  228 => 59,  191 => 50,  146 => 34,  344 => 97,  338 => 94,  335 => 93,  321 => 91,  295 => 88,  292 => 87,  259 => 70,  215 => 54,  190 => 50,  181 => 47,  161 => 38,  153 => 35,  150 => 58,  118 => 28,  110 => 25,  20 => 11,  114 => 46,  58 => 25,  568 => 175,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  446 => 139,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  357 => 125,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  300 => 113,  291 => 82,  288 => 85,  282 => 79,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  197 => 54,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 107,  352 => 121,  346 => 92,  343 => 91,  340 => 95,  332 => 97,  330 => 87,  327 => 86,  320 => 84,  315 => 90,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 82,  277 => 78,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 58,  192 => 55,  180 => 104,  174 => 53,  137 => 27,  97 => 41,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 46,  90 => 18,  129 => 24,  100 => 42,  65 => 5,  70 => 29,  76 => 13,  84 => 16,  81 => 15,  185 => 20,  178 => 45,  175 => 43,  165 => 9,  160 => 59,  134 => 42,  126 => 55,  53 => 80,  34 => 53,  23 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 67,  244 => 99,  236 => 63,  232 => 93,  216 => 25,  211 => 84,  200 => 55,  195 => 77,  188 => 21,  184 => 47,  172 => 52,  152 => 38,  124 => 23,  104 => 23,  77 => 8,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 70,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 65,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  107 => 24,  61 => 27,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 82,  227 => 60,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 57,  204 => 80,  179 => 70,  159 => 61,  143 => 29,  135 => 53,  119 => 44,  102 => 17,  71 => 32,  67 => 185,  63 => 4,  59 => 165,  38 => 18,  93 => 39,  88 => 12,  78 => 21,  87 => 17,  44 => 74,  31 => 15,  21 => 11,  46 => 19,  26 => 13,  25 => 12,  28 => 14,  94 => 40,  89 => 34,  85 => 36,  75 => 21,  68 => 6,  56 => 81,  27 => 3,  24 => 2,  201 => 57,  196 => 52,  183 => 82,  171 => 61,  166 => 50,  163 => 60,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 29,  117 => 49,  105 => 44,  91 => 39,  62 => 166,  49 => 112,  19 => 11,  79 => 14,  72 => 199,  69 => 198,  47 => 75,  40 => 44,  37 => 54,  22 => 11,  246 => 69,  157 => 41,  145 => 56,  139 => 31,  131 => 25,  123 => 30,  120 => 48,  115 => 27,  111 => 30,  108 => 45,  101 => 22,  98 => 21,  96 => 40,  83 => 36,  74 => 33,  66 => 30,  55 => 25,  52 => 113,  50 => 78,  43 => 21,  41 => 20,  35 => 20,  32 => 13,  29 => 11,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 60,  176 => 45,  173 => 42,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 36,  147 => 56,  144 => 33,  141 => 48,  133 => 51,  130 => 35,  125 => 46,  122 => 45,  116 => 47,  112 => 26,  109 => 45,  106 => 36,  103 => 44,  99 => 42,  95 => 20,  92 => 19,  86 => 37,  82 => 10,  80 => 9,  73 => 7,  64 => 184,  60 => 3,  57 => 155,  54 => 154,  51 => 21,  48 => 67,  45 => 66,  42 => 62,  39 => 61,  36 => 17,  33 => 16,  30 => 15,);
    }
}
