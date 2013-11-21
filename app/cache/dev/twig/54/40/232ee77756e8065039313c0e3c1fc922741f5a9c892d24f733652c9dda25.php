<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_5440232ee77756e8065039313c0e3c1fc922741f5a9c892d24f733652c9dda25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "majors")), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "majors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, $this->getContext($context, "minors"))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  798 => 184,  793 => 182,  785 => 178,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  699 => 142,  697 => 141,  689 => 137,  680 => 134,  662 => 125,  649 => 122,  643 => 120,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  564 => 99,  524 => 90,  501 => 80,  493 => 78,  478 => 74,  442 => 62,  405 => 49,  350 => 26,  439 => 195,  429 => 188,  422 => 184,  408 => 50,  323 => 128,  351 => 141,  318 => 111,  231 => 83,  212 => 279,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  706 => 472,  694 => 138,  682 => 465,  678 => 133,  673 => 462,  630 => 455,  625 => 453,  621 => 452,  565 => 414,  527 => 91,  389 => 160,  378 => 157,  353 => 121,  334 => 141,  331 => 140,  328 => 139,  290 => 5,  255 => 353,  222 => 297,  306 => 107,  303 => 122,  248 => 336,  194 => 248,  701 => 418,  692 => 412,  685 => 405,  675 => 132,  665 => 398,  654 => 123,  650 => 388,  644 => 385,  634 => 381,  624 => 374,  616 => 450,  599 => 358,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 92,  520 => 406,  497 => 300,  450 => 64,  433 => 60,  431 => 189,  416 => 248,  385 => 41,  299 => 8,  284 => 167,  242 => 113,  399 => 158,  396 => 157,  383 => 150,  359 => 140,  348 => 140,  345 => 147,  325 => 129,  308 => 13,  276 => 381,  267 => 101,  237 => 85,  234 => 84,  218 => 77,  202 => 266,  167 => 60,  239 => 86,  225 => 298,  213 => 78,  804 => 266,  801 => 185,  796 => 183,  789 => 256,  783 => 177,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 161,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 473,  717 => 186,  708 => 183,  703 => 182,  698 => 469,  695 => 139,  690 => 467,  687 => 409,  683 => 135,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 124,  656 => 461,  651 => 222,  645 => 460,  642 => 218,  640 => 119,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 362,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 101,  573 => 196,  555 => 95,  552 => 194,  550 => 94,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 85,  509 => 83,  503 => 81,  499 => 155,  496 => 79,  490 => 77,  485 => 293,  479 => 149,  471 => 147,  468 => 146,  464 => 71,  459 => 69,  454 => 269,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 172,  390 => 43,  375 => 168,  373 => 156,  366 => 33,  363 => 32,  354 => 119,  316 => 16,  281 => 388,  256 => 96,  245 => 335,  210 => 270,  207 => 269,  198 => 22,  713 => 214,  707 => 148,  704 => 210,  702 => 470,  696 => 140,  686 => 466,  681 => 265,  669 => 201,  666 => 126,  663 => 199,  655 => 194,  652 => 193,  635 => 117,  618 => 451,  613 => 188,  608 => 187,  605 => 186,  602 => 449,  596 => 106,  592 => 354,  590 => 178,  585 => 177,  551 => 174,  547 => 93,  542 => 320,  539 => 171,  536 => 170,  533 => 169,  530 => 410,  528 => 167,  525 => 408,  516 => 161,  512 => 84,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 202,  456 => 68,  451 => 140,  428 => 59,  425 => 135,  414 => 52,  403 => 48,  400 => 47,  394 => 168,  371 => 35,  358 => 151,  349 => 323,  342 => 23,  339 => 100,  336 => 189,  329 => 131,  326 => 138,  319 => 90,  311 => 14,  297 => 104,  289 => 113,  286 => 112,  274 => 97,  263 => 365,  250 => 341,  233 => 304,  228 => 59,  191 => 246,  146 => 181,  344 => 24,  338 => 135,  335 => 21,  321 => 112,  295 => 66,  292 => 135,  259 => 103,  215 => 280,  190 => 76,  181 => 232,  161 => 202,  153 => 56,  150 => 55,  118 => 49,  110 => 38,  20 => 1,  114 => 111,  58 => 14,  568 => 338,  557 => 96,  553 => 329,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 73,  467 => 72,  463 => 280,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 58,  419 => 98,  415 => 180,  410 => 245,  395 => 84,  392 => 83,  388 => 42,  386 => 159,  382 => 93,  380 => 160,  377 => 37,  369 => 157,  357 => 123,  347 => 322,  333 => 112,  324 => 113,  307 => 128,  300 => 280,  291 => 102,  288 => 4,  282 => 79,  275 => 105,  272 => 76,  226 => 84,  205 => 59,  197 => 249,  186 => 239,  148 => 64,  370 => 100,  367 => 155,  361 => 333,  352 => 138,  346 => 92,  343 => 146,  340 => 145,  332 => 20,  330 => 87,  327 => 114,  320 => 127,  315 => 125,  313 => 15,  310 => 81,  304 => 79,  302 => 281,  296 => 121,  293 => 6,  287 => 64,  280 => 131,  277 => 59,  271 => 374,  265 => 96,  262 => 98,  260 => 363,  257 => 61,  223 => 58,  192 => 88,  180 => 104,  174 => 217,  137 => 66,  97 => 63,  12 => 34,  170 => 84,  155 => 47,  127 => 35,  113 => 40,  90 => 27,  129 => 148,  100 => 36,  65 => 17,  70 => 24,  76 => 31,  84 => 41,  81 => 40,  185 => 66,  178 => 66,  175 => 65,  165 => 60,  160 => 76,  134 => 161,  126 => 147,  53 => 15,  34 => 5,  23 => 1,  270 => 102,  266 => 366,  261 => 107,  253 => 342,  249 => 89,  244 => 136,  236 => 109,  232 => 88,  216 => 79,  211 => 84,  200 => 72,  195 => 77,  188 => 90,  184 => 233,  172 => 64,  152 => 46,  124 => 132,  104 => 90,  77 => 25,  480 => 75,  474 => 149,  469 => 158,  461 => 70,  457 => 131,  453 => 199,  444 => 149,  440 => 263,  437 => 61,  435 => 262,  430 => 137,  427 => 143,  423 => 57,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 236,  393 => 125,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 141,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 184,  314 => 99,  312 => 124,  309 => 108,  305 => 175,  298 => 120,  294 => 111,  285 => 3,  283 => 100,  278 => 387,  268 => 373,  264 => 72,  258 => 354,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 290,  214 => 99,  177 => 63,  169 => 210,  140 => 58,  132 => 59,  128 => 58,  107 => 37,  61 => 2,  273 => 380,  269 => 107,  254 => 149,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 78,  219 => 101,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 81,  119 => 117,  102 => 30,  71 => 19,  67 => 18,  63 => 21,  59 => 13,  38 => 7,  93 => 28,  88 => 30,  78 => 24,  87 => 26,  44 => 11,  31 => 4,  21 => 2,  46 => 10,  26 => 3,  25 => 12,  28 => 3,  94 => 57,  89 => 47,  85 => 23,  75 => 24,  68 => 12,  56 => 12,  27 => 7,  24 => 3,  201 => 57,  196 => 92,  183 => 74,  171 => 216,  166 => 209,  163 => 82,  158 => 62,  156 => 195,  151 => 188,  142 => 61,  138 => 61,  136 => 168,  121 => 131,  117 => 39,  105 => 34,  91 => 56,  62 => 16,  49 => 12,  19 => 1,  79 => 32,  72 => 21,  69 => 13,  47 => 15,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 64,  145 => 52,  139 => 169,  131 => 160,  123 => 42,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 35,  74 => 22,  66 => 12,  55 => 38,  52 => 13,  50 => 18,  43 => 9,  41 => 7,  35 => 9,  32 => 7,  29 => 4,  209 => 96,  203 => 73,  199 => 265,  193 => 70,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 54,  144 => 176,  141 => 175,  133 => 51,  130 => 46,  125 => 51,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 40,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 26,  80 => 29,  73 => 23,  64 => 3,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 11,  45 => 11,  42 => 11,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
