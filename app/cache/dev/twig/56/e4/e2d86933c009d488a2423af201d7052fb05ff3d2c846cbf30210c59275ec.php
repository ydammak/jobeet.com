<?php

/* SonataAdminBundle:CRUD:list_choice.html.twig */
class __TwigTemplate_56e4e2d86933c009d488a2423af201d7052fb05ff3d2c846cbf30210c59275ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 17
            echo "        ";
            if ((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "multiple") == true)) && twig_test_iterable($this->getContext($context, "value")))) {
                // line 18
                echo "
            ";
                // line 19
                $context["result"] = "";
                // line 20
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 21
                echo "
            ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 23
                    echo "                ";
                    if ((!twig_test_empty($this->getContext($context, "result")))) {
                        // line 24
                        echo "                    ";
                        $context["result"] = ($this->getContext($context, "result") . $this->getContext($context, "delimiter"));
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "
                ";
                    // line 27
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "choices", array(), "any", false, true), $this->getContext($context, "val"), array(), "array", true, true)) {
                        // line 28
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 29
                            echo "                        ";
                            $context["result"] = ($this->getContext($context, "result") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "val"), array(), "array"));
                            // line 30
                            echo "                    ";
                        } else {
                            // line 31
                            echo "                        ";
                            $context["result"] = ($this->getContext($context, "result") . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "val"), array(), "array"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue")));
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                ";
                    } else {
                        // line 34
                        echo "                    ";
                        $context["result"] = ($this->getContext($context, "result") . $this->getContext($context, "val"));
                        // line 35
                        echo "                ";
                    }
                    // line 36
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
            ";
                // line 38
                $context["value"] = $this->getContext($context, "result");
                // line 39
                echo "
        ";
            } elseif (twig_in_filter($this->getContext($context, "value"), twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices")))) {
                // line 41
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 42
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "value"), array(), "array");
                    // line 43
                    echo "            ";
                } else {
                    // line 44
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "value"), array(), "array"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue"));
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  58 => 25,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  282 => 80,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  197 => 56,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  192 => 55,  180 => 104,  174 => 53,  137 => 47,  97 => 37,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 39,  90 => 36,  129 => 49,  100 => 36,  65 => 25,  70 => 21,  76 => 19,  84 => 34,  81 => 33,  185 => 20,  178 => 13,  175 => 12,  165 => 9,  160 => 48,  134 => 42,  126 => 48,  53 => 7,  34 => 17,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 70,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 72,  172 => 52,  152 => 58,  124 => 43,  104 => 34,  77 => 20,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 115,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 51,  128 => 44,  107 => 35,  61 => 26,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 80,  179 => 70,  159 => 61,  143 => 48,  135 => 53,  119 => 31,  102 => 142,  71 => 25,  67 => 18,  63 => 14,  59 => 23,  38 => 18,  93 => 138,  88 => 74,  78 => 32,  87 => 35,  44 => 12,  31 => 16,  21 => 11,  46 => 9,  26 => 14,  25 => 3,  28 => 14,  94 => 36,  89 => 48,  85 => 22,  75 => 31,  68 => 26,  56 => 22,  27 => 14,  24 => 12,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 67,  156 => 59,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 42,  117 => 45,  105 => 41,  91 => 75,  62 => 24,  49 => 10,  19 => 11,  79 => 33,  72 => 30,  69 => 29,  47 => 10,  40 => 19,  37 => 18,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 70,  131 => 45,  123 => 47,  120 => 46,  115 => 40,  111 => 43,  108 => 42,  101 => 39,  98 => 140,  96 => 37,  83 => 64,  74 => 19,  66 => 28,  55 => 24,  52 => 23,  50 => 20,  43 => 16,  41 => 9,  35 => 4,  32 => 16,  29 => 15,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 102,  173 => 65,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 35,  125 => 44,  122 => 43,  116 => 30,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 38,  95 => 34,  92 => 29,  86 => 65,  82 => 28,  80 => 28,  73 => 27,  64 => 27,  60 => 13,  57 => 27,  54 => 26,  51 => 14,  48 => 22,  45 => 21,  42 => 20,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
