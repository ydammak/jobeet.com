<?php

/* EnsJobeetBundle:Job:show.html.twig */
class __TwigTemplate_d7ba9751def4c908080a43155be5f244b2dcdaf0a0b184be07ac070c637e9dcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Job</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "company"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "logo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "location"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>How_to_apply</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "howtoapply"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "token"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_public</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ispublic"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_activated</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "isactivated"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expires_at</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "expiresat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "updatedat"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 141,  303 => 140,  248 => 116,  194 => 88,  701 => 418,  692 => 412,  685 => 405,  675 => 402,  665 => 398,  654 => 389,  650 => 388,  644 => 385,  634 => 381,  624 => 374,  616 => 369,  599 => 358,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 312,  497 => 300,  450 => 268,  433 => 258,  431 => 257,  416 => 248,  385 => 226,  299 => 174,  284 => 167,  242 => 113,  399 => 158,  396 => 157,  383 => 150,  359 => 140,  348 => 198,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  267 => 98,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  167 => 60,  239 => 86,  225 => 89,  213 => 126,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 384,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 362,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 310,  509 => 159,  503 => 303,  499 => 155,  496 => 154,  490 => 153,  485 => 293,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 269,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  366 => 142,  363 => 210,  354 => 119,  316 => 74,  281 => 61,  256 => 121,  245 => 88,  210 => 30,  207 => 83,  198 => 22,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 354,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 320,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 314,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 275,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 156,  371 => 144,  358 => 106,  349 => 103,  342 => 133,  339 => 100,  336 => 189,  329 => 126,  326 => 76,  319 => 90,  311 => 89,  297 => 84,  289 => 109,  286 => 133,  274 => 129,  263 => 125,  250 => 67,  233 => 62,  228 => 59,  191 => 69,  146 => 53,  344 => 97,  338 => 94,  335 => 129,  321 => 124,  295 => 66,  292 => 135,  259 => 55,  215 => 32,  190 => 50,  181 => 80,  161 => 71,  153 => 72,  150 => 65,  118 => 91,  110 => 51,  20 => 11,  114 => 71,  58 => 29,  568 => 338,  557 => 177,  553 => 329,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 280,  460 => 132,  449 => 123,  446 => 266,  441 => 138,  426 => 255,  419 => 98,  415 => 97,  410 => 245,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  377 => 147,  369 => 157,  357 => 139,  347 => 115,  333 => 112,  324 => 92,  307 => 71,  300 => 139,  291 => 65,  288 => 85,  282 => 79,  275 => 77,  272 => 76,  226 => 36,  205 => 59,  197 => 90,  186 => 83,  148 => 64,  370 => 100,  367 => 131,  361 => 122,  352 => 138,  346 => 92,  343 => 91,  340 => 95,  332 => 188,  330 => 87,  327 => 186,  320 => 75,  315 => 90,  313 => 178,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 131,  277 => 59,  271 => 58,  265 => 126,  262 => 63,  260 => 124,  257 => 61,  223 => 58,  192 => 88,  180 => 104,  174 => 118,  137 => 66,  97 => 63,  12 => 34,  170 => 79,  155 => 55,  127 => 56,  113 => 42,  90 => 34,  129 => 57,  100 => 22,  65 => 31,  70 => 33,  76 => 20,  84 => 39,  81 => 34,  185 => 86,  178 => 45,  175 => 77,  165 => 64,  160 => 76,  134 => 59,  126 => 51,  53 => 18,  34 => 16,  23 => 1,  270 => 100,  266 => 109,  261 => 107,  253 => 102,  249 => 89,  244 => 99,  236 => 109,  232 => 136,  216 => 100,  211 => 84,  200 => 55,  195 => 77,  188 => 68,  184 => 47,  172 => 112,  152 => 92,  124 => 52,  104 => 49,  77 => 27,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 236,  393 => 125,  387 => 152,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 114,  337 => 103,  322 => 184,  314 => 99,  312 => 143,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 84,  283 => 106,  278 => 115,  268 => 127,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 95,  229 => 73,  220 => 56,  214 => 99,  177 => 63,  169 => 86,  140 => 50,  132 => 59,  128 => 58,  107 => 41,  61 => 18,  273 => 159,  269 => 75,  254 => 149,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 106,  227 => 134,  224 => 103,  221 => 78,  219 => 101,  217 => 87,  208 => 124,  204 => 28,  179 => 107,  159 => 70,  143 => 29,  135 => 81,  119 => 44,  102 => 46,  71 => 32,  67 => 26,  63 => 27,  59 => 6,  38 => 17,  93 => 39,  88 => 38,  78 => 40,  87 => 36,  44 => 11,  31 => 4,  21 => 12,  46 => 14,  26 => 14,  25 => 12,  28 => 3,  94 => 21,  89 => 40,  85 => 30,  75 => 33,  68 => 31,  56 => 40,  27 => 13,  24 => 13,  201 => 57,  196 => 71,  183 => 74,  171 => 102,  166 => 100,  163 => 69,  158 => 59,  156 => 68,  151 => 61,  142 => 61,  138 => 61,  136 => 60,  121 => 53,  117 => 51,  105 => 47,  91 => 37,  62 => 30,  49 => 14,  19 => 11,  79 => 34,  72 => 37,  69 => 11,  47 => 12,  40 => 18,  37 => 17,  22 => 12,  246 => 69,  157 => 64,  145 => 59,  139 => 60,  131 => 46,  123 => 58,  120 => 56,  115 => 43,  111 => 42,  108 => 48,  101 => 37,  98 => 47,  96 => 71,  83 => 35,  74 => 30,  66 => 25,  55 => 22,  52 => 22,  50 => 20,  43 => 20,  41 => 18,  35 => 6,  32 => 16,  29 => 5,  209 => 96,  203 => 93,  199 => 80,  193 => 70,  189 => 177,  187 => 87,  182 => 85,  176 => 82,  173 => 62,  168 => 65,  164 => 72,  162 => 82,  154 => 77,  149 => 64,  147 => 69,  144 => 70,  141 => 67,  133 => 51,  130 => 62,  125 => 45,  122 => 45,  116 => 54,  112 => 52,  109 => 50,  106 => 40,  103 => 40,  99 => 39,  95 => 42,  92 => 45,  86 => 43,  82 => 33,  80 => 41,  73 => 32,  64 => 10,  60 => 22,  57 => 24,  54 => 25,  51 => 24,  48 => 21,  45 => 19,  42 => 10,  39 => 10,  36 => 16,  33 => 6,  30 => 15,);
    }
}
