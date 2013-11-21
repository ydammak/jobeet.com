<?php

/* IbwJobeetBundle:Job:index.html.twig */
class __TwigTemplate_4e94ee55e644b673f91b4f67e7572d6f2fe37b7d4698566060e3522fb01dc87b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div id=\"jobs\">
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "        <div class=\"category_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "slug"), "html", null, true);
            echo "\">
           <div class=\"category\">
                <div class=\"feed\">
                    <a href=\"\">Feed</a>
                </div>
                <h1>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"))), "html", null, true);
            echo "\">
                                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
            echo "
                        </a>
                    </h1>

                </div>
              ";
            // line 23
            echo twig_include($this->env, $context, "IbwJobeetBundle:Job:list.html.twig", array("jobs" => $this->getAttribute($this->getContext($context, "category"), "activejobs")));
            echo "
                    ";
            // line 24
            if ($this->getAttribute($this->getContext($context, "category"), "morejobs")) {
                // line 25
                echo "                        <div class=\"more_jobs\">
                            and <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "morejobs"), "html", null, true);
                echo "</a>
                        </div>
                ";
            }
            // line 29
            echo "                    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 25,  185 => 61,  178 => 13,  175 => 12,  165 => 9,  160 => 5,  134 => 68,  126 => 62,  53 => 11,  34 => 9,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  104 => 37,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 17,  59 => 14,  38 => 6,  93 => 28,  88 => 6,  78 => 21,  87 => 25,  44 => 12,  31 => 4,  21 => 2,  46 => 9,  26 => 6,  25 => 3,  28 => 4,  94 => 28,  89 => 48,  85 => 47,  75 => 23,  68 => 14,  56 => 12,  27 => 3,  24 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 10,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 4,  145 => 46,  139 => 70,  131 => 49,  123 => 47,  120 => 44,  115 => 42,  111 => 55,  108 => 38,  101 => 52,  98 => 31,  96 => 31,  83 => 24,  74 => 14,  66 => 18,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 56,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 14,  36 => 12,  33 => 4,  30 => 7,);
    }
}
