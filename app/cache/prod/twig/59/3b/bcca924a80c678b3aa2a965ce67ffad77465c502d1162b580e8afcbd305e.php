<?php

/* IbwJobeetBundle:Job:list.html.twig */
class __TwigTemplate_593bbcca924a80c678b3aa2a965ce67ffad77465c502d1162b580e8afcbd305e extends Twig_Template
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
        echo "<table class=\"jobs\">
    ";
        // line 2
        if (isset($context["jobs"])) { $_jobs_ = $context["jobs"]; } else { $_jobs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_jobs_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "        <tr class=\"";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($_loop_, "index")), "html", null, true);
            echo "\">
            <td class=\"location\">";
            // line 4
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "location"), "html", null, true);
            echo "</td>
            <td class=\"position\">
                <a href=\"";
            // line 6
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_show", array("id" => $this->getAttribute($_entity_, "id"), "company" => $this->getAttribute($_entity_, "companyslug"), "location" => $this->getAttribute($_entity_, "locationslug"), "position" => $this->getAttribute($_entity_, "positionslug"))), "html", null, true);
            echo "\">
                    ";
            // line 7
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "position"), "html", null, true);
            echo "
                </a>
            </td>
            <td class=\"company\">";
            // line 10
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "company"), "html", null, true);
            echo "</td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  64 => 10,  79 => 23,  316 => 115,  296 => 107,  282 => 101,  276 => 99,  267 => 94,  262 => 93,  248 => 87,  243 => 86,  229 => 80,  218 => 77,  210 => 73,  205 => 72,  199 => 70,  191 => 66,  167 => 58,  153 => 52,  148 => 51,  123 => 42,  182 => 13,  179 => 12,  172 => 59,  169 => 9,  164 => 5,  161 => 56,  128 => 60,  103 => 52,  23 => 1,  317 => 115,  303 => 109,  297 => 107,  288 => 102,  283 => 101,  268 => 94,  263 => 93,  244 => 86,  238 => 84,  230 => 80,  225 => 79,  206 => 72,  200 => 70,  168 => 58,  154 => 52,  135 => 45,  116 => 38,  87 => 25,  42 => 8,  54 => 11,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 110,  302 => 109,  295 => 81,  287 => 102,  279 => 78,  256 => 91,  251 => 71,  239 => 69,  231 => 68,  219 => 77,  201 => 66,  143 => 70,  138 => 68,  134 => 45,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 24,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 110,  293 => 92,  285 => 90,  281 => 88,  277 => 99,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 91,  253 => 77,  249 => 87,  247 => 70,  237 => 84,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  55 => 15,  39 => 14,  24 => 4,  98 => 40,  44 => 9,  36 => 6,  43 => 8,  57 => 7,  38 => 7,  110 => 37,  89 => 16,  80 => 41,  65 => 17,  63 => 28,  58 => 10,  46 => 4,  34 => 9,  26 => 6,  50 => 10,  27 => 3,  114 => 55,  109 => 31,  106 => 53,  101 => 19,  88 => 6,  85 => 47,  77 => 12,  67 => 17,  47 => 6,  28 => 4,  25 => 3,  22 => 2,  227 => 92,  224 => 79,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 66,  189 => 61,  186 => 65,  181 => 63,  178 => 61,  173 => 59,  162 => 56,  158 => 56,  155 => 55,  152 => 55,  142 => 49,  136 => 44,  133 => 43,  130 => 62,  120 => 40,  105 => 35,  100 => 29,  78 => 40,  75 => 19,  60 => 12,  53 => 21,  40 => 3,  32 => 4,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 73,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 65,  183 => 62,  180 => 63,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 51,  146 => 41,  140 => 46,  137 => 37,  129 => 44,  124 => 58,  121 => 24,  118 => 36,  115 => 38,  111 => 54,  107 => 31,  104 => 35,  97 => 24,  93 => 49,  90 => 26,  81 => 22,  70 => 18,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 6,  49 => 10,  45 => 9,  41 => 9,  37 => 5,  33 => 5,  30 => 7,);
    }
}
