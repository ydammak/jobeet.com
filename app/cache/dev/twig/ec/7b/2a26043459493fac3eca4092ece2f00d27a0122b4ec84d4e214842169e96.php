<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_ec7b2a26043459493fac3eca4092ece2f00d27a0122b4ec84d4e214842169e96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ($this->getContext($context, "name")) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name")), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "view_group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute($this->getContext($context, "elements", true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getContext($context, "elements"), $this->getContext($context, "field_name"), array(), "array"), $this->getContext($context, "object"));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  114 => 46,  58 => 25,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  357 => 125,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  300 => 113,  291 => 109,  288 => 108,  282 => 80,  275 => 77,  272 => 76,  226 => 67,  205 => 59,  197 => 56,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 127,  352 => 121,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 72,  280 => 79,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 66,  192 => 55,  180 => 104,  174 => 53,  137 => 47,  97 => 37,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 48,  90 => 36,  129 => 56,  100 => 42,  65 => 25,  70 => 21,  76 => 35,  84 => 36,  81 => 33,  185 => 20,  178 => 13,  175 => 12,  165 => 9,  160 => 48,  134 => 42,  126 => 55,  53 => 18,  34 => 16,  23 => 11,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 70,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 72,  172 => 52,  152 => 58,  124 => 43,  104 => 34,  77 => 13,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 115,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 57,  128 => 44,  107 => 44,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 80,  179 => 70,  159 => 61,  143 => 48,  135 => 53,  119 => 31,  102 => 39,  71 => 30,  67 => 30,  63 => 28,  59 => 26,  38 => 18,  93 => 138,  88 => 37,  78 => 36,  87 => 35,  44 => 21,  31 => 15,  21 => 11,  46 => 9,  26 => 14,  25 => 13,  28 => 14,  94 => 40,  89 => 38,  85 => 37,  75 => 32,  68 => 26,  56 => 25,  27 => 14,  24 => 12,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 67,  156 => 59,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 52,  117 => 49,  105 => 26,  91 => 75,  62 => 27,  49 => 17,  19 => 11,  79 => 34,  72 => 31,  69 => 29,  47 => 23,  40 => 19,  37 => 17,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 70,  131 => 45,  123 => 52,  120 => 46,  115 => 40,  111 => 30,  108 => 42,  101 => 46,  98 => 38,  96 => 44,  83 => 15,  74 => 19,  66 => 28,  55 => 25,  52 => 24,  50 => 23,  43 => 21,  41 => 20,  35 => 20,  32 => 16,  29 => 15,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 102,  173 => 65,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 35,  125 => 44,  122 => 43,  116 => 30,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 23,  95 => 19,  92 => 39,  86 => 65,  82 => 36,  80 => 14,  73 => 34,  64 => 31,  60 => 19,  57 => 26,  54 => 26,  51 => 14,  48 => 22,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 17,  30 => 15,);
    }
}
