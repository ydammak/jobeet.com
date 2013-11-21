<?php

/* IbwJobeetBundle:Job:admin.html.twig */
class __TwigTemplate_994a36b42afa9e735866fd00d8c9fc6465e4f9252efe86a9a3404ac14da3c5c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
       ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "job"), "isActivated"))) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_edit", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
            echo "\">Edit</a></li>
            <li>
                <form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_publish", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "publish_form"), 'widget');
            echo "
                        <button type=\"submit\">Publish</button>
                    </form>
                </li>
       ";
        }
        // line 12
        echo " 
                <li>
                    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_delete", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
                            <button type=\"submit\" onclick=\"if (!confirm('Are you sure?')) {
                                        return false;
                                    }\">Delete</button>
                            </form>
                        </li>
        ";
        // line 21
        if ($this->getAttribute($this->getContext($context, "job"), "isActivated")) {
            // line 22
            echo "                        <li ";
            if ($this->getAttribute($this->getContext($context, "job"), "expiresSoon")) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 23
            if ($this->getAttribute($this->getContext($context, "job"), "isExpired")) {
                // line 24
                echo "                                Expired
                ";
            } else {
                // line 26
                echo "                                Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "job"), "getDaysBeforeExpires"), "html", null, true);
                echo "</strong> days
                ";
            }
            // line 28
            echo "
                ";
            // line 29
            if ($this->getAttribute($this->getContext($context, "job"), "expiresSoon")) {
                // line 30
                echo "                                - <a href=\"\">Extend</a> for another 30 days
                ";
            }
            // line 32
            echo "                            </li>
        ";
        } else {
            // line 34
            echo "                            <li>
                                [Bookmark this <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ibw_job_preview", array("token" => $this->getAttribute($this->getContext($context, "job"), "token"), "company" => $this->getAttribute($this->getContext($context, "job"), "companyslug"), "location" => $this->getAttribute($this->getContext($context, "job"), "locationslug"), "position" => $this->getAttribute($this->getContext($context, "job"), "positionslug"))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
                            </li>
        ";
        }
        // line 38
        echo "                        </ul>
                    </div>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  76 => 26,  84 => 26,  81 => 25,  185 => 61,  178 => 13,  175 => 12,  165 => 9,  160 => 5,  134 => 68,  126 => 62,  53 => 7,  34 => 9,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 101,  244 => 99,  236 => 94,  232 => 93,  216 => 86,  211 => 84,  200 => 79,  195 => 77,  188 => 73,  184 => 72,  172 => 66,  152 => 58,  124 => 45,  104 => 38,  77 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 18,  63 => 22,  59 => 10,  38 => 6,  93 => 28,  88 => 6,  78 => 21,  87 => 30,  44 => 12,  31 => 4,  21 => 2,  46 => 9,  26 => 5,  25 => 3,  28 => 4,  94 => 28,  89 => 48,  85 => 29,  75 => 23,  68 => 14,  56 => 12,  27 => 3,  24 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 54,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 32,  62 => 23,  49 => 6,  19 => 1,  79 => 24,  72 => 24,  69 => 25,  47 => 10,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 4,  145 => 46,  139 => 70,  131 => 49,  123 => 47,  120 => 44,  115 => 42,  111 => 55,  108 => 38,  101 => 52,  98 => 35,  96 => 31,  83 => 24,  74 => 14,  66 => 18,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 9,  35 => 6,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 56,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 34,  92 => 29,  86 => 28,  82 => 28,  80 => 23,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 14,  45 => 17,  42 => 7,  39 => 3,  36 => 8,  33 => 4,  30 => 7,);
    }
}
