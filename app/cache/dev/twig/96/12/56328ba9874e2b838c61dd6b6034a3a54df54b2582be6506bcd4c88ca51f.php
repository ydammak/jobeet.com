<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_961256328ba9874e2b838c61dd6b6034a3a54df54b2582be6506bcd4c88ca51f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 195,  429 => 188,  422 => 184,  408 => 176,  323 => 128,  351 => 141,  318 => 111,  231 => 83,  212 => 78,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  706 => 472,  694 => 468,  682 => 465,  678 => 464,  673 => 462,  630 => 455,  625 => 453,  621 => 452,  565 => 414,  527 => 409,  389 => 160,  378 => 157,  353 => 121,  334 => 141,  331 => 140,  328 => 139,  290 => 119,  255 => 93,  222 => 83,  306 => 107,  303 => 122,  248 => 94,  194 => 70,  701 => 418,  692 => 412,  685 => 405,  675 => 463,  665 => 398,  654 => 389,  650 => 388,  644 => 385,  634 => 381,  624 => 374,  616 => 450,  599 => 358,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 406,  497 => 300,  450 => 268,  433 => 258,  431 => 189,  416 => 248,  385 => 226,  299 => 174,  284 => 167,  242 => 113,  399 => 158,  396 => 157,  383 => 150,  359 => 140,  348 => 140,  345 => 147,  325 => 129,  308 => 118,  276 => 111,  267 => 101,  237 => 85,  234 => 84,  218 => 77,  202 => 77,  167 => 60,  239 => 86,  225 => 89,  213 => 78,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 473,  717 => 186,  708 => 183,  703 => 182,  698 => 469,  695 => 180,  690 => 467,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 461,  651 => 222,  645 => 460,  642 => 218,  640 => 384,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 362,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 404,  509 => 159,  503 => 303,  499 => 155,  496 => 154,  490 => 153,  485 => 293,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 269,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  366 => 142,  363 => 126,  354 => 119,  316 => 74,  281 => 114,  256 => 96,  245 => 88,  210 => 77,  207 => 75,  198 => 22,  713 => 214,  707 => 211,  704 => 210,  702 => 470,  696 => 206,  686 => 466,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 451,  613 => 188,  608 => 187,  605 => 186,  602 => 449,  596 => 181,  592 => 354,  590 => 178,  585 => 177,  551 => 174,  547 => 411,  542 => 320,  539 => 171,  536 => 170,  533 => 169,  530 => 410,  528 => 167,  525 => 408,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 202,  456 => 275,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 168,  371 => 156,  358 => 151,  349 => 323,  342 => 137,  339 => 100,  336 => 189,  329 => 131,  326 => 138,  319 => 90,  311 => 89,  297 => 104,  289 => 113,  286 => 112,  274 => 97,  263 => 95,  250 => 67,  233 => 87,  228 => 59,  191 => 67,  146 => 53,  344 => 321,  338 => 135,  335 => 134,  321 => 112,  295 => 66,  292 => 135,  259 => 103,  215 => 32,  190 => 76,  181 => 65,  161 => 63,  153 => 56,  150 => 55,  118 => 49,  110 => 51,  20 => 11,  114 => 71,  58 => 18,  568 => 338,  557 => 177,  553 => 329,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 280,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 255,  419 => 98,  415 => 180,  410 => 245,  395 => 84,  392 => 83,  388 => 117,  386 => 159,  382 => 93,  380 => 160,  377 => 147,  369 => 157,  357 => 123,  347 => 322,  333 => 112,  324 => 113,  307 => 128,  300 => 280,  291 => 102,  288 => 101,  282 => 79,  275 => 105,  272 => 76,  226 => 84,  205 => 59,  197 => 71,  186 => 83,  148 => 64,  370 => 100,  367 => 155,  361 => 333,  352 => 138,  346 => 92,  343 => 146,  340 => 145,  332 => 116,  330 => 87,  327 => 114,  320 => 127,  315 => 125,  313 => 178,  310 => 81,  304 => 79,  302 => 281,  296 => 121,  293 => 120,  287 => 64,  280 => 131,  277 => 59,  271 => 58,  265 => 96,  262 => 98,  260 => 124,  257 => 61,  223 => 58,  192 => 88,  180 => 104,  174 => 65,  137 => 66,  97 => 63,  12 => 34,  170 => 84,  155 => 47,  127 => 35,  113 => 40,  90 => 27,  129 => 57,  100 => 36,  65 => 11,  70 => 24,  76 => 27,  84 => 27,  81 => 23,  185 => 66,  178 => 66,  175 => 65,  165 => 60,  160 => 76,  134 => 54,  126 => 51,  53 => 15,  34 => 5,  23 => 1,  270 => 102,  266 => 109,  261 => 107,  253 => 100,  249 => 89,  244 => 136,  236 => 109,  232 => 88,  216 => 79,  211 => 84,  200 => 72,  195 => 77,  188 => 90,  184 => 63,  172 => 64,  152 => 46,  124 => 52,  104 => 37,  77 => 25,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 199,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 236,  393 => 125,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 184,  314 => 99,  312 => 124,  309 => 108,  305 => 175,  298 => 120,  294 => 111,  285 => 84,  283 => 100,  278 => 106,  268 => 127,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 63,  169 => 86,  140 => 58,  132 => 59,  128 => 58,  107 => 41,  61 => 15,  273 => 159,  269 => 107,  254 => 149,  243 => 92,  240 => 86,  238 => 139,  235 => 85,  230 => 106,  227 => 86,  224 => 81,  221 => 78,  219 => 101,  217 => 87,  208 => 76,  204 => 28,  179 => 107,  159 => 70,  143 => 51,  135 => 81,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  93 => 39,  88 => 25,  78 => 18,  87 => 32,  44 => 11,  31 => 4,  21 => 2,  46 => 13,  26 => 6,  25 => 12,  28 => 3,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  27 => 7,  24 => 3,  201 => 57,  196 => 92,  183 => 74,  171 => 102,  166 => 54,  163 => 82,  158 => 62,  156 => 58,  151 => 59,  142 => 61,  138 => 61,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 24,  49 => 14,  19 => 1,  79 => 29,  72 => 18,  69 => 17,  47 => 15,  40 => 8,  37 => 7,  22 => 12,  246 => 93,  157 => 64,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 43,  111 => 47,  108 => 48,  101 => 31,  98 => 34,  96 => 30,  83 => 31,  74 => 30,  66 => 25,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 8,  35 => 6,  32 => 4,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 70,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 64,  147 => 54,  144 => 42,  141 => 51,  133 => 51,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 40,  99 => 31,  95 => 34,  92 => 28,  86 => 43,  82 => 28,  80 => 32,  73 => 23,  64 => 21,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 13,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
