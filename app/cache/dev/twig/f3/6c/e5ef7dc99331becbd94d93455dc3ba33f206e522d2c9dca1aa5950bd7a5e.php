<?php

/* IbwJobeetBundle:Category:show.html.twig */
class __TwigTemplate_f36ce5ef7dc99331becbd94d93455dc3ba33f206e522d2c9dca1aa5950bd7a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo " category
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Feed
            </a>
        </div>
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name"), "html", null, true);
        echo "</h1>
    </div>
 
    ";
        // line 21
        echo twig_include($this->env, $context, "IbwJobeetBundle:Job:list.html.twig", array("jobs" => $this->getAttribute($this->getContext($context, "category"), "activejobs")));
        echo "
 
    ";
        // line 23
        if (($this->getContext($context, "last_page") > 1)) {
            // line 24
            echo "        <div class=\"pagination\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => 1)), "html", null, true);
            echo "\">
                <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
            </a>
 
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
            </a>
 
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 34
                echo "                ";
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    // line 35
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 37
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 39
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " 
            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
            </a>
 
            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("IbwJobeetBundle_category", array("slug" => $this->getAttribute($this->getContext($context, "category"), "slug"), "page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    ";
        }
        // line 50
        echo " 
    <div class=\"pagination_desc\">
        <strong>";
        // line 52
        echo twig_escape_filter($this->env, $this->getContext($context, "total_jobs"), "html", null, true);
        echo "</strong> jobs in this category
 
        ";
        // line 54
        if (($this->getContext($context, "last_page") > 1)) {
            // line 55
            echo "            - page <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "current_page"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "last_page"), "html", null, true);
            echo "</strong>
        ";
        }
        // line 57
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  155 => 52,  127 => 40,  113 => 37,  90 => 29,  129 => 43,  100 => 33,  65 => 15,  70 => 21,  76 => 19,  84 => 26,  81 => 21,  185 => 61,  178 => 13,  175 => 12,  165 => 9,  160 => 54,  134 => 42,  126 => 62,  53 => 7,  34 => 9,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  104 => 34,  77 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 45,  132 => 51,  128 => 49,  107 => 35,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 22,  59 => 13,  38 => 6,  93 => 26,  88 => 6,  78 => 21,  87 => 30,  44 => 12,  31 => 4,  21 => 2,  46 => 9,  26 => 5,  25 => 3,  28 => 4,  94 => 30,  89 => 48,  85 => 22,  75 => 23,  68 => 16,  56 => 12,  27 => 3,  24 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 50,  142 => 59,  138 => 54,  136 => 51,  121 => 39,  117 => 44,  105 => 40,  91 => 25,  62 => 14,  49 => 6,  19 => 1,  79 => 24,  72 => 18,  69 => 25,  47 => 10,  40 => 7,  37 => 5,  22 => 2,  246 => 90,  157 => 4,  145 => 46,  139 => 70,  131 => 49,  123 => 40,  120 => 44,  115 => 35,  111 => 33,  108 => 38,  101 => 52,  98 => 35,  96 => 27,  83 => 24,  74 => 14,  66 => 18,  55 => 15,  52 => 15,  50 => 9,  43 => 8,  41 => 9,  35 => 6,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 34,  92 => 29,  86 => 28,  82 => 28,  80 => 25,  73 => 19,  64 => 18,  60 => 6,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 3,  36 => 8,  33 => 4,  30 => 3,);
    }
}
