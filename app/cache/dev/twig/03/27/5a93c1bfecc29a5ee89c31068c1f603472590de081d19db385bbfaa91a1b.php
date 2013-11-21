<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_03275a93c1bfecc29a5ee89c31068c1f603472590de081d19db385bbfaa91a1b extends Twig_Template
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
        // line 11
        echo "
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"pagination pagination-centered\">
            <ul>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "getLinks", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (($this->getContext($context, "page") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getContext($context, "page")), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getContext($context, "page")), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 178,  683 => 272,  676 => 262,  674 => 232,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 208,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 178,  521 => 163,  515 => 161,  509 => 159,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  366 => 156,  363 => 123,  354 => 119,  316 => 74,  281 => 61,  256 => 54,  245 => 49,  210 => 30,  207 => 29,  198 => 22,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 142,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 118,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  339 => 100,  336 => 113,  329 => 95,  326 => 76,  319 => 90,  311 => 89,  297 => 84,  289 => 81,  286 => 80,  274 => 77,  263 => 57,  250 => 67,  233 => 62,  228 => 59,  191 => 273,  146 => 34,  344 => 97,  338 => 94,  335 => 93,  321 => 91,  295 => 66,  292 => 87,  259 => 55,  215 => 32,  190 => 50,  181 => 47,  161 => 38,  153 => 62,  150 => 58,  118 => 91,  110 => 46,  20 => 1,  114 => 89,  58 => 22,  568 => 175,  557 => 177,  553 => 176,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 148,  463 => 133,  460 => 132,  449 => 123,  446 => 139,  441 => 138,  426 => 134,  419 => 98,  415 => 97,  410 => 129,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 157,  357 => 120,  347 => 115,  333 => 112,  324 => 92,  307 => 71,  300 => 68,  291 => 65,  288 => 85,  282 => 79,  275 => 77,  272 => 76,  226 => 36,  205 => 59,  197 => 54,  186 => 54,  148 => 44,  370 => 100,  367 => 131,  361 => 122,  352 => 121,  346 => 92,  343 => 91,  340 => 95,  332 => 97,  330 => 87,  327 => 86,  320 => 75,  315 => 90,  313 => 73,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 82,  277 => 59,  271 => 58,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  223 => 58,  192 => 55,  180 => 104,  174 => 118,  137 => 27,  97 => 31,  12 => 34,  170 => 57,  155 => 52,  127 => 34,  113 => 42,  90 => 34,  129 => 42,  100 => 41,  65 => 26,  70 => 25,  76 => 32,  84 => 16,  81 => 16,  185 => 20,  178 => 45,  175 => 43,  165 => 110,  160 => 59,  134 => 42,  126 => 45,  53 => 24,  34 => 18,  23 => 13,  270 => 110,  266 => 109,  261 => 107,  253 => 102,  249 => 50,  244 => 99,  236 => 63,  232 => 93,  216 => 25,  211 => 84,  200 => 55,  195 => 77,  188 => 21,  184 => 47,  172 => 112,  152 => 38,  124 => 52,  104 => 40,  77 => 8,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 70,  298 => 91,  294 => 90,  285 => 84,  283 => 70,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 47,  229 => 73,  220 => 56,  214 => 61,  177 => 119,  169 => 69,  140 => 44,  132 => 47,  128 => 47,  107 => 24,  61 => 27,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 82,  227 => 60,  224 => 35,  221 => 77,  219 => 33,  217 => 75,  208 => 57,  204 => 28,  179 => 72,  159 => 49,  143 => 29,  135 => 55,  119 => 39,  102 => 42,  71 => 29,  67 => 31,  63 => 27,  59 => 165,  38 => 19,  93 => 39,  88 => 33,  78 => 31,  87 => 17,  44 => 21,  31 => 17,  21 => 11,  46 => 18,  26 => 14,  25 => 12,  28 => 14,  94 => 39,  89 => 37,  85 => 32,  75 => 30,  68 => 31,  56 => 21,  27 => 12,  24 => 11,  201 => 57,  196 => 52,  183 => 82,  171 => 61,  166 => 50,  163 => 68,  158 => 37,  156 => 36,  151 => 61,  142 => 58,  138 => 94,  136 => 58,  121 => 51,  117 => 50,  105 => 44,  91 => 38,  62 => 25,  49 => 112,  19 => 11,  79 => 31,  72 => 199,  69 => 32,  47 => 21,  40 => 15,  37 => 54,  22 => 2,  246 => 69,  157 => 64,  145 => 59,  139 => 57,  131 => 25,  123 => 48,  120 => 47,  115 => 45,  111 => 40,  108 => 42,  101 => 37,  98 => 36,  96 => 19,  83 => 36,  74 => 33,  66 => 53,  55 => 25,  52 => 23,  50 => 22,  43 => 21,  41 => 20,  35 => 20,  32 => 11,  29 => 16,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 177,  187 => 49,  182 => 172,  176 => 45,  173 => 71,  168 => 65,  164 => 54,  162 => 55,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 95,  133 => 51,  130 => 57,  125 => 40,  122 => 45,  116 => 43,  112 => 47,  109 => 45,  106 => 44,  103 => 38,  99 => 42,  95 => 20,  92 => 19,  86 => 17,  82 => 33,  80 => 82,  73 => 7,  64 => 28,  60 => 26,  57 => 23,  54 => 154,  51 => 21,  48 => 19,  45 => 18,  42 => 20,  39 => 19,  36 => 19,  33 => 13,  30 => 15,);
    }
}
