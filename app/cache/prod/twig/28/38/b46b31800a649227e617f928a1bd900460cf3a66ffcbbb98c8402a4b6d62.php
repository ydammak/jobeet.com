<?php

/* IbwJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_2838b46b31800a649227e617f928a1bd900460cf3a66ffcbbb98c8402a4b6d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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
        // line 3
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_edit_form_, array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "    ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 8
            echo "        <ul class=\"error_list\">
            ";
            // line 9
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                <li>";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messageParameters"), "validators"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <h1>Job edit</h1>
<form action=\"";
        // line 24
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_update", array("token" => $this->getAttribute($_entity_, "token"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_edit_form_, 'enctype');
        echo ">
    <table id=\"job_form\">
            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <input type=\"submit\" value=\"Preview your job\" />
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <th>";
        // line 35
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "category"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 37
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "category"), 'errors');
        echo "
                        ";
        // line 38
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "category"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 42
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "type"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 44
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "type"), 'errors');
        echo "
                        ";
        // line 45
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "type"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 49
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "company"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 51
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "company"), 'errors');
        echo "
                        ";
        // line 52
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "company"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 56
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "file"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 58
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "file"), 'errors');
        echo "
                        ";
        // line 59
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute($_edit_form_, "file"), 'form');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 63
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "url"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 65
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "url"), 'errors');
        echo "
                        ";
        // line 66
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "url"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 70
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "position"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 72
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "position"), 'errors');
        echo "
                        ";
        // line 73
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "position"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 77
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "location"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 79
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "location"), 'errors');
        echo "
                        ";
        // line 80
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "location"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 84
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "description"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 86
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "description"), 'errors');
        echo "
                        ";
        // line 87
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "description"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 91
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "how_to_apply"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 93
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "how_to_apply"), 'errors');
        echo "
                        ";
        // line 94
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "how_to_apply"), 'widget');
        echo "
                    </td>
                </tr>
                
                <tr>
                    <th>";
        // line 99
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "is_public"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 101
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "is_public"), 'errors');
        echo "
                        ";
        // line 102
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "is_public"), 'widget');
        echo "
                        <br /> Whether the job can also be published on affiliate websites or not.
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 107
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "email"), 'label');
        echo "</th>
                    <td>
                        ";
        // line 109
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "email"), 'errors');
        echo "
                        ";
        // line 110
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_edit_form_, "email"), 'widget');
        echo "
                    </td>
                </tr>
            </tbody>
        </table>
    ";
        // line 115
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_edit_form_, 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 115,  303 => 109,  297 => 107,  288 => 102,  283 => 101,  268 => 94,  263 => 93,  244 => 86,  238 => 84,  230 => 80,  225 => 79,  206 => 72,  200 => 70,  168 => 58,  154 => 52,  135 => 45,  116 => 38,  87 => 24,  42 => 8,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 77,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 23,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 110,  293 => 92,  285 => 90,  281 => 88,  277 => 99,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 91,  253 => 77,  249 => 87,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  55 => 15,  39 => 7,  24 => 4,  98 => 40,  44 => 9,  36 => 6,  43 => 7,  57 => 11,  38 => 7,  110 => 20,  89 => 16,  80 => 41,  65 => 14,  63 => 13,  58 => 10,  46 => 12,  34 => 5,  26 => 6,  50 => 10,  27 => 3,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  88 => 6,  85 => 22,  77 => 12,  67 => 17,  47 => 6,  28 => 4,  25 => 3,  22 => 2,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 66,  189 => 61,  186 => 60,  181 => 63,  178 => 61,  173 => 59,  162 => 56,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 44,  120 => 40,  105 => 35,  100 => 27,  78 => 40,  75 => 19,  60 => 12,  53 => 19,  40 => 6,  32 => 4,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 73,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 65,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 51,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 42,  121 => 24,  118 => 36,  115 => 39,  111 => 37,  107 => 28,  104 => 28,  97 => 24,  93 => 9,  90 => 21,  81 => 22,  70 => 18,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 9,  41 => 9,  37 => 5,  33 => 5,  30 => 3,);
    }
}
