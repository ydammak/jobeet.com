<?php

/* ::base.html.twig */
class __TwigTemplate_6314e3ca06b6458bc0f69388c2603c95d2df4e01d6961b5fac0c1d19c81ed582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  144 => 41,  141 => 40,  95 => 29,  139 => 43,  61 => 13,  82 => 13,  64 => 10,  79 => 23,  316 => 115,  296 => 107,  282 => 101,  276 => 99,  267 => 94,  262 => 93,  248 => 87,  243 => 86,  229 => 80,  218 => 77,  210 => 73,  205 => 72,  199 => 70,  191 => 66,  167 => 58,  153 => 52,  148 => 51,  123 => 42,  182 => 55,  179 => 54,  172 => 59,  169 => 50,  164 => 5,  161 => 56,  128 => 60,  103 => 25,  23 => 1,  317 => 115,  303 => 109,  297 => 107,  288 => 102,  283 => 101,  268 => 94,  263 => 93,  244 => 86,  238 => 84,  230 => 80,  225 => 79,  206 => 72,  200 => 70,  168 => 58,  154 => 52,  135 => 39,  116 => 38,  87 => 21,  42 => 10,  54 => 11,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 110,  302 => 109,  295 => 81,  287 => 102,  279 => 78,  256 => 91,  251 => 71,  239 => 69,  231 => 68,  219 => 77,  201 => 66,  143 => 70,  138 => 68,  134 => 45,  131 => 39,  122 => 37,  117 => 35,  108 => 31,  102 => 28,  92 => 25,  84 => 25,  72 => 21,  69 => 11,  51 => 13,  48 => 7,  35 => 7,  29 => 5,  312 => 96,  308 => 110,  293 => 92,  285 => 90,  281 => 88,  277 => 99,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 91,  253 => 77,  249 => 87,  247 => 70,  237 => 84,  204 => 69,  198 => 65,  194 => 64,  150 => 42,  147 => 51,  127 => 41,  112 => 34,  96 => 25,  76 => 19,  71 => 17,  55 => 12,  39 => 14,  24 => 4,  98 => 24,  44 => 11,  36 => 6,  43 => 8,  57 => 7,  38 => 7,  110 => 37,  89 => 26,  80 => 18,  65 => 18,  63 => 28,  58 => 13,  46 => 4,  34 => 9,  26 => 6,  50 => 10,  27 => 3,  114 => 55,  109 => 31,  106 => 53,  101 => 30,  88 => 6,  85 => 47,  77 => 12,  67 => 17,  47 => 12,  28 => 4,  25 => 3,  22 => 2,  227 => 92,  224 => 79,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 57,  189 => 61,  186 => 65,  181 => 63,  178 => 61,  173 => 52,  162 => 46,  158 => 56,  155 => 55,  152 => 55,  142 => 49,  136 => 44,  133 => 43,  130 => 62,  120 => 40,  105 => 35,  100 => 29,  78 => 23,  75 => 17,  60 => 12,  53 => 5,  40 => 3,  32 => 4,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 73,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 65,  183 => 62,  180 => 63,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 51,  146 => 41,  140 => 46,  137 => 37,  129 => 44,  124 => 37,  121 => 24,  118 => 36,  115 => 31,  111 => 29,  107 => 33,  104 => 35,  97 => 24,  93 => 23,  90 => 22,  81 => 24,  70 => 18,  66 => 13,  62 => 11,  59 => 6,  56 => 12,  52 => 9,  49 => 9,  45 => 9,  41 => 7,  37 => 5,  33 => 6,  30 => 3,);
    }
}
