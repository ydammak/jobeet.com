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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 48
            echo "                        <div class=\"flash_notice\">
                       ";
            // line 49
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 54
            echo "                            <div class=\"flash_error\">
                       ";
            // line 55
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
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
        return array (  182 => 13,  179 => 12,  172 => 10,  169 => 9,  164 => 5,  161 => 4,  128 => 60,  103 => 52,  23 => 1,  317 => 115,  303 => 109,  297 => 107,  288 => 102,  283 => 101,  268 => 94,  263 => 93,  244 => 86,  238 => 84,  230 => 80,  225 => 79,  206 => 72,  200 => 70,  168 => 58,  154 => 52,  135 => 45,  116 => 38,  87 => 24,  42 => 8,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 77,  201 => 66,  143 => 70,  138 => 68,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 23,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 110,  293 => 92,  285 => 90,  281 => 88,  277 => 99,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 91,  253 => 77,  249 => 87,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  55 => 15,  39 => 14,  24 => 4,  98 => 40,  44 => 9,  36 => 12,  43 => 7,  57 => 11,  38 => 7,  110 => 20,  89 => 16,  80 => 41,  65 => 14,  63 => 28,  58 => 10,  46 => 12,  34 => 9,  26 => 6,  50 => 10,  27 => 3,  114 => 55,  109 => 31,  106 => 53,  101 => 19,  88 => 6,  85 => 47,  77 => 12,  67 => 17,  47 => 6,  28 => 4,  25 => 3,  22 => 2,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 66,  189 => 61,  186 => 60,  181 => 63,  178 => 61,  173 => 59,  162 => 56,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 62,  120 => 40,  105 => 35,  100 => 27,  78 => 40,  75 => 19,  60 => 12,  53 => 21,  40 => 6,  32 => 4,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 73,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 65,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 51,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 58,  121 => 24,  118 => 36,  115 => 39,  111 => 54,  107 => 28,  104 => 28,  97 => 24,  93 => 49,  90 => 48,  81 => 22,  70 => 18,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 20,  45 => 9,  41 => 9,  37 => 5,  33 => 5,  30 => 7,);
    }
}
