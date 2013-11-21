<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_4a94b0a81029e90b0d2673ee541fbe6e301aaafdf527dd54b423c5ff4866d61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br />
        ";
    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  118 => 49,  110 => 45,  20 => 11,  114 => 46,  58 => 25,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  282 => 80,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  197 => 56,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  192 => 55,  180 => 104,  174 => 53,  137 => 47,  97 => 41,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 46,  90 => 38,  129 => 56,  100 => 42,  65 => 29,  70 => 29,  76 => 33,  84 => 36,  81 => 34,  185 => 20,  178 => 13,  175 => 12,  165 => 9,  160 => 59,  134 => 42,  126 => 55,  53 => 24,  34 => 15,  23 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 70,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 72,  172 => 52,  152 => 63,  124 => 49,  104 => 42,  77 => 34,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 115,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 53,  132 => 57,  128 => 47,  107 => 44,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 80,  179 => 70,  159 => 61,  143 => 48,  135 => 53,  119 => 44,  102 => 43,  71 => 32,  67 => 28,  63 => 17,  59 => 27,  38 => 19,  93 => 39,  88 => 38,  78 => 21,  87 => 38,  44 => 19,  31 => 23,  21 => 11,  46 => 22,  26 => 13,  25 => 12,  28 => 22,  94 => 40,  89 => 34,  85 => 36,  75 => 21,  68 => 24,  56 => 25,  27 => 14,  24 => 13,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 60,  158 => 67,  156 => 59,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 51,  117 => 49,  105 => 44,  91 => 39,  62 => 28,  49 => 23,  19 => 11,  79 => 34,  72 => 30,  69 => 19,  47 => 22,  40 => 19,  37 => 23,  22 => 11,  246 => 69,  157 => 58,  145 => 56,  139 => 51,  131 => 48,  123 => 52,  120 => 48,  115 => 47,  111 => 30,  108 => 45,  101 => 42,  98 => 42,  96 => 40,  83 => 36,  74 => 33,  66 => 30,  55 => 25,  52 => 24,  50 => 23,  43 => 26,  41 => 25,  35 => 20,  32 => 14,  29 => 15,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 102,  173 => 65,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 51,  130 => 35,  125 => 46,  122 => 45,  116 => 47,  112 => 42,  109 => 45,  106 => 36,  103 => 44,  99 => 42,  95 => 40,  92 => 35,  86 => 37,  82 => 35,  80 => 25,  73 => 32,  64 => 31,  60 => 16,  57 => 15,  54 => 25,  51 => 14,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
