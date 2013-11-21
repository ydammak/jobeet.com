<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_6e9287d641d88c3aff2a6bb4504a1d9fdbca028b8daeef6c206622c5d811b223 extends Twig_Template
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
        if (twig_test_empty($this->getContext($context, "value"))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value"), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "format")), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value"), "F j, Y"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  361 => 97,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  280 => 69,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 27,  192 => 23,  180 => 104,  174 => 60,  137 => 47,  97 => 37,  12 => 34,  170 => 57,  155 => 52,  127 => 40,  113 => 39,  90 => 29,  129 => 43,  100 => 36,  65 => 15,  70 => 21,  76 => 19,  84 => 26,  81 => 21,  185 => 20,  178 => 13,  175 => 12,  165 => 9,  160 => 52,  134 => 42,  126 => 62,  53 => 7,  34 => 18,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 55,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 72,  172 => 66,  152 => 58,  124 => 43,  104 => 34,  77 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 70,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 58,  140 => 45,  132 => 51,  128 => 44,  107 => 35,  61 => 21,  273 => 96,  269 => 94,  254 => 60,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 48,  135 => 53,  119 => 42,  102 => 32,  71 => 25,  67 => 18,  63 => 14,  59 => 13,  38 => 18,  93 => 26,  88 => 32,  78 => 21,  87 => 30,  44 => 12,  31 => 16,  21 => 11,  46 => 9,  26 => 14,  25 => 3,  28 => 14,  94 => 36,  89 => 48,  85 => 22,  75 => 23,  68 => 16,  56 => 12,  27 => 14,  24 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 57,  163 => 63,  158 => 67,  156 => 59,  151 => 50,  142 => 59,  138 => 54,  136 => 51,  121 => 42,  117 => 44,  105 => 40,  91 => 25,  62 => 14,  49 => 10,  19 => 11,  79 => 33,  72 => 18,  69 => 24,  47 => 10,  40 => 6,  37 => 20,  22 => 12,  246 => 54,  157 => 4,  145 => 46,  139 => 70,  131 => 45,  123 => 40,  120 => 44,  115 => 40,  111 => 33,  108 => 38,  101 => 52,  98 => 35,  96 => 27,  83 => 35,  74 => 19,  66 => 23,  55 => 18,  52 => 15,  50 => 25,  43 => 14,  41 => 9,  35 => 4,  32 => 3,  29 => 15,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 102,  173 => 65,  168 => 65,  164 => 54,  162 => 55,  154 => 58,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 34,  92 => 29,  86 => 28,  82 => 28,  80 => 28,  73 => 19,  64 => 18,  60 => 13,  57 => 27,  54 => 26,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
