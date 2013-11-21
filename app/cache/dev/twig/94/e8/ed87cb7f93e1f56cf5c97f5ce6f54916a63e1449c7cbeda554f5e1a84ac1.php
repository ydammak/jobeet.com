<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_94e8ed87cb7f93e1f56cf5c97f5ce6f54916a63e1449c7cbeda554f5e1a84ac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row-fluid\">
        ";
        // line 18
        $context["has_center"] = false;
        // line 19
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blocks"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "block"), "position") == "center")) {
                // line 21
                echo "                ";
                $context["has_center"] = true;
                // line 22
                echo "            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div class=\"";
        // line 25
        if ($this->getContext($context, "has_center")) {
            echo "span3";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blocks"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute($this->getContext($context, "block"), "position") == "left")) {
                // line 28
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($this->getContext($context, "block"), "type"), "settings" => $this->getAttribute($this->getContext($context, "block"), "settings"))));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>

        ";
        // line 33
        if ($this->getContext($context, "has_center")) {
            // line 34
            echo "            <div class=\"span4\">
                ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blocks"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 36
                echo "                    ";
                if (($this->getAttribute($this->getContext($context, "block"), "position") == "center")) {
                    // line 37
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($this->getContext($context, "block"), "type"), "settings" => $this->getAttribute($this->getContext($context, "block"), "settings"))));
                    echo "
                    ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </div>
        ";
        }
        // line 42
        echo "
        <div class=\"";
        // line 43
        if ($this->getContext($context, "has_center")) {
            echo "span4";
        } else {
            echo "span6";
        }
        echo "\">
            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blocks"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 45
            echo "                ";
            if (($this->getAttribute($this->getContext($context, "block"), "position") == "right")) {
                // line 46
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($this->getContext($context, "block"), "type"), "settings" => $this->getAttribute($this->getContext($context, "block"), "settings"))));
                echo "
                ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 143,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 118,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  319 => 90,  311 => 89,  297 => 84,  289 => 81,  286 => 80,  274 => 77,  263 => 71,  250 => 67,  233 => 62,  228 => 59,  191 => 50,  146 => 34,  344 => 97,  338 => 94,  335 => 93,  321 => 91,  295 => 88,  292 => 87,  259 => 70,  215 => 54,  190 => 50,  181 => 47,  161 => 38,  153 => 48,  150 => 58,  118 => 46,  110 => 36,  20 => 1,  114 => 46,  58 => 22,  568 => 175,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  446 => 139,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  357 => 125,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  300 => 113,  291 => 82,  288 => 85,  282 => 79,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  197 => 54,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 107,  352 => 121,  346 => 92,  343 => 91,  340 => 95,  332 => 97,  330 => 87,  327 => 86,  320 => 84,  315 => 90,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 82,  277 => 78,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 58,  192 => 55,  180 => 104,  174 => 53,  137 => 27,  97 => 31,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 37,  90 => 18,  129 => 42,  100 => 42,  65 => 5,  70 => 25,  76 => 13,  84 => 16,  81 => 15,  185 => 20,  178 => 45,  175 => 43,  165 => 9,  160 => 59,  134 => 42,  126 => 55,  53 => 80,  34 => 15,  23 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 67,  244 => 99,  236 => 63,  232 => 93,  216 => 25,  211 => 84,  200 => 55,  195 => 77,  188 => 21,  184 => 47,  172 => 52,  152 => 38,  124 => 23,  104 => 23,  77 => 8,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 70,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 61,  177 => 65,  169 => 51,  140 => 44,  132 => 43,  128 => 47,  107 => 24,  61 => 23,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 82,  227 => 60,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 57,  204 => 80,  179 => 70,  159 => 49,  143 => 29,  135 => 53,  119 => 39,  102 => 17,  71 => 32,  67 => 24,  63 => 4,  59 => 165,  38 => 7,  93 => 39,  88 => 37,  78 => 26,  87 => 17,  44 => 74,  31 => 15,  21 => 11,  46 => 19,  26 => 13,  25 => 12,  28 => 14,  94 => 40,  89 => 34,  85 => 28,  75 => 34,  68 => 31,  56 => 81,  27 => 3,  24 => 3,  201 => 57,  196 => 52,  183 => 82,  171 => 61,  166 => 50,  163 => 60,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 54,  136 => 58,  121 => 29,  117 => 49,  105 => 44,  91 => 30,  62 => 166,  49 => 112,  19 => 1,  79 => 35,  72 => 199,  69 => 198,  47 => 19,  40 => 44,  37 => 54,  22 => 2,  246 => 69,  157 => 41,  145 => 60,  139 => 59,  131 => 25,  123 => 48,  120 => 47,  115 => 45,  111 => 43,  108 => 42,  101 => 33,  98 => 39,  96 => 40,  83 => 36,  74 => 33,  66 => 30,  55 => 21,  52 => 20,  50 => 78,  43 => 21,  41 => 20,  35 => 20,  32 => 5,  29 => 11,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 60,  176 => 45,  173 => 42,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 57,  125 => 40,  122 => 45,  116 => 47,  112 => 26,  109 => 45,  106 => 35,  103 => 34,  99 => 42,  95 => 20,  92 => 19,  86 => 37,  82 => 27,  80 => 9,  73 => 7,  64 => 184,  60 => 3,  57 => 155,  54 => 154,  51 => 21,  48 => 67,  45 => 18,  42 => 17,  39 => 16,  36 => 17,  33 => 16,  30 => 15,);
    }
}
