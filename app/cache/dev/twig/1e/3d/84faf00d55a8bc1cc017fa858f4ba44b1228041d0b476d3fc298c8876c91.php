<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_1e3d84faf00d55a8bc1cc017fa858f4ba44b1228041d0b476d3fc298c8876c91 extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value")), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  155 => 52,  127 => 40,  113 => 37,  90 => 29,  129 => 43,  100 => 33,  65 => 15,  70 => 21,  76 => 19,  84 => 26,  81 => 21,  185 => 61,  178 => 13,  175 => 12,  165 => 9,  160 => 54,  134 => 42,  126 => 62,  53 => 7,  34 => 12,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  104 => 34,  77 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 45,  132 => 51,  128 => 49,  107 => 35,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 22,  59 => 13,  38 => 18,  93 => 26,  88 => 6,  78 => 21,  87 => 30,  44 => 12,  31 => 15,  21 => 11,  46 => 9,  26 => 5,  25 => 3,  28 => 14,  94 => 30,  89 => 48,  85 => 22,  75 => 23,  68 => 30,  56 => 12,  27 => 14,  24 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 50,  142 => 59,  138 => 54,  136 => 51,  121 => 39,  117 => 44,  105 => 40,  91 => 25,  62 => 14,  49 => 6,  19 => 11,  79 => 24,  72 => 18,  69 => 25,  47 => 10,  40 => 13,  37 => 5,  22 => 12,  246 => 90,  157 => 4,  145 => 46,  139 => 70,  131 => 49,  123 => 40,  120 => 44,  115 => 35,  111 => 33,  108 => 38,  101 => 52,  98 => 35,  96 => 27,  83 => 24,  74 => 14,  66 => 18,  55 => 15,  52 => 15,  50 => 25,  43 => 21,  41 => 9,  35 => 6,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 34,  92 => 29,  86 => 28,  82 => 28,  80 => 25,  73 => 19,  64 => 18,  60 => 6,  57 => 27,  54 => 26,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
