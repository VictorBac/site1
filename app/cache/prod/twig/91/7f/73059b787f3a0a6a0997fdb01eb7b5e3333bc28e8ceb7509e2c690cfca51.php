<?php

/* BlogBundle:Blog:sideMenu.html.twig */
class __TwigTemplate_917f73059b787f3a0a6a0997fdb01eb7b5e3333bc28e8ceb7509e2c690cfca51 extends Twig_Template
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
        echo "<na<
<ul>
\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 4
            echo "\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute((isset($context["lien"]) ? $context["lien"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lien"]) ? $context["lien"] : null), "titre"), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:sideMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  77 => 21,  58 => 17,  53 => 13,  323 => 208,  320 => 207,  303 => 63,  292 => 50,  286 => 41,  281 => 40,  274 => 10,  271 => 9,  265 => 6,  259 => 214,  257 => 207,  110 => 64,  34 => 6,  37 => 6,  104 => 31,  96 => 28,  83 => 25,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 74,  312 => 98,  309 => 73,  305 => 95,  298 => 57,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 33,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 63,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 16,  47 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 75,  121 => 73,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 17,  49 => 19,  98 => 31,  93 => 28,  88 => 6,  78 => 40,  40 => 9,  29 => 4,  38 => 6,  43 => 10,  32 => 4,  28 => 3,  35 => 5,  26 => 3,  101 => 32,  94 => 30,  89 => 50,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 14,  50 => 14,  27 => 4,  24 => 5,  22 => 2,  87 => 25,  72 => 25,  66 => 31,  55 => 15,  46 => 7,  44 => 12,  41 => 5,  31 => 5,  25 => 5,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 57,  95 => 28,  92 => 27,  86 => 25,  82 => 22,  80 => 43,  73 => 19,  64 => 17,  60 => 13,  57 => 16,  54 => 14,  51 => 13,  48 => 8,  45 => 9,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
