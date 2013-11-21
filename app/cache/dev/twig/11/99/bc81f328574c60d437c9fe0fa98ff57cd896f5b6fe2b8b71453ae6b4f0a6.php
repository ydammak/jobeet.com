<?php

/* SonataAdminBundle:CRUD:show_choice.html.twig */
class __TwigTemplate_1199bc81f328574c60d437c9fe0fa98ff57cd896f5b6fe2b8b71453ae6b4f0a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "multiple") == true)) && twig_test_iterable($this->getContext($context, "value")))) {
                // line 17
                echo "
            ";
                // line 18
                $context["result"] = "";
                // line 19
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 20
                echo "
            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 22
                    echo "                ";
                    if ((!twig_test_empty($this->getContext($context, "result")))) {
                        // line 23
                        echo "                    ";
                        $context["result"] = ($this->getContext($context, "result") . $this->getContext($context, "delimiter"));
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "
                ";
                    // line 26
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "choices", array(), "any", false, true), $this->getContext($context, "val"), array(), "array", true, true)) {
                        // line 27
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 28
                            echo "                        ";
                            $context["result"] = ($this->getContext($context, "result") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "val"), array(), "array"));
                            // line 29
                            echo "                    ";
                        } else {
                            // line 30
                            echo "                        ";
                            $context["result"] = ($this->getContext($context, "result") . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "val"), array(), "array"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue")));
                            // line 31
                            echo "                    ";
                        }
                        // line 32
                        echo "                ";
                    } else {
                        // line 33
                        echo "                    ";
                        $context["result"] = ($this->getContext($context, "result") . $this->getContext($context, "val"));
                        // line 34
                        echo "                ";
                    }
                    // line 35
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
            ";
                // line 37
                $context["value"] = $this->getContext($context, "result");
                // line 38
                echo "
        ";
            } elseif (twig_in_filter($this->getContext($context, "value"), twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices")))) {
                // line 40
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 41
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "value"), array(), "array");
                    // line 42
                    echo "            ";
                } else {
                    // line 43
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "value"), array(), "array"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue"));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "safe")) {
            // line 49
            echo "        ";
            echo $this->getContext($context, "value");
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "
    ";
        }
        // line 53
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  20 => 11,  114 => 46,  58 => 25,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  282 => 80,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  197 => 56,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  192 => 55,  180 => 104,  174 => 53,  137 => 47,  97 => 37,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 42,  90 => 36,  129 => 56,  100 => 42,  65 => 25,  70 => 21,  76 => 35,  84 => 36,  81 => 33,  185 => 20,  178 => 13,  175 => 12,  165 => 9,  160 => 48,  134 => 42,  126 => 55,  53 => 18,  34 => 16,  23 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 70,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 72,  172 => 52,  152 => 58,  124 => 43,  104 => 34,  77 => 30,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 115,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  107 => 40,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 80,  179 => 70,  159 => 61,  143 => 48,  135 => 53,  119 => 44,  102 => 39,  71 => 28,  67 => 30,  63 => 25,  59 => 26,  38 => 14,  93 => 138,  88 => 37,  78 => 21,  87 => 35,  44 => 19,  31 => 14,  21 => 11,  46 => 9,  26 => 14,  25 => 12,  28 => 13,  94 => 40,  89 => 34,  85 => 37,  75 => 32,  68 => 27,  56 => 25,  27 => 14,  24 => 12,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 67,  156 => 59,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 52,  117 => 49,  105 => 26,  91 => 75,  62 => 27,  49 => 28,  19 => 11,  79 => 34,  72 => 19,  69 => 29,  47 => 20,  40 => 24,  37 => 17,  22 => 11,  246 => 69,  157 => 47,  145 => 53,  139 => 51,  131 => 48,  123 => 52,  120 => 46,  115 => 40,  111 => 30,  108 => 42,  101 => 37,  98 => 36,  96 => 44,  83 => 32,  74 => 29,  66 => 26,  55 => 25,  52 => 24,  50 => 21,  43 => 25,  41 => 20,  35 => 20,  32 => 16,  29 => 15,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 102,  173 => 65,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 23,  95 => 19,  92 => 35,  86 => 33,  82 => 23,  80 => 31,  73 => 34,  64 => 31,  60 => 24,  57 => 23,  54 => 22,  51 => 29,  48 => 22,  45 => 26,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 15,);
    }
}
