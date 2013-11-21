<?php

/* IbwJobeetBundle::layout.html.twig */
class __TwigTemplate_f4733407461e30695f605c6e5e7d0e5658b0dbcca9a094fdaeccd8c539c01637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <title>
            ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "            </title>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
        </head>
        <body>
            <div id=\"container\">
                <div id=\"header\">
                    <div class=\"content\">
                        <h1><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ibw_jobeet_homepage");
        echo "\">
                                <img alt=\"Jobeet Job Board\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/logo.jpg"), "html", null, true);
        echo "\" />
                            </a></h1>

                        <div id=\"sub_header\">
                            <div class=\"post\">
                                <h2>Ask for people</h2>
                                <div>
                                    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ibw_job_new");
        echo "\">Post a Job</a>
                                </div>
                            </div>

                            <div class=\"search\">
                                <h2>Ask for a job</h2>
                                <form action=\"\" method=\"get\">
                                    <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                                    <input type=\"submit\" value=\"search\" />
                                    <div class=\"help\">
                                        Enter some keywords (city, country, position, ...)
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"content\">
               ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 48
            echo "                        <div class=\"flash_notice\">
                       ";
            // line 49
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                            </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
               ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 54
            echo "                            <div class=\"flash_error\">
                       ";
            // line 55
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                                <div class=\"content\">
                   ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "                                    </div>
                                </div>

                                <div id=\"footer\">
                                    <div class=\"content\">
                                        <span class=\"symfony\">
                                            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                                            powered by <a href=\"http://www.symfony.com/\">
                                                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                                            </a>
                                        </span>
                                        <ul>
                                            <li><a href=\"\">About Jobeet</a></li>
                                            <li class=\"feed\"><a href=\"\">Full feed</a></li>
                                            <li><a href=\"\">Jobeet API</a></li>
                                            <li class=\"last\"><a href=\"\">Affiliates</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </body>
                    </html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "                Jobeet - Your best job board
            ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "        ";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        // line 61
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 61,  178 => 13,  175 => 12,  165 => 9,  160 => 5,  134 => 68,  126 => 62,  53 => 21,  34 => 9,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 60,  104 => 53,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 28,  59 => 14,  38 => 6,  93 => 28,  88 => 6,  78 => 21,  87 => 25,  44 => 12,  31 => 4,  21 => 2,  46 => 7,  26 => 6,  25 => 3,  28 => 4,  94 => 28,  89 => 48,  85 => 47,  75 => 17,  68 => 14,  56 => 12,  27 => 3,  24 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 20,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 4,  145 => 46,  139 => 70,  131 => 49,  123 => 47,  120 => 58,  115 => 42,  111 => 55,  108 => 54,  101 => 52,  98 => 31,  96 => 31,  83 => 24,  74 => 14,  66 => 18,  55 => 15,  52 => 21,  50 => 10,  43 => 9,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 64,  173 => 65,  168 => 10,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 56,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 35,  95 => 28,  92 => 49,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 14,  36 => 12,  33 => 4,  30 => 7,);
    }
}
