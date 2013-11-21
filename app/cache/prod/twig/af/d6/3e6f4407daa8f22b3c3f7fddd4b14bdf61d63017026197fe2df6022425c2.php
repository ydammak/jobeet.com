<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_afd63e6f4407daa8f22b3c3f7fddd4b14bdf61d63017026197fe2df6022425c2 extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  44 => 9,  36 => 7,  43 => 8,  57 => 11,  38 => 5,  110 => 20,  89 => 16,  80 => 41,  65 => 14,  63 => 13,  58 => 12,  46 => 10,  34 => 5,  26 => 4,  50 => 7,  27 => 4,  114 => 22,  109 => 21,  106 => 20,  101 => 19,  88 => 6,  85 => 16,  77 => 12,  67 => 9,  47 => 6,  28 => 4,  25 => 3,  22 => 1,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  100 => 19,  78 => 40,  75 => 24,  60 => 12,  53 => 19,  40 => 8,  32 => 6,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 9,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 12,  59 => 8,  56 => 20,  52 => 11,  49 => 10,  45 => 6,  41 => 8,  37 => 4,  33 => 4,  30 => 3,);
    }
}
