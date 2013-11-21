<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_194d17240eb63d8a28ef888dc85c7eebab7da608af9609a8c088b1c98d34b10b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label', $context, $blocks);
        // line 64
        echo "
";
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_row', $context, $blocks);
        // line 78
        echo "
";
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 3
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 6
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " class=\"inputs-list\">
        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 8
                echo "            <li>
                ";
                // line 9
                ob_start();
                // line 10
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 12
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label', array("in_list_checkbox" => true, "widget" => $this->getContext($context, "form_widget_content")));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </ul>
    ";
        } else {
            // line 17
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 18
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 19
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                echo "</option>
        ";
            }
            // line 21
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 22
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 23
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 24
                if (((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0) && (!(null === $this->getContext($context, "separator"))))) {
                    // line 25
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 29
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 36
        ob_start();
        // line 37
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 38
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_label($context, array $blocks = array())
    {
        // line 45
        ob_start();
        // line 46
        echo "    ";
        if ((!$this->getContext($context, "compound"))) {
            // line 47
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("for" => $this->getContext($context, "id")));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 50
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " required")));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
            // line 53
            echo "        <label";
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
            // line 54
            echo $this->getContext($context, "widget");
            echo "
            <span>
                ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 60
            echo "        <label";
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
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 67
    public function block_form_row($context, array $blocks = array())
    {
        // line 68
        ob_start();
        // line 69
        echo "    <div class=\"control-group ";
        echo (((0 < twig_length_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')))) ? ("error") : (""));
        echo " \">
        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"controls\">
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_form_errors($context, array $blocks = array())
    {
        // line 82
        ob_start();
        // line 83
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 84
            echo "        ";
            if (((!$this->getAttribute($this->getContext($context, "form"), "parent")) || twig_in_filter("repeated", $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "block_prefixes", array(), "array")))) {
                // line 85
                echo "            <div class=\"control-group error\">
        ";
            }
            // line 87
            echo "        <span class=\"help-inline\">
            ";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 89
                echo "                ";
                if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                    // line 90
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                    echo "
                ";
                }
                // line 92
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        </span>
        ";
            // line 94
            if (((!$this->getAttribute($this->getContext($context, "form"), "parent")) || twig_in_filter("repeated", $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "block_prefixes", array(), "array")))) {
                // line 95
                echo "            </div>
        ";
            }
            // line 97
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  344 => 97,  338 => 94,  335 => 93,  321 => 92,  295 => 88,  292 => 87,  259 => 70,  215 => 54,  190 => 50,  181 => 47,  161 => 38,  153 => 35,  150 => 58,  118 => 21,  110 => 18,  20 => 11,  114 => 46,  58 => 25,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 85,  282 => 83,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  197 => 56,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 95,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 90,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 82,  277 => 81,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  192 => 55,  180 => 104,  174 => 53,  137 => 27,  97 => 41,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 46,  90 => 38,  129 => 24,  100 => 42,  65 => 5,  70 => 29,  76 => 33,  84 => 36,  81 => 34,  185 => 20,  178 => 46,  175 => 12,  165 => 9,  160 => 59,  134 => 42,  126 => 55,  53 => 80,  34 => 41,  23 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 67,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 48,  172 => 52,  152 => 63,  124 => 23,  104 => 42,  77 => 8,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 70,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 78,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 65,  169 => 51,  140 => 28,  132 => 57,  128 => 47,  107 => 44,  61 => 27,  273 => 96,  269 => 75,  254 => 69,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 60,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 80,  179 => 70,  159 => 61,  143 => 29,  135 => 53,  119 => 44,  102 => 17,  71 => 32,  67 => 28,  63 => 4,  59 => 27,  38 => 18,  93 => 39,  88 => 12,  78 => 21,  87 => 38,  44 => 19,  31 => 15,  21 => 11,  46 => 19,  26 => 13,  25 => 12,  28 => 14,  94 => 40,  89 => 34,  85 => 36,  75 => 21,  68 => 6,  56 => 81,  27 => 3,  24 => 2,  201 => 57,  196 => 52,  183 => 82,  171 => 61,  166 => 50,  163 => 60,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 22,  117 => 49,  105 => 44,  91 => 39,  62 => 28,  49 => 20,  19 => 11,  79 => 34,  72 => 30,  69 => 19,  47 => 22,  40 => 44,  37 => 43,  22 => 11,  246 => 69,  157 => 58,  145 => 56,  139 => 51,  131 => 25,  123 => 52,  120 => 48,  115 => 47,  111 => 30,  108 => 45,  101 => 42,  98 => 15,  96 => 40,  83 => 36,  74 => 33,  66 => 30,  55 => 25,  52 => 24,  50 => 78,  43 => 21,  41 => 20,  35 => 20,  32 => 35,  29 => 34,  209 => 24,  203 => 78,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 60,  176 => 45,  173 => 44,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 51,  130 => 35,  125 => 46,  122 => 45,  116 => 47,  112 => 19,  109 => 45,  106 => 36,  103 => 44,  99 => 42,  95 => 40,  92 => 35,  86 => 37,  82 => 10,  80 => 9,  73 => 7,  64 => 31,  60 => 3,  57 => 23,  54 => 25,  51 => 21,  48 => 67,  45 => 66,  42 => 64,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
