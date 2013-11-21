<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_5ae368af8bfd5551204d3284459ae4e19f03d522884395135532384ce6ec55dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (((!(null === $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")))) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getContext($context, "url")), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form class=\"form-horizontal\"
              action=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => $this->getContext($context, "url"), 1 => array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 12
            if ((!$this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 13
            echo "              >
            ";
            // line 14
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 15
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 16
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                </div>
            ";
            }
            // line 19
            echo "
            ";
            // line 20
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 33
            echo "
                <div class=\"tab-content\">
                    ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 36
                echo "                        <div class=\"tab-pane ";
                if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 39
                if (($this->getAttribute($this->getContext($context, "form_group"), "description") != false)) {
                    // line 40
                    echo "                                        <p>";
                    echo $this->getAttribute($this->getContext($context, "form_group"), "description");
                    echo "</p>
                                    ";
                }
                // line 42
                echo "
                                    ";
                // line 43
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 44
                    echo "                                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 45
                        echo "                                            ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"), 'row');
                        echo "
                                        ";
                    }
                    // line 47
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                </div>
                            </fieldset>
                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </div>

            ";
            // line 54
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 57
            echo "
            ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

            ";
            // line 60
            $this->displayBlock('formactions', $context, $blocks);
            // line 102
            echo "        </form>
    ";
        }
        // line 104
        echo "
";
    }

    // line 20
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 21
        echo "                <div class=\"tabbable\">
                    <ul class=\"nav nav-tabs\">
                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
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
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 24
            echo "                            <li class=\"";
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                echo "active";
            }
            echo "\">
                                <a href=\"#";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\" data-toggle=\"tab\">
                                    <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name"), 1 => array(), 2 => $this->getAttribute($this->getContext($context, "form_group"), "translation_domain")), "method"), "html", null, true);
            echo "
                                </a>
                            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </ul>
            ";
    }

    // line 54
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 55
        echo "                </div>
            ";
    }

    // line 60
    public function block_formactions($context, array $blocks = array())
    {
        // line 61
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 62
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
            // line 63
            echo "                        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")))) {
                // line 64
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            } else {
                // line 66
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 68
            echo "                    ";
        } else {
            // line 69
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "supportsPreviewMode")) {
                // line 70
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"icon-eye-open\"></i>
                                ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 75
            echo "                        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")))) {
                // line 76
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>

                            ";
                // line 78
                if ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method")) {
                    // line 79
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 81
                echo "
                            ";
                // line 82
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "delete"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "DELETE", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 83
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 86
                echo "
                            ";
                // line 87
                if ((($this->getAttribute($this->getContext($context, "admin"), "isAclEnabled", array(), "method") && $this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "MASTER", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 88
                    echo "                                <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "acl", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 90
                echo "                        ";
            } else {
                // line 91
                echo "                            ";
                if ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "edit"), "method")) {
                    // line 92
                    echo "                                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 94
                echo "                            ";
                if ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method")) {
                    // line 95
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 97
                echo "                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 99
            echo "                    ";
        }
        // line 100
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  361 => 97,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 88,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 75,  287 => 72,  280 => 69,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 27,  192 => 23,  180 => 104,  174 => 60,  137 => 47,  97 => 37,  12 => 34,  170 => 57,  155 => 52,  127 => 40,  113 => 39,  90 => 29,  129 => 43,  100 => 36,  65 => 15,  70 => 21,  76 => 19,  84 => 26,  81 => 21,  185 => 20,  178 => 13,  175 => 12,  165 => 9,  160 => 52,  134 => 42,  126 => 62,  53 => 7,  34 => 12,  23 => 1,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 55,  244 => 99,  236 => 94,  232 => 93,  216 => 25,  211 => 84,  200 => 79,  195 => 77,  188 => 21,  184 => 72,  172 => 66,  152 => 58,  124 => 43,  104 => 34,  77 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 70,  278 => 115,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 73,  220 => 87,  214 => 69,  177 => 65,  169 => 58,  140 => 45,  132 => 51,  128 => 44,  107 => 35,  61 => 21,  273 => 96,  269 => 94,  254 => 60,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 70,  159 => 61,  143 => 48,  135 => 53,  119 => 42,  102 => 32,  71 => 25,  67 => 18,  63 => 14,  59 => 13,  38 => 18,  93 => 26,  88 => 32,  78 => 21,  87 => 30,  44 => 12,  31 => 15,  21 => 11,  46 => 9,  26 => 5,  25 => 3,  28 => 14,  94 => 36,  89 => 48,  85 => 22,  75 => 23,  68 => 16,  56 => 12,  27 => 14,  24 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 57,  163 => 63,  158 => 67,  156 => 59,  151 => 50,  142 => 59,  138 => 54,  136 => 51,  121 => 42,  117 => 44,  105 => 40,  91 => 25,  62 => 14,  49 => 10,  19 => 11,  79 => 33,  72 => 18,  69 => 24,  47 => 10,  40 => 6,  37 => 5,  22 => 12,  246 => 54,  157 => 4,  145 => 46,  139 => 70,  131 => 45,  123 => 40,  120 => 44,  115 => 40,  111 => 33,  108 => 38,  101 => 52,  98 => 35,  96 => 27,  83 => 35,  74 => 19,  66 => 23,  55 => 18,  52 => 15,  50 => 25,  43 => 14,  41 => 9,  35 => 4,  32 => 3,  29 => 2,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 60,  176 => 102,  173 => 65,  168 => 65,  164 => 54,  162 => 55,  154 => 58,  149 => 51,  147 => 56,  144 => 46,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 34,  92 => 29,  86 => 28,  82 => 28,  80 => 28,  73 => 19,  64 => 18,  60 => 13,  57 => 27,  54 => 26,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
